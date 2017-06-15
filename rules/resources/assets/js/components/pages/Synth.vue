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
                        <th>Name</th>
                        <th>Instrument</th>
                        <th>Params</th>
                        <th>Func</th>
                    </tr>
                </thead>
                <tbody>
                    <tr is="synth" 
                        v-for="(synth, index) in shared_state.synths"
                        v-bind:name="synth.name"
                        v-bind:instrument="synth.instrument"
                        v-bind:index="index"
                        v-bind:key="synth.id"
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
                var synth = { id: this.shared_state.uniqueId(), name: 'new synth', instrument: 'Monophonic' };
                this.shared_state.synths.push(synth);
		    },
            remove: function(index) {
                this.shared_state.synths.splice(index, 1);
            }
	   	},

		data: function() {
			return {
                shared_state: window.shared_state
			}
		}
    }
</script>