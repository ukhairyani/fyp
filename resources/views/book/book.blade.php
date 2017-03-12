@include('modal.destroy-modal')
@extends('layouts.app')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <h2>Details</h2>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
            <form class="form-horizontal" action="{{ action('BooksController@store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
          <div class="col-sm-6 col-md-4">
            <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
          </div>
          <div class="col-sm-6 col-md-8">
            <div class="col-sm-6 col-md-4">
                <h2>Driver Details</h2>
              <h3>{{$book->user->name}}, {{ $book->user->gender}}</h3>
              <h4><i class="glyphicon glyphicon-user"></i> {{ $book->user->matricNo}}</h4>
              <h4><i class="glyphicon glyphicon-phone"></i> {{ $book->user->noTel}}</h4>
              <h4><i class="glyphicon glyphicon-envelope"></i> {{ $book->user->email}}</h4>
              <h4><i class="glyphicon glyphicon-education"></i> {{ $book->user->faculty}}</h4>
          </div>
          <div class="col-sm-6 col-md-4">
              <h2>Ride Details</h2>
              <h3>{{$book->pickup_loc}}-> {{ $book->destination}}</h3>
              <h4><i class="glyphicon glyphicon-calendar"></i> {{ $book->date}}</h4>
              <h4><i class="glyphicon glyphicon-time"></i> {{ $book->time}}</h4>
          </div>
          </div>
          <div class="col-sm-6 col-md-8">
              <h2>Booking Details</h2>



              <div class="form-group{{ $errors->has('nama_waris') ? ' has-error' : '' }}">
                  <label for="nama_waris" class="col-md-4 control-label">Heir Name</label>

                  <div class="col-md-6">
                      <input id="nama_waris" type="text" class="form-control" name="nama_waris" value="{{ old('nama_waris') }}" required autofocus>

                      @if ($errors->has('nama_waris'))
                          <span class="help-block">
                              <strong>{{ $errors->first('nama_waris') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

          </div>
            <div class="form-group">
                <div class="col-sm-offset-10 col-sm-10">
                  <a href="{{ action('OfferController@index') }}" class="btn btn-default">Edit</a>
                  <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
