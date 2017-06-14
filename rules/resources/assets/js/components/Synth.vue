<template>
<tr>
    <td>{{ synth.id }}</td>
    <td>
        {{ synth.name }}
    </td>
    <td>
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