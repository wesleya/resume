// browserify entry point
var Vue = require('../../../bower_components/vue/dist/vue.min.js');
Vue.use(require('../../../bower_components/vue-resource/dist/vue-resource.min.js'));

import Results from './components/Results.vue';

new Vue({
    el: '#app',

    components: {Results},

    ready() {
        console.log('ready to go!');
    }

});