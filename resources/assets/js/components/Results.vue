<script>
    export default{
        data(){
            return{
                msg:'hello vue',
                display_input: [],
                display_output: []
            }
        },

        props: {

            input: null,

            output: null
        },

        computed: {

            moreToLoad: function() {

                return (this.input.length || this.output.length)
            }
        },

        ready() {

            this.input = JSON.parse(this.input);
            this.output = JSON.parse(this.output);

            // only load 20 results onto
            this.loadMoreResults(20);
        },

        methods: {

            /**
             * load email addresses from both input and filtered lists onto screen
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