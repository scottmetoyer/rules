<template>
<tr>
    <td><input type="text" class="parameter" v-model="synth.name"/></td>
    <td>
        <select class="parameter" v-model="synth.instrument">
            <option v-for="i in instruments">{{ i }}</option>
        </select>
    </td>
    <td>
        
    </td>
    <td>
        <button type="button" class="btn btn-outline btn-xs" @click="remove">DEL</button>
    </td>
</tr>
</template>

<script>
export default {
		mounted() {
        },
    	methods: {
            remove: function() {
                this.$emit('remove');
            }
	   	},
        props: ['synth', 'index'],
		data: function() {
			return {
                instrument: {},
                instruments: [
                    'AMSynth',
                    'DuoSynth',
                    'FMSynth',
                    'MembraneSynth',
                    'MetalSynth',
                    'MonoSynth',
                    'Monophonic',
                    'NoiseSynth',
                    'PluckSynth',
                    'PolySynth',
                    'Sampler',
                    'Synth'
                ]
			}
		}
    }
</script>
<style scoped>
.has-error {
    background-color: #FFCCCC;
    border: solid 1px #990000 !important;
}
</style>