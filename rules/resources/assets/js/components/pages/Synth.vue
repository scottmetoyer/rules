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
                        v-bind:key="synth"
                        v-on:remove="remove(index)"></tr>
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
                var synth = { name: 'new synth', type: '' };
                this.synths.push(synth);
		    },
            remove: function(index) {
                this.synths.splice(index, 1);
            }
	   	},

		data: function() {
			return {
                synths: [
                    { name: 'synth one' }, 
                    { name: 'synth two' }, 
                    { name: 'synth three' }]
			}
		}
    }
</script>