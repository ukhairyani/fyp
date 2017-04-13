<?php
namespace App\Http\Controllers;
use App\User;
use App\Driver;
use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
// use Illuminate\Support\Facades\Auth;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::where('user_id',Auth::user()->id)->get();
        $current = Carbon::now();

        if($drivers->first()->noLesen == "" || $drivers->first()->lesen_luput <= $current){
                    return view ('driver.driver', compact('drivers'));
        }
            return view ('offer.create');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::findOrFail($id);
        return view('driver.edit', compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $user = User::findOrFail($id);
        $driver = Driver::where('user_id', $id)->first();

        // $user->name = $request->name;
        // $user->noIc = $request->noIc;
        $user->noTel = $request->noTel;
        $user->email= $request->email;
        $user->address = $request->address;
        // $user->faculty = $request->faculty;

        $driver->noLesen = $request->noLesen;
        $driver->lesen_luput = $request->lesen_luput;
        $driver->gambar_lesen = $request->gambar_lesen;
        $driver->gambar_ic = $request->gambar_ic;
        $driver->no_plat = $request->no_plat;
        $driver->jenis_kereta = $request->jenis_kereta;
        $driver->roadtax_luput = $request->roadtax_luput;

        $user->save();
        $driver->save();

        return redirect()->action('OfferController@create')->withMessage('Driver has successfully registered');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
