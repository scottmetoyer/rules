<template>
<tr>
    <td>1</td>
    <td>Mark</td>
    <td>Otto</td>
    <td>
        <input type="text" class="step" v-model="notes[0].note" v-bind:class="{ 'has-error': notes[0].hasError, 'is-playing': notes[0].isPlaying }"/>
        <input type="text" class="step" v-model="notes[1].note" v-bind:class="{ 'has-error': notes[1].hasError, 'is-playing': notes[1].isPlaying }"/>
        <input type="text" class="step" v-model="notes[2].note" v-bind:class="{ 'has-error': notes[2].hasError, 'is-playing': notes[2].isPlaying }"/>
        <input type="text" class="step" v-model="notes[3].note" v-bind:class="{ 'has-error': notes[3].hasError, 'is-playing': notes[3].isPlaying }"/>
        <input type="text" class="step" v-model="notes[4].note" v-bind:class="{ 'has-error': notes[4].hasError, 'is-playing': notes[4].isPlaying }"/>
        <input type="text" class="step" v-model="notes[5].note" v-bind:class="{ 'has-error': notes[5].hasError, 'is-playing': notes[5].isPlaying }"/>
        <input type="text" class="step" v-model="notes[6].note" v-bind:class="{ 'has-error': notes[6].hasError, 'is-playing': notes[6].isPlaying }"/>
        <input type="text" class="step" v-model="notes[7].note" v-bind:class="{ 'has-error': notes[7].hasError, 'is-playing': notes[7].isPlaying }"/>
        <input type="text" class="step" v-model="notes[8].note" v-bind:class="{ 'has-error': notes[8].hasError, 'is-playing': notes[8].isPlaying }"/>
        <input type="text" class="step" v-model="notes[9].note" v-bind:class="{ 'has-error': notes[9].hasError, 'is-playing': notes[9].isPlaying }"/>
        <input type="text" class="step" v-model="notes[10].note" v-bind:class="{ 'has-error': notes[10].hasError, 'is-playing': notes[10].isPlaying }"/>
        <input type="text" class="step" v-model="notes[11].note" v-bind:class="{ 'has-error': notes[11].hasError, 'is-playing': notes[11].isPlaying }"/>
        <input type="text" class="step" v-model="notes[12].note" v-bind:class="{ 'has-error': notes[12].hasError, 'is-playing': notes[12].isPlaying }"/>
        <input type="text" class="step" v-model="notes[13].note" v-bind:class="{ 'has-error': notes[13].hasError, 'is-playing': notes[13].isPlaying }"/>
        <input type="text" class="step" v-model="notes[14].note" v-bind:class="{ 'has-error': notes[14].hasError, 'is-playing': notes[14].isPlaying }"/>
        <input type="text" class="step" v-model="notes[15].note" v-bind:class="{ 'has-error': notes[15].hasError, 'is-playing': notes[15].isPlaying }"/>
        <button class="sequence-button"><i class="fa fa-minus"></i></button>
        <button class="sequence-button"><i class="fa fa-plus"></i></button>
    </td>
    <td></td>
    </tr>
</template>

<script>
var synth = new Tone.Synth().toMaster();

export default {
		mounted() {
            var self = this;
            self.sequence = new Tone.Part(function(time, event){
                event.hasError = false;

                // Clear the playing class from all the steps
                self.notes.map(function(x) { 
                    x.isPlaying = false; 
                    return x;
                });
                event.isPlaying = true;

                // Check for empty textbox
                if (/\S/.test(event.note)) {
                    try {
                        var t = Tone.Frequency(event.note);
                        synth.triggerAttackRelease(t, event.dur, time);
                    } catch (error) {
                        // Change the color of the textbox if it has invalid input
                        event.hasError = true;
                    }
                }
            }, self.notes);
            
            self.sequence.loop = true;
            // this.sequence.loopStart = "0:0:0";
            // this.sequence.loopEnd = "0:3:1"

            self.sequence.start(0);
        },

    	methods: {
	   	},

		data: function() {
			return {
                sequence: {
                },
				notes: [
                        { note: 'C4', time: '0:0:0', dur: '4n', hasError: false, isPlaying: false }, 
                        { note: 'C4', time: '0:0:1', dur: '4n', hasError: false, isPlaying: false }, 
                        { note: 'D4', time: '0:0:2', dur: '4n', hasError: false, isPlaying: false }, 
                        { note: 'E4', time: '0:0:3', dur: '4n', hasError: false, isPlaying: false }, 
                        { note: 'F4', time: '0:0:4', dur: '4n', hasError: false, isPlaying: false }, 
                        { note: 'G4', time: '0:0:5', dur: '4n', hasError: false, isPlaying: false }, 
                        { note: 'F4', time: '0:0:6', dur: '4n', hasError: false, isPlaying: false }, 
                        { note: 'E4', time: '0:0:7', dur: '4n', hasError: false, isPlaying: false }, 
                        { note: 'D4', time: '0:0:8', dur: '4n', hasError: false, isPlaying: false }, 
                        { note: 'D4', time: '0:0:9', dur: '4n', hasError: false, isPlaying: false }, 
                        { note: 'D3', time: '0:0:10', dur: '4n', hasError: false, isPlaying: false }, 
                        { note: 'D2', time: '0:0:11', dur: '4n', hasError: false, isPlaying: false }, 
                        { note: 'A2', time: '0:0:12', dur: '4n', hasError: false, isPlaying: false }, 
                        { note: 'B3', time: '0:0:13', dur: '4n', hasError: false, isPlaying: false }, 
                        { note: 'C4', time: '0:0:14', dur: '4n', hasError: false, isPlaying: false }, 
                        { note: 'D5', time: '0:0:15', dur: '4n', hasError: false, isPlaying: false }, 
                    ]
			}
		}
    }
</script>
<style scoped>
.has-error {
    background-color: #FFCCCC;
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