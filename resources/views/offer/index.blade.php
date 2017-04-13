@include('modal.destroy-modal')
@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Offer Ride<a href="{{ url('/profile') }}" class="btn btn-info pull-right" role="button">Offer New Ride</a></h2>
    </div>

    <div class="panel-body">
        <div class="col-md-12">
            <form class="form-inline text-center" method="get" action="{{ url('offer') }}">
                <input class="form-control" type="text" placeholder="Search your destination" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th width="10%">Date</th>
                                <th width="10%">Time</th>
                                <th width="20%">Destination</th>
                                <th width="10%">Estimate Duration</th>
                                <th width="5%">Price (RM)</th>
                                <th width="5%">No of Seat</th>
                                <th width="20%">Pickup Location</th>
                                <th width="20%">Additional Info</th>
                                <th width="10%">By</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody pull-{right}>
                            <?php $i = 0 ?>
                            @forelse($offers as $offer)
                                <tr>
                                    <td>{{ $offers->firstItem() + $i }}</td>
                                    <td>
                                    {{ $offer->date }}
                                    <!-- <small class="pull-right">
                                        {{ $offer->created_at->diffForHumans() }}
                                    </small> -->
                                    </td>
                                    <td>{{ $offer->time }}</td>
                                    <td>{{ $offer->destination }}</td>
                                    <td>{{ $offer->est_duration }}</td>
                                    <td>{{ $offer->price }}</td>
                                    <td>{{ $offer->seat }}</td>
                                    <td>{{ $offer->pickup_loc }}</td>
                                    <td>{{ $offer->info }}</td>
                                    <td>{{ $offer->user->name }}</td>
                                    <td>
                                    @if( $offer->user_id == Auth::user()->id)
                                        <a href="{{ action('OfferController@edit',   $offer->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ action('OfferController@destroy',    $offer->id) }}" class="btn btn-danger btn-sm" id="confirm-modal">Delete</a>
                                    @endif
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            @empty
                            <tr>
                                <td colspan="6">Looks like there is no ride available.</td>
                            </tr>

                            @endforelse
                        </tbody>
                    </table>
                {{ $offers->links() }}
            </div>
        </div>
    </div>
</div>
</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
