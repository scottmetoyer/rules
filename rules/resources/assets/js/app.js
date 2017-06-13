
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

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


// Initialize Vue components
Vue.component('transport', require('./components/Transport.vue'));
Vue.component('sequence', require('./components/Sequence.vue'));

const Seq = Vue.component('SequencePage', require('./components/SequencePage.vue'));
const Synth = Vue.component('SynthPage', require('./components/SynthPage.vue'));
const FX = Vue.component('EffectsPage', require('./components/EffectsPage.vue'));
const Mix = Vue.component('MixPage', require('./components/MixPage.vue'));
const Config = Vue.component('ConfigPage', require('./components/ConfigPage.vue'));

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
