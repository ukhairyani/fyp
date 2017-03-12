@include('modal.destroy-modal')
@extends('layouts.app')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <h2>Pesan Makanan</h2>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-10">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
          </div>
            <div class="col-sm-6 col-md-8">
              <h2>{{$user->name}}</h2>    
              <br> 
              <h4><cite title="San Francisco, USA">San Francisco, USA</cite></h4>
              <br>
              <h4><i class="glyphicon glyphicon-envelope"></i>email@example.com<h4>
              <br><br>
              <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
              <br>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-10 col-sm-10">
                  <a href="{{ action('ProfilesController@edit') }}" class="btn btn-default">Edit</a>
                  <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection