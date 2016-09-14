<div class="row">
    <div class="col-xs-12 col-lg-6">
        <div class="card-block">
            <h4 class="card-title">Input Email List</h4>
            <p class="card-text">{{$count}} email addresses containing {{$chance}}% randomly placed duplicates</p>
        </div>
        <div class="card">
            <ul class="list-group">
                @foreach($inputEmails as $email)
                    <li class="list-group-item">{{$email}}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="col-xs-12 col-lg-6">
        <div class="card-block">
            <h4 class="card-title">Output Email List</h4>
            <p class="card-text">Remove duplicate email addresses, leave the list in the original order.</p>
        </div>
        <ul class="list-group">
            @foreach($filteredEmails as $email)
                <li class="list-group-item">{{$email}}</li>
            @endforeach
        </ul>
    </div>
</div>