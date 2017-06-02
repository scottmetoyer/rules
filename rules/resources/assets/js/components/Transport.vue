<template>
<ul class="nav navbar-nav navbar-right">
	<li>
		<a href="#">
			<span id="transport-position">{{ transport.position }}</span>
		</a>
	</li>
	<li>
		<a href="#">
			<span id="global-bpm"></span>&nbsp;BPM
		</a>		
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
		   	}
	   	},

		data: function() {
			return {
				transport: Tone.Transport
			}
		}
    }
</script>