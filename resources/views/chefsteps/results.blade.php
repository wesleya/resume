<results  inline-template
          output="{{ json_encode($output) }}"
          input="{{ json_encode($input) }}"
>
    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Input Email List</h4>
                    <p class="card-text">{{$count}} email addresses with {{$chance}}% chance of duplicates.</p>
                </div>
                <ul class="list-group">
                    <li v-for='(index, address) in display_input'
                        track-by="$index"
                        class="list-group-item"
                    >
                        @{{address}}
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-xs-12 col-lg-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Output Email List</h4>
                    <p class="card-text">Remove duplicate email addresses, leave the list in the original order.</p>
                </div>
                <ul class="list-group">
                    <li v-for='(index, address) in display_output'
                        track-by="$index"
                        class="list-group-item"
                    >
                        @{{address}}
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-xs-12 col-sm-2 offset-sm-5">
            <button v-if="moreToLoad"
                    class="btn btn-danger btn-block btn-lg"
                    v-on:click="loadMoreResults(20)"
            >
                Load More
            </button>
            <p v-else class="text-xs-center">
                No more results
            </p>
        </div>
    </div>
</results>