<form method="post">
    <input type="hidden"
           name="_token"
           value="{{ csrf_token() }}"
    >

    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <div @if($errors->has('count'))
                 class="form-group has-error"
                 @else
                 class="form-group"
                    @endif
            >
                <label for="count">Email Count</label>
                <input type="number"
                       class="form-control form-control-lg"
                       id="count"
                       name="count"
                       aria-describedby="countHelp"
                       @if(!empty(old('count')))
                       value="{{ old('count') }}"
                       @else
                       value="{{$count}}"
                        @endif
                >
                <small id="emailHelp"
                       class="form-text text-muted"
                >
                    number of emails to generate integer between 0 - 100,000.
                </small>
                @if($errors->has('count'))
                    <span class="help-inline text-danger">{{$errors->first('count')}}</span>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <div @if($errors->has('chance'))
                 class="form-group has-error"
                 @else
                 class="form-group"
                    @endif
            >
                <label for="chance">Duplicate Chance</label>
                <input type="number"
                       class="form-control form-control-lg"
                       id="chance"
                       name="chance"
                       aria-describedby="countHelp"
                       @if(!empty(old('chance')))
                       value="{{ old('chance') }}"
                       @else
                       value="{{$chance}}"
                        @endif
                >
                <small id="chanceHelp"
                       class="form-text text-muted"
                >
                    percent chance a randomly generated email is a duplicate address. integer between 0 - 100.
                </small>
                <span class="help-inline text-danger">{{$errors->first('chance')}}</span>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>