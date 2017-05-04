<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Offer;
use App\Book;
use App\User;
use App\Commentd;
use App\Commentp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class BooksController extends Controller
{
    public function index()
    {
        $searchResults =Input::get('search');
        $offers = Offer::where('destination','like','%'.$searchResults.'%')->paginate(5);
        // $books = Book::findOrFail(Auth::user()->id);

        // $offers = Offer::with('user')->paginate(5);
        return view('book.catalog', compact('offers'));
    }


    public function create($id)
    {
        $book = Offer::findOrFail($id);
        // $pernahs = Book::where('user_id', Auth::user()->id)->get();
        $comments = Commentd::where('driver_id', $book->driver_id)->paginate(5);     //to show driver's feedback
        // $user_id = Comment::all();
        // // $userId = Comment::where('passenger_id', $user_id);     //to show driver's feedback
        // dd($user_id->user_id);



        return view('book.book', compact('book', 'comments'));

    }

    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'nama_waris' => 'required',
            'tel_waris' => 'required',
            'email_waris' => 'required',
            'kekerapan_notifikasi' => 'required',

        ]);

        // $user = User::findOrFail($id);
        $offer= Offer::findOrFail($id);

        $book = new Book;
        // $book->user_id = $user->id;
        $book->driver_id = $offer->driver_id;
        $book->offer_id = $offer->id;
        $book->nama_waris = $request->nama_waris;
        $book->tel_waris = $request->tel_waris;
        $book->email_waris = $request->email_waris;
        $book->drop_off = $request->drop_off;
        $book->kekerapan_notifikasi = $request->kekerapan_notifikasi;
        $book->user_id = Auth::user()->id;
        $offer->seat = $offer->seat-1;

        $book->save();
        $offer->save();

        return redirect()->action('BooksController@index')->withMessage('Your booking request will be processed');

    }

    public function show() //show list of booking request in notification
    {

        $books = Book::with('user')->paginate();
        return view('book.notification', compact('books'));

    }

    public function edit($id) //display booking details
    {

        $book = Book::findOrFail($id);
        $comments = Commentp::where('passenger_id',  $book->user_id)->paginate(5);

        return view('book.notification_details', compact('book','comments'));

    }

    public function update(Request $request, $id) //update status_book
    {
        $this->validate($request, [
            'status_book' => 'required',
        ]);

        $book = Book::findOrFail($id);
        $oid = $book->offer_id;
        $offer= Offer::findOrFail($oid);

        $book->status_book = $request->status_book;

        if($book->status_book == "Reject"){
            $offer->seat = $offer->seat+1;
        }

        $book->save();
        $offer->save();

        return redirect()->action('BooksController@index')->withMessage('Your booking request will be processed');

    }

    public function destroy($id)
    {
        //
    }

    public function show2()
    {
        $books = Book::with('user')->paginate();
        return view('book.confirmation', compact('books'));
    }

    public function edit2($id) //display booking details
    {

        $current = Carbon::now();
        $book = Book::findOrFail($id);
        $oid = $book->offer_id;
        $offer= Offer::findOrFail($oid);

        $invalid = Carbon::parse($offer->date)->subDay();    //a day before ride date
        //dd($invalid);
        $valid1 = Carbon::parse($offer->date)->subDay(6);
        $valid2 = Carbon::parse($offer->date)->subDay(2);
        //dd($valid2);

        if($invalid->toDateString() <= $current->toDateString())
        {
            return redirect()->action('BooksController@show2')->withErrors('Sorry! You have exceeded the confirmation date');
        }

        else if ($current->toDateString() >= $valid1->toDateString() && $current->toDateString() <= $valid2->toDateString())
        {
            return view('book.confirmation_details', compact('book'));
        }

        else if($current->toDateString() <= $valid1->toDateString())
        {
            return redirect()->action('BooksController@show2')->withMessage('Please confirm your ride between ');

        }

    }

    public function update2(Request $request, $id) //update status_book
    {
        $this->validate($request, [
            'status_sah' => 'required',
        ]);

        $current = Carbon::now();
        $book = Book::findOrFail($id);
        $oid = $book->offer_id;
        $offer= Offer::findOrFail($oid);

        $book->status_sah = $request->status_sah;

    //    dd($request->Input());

        $invalid = Carbon::parse($offer->date)->subDay();
        //dd($invalid);

        if($current->toDateString() == $invalid->toDateString())
        {
            $offer->seat = $offer->seat+1;
        }

        $book->save();
        $offer->save();

        return redirect()->action('BooksController@index')->withMessage('Your booking request will be processed');

    }

    public function show3() //give feedback to passenger
    {

        $books = Book::with('user')->paginate();
        return view('feedback.passenger_list', compact('books'));

    }

    public function show4() //give feedback to driver
    {
        $books = Book::with('user')->paginate();
        return view('feedback.driver_list', compact('books'));
    }

}
