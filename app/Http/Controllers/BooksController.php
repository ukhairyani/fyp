<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class BooksController extends Controller
{
    public function index()
    {
        $searchResults =Input::get('search');
        $offers = Offer::where('destination','like','%'.$searchResults.'%')->paginate(5);

        // $offers = Offer::with('user')->paginate(5);
        return view('book.catalog', compact('offers'));
    }


    public function create($id)
    {
        $book = Offer::findOrFail($id);
        return view('book.book', compact('book'));
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
        $book->offer_id = $offer->id;
        $book->nama_waris = $request->nama_waris;
        $book->tel_waris = $request->tel_waris;
        $book->email_waris = $request->email_waris;
        $book->kekerapan_notifikasi = $request->kekerapan_notifikasi;
        $book->user_id = Auth::user()->id;
        $offer->seat = $offer->seat-1;

        $book->save();
        $offer->save();

        return redirect()->action('BooksController@index')->withMessage('Your booking request will be processed');

    }

    public function show() //show list of booking request in notification
    {
        // $books = Book::with('user')->paginate(5);

        $books = Book::with('user')->paginate();
        return view('book.notification', compact('books'));

    }

    public function edit($id) //display booking details
    {

        $book = Book::findOrFail($id);
         return view('book.notification_details', compact('book'));

    }

    public function update(Request $request, $id) //update status_book
    {
        $this->validate($request, [
            'status_book' => 'required',
        ]);

        $offer= Offer::findOrFail($id);
        $book = Book::findOrFail($id);

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
}
