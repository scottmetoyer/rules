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

    </td>
</tr>
</template>

<script>
export default {
		mounted() {
        },

    	methods: {
	   	},
        props: ['synth'],
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