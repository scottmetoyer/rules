<template>
<tr>
    <td>1</td>
    <td>Mark</td>
    <td>Otto</td>
    <td>
        <input type="text" class="step"/>
        <input type="text" class="step"/>
        <input type="text" class="step"/>
        <input type="text" class="step"/>
        <input type="text" class="step"/>
        <input type="text" class="step"/>
        <input type="text" class="step"/>
        <input type="text" class="step"/>
        <input type="text" class="step"/>
        <input type="text" class="step"/>
        <input type="text" class="step"/>
        <input type="text" class="step"/>
        <input type="text" class="step"/>
        <input type="text" class="step"/>
        <input type="text" class="step"/>
        <input type="text" class="step"/>
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
            }, [{ time : 0, note : 'C4', dur : '4n'},
                { time : '4n + 8n', note : 'E4', dur : '8n'},
                { time : '2n', note : 'G4', dur : '16n'},
                { time : '2n + 8t', note : 'B4', dur : '4n'}]);
            
            this.sequence.start(5);
            this.sequence.loop = true;
        },

    	methods: {
	   	},

		data: function() {
			return {
				sequence: {}
			}
		}
    }
</script>