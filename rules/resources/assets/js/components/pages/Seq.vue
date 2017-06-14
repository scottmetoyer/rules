<template>
<div class="row">
    <div class="col-md-12">
        <div class="table-light">
            <div class="table-header">
                <div class="table-caption">
                    Seq
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Synth</th>
                        <th>Pattern</th>
                        <th>Func</th>
                    </tr>
                </thead>
                <tbody>
                    <tr is="sequence" 
                        v-for="(sequence, index) in sequences"
                        v-bind:sequence="sequence"
                        v-bind:index="index"
                        v-bind:key="sequence"
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
                var sequence = { name: 'new sequence' };
                this.sequences.push(sequence);
		    },
            remove: function(index) {
                this.sequences.splice(index, 1);
            }
	   	},

		data: function() {
			return {
                sequences: [{name: 'seq 1'}, {name: 'seq 2'}, {name: 'seq 3'}]
			}
		}
    }
</script>