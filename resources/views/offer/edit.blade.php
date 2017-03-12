@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Edit Offer</h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">
                <form class="form-horizontal" action="{{ action('OfferController@update', $offer->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                        <label for="date" class="col-md-4 control-label">Date</label>

                        <div class="col-md-6">
                            <input id="date" type="date" class="form-control" name="date" value="{{ $offer->date }}" required autofocus>

                            @if ($errors->has('date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                        <label for="time" class="col-md-4 control-label">Time</label>

                        <div class="col-md-6">
                            <input id="time" type="time" class="form-control" name="time" value="{{ $offer->time }}" required autofocus>

                            @if ($errors->has('time'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('time') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('destination') ? ' has-error' : '' }}">
                        <label for="destination" class="col-md-4 control-label">Destination</label>

                        <div class="col-md-6">
                            <input id="destination" type="text" class="form-control" name="destination" value="{{ $offer->destination }}" required autofocus>

                            @if ($errors->has('destination'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('destination') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('est_duration') ? ' has-error' : '' }}">
                        <label for="est_duration" class="col-md-4 control-label">Estimate Duration</label>

                        <div class="col-md-6">
                            <input id="est_duration" type="text" class="form-control" name="est_duration" value="{{ $offer->est_duration }}" required autofocus>

                            @if ($errors->has('est_duration'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('est_duration') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                        <label for="price" class="col-md-4 control-label">Price (RM/passenger)</label>

                        <div class="col-md-3">
                            <input id="price" type="text" class="form-control" name="price" value="{{ $offer->price }}" required autofocus>

                            @if ($errors->has('price'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('price') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('seat') ? ' has-error' : '' }}">
                        <label for="seat" class="col-md-4 control-label">No of Seat</label>

                        <div class="col-md-3">
                            <select id="seat" type="text" class="form-control" name="seat" required autofocus>
                              <option value="{{ $offer->seat }}" selected="">{{ $offer->seat }}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>

                            @if ($errors->has('seat'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('seat') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('pickup_loc') ? ' has-error' : '' }}">
                        <label for="pickup_loc" class="col-md-4 control-label">Pickup Location</label>

                        <div class="col-md-6">
                            <input id="pickup_loc" type="text" class="form-control" name="pickup_loc" value="{{ $offer->pickup_loc }}" required autofocus>

                            @if ($errors->has('pickup_loc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('pickup_loc') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('info') ? ' has-error' : '' }}">
                        <label for="info" class="col-md-4 control-label">Additional Info</label>

                        <div class="col-md-6">
                            <textarea id="info" rows="4" cols="5" type="text" class="form-control" name="info" required autofocus>{{ $offer->info }}</textarea>

                            @if ($errors->has('info'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('info') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="{{ action('OfferController@index') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
