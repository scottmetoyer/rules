<template>
<tr>
    <td>1</td>
    <td>Mark</td>
    <td>Otto</td>
    <td>
        <input type="text" class="step" v-model="notes[0].note" v-bind:class="{ error: notes[0].error }"/>
        <input type="text" class="step" v-model="notes[1].note" v-bind:class="{ error: notes[1].error }"/>
        <input type="text" class="step" v-model="notes[2].note" v-bind:class="{ error: notes[0].error }"/>
        <input type="text" class="step" v-model="notes[3].note" v-bind:class="{ error: notes[3].error }"/>
        <input type="text" class="step" v-model="notes[4].note" v-bind:class="{ error: notes[4].error }"/>
        <input type="text" class="step" v-model="notes[5].note" v-bind:class="{ error: notes[5].error }"/>
        <input type="text" class="step" v-model="notes[6].note" v-bind:class="{ error: notes[6].error }"/>
        <input type="text" class="step" v-model="notes[7].note" v-bind:class="{ error: notes[7].error }"/>
        <input type="text" class="step" v-model="notes[8].note" v-bind:class="{ error: notes[8].error }"/>
        <input type="text" class="step" v-model="notes[9].note" v-bind:class="{ error: notes[9].error }"/>
        <input type="text" class="step" v-model="notes[10].note" v-bind:class="{ error: notes[10].error }"/>
        <input type="text" class="step" v-model="notes[11].note" v-bind:class="{ error: notes[11].error }"/>
        <input type="text" class="step" v-model="notes[12].note" v-bind:class="{ error: notes[12].error }"/>
        <input type="text" class="step" v-model="notes[13].note" v-bind:class="{ error: notes[13].error }"/>
        <input type="text" class="step" v-model="notes[14].note" v-bind:class="{ error: notes[14].error }"/>
        <input type="text" class="step" v-model="notes[15].note" v-bind:class="{ error: notes[15].error }"/>
        <button class="step"><i class="fa fa-minus"></i></button>
        <button class="step"><i class="fa fa-plus"></i></button>
    </td>
    <td></td>
    </tr>
</template>

<script>
var synth = new Tone.Synth().toMaster();

export default {
		mounted() {
            this.sequence = new Tone.Part(function(time, event){
                // Reset all the steps to 'not playing'
                event.error = false;

                // Check for empty textbox
                if (/\S/.test(event.note)) {
                    try {
                        var t = Tone.Frequency(event.note);
                        synth.triggerAttackRelease(t, event.dur, time);
                    } catch (error) {
                        // Change the color of the textbox if it has invalid input
                        event.error = true;
                    }
                }
            }, this.notes);
            
            this.sequence.loop = true;
            // this.sequence.loopStart = "0:0:0";
            // this.sequence.loopEnd = "0:3:1"

            this.sequence.start(0);
        },

    	methods: {
	   	},

		data: function() {
			return {
                sequence: {
                },
				notes: [
                        { note: 'C4', time: '0:0:0', dur: '4n', error: false }, 
                        { note: 'C4', time: '0:0:1', dur: '4n', error: false }, 
                        { note: 'D4', time: '0:0:2', dur: '4n', error: false }, 
                        { note: 'E4', time: '0:0:3', dur: '4n', error: false }, 
                        { note: 'F4', time: '0:0:4', dur: '4n', error: false }, 
                        { note: 'G4', time: '0:0:5', dur: '4n', error: false }, 
                        { note: 'F4', time: '0:0:6', dur: '4n', error: false }, 
                        { note: 'E4', time: '0:0:7', dur: '4n', error: false }, 
                        { note: 'D4', time: '0:0:8', dur: '4n', error: false }, 
                        { note: 'D4', time: '0:0:9', dur: '4n', error: false }, 
                        { note: 'D3', time: '0:0:10', dur: '4n', error: false }, 
                        { note: 'D2', time: '0:0:11', dur: '4n', error: false }, 
                        { note: 'A2', time: '0:0:12', dur: '4n', error: false }, 
                        { note: 'B3', time: '0:0:13', dur: '4n', error: false }, 
                        { note: 'C4', time: '0:0:14', dur: '4n', error: false }, 
                        { note: 'D5', time: '0:0:15', dur: '4n', error: false }, 
                    ]
			}
		}
    }
</script>
<style scoped>
.error {
    background-color: #ffcccc;
}

.playing {
    border-bottom: solid 1px #00AC60 !important;
}
</style>