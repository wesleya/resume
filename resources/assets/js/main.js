// browserify entry point
var Vue = require('../../../bower_components/vue/dist/vue.js');
Vue.use(require('../../../bower_components/vue-resource/dist/vue-resource.js'));

import Results from './components/Results.vue';

new Vue({
    el: '#app',

    components: {Results},

    ready() {
        console.log('ready to go!');
    }

});