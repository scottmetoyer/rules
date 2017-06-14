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
                        <th>Instrument</th>
                        <th>Pattern</th>
                        <th>Func</th>
                    </tr>
                </thead>
                <tbody>
                    <tr is="sequence" 
                        v-for="(sequence, index) in sequences"
                        v-bind:sequence="sequence"
                        v-bind:index="index"
                        v-bind:key="sequence.id"
                        v-on:remove="sequences.splice(index, 1)"></tr>
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
                var sequence = { id: 0, name: 'sequence' };
                this.sequences.push(sequence);
		    },
	   	},

		data: function() {
			return {
                sequences: [{id: 1, name: 'seq 01'}, {id: 2, name: 'seq 02'}, {id: 3, name: 'seq 03'}]
			}
		}
    }
</script>