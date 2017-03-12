<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::with('user')->paginate(5);
        return view('offer.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'time' => 'required',
            'destination' => 'required|max:45',
            'est_duration' => 'required|max:45',
            'price' => 'required|max:10',
            'seat' => 'required|max:10',
            'pickup_loc' => 'required|max:45',
            'info' => 'required|max:455',
        ]);

        $offer = new Offer;
        $offer->date = $request->date;
        $offer->time = $request->time;
        $offer->destination = $request->destination;
        $offer->est_duration = $request->est_duration;
        $offer->price = $request->price;
        $offer->seat = $request->seat;
        $offer->pickup_loc = $request->pickup_loc;
        $offer->info = $request->info;
        $offer->user_id = Auth::user()->id;
        $offer->save();

        return redirect()->action('OfferController@store')->withMessage('Ride has been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Offer::findOrFail($id);
        return view('offer.edit', compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'date' => 'required',
            'time' => 'required',
            'destination' => 'required',
            'est_duration' => 'required',
            'price' => 'required',
            'seat' => 'required',
            'pickup_loc' => 'required',
            'info' => 'required',
        ]);

        $offer = Offer::findOrFail($id);
        $offer->date = $request->date;
        $offer->time = $request->time;
        $offer->destination = $request->destination;
        $offer->est_duration = $request->est_duration;
        $offer->price = $request->price;
        $offer->seat = $request->seat;
        $offer->pickup_loc = $request->pickup_loc;
        $offer->info = $request->info;
        $offer->save();

        return redirect()->action('OfferController@index')->withMessage('Ride has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer = Offer::findOrFail($id);
        $offer->delete();
        return back()->withError('Post has been successfully deleted');
    }
}
