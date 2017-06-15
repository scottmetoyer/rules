<template>
<tr>
    <td><input type="text" class="parameter" v-model="name"/></td>
    <td>
        <select class="parameter" v-model="instrument">
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
            // Create the initial synth
        },
    	methods: {
            remove: function() {
                this.$emit('remove');
            }
	   	},
        watch: {
            instrument:  function (value) {
                console.log('value changed to ' + value);
            }
        },
        props: ['name', 'instrument', 'index'],
		data: function() {
			return {
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