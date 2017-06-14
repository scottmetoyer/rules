<template>
<div class="row">
    <div class="col-md-12">
        <div class="table-light">
            <div class="table-header">
                <div class="table-caption">
                    Synth
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Params</th>
                        <th>Func</th>
                    </tr>
                </thead>
                <tbody>
                    <tr is="synth" 
                        v-for="(synth, index) in synths"
                        v-bind:synth="synth"
                        v-bind:index="index"
                        v-bind:key="synth.id"
                        v-on:remove="synths.splice(index, 1)"></tr>
                </tbody>
            </table>
            <div class="table-footer">
                <div class="pull-right">
                    <button type="button" class="btn btn-xs btn-outline btn-outline-colorless" @click="add"><i class="fa fa-plus"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
		mounted() {
        },

    	methods: {
            add: function() {
                var synth = { id: 0, name: 'synth', type: '' };
                this.synths.push(synth);
		    },
	   	},

		data: function() {
			return {
                synths: [
                    {id: 1, name: 'synth one' }, 
                    {id: 2, name: 'synth two'}, 
                    {id: 3, name: 'synth three'}]
			}
		}
    }
</script>