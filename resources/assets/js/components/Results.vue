<script>
    export default{
        data(){
            return{
                /**
                 * original list of email addresses that are shown on screen
                 */
                display_input: [],

                /**
                 * filtered list of email addresses that are shown on screen
                 */
                display_output: []
            }
        },

        props: {

            /**
             * original list of email addresses that are not shown on screen
             */
            input: null,

            /**
             * filtered list of email addresses that are not show on screen
             */
            output: null
        },

        computed: {

            /**
             *  are there more results to load
             */
            moreToLoad: function() {

                return Boolean(this.input.length || this.output.length);
            }
        },

        ready() {

            this.input = JSON.parse(this.input);
            this.output = JSON.parse(this.output);

            // only load 20 results onto screen at once
            this.loadMoreResults(20);
        },

        methods: {

            /**
             * move email addresses from input/output array to display_input/display_output array
             *
             * @param count
             */
            loadMoreResults: function(count) {
                this.load(this.input, this.display_input, count);
                this.load(this.output, this.display_output, count);
            },

            /**
             * load email addresses from the list onto the display
             *
             * @param list
             * @param display
             * @param count
             */
            load: function (list, display, count) {

                for(let i = 0; i < count; i ++) {
                    if(list.length == 0) {
                        break;
                    }

                    display.push(list.shift());
                }
            }
        }

    }
</script>