
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');

// Set up the router
var VueRouter = require('vue-router/dist/vue-router.js');
Vue.use(VueRouter);


// Set up shared state global object
window.shared_state = {
	synths: [],
	uniqueId: function() {
		const alphabet = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		const length = 8;
		var output = '';

		for (var i = 0; i < length; i++) {
			output += alphabet.charAt(Math.floor(Math.random() * alphabet.length));
		}

 		return output;
	}
};

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


// Initialize Vue components
Vue.component('transport', require('./components/Transport.vue'));
Vue.component('sequence', require('./components/Sequence.vue'));

const Seq = Vue.component('SequencePage', require('./components/pages/Seq.vue'));
const Synth = Vue.component('SynthPage', require('./components/pages/Synth.vue'));
const FX = Vue.component('EffectsPage', require('./components/pages/FX.vue'));
const Mix = Vue.component('MixPage', require('./components/pages/Mix.vue'));
const Config = Vue.component('ConfigPage', require('./components/pages/Config.vue'));

var router = new VueRouter({
	routes: [
		{ path: '/seq', component: Seq },
		{ path: '/synth', component: Synth },
		{ path: '/fx', component: FX },
		{ path: '/mix', component: Mix },
		{ path: '/config', component: Config },
		{ path: '/', redirect: '/seq' },
	],
});
const app = new Vue({
  el: '#app',
  router
});

// Override the Tone.js toBarsBeatsSixteenths method to clean up the display
Tone.Time.prototype.toBarsBeatsSixteenths = function () {
	        var quarterTime = this._beatsToUnits(1);
	        var quarters = this.toSeconds() / quarterTime;
	        var measures = Math.floor(quarters / this._timeSignature());
	        var sixteenths = quarters % 1 * 4;
	        quarters = Math.floor(quarters) % this._timeSignature();
	        sixteenths = sixteenths.toString();
	        sixteenths = parseFloat(sixteenths).toFixed(3);
	        var progress = [
	            measures,
	            quarters,
	            sixteenths
	        ];
	        return progress.join(':');
	    };
