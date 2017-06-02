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
            }, [{ time : '0:0:0', note : 'C4', dur : '1n'},
                { time : '0:1:0', note : 'D4', dur : '1n'},
                { time : '0:2:0', note : 'E4', dur : '1n'},
                { time : '0:3:0', note : 'F4', dur : '1n'}]);
            
            this.sequence.start(0);
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