<template>
<tr>
    <td>{{ this._uid }}</td>
    <td>{{ sequence.name }}</td>
    <td>
        <select class="parameter" v-model="sequence.synth">
            <option v-for="s in shared_state.synths" v-bind:value="s.id">{{ s.name }}</option>
        </select>
    </td>
    <td>
        <span>
            <input type="text" class="step" v-for="note in notes" v-model="note.value" v-bind:class="{ 'has-error': note.hasError, 'is-playing': note.isPlaying }"/>
        </span>
        <button class="sequence-button" @click="removeStep"><i class="fa fa-minus"></i></button>
        <button class="sequence-button" @click="addStep"><i class="fa fa-plus"></i></button>
    </td>
    <td>
        <button type="button" class="btn btn-outline btn-xs" @click="remove">DEL</button>
    </td>
    </tr>
</template>

<script>
export default {
		mounted() {
            var self = this;
            var synth = new Tone.Synth().toMaster();

            // Initialize the notes
            for(var i = 0; i < 16; i++) {
                self.notes.push({ value: '', time: '0:0:' + i, dur: '4n', hasError: false, isPlaying: false });
            }

            self.part = new Tone.Part(function(time, event){
                event.hasError = false;

                // Clear the playing class from all the steps
                self.notes.map(function(x) { 
                    x.isPlaying = false; 
                    return x;
                });
                event.isPlaying = true;

                // Check for empty textbox
                if (/\S/.test(event.value)) {
                    try {
                        var t = Tone.Frequency(event.value);
                        synth.triggerAttackRelease(t, event.dur, time);
                    } catch (error) {
                        // Change the color of the textbox if it has invalid input
                        event.hasError = true;
                    }
                }
            }, self.notes);
            
            self.part.loop = true;
            self.part.start('0:0:1');
        },

    	methods: {
            addStep: function() {
                if (this.notes.length < 16) {
                    var time = '0:0:' + this.notes.length;
                    var note = { value: '', time: time, dur: '4n', hasError: false, isPlaying: false };
                    this.notes.push(note);
                    this.part.add(note);

                    // Set the new loop point
                    this.setLoop();
                }
            },
            removeStep: function() {
                var note = this.notes.pop();
                this.part.remove(note.time);

                // Set the new loop point
                this.setLoop();
            },
            setLoop: function() {
                this.part.loopEnd = "0:0:" + (this.notes.length);
            },
            remove: function() {
                // Stop playing and remove the part
                this.part.removeAll();
                this.part.dispose();

                this.$emit('remove');
            }
	   	},
        props: ['sequence', 'index'],
		data: function() {
			return {
                part: {},
				notes: [],
                shared_state: window.shared_state
			}
		}
    }
</script>
<style scoped>
.has-error {
    background-color: #FFCCCC;
    border: solid 1px #990000 !important;
}

.step {
    height: 24px;
    width: 24px;
    font-size: 9px;
    padding: 0px;
    text-align: center;
    vertical-align: middle;
    border: solid 1px #CCC;
    border-bottom: solid 2px #CCC;
    margin-right: 3px; 
}

.step:last-child {
    margin-right: 0!important;
}

.sequence-button {
    height: 24px;
    width: 24px;
    font-size: 9px;
    padding: 0px;
    text-align: center;
    vertical-align: middle;
}

.is-playing {
    border-bottom: solid 2px #009900;
}

</style>