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
                    <tr v-for="(synth, index) in shared_state.synths">
                        <td><input type="text" class="parameter" v-model="synth.name"/></td>
                        <td>
                            <select class="parameter" v-model="synth.instrumentName" v-on:change="instrumentChanged(synth)">
                                <option v-for="i in instruments">{{ i }}</option>
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
                var synth = { 
                    id: this.shared_state.uniqueId(), 
                    name: 'new synth', 
                    instrumentName: 'Synth',
                    instrument: new Tone.Synth().toMaster()
                };
                this.shared_state.synths.push(synth);
		    },
            remove: function(index) {
                this.shared_state.synths.splice(index, 1);
            },
            instrumentChanged: function(synth) {
                // Create new Tone instrument instance based on the name of the instrument
                synth.instrument = eval("new Tone." + synth.instrumentName + "().toMaster();");
            }
	   	},
		data: function() {
			return {
                shared_state: window.shared_state,
                instruments: [
                    'AMSynth',
                    'DuoSynth',
                    'FMSynth',
                    'MembraneSynth',
                    'MetalSynth',
                    'MonoSynth',
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