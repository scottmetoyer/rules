<template>
<div class="row">
    <div class="col-md-12">
        <div class="table-light">
            <div class="table-header">
                <div class="table-caption">
                    Timeline
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Seq</th>
                        <th>Func</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(event, index) in events">
                        <td><input type="text" class="parameter" v-model="event.time"/></td>
                        <td>
                            <select class="parameter" v-model="event.sequence">
                            </select>
                        </td>
                        <td></td>
                        <td><button type="button" class="btn btn-outline btn-xs" @click="remove(index)">DEL</button></td>
                    </tr>
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
		    },
            remove: function(index) {
            }
	   	},
		data: function() {
			return {
                events: []
			}
		}
    }
</script>