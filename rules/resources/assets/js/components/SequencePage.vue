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
                    <tr is="sequence" v-for="sequence in sequences"></tr>
                </tbody>
            </table>
            <div class="table-footer">
                <div class="pull-right">
                    <button type="button" class="btn btn-xs btn-outline btn-outline-colorless" @click="addSequence"><i class="fa fa-plus"></i></button>
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
            addSequence: function() {
                console.log('Add sequence');
		    },
	   	},

		data: function() {
			return {
                sequences: [{id: 1}, {id: 2}, {id: 3}]
			}
		}
    }
</script>