@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>List Of Available Rides</h2>
    </div>

    <div class="panel-body">
        <div class="col-md-12">
            <form class="form-inline text-center" method="get" action="{{ url('catalog') }}">
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
                                <th width="25%">Destination</th>
                                <th width="10%">Price (RM)</th>
                                <th width="10%">No of Seat</th>
                                <th width="15%">Driver's Name</th>
                                <th width="10%">Driver's Gender</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody pull-{right}>
                            <?php $i = 0 ?>

                            @forelse($offers as $offer)
                                <tr>
                                    @if ($offer->seat > 0)

                                    <td>{{ $offers->firstItem() + $i }}</td>
                                    <td>{{ $offer->date }}</td>
                                    <td>{{ $offer->time }}</td>
                                    <td>{{ $offer->destination }}</td>
                                    <td>{{ $offer->price }}</td>
                                    <td>{{ $offer->seat }}</td>
                                    <td>{{ $offer->user->name }}</td>
                                    <td>{{ $offer->user->gender }}</td>

                                    <td>
                                    @if( $offer->user_id != Auth::user()->id)
                                        <a href="{{ action('BooksController@create', $offer->id) }}" class="btn btn-info" role="button">Details</a>
                                    @endif
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
                    <div class="col-sm-offset-5">
                        {{ $offers->links() }}
                    </div>


                </div>
                </div>
                </div>
            </div></div>


</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
