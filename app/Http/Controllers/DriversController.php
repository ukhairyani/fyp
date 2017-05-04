<?php
namespace App\Http\Controllers;
use App\User;
use App\Driver;
use App\State;
use App\Commentp;
use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class DriversController extends Controller
{

    public function index()
    {
        $drivers = Driver::where('user_id',Auth::user()->id)->get();
        $current = Carbon::now();

        if($drivers->first()->noLesen == "" || $drivers->first()->lesen_luput <= $current || $drivers->first()->roadtax_luput <= $current){
            return view ('driver.driver', compact('drivers'));
        }
        $states = State::all();
        // dd($states);
        return view('offer.create')->with('states', $states);

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
        $driver = Driver::where('user_id', $id)->first();

        return view('profile_driver', compact('driver'));
    }


    public function edit($id)
    {
        $driver = Driver::findOrFail($id);
        return view('driver.edit', compact('driver'));
    }

    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $driver = Driver::where('user_id', $id)->first();


    //     if ($request->hasFile('gambar_ic'))
    //    {
    //        $image = '/images/ic_image_' . time() . '.' . $request->gambar_ic->getClientOriginalExtension();
    //     //    $request->gambar_ic->move(public_path('images/'), $image);
    //     //    $driver->gambar_ic = $image;
    //         $pathGambar = $request->file('gambar_ic')->store('images', 'public');
    //         $driver->gambar_ic = $pathGambar;
    //     //    dd($pathGambar);



    //    }

    // if ($request->hasFile('gambar_ic'))
    //        {
    //
    // 			$pathGambar = $request->file('gambar_ic')->store('images', 'public');
    //
    //           	$driver->noLesen = $request->noLesen;
    //         	$driver->lesen_luput = $request->lesen_luput;
    //         	$driver->gambar_lesen = $request->gambar_lesen;
    //        		$driver->gambar_ic = $pathGambar;
    //         	$driver->no_plat = $request->no_plat;
    //         	$driver->jenis_kereta = $request->jenis_kereta;
    //         	$driver->roadtax_luput = $request->roadtax_luput;
    //           	$driver->save();
    //
    //           //dd($pathGambar);
    //
    //        }
        $driver->noLesen = $request->noLesen;
        $driver->lesen_luput = $request->lesen_luput;
        $driver->gambar_lesen = $request->gambar_lesen;
        $driver->gambar_ic = $request->gambar_ic;
        $driver->no_plat = $request->no_plat;
        $driver->jenis_kereta = $request->jenis_kereta;
        $driver->roadtax_luput = $request->roadtax_luput;

        $user->noTel = $request->noTel;
        $user->email= $request->email;
        $user->address = $request->address;

        $current = Carbon::now();
        if($request->lesen_luput<=$current || $request->roadtax_luput<=$current){
            return redirect()->action('DriversController@edit', $id)->withErrors('License or road tax expiry date is invalid');
        }

        $driver->save();
        $user->save();

        return redirect()->action('OfferController@create')->withMessage('Driver account has successfully updated');
    }

    public function destroy($id)
    {
        //
    }

    public function showPassenger($id)
    {
        //
        $user = User::where('id', $id)->first();

        return view('profile_passenger', compact('user'));
    }
}
