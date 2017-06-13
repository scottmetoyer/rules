<template>
<tr>
    <td>1</td>
    <td>Mark</td>
    <td>Otto</td>
    <td>
        <span>
            <input type="text" class="step" v-for="note in notes" v-model="note.value" v-bind:class="{ 'has-error': note.hasError, 'is-playing': note.isPlaying }"/>
        </span>
        <button class="sequence-button" @click="removeStep"><i class="fa fa-minus"></i></button>
        <button class="sequence-button" @click="addStep"><i class="fa fa-plus"></i></button>
    </td>
    <td>
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

            self.sequence = new Tone.Part(function(time, event){
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
            
            self.sequence.loop = true;
            self.sequence.start('0:0:1');
        },

    	
    	methods: {
            addStep: function() {
                if (this.notes.length < 16) {
                    var time = '0:0:' + this.notes.length;
                    var note = { value: '', time: time, dur: '4n', hasError: false, isPlaying: false };
                    this.notes.push(note);
                    this.sequence.add(note);

                    // Set the new loop point
                    this.setLoop();
                }
            },
            removeStep: function() {
                var note = this.notes.pop();
                this.sequence.remove(note.time);

                // Set the new loop point
                this.setLoop();
            },
            setLoop: function() {
                this.sequence.loopEnd = "0:0:" + (this.notes.length);
            }
	   	},

		data: function() {
			return {
                sequence: {},
				notes: []
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