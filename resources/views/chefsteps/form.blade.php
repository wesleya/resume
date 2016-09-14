<form method="post">
    <input type="hidden"
           name="_token"
           value="{{ csrf_token() }}"
    >

    <div class="row">
        <div class="col-xs-12 col-sm-5">
            <div @if($errors->has('count'))
                 class="form-group has-error"
                 @else
                 class="form-group"
                    @endif
            >
                <input type="number"
                       class="form-control form-control-lg"
                       id="count"
                       name="count"
                       aria-describedby="countHelp"
                       @if(!empty(old('count')))
                       value="{{ old('count') }}"
                       @elseif(!empty($count))
                       value="{{$count}}"
                       @else
                       placeholder="Email Count"
                       @endif
                       min="1"
                       max="100000"
                       required
                       size="6"
                >
                @if($errors->has('count'))
                    <span class="help-inline text-danger">{{$errors->first('count')}}</span>
                @endif
                <small id="emailHelp"
                       class="form-text text-muted"
                >
                    number of emails to generate integer between 1 - 100,000.
                </small>
            </div>
        </div>
        <div class="col-xs-12 col-sm-5">
            <div @if($errors->has('chance'))
                 class="form-group has-error"
                 @else
                 class="form-group"
                    @endif
            >
                <div class="input-group">
                    <input type="number"
                           class="form-control form-control-lg"
                           id="chance"
                           name="chance"
                           aria-describedby="countHelp"
                           @if(!empty(old('chance')))
                           value="{{ old('chance') }}"
                           @elseif(!empty($chance))
                           value="{{$chance}}"
                           @else
                           placeholder="Duplicate Chance"
                            @endif
                           min="1"
                           max="100"
                           maxlength="3"
                           required
                           size="3"
                    >
                    <span class="input-group-addon">%</span>
                </div>
                @if($errors->has('count'))
                    <span class="help-inline text-danger">{{$errors->first('chance')}}</span>
                @endif
                <small id="chanceHelp"
                       class="form-text text-muted"
                >
                    percent chance a randomly generated email is a duplicate address. integer between 1 - 100.
                </small>
            </div>
        </div>
        <div class="col-xs-12 col-sm-2">
            <button type="submit" class="btn btn-danger btn-block btn-lg">Submit</button>
        </div>
    </div>

</form>