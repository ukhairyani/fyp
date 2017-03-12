@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>List Of Available Rides</h2>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th width="10%">Date</th>
                                <th width="10%">Time</th>
                                <th width="25%">Destination</th>
                                {{-- <th width="10%">Estimate Duration</th> --}}
                                <th width="10%">Price (RM)</th>
                                <th width="10%">No of Seat</th>
                                {{-- <th width="20%">Pickup Location</th>
                                <th width="20%">Additional Info</th> --}}
                                <th width="15%">Driver's Name</th>
                                <th width="10%">Driver's Gender</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody pull-{right}>
                            <?php $i = 0 ?>

                            @foreach($offers as $offer)
                                <tr>
                                    <td>{{ $offers->firstItem() + $i }}</td>
                                    <td>{{ $offer->date }}</td>
                                    <td>{{ $offer->time }}</td>
                                    <td>{{ $offer->destination }}</td>
                                    <td>{{ $offer->price }}</td>
                                    <td>{{ $offer->seat }}</td>
                                    <td>{{ $offer->user->name }}</td>
                                    <td>{{ $offer->user->gender }}</td>

                                    <td><a href="{{ action('BooksController@book',   $offer->id) }}" class="btn btn-info" role="button">Details</a></td>

                                    @if( $offer->user_id == Auth::user()->id)
                                    @endif
                                </tr>


                            <?php $i++ ?>
                            @endforeach




                        </tbody>


                </div>
                </div>
                </div>
            </div></div>


</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
