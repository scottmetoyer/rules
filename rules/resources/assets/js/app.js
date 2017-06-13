
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

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

// Initialize Vue
Vue.component('example', require('./components/Example.vue'));
Vue.component('transport', require('./components/Transport.vue'));
Vue.component('sequence', require('./components/Sequence.vue'));

const app = new Vue({
    el: '#app',
    data: { 
            message: 'Hello World' ,
            count: 0,
			sequences: [
				{ id: 0 },
				{ id: 1 },
				{ id: 3 }]
        },
    methods: {
        updatecount: function() {
            this.count += 1;
        },
		addSequence: function() {
			
		}
    }
});
