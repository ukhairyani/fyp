{{-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" action="{{ route('email.test') }}">
            <button type="submit" name="button">Send</button>
        </form>
    </body>
</html> --}}

@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Start Your Ride</h2>
    </div>

    <div class="panel-body">
        <div class="col-md-12">
            <form class="form-inline text-center" method="get" action="">
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
                                <th width="10%">Booking ID</th>
                                <th width="25%">From</th>
                                <th width="25%">To</th>
                                <th width="10%">Date</th>
                                <th width="10%">Time</th>
                                <th width="10%">Driver Name</th>
                                <th width="10%">Booking Status</th>
                                <th width="10%">Confirmation Status</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody pull-{right}>
                            <?php $i = 0 ?>

                            @forelse($books as $book)
                                @if( $book->user_id == Auth::user()->id)
                                    @if($book->status_book == "Accept" && $book->status_sah == "Confirm")


                                <tr>
                                    <td>{{ $books->firstItem() + $i }}</td>
                                    <td>{{ $book->id }}</td>
                                    <td>{{ $book->offer->pickup_loc }}</td>
                                    <td>{{ $book->offer->destination }}</td>
                                    <td>{{ $book->offer->date }}</td>
                                    <td>{{ $book->offer->time }}</td>
                                    <td>{{ $book->driver->user->name }}</td>
                                    <td>{{ $book->status_book }}</td>
                                    <td>{{ $book->status_sah }}</td>


                                    <td><a href="{{ action('StartsController@create', $book->id) }}" class="btn btn-success" role="button">Start</a></td>
                                    {{-- <td><button type="submit" name="button">Send</button></td> --}}



                                </tr>

                                <?php $i++ ?>
                            @endif
                        @endif

                            @empty
                            <tr>
                                <td colspan="6">Looks like there is no notification available.</td>
                            </tr>

                        @endforelse

                        </tbody>
                    </table>

                    <div class="col-sm-offset-5">
                        {{ $books->links() }}
                    </div>


                </div>
                </div>
                </div>
            </div></div>


</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
