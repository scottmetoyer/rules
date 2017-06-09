<template>
<ul class="nav navbar-nav navbar-right">
	<li>
		<a href="#">
			<span id="transport-position">{{ transport.position }}</span>
		</a>
	</li>
	<li>
		<form class="navbar-form">
			<div class="form-group">
				<input type="text" class="global-bpm" @keyup.enter="updateBpm" v-model="bpm" v-on:blur="updateBpm" number/>&nbsp;BPM
			</div>	
		</form>
	</li>
	<li class="border-left">
		<a href="#" id="transport-back-button"><i class="fa fa-step-backward"></i></a>
	</li>
	<li>
		<a href="#" id="transport-stop-button" @click="stop"><i class="fa fa-stop"></i></a>
	</li>
	<li>
		<a href="#" id="transport-play-button" @click="play"><i class="fa fa-play"></i></a>
	</li>
	<li class="border-right">
		<a href="#" id="transport-forward-button"><i class="fa fa-step-forward"></i></a>
	</li>
	<li>
		<a href="#"><i class="fa fa-cog"></i>&nbsp;&nbsp;Config</a>
	</li>
</ul>
</template>
	
<script>
	export default {
		mounted() {
			console.log(this.transport.bpm.value);
        },

    	methods: {
			play() {
				Tone.Transport.start();
		   	},
		   	stop() {
				Tone.Transport.stop();
		   	},
			back() {
		   	},
		   	forward() {
		   	},
			updateBpm() {
				var value = Number(event.target.value);

				if (value > 500) {
					this.bpm = 500;
				}
				else if (value < 1 || Number.isNaN(value)) {
					this.bpm = 1;
				}

				this.transport.bpm.value = this.bpm;
				return false;
			}
	   	},

		data: function() {
			return {
				transport: Tone.Transport,
				bpm: 120
			}
		}
    }
</script>

<style>
.global-bpm {
	width: 60px; 
	color: #000;
	text-align: right;
	padding: 4px;
}
</style>