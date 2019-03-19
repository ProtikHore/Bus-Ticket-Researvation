<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Availablebuse;

class AvailablebusController extends Controller
{
  public function index(Request $request)
  {
    $availableBus = DB::table('availablebuses')->get();
    //$availableBus = Availablebuse::all();
    //var_dump($availableBus);
    //echo $availableBus->price;
    //die();
    return view('availablebus.index')->with('bus', $availableBus);
  }

  public function show(Request $request)
  {
    $availableBus = DB::table('availablebuses')->get();
    //$availableBus = Availablebuse::all();
    //var_dump($availableBus);
    //echo $availableBus->price;
    //die();
    return view('availablebus.show')->with('bus', $availableBus);
  }

  public function edit(Request $request)
    {
      // code...
      $id = $request->id;
      // echo $id;
      // die();
      $userId = DB::table('availablebuses')->where('id',$id)->first();
      // echo "<pre>";
      // print_r($userId);
      return view('availablebus.edit')->withUid($userId);
    }

    public function update(Request $request)
     {
       $id = $request->id;
       $buses = Availablebuse::find($id);
       $buses->bus_type = $request->bus_type;
       $buses->deprature_time = $request->deprature_time;
       $buses->available_seat = $request->available_seat;
       $buses->price = $request->price;
       $buses->selected_seat = $request->selected_seat;
       $buses->save();
       return redirect()->route('availablebus.show');
     }

     public function delete(Request $request)
       {
         // code...
         $id = $request->id;
         // echo $id;
         // die();
         $userId = DB::table('availablebuses')->where('id',$id)->first();
         // echo "<pre>";
         // print_r($userId);
         return view('availablebus.delete')->withUid($userId);
       }

    public function destroy(Request $request)
    {
    	$id = $request->id;
    	Availablebuse::destroy($id);

    	return redirect()->route('availablebus.show');
    }
    public function addNewBus()
    {
    	return view('availablebus.addNewBus');
    }
    public function addBus(Request $request)
    {
      $bus = new Availablebuse();
      $validator = Validator::make($request->all(), [

        'bus_type' => 'required',
        'deprature_time' => 'required',
        'available_seat'    => 'required',
        'price' => 'required',
        'selected_seat' => 'required',


      ]);

      if($validator->fails())
      {
        return redirect()
                  ->route('availablebus.add')
                  ->with('errors', $validator->errors());
      }


      $bus->bus_type = $request->bus_type;
      $bus->deprature_time = $request->deprature_time;
      $bus->available_seat = $request->available_seat;
      $bus->price = $request->price;
      $bus->selected_seat = $request->selected_seat;
      $bus->save();
      return redirect()->route('availablebus.show');
    }
}
