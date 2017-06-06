<template>
<tr>
    <td>1</td>
    <td>Mark</td>
    <td>Otto</td>
    <td>
        <input type="text" class="step" v-model="notes[0].note"/>
        <input type="text" class="step" v-model="notes[1].note"/>
        <input type="text" class="step" v-model="notes[2].note"/>
        <input type="text" class="step" v-model="notes[3].note"/>
        <input type="text" class="step" v-model="notes[4].note"/>
        <input type="text" class="step" v-model="notes[5].note"/>
        <input type="text" class="step" v-model="notes[6].note"/>
        <input type="text" class="step" v-model="notes[7].note"/>
        <input type="text" class="step" v-model="notes[8].note"/>
        <input type="text" class="step" v-model="notes[9].note"/>
        <input type="text" class="step" v-model="notes[10].note"/>
        <input type="text" class="step" v-model="notes[11].note"/>
        <input type="text" class="step" v-model="notes[12].note"/>
        <input type="text" class="step" v-model="notes[13].note"/>
        <input type="text" class="step" v-model="notes[14].note"/>
        <input type="text" class="step" v-model="notes[15].note"/>
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
                synth.triggerAttackRelease(event.note, event.dur, time)
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
                        { note: 'C4', time: '0:0:0', dur: '4n' }, 
                        { note: 'C4', time: '0:0:1', dur: '4n' },
                        { note: 'D4', time: '0:0:2', dur: '4n' }, 
                        { note: 'E4', time: '0:0:3', dur: '4n' }, 
                        { note: 'F4', time: '0:0:4', dur: '4n' }, 
                        { note: 'G4', time: '0:0:5', dur: '4n' }, 
                        { note: 'F4', time: '0:0:6', dur: '4n' }, 
                        { note: 'E4', time: '0:0:7', dur: '4n' }, 
                        { note: 'D4', time: '0:0:8', dur: '4n' }, 
                        { note: 'D4', time: '0:0:9', dur: '4n' }, 
                        { note: 'D3', time: '0:0:10', dur: '4n' }, 
                        { note: 'D2', time: '0:0:11', dur: '4n' }, 
                        { note: 'A2', time: '0:0:12', dur: '4n' }, 
                        { note: 'B3', time: '0:0:13', dur: '4n' }, 
                        { note: 'C4', time: '0:0:14', dur: '4n' }, 
                        { note: 'D5', time: '0:0:15', dur: '4n' }
                    ]
			}
		}
    }
</script>