@extends('layouts.app')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <h2>New Booking</h2>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
            <form class="form-horizontal" action="{{ action('BooksController@update', $book->id) }}" method="PATCH">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
          <div class="col-sm-6 col-md-6">
            <h2>RIDE DETAILS</h2>
            <h4>Date: {{$book->offer->date}}</h4>
            <h4>Time: {{$book->offer->time}}</h4>
            <h4>Destination: {{$book->offer->destination}}</h4>
            <h4>Price: {{$book->offer->price}}</h4>
            <h4>Pickup Location: {{$book->offer->pickup_loc}}</h4>

          </div>
          <div class="col-sm-6 col-md-6">
              <h2>PASSENGER DETAILS</h2>
              <h4>Name: {{$book->user->name}}</h4>
              <h4>Gender: {{$book->user->gender}}</h4>
              <h4>Faculty: {{$book->user->faculty}}</h4>
              <h4>Address: {{$book->user->address}}</h4>
              <h4>Heir Name: {{$book->nama_waris}}</h4>
              <h4>Heir Tel No: {{$book->tel_waris}}</h4>
              <h4>Heir Email: {{$book->email_waris}}</h4>

          </div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-10">
                  <button id="status_book" name="status_book" value="Accept" type="submit" style="width:15%"  class="btn btn-success" >Accept</button>

                  <button id="status_book" name="status_book" value="Reject" type="submit" style="width:15%" class="btn btn-danger" >Reject</button>
                </div>
            </div>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/warning.js') }}"></script>
  @endsection
