<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Availablebuse;
use App\Ticket;

class BuyTicketController extends Controller
{
    public function index(Request $request)
  	{
  		$id = $request->id;
  		$ticket = DB::table('availablebuses')->where('id', $id)->first();
  		//var_dump($ticket);
      	return view('buyticket.index')->with('ticket',$ticket);

  		//echo $id;

      	//return view('buyticket.index');
  	}

	public function store(Request $request)
	{
    $data = $request->search;
    $id = $request->id;
    $totalPrice = 0;
    foreach ($data as $key)
    {

      $totalPrice = $key['price'] + $totalPrice;

      $info['totalPrice'] = $totalPrice;
      $info['seats'] = $data;
    }

    $newTotalPrice = $info['totalPrice'];
    $totalSeatSelected = count($info['seats']);

    for ($i=0; $i <= count($info['seats'])-1 ; $i++)
    {
      $zia[]  = $info['seats'][$i]['seatNo'];
      //$seatList = implode("', ' ",$zia);
      $seatList = "'" . implode("', '", $zia) . "'";
    }

    //$insertBookedTicket = new Availablebuse();
    $insertBookedTicket = new Ticket();

    // `id` `bus_type` `deprature_time` `available_seat` `price` `selected_seat`
    // $insertBookedTicket->bus_type = "Ac";
    // $insertBookedTicket->deprature_time = "6 Pm";
    // $insertBookedTicket->available_seat = $totalSeatSelected;
    // $insertBookedTicket->price = $newTotalPrice;
    // $insertBookedTicket->selected_seat = $seatList;

    $insertBookedTicket->seat_number = $seatList;
    $insertBookedTicket->total_price = $newTotalPrice;

    if ($insertBookedTicket->save())
    {
      echo "<br> Insertion successful, check database<br>";
    }
    else
    {
      echo "<br> Insertion Failed<br>";
    }
    return view('buyticket.ticket')->with('id', $id);
	}

  public function show(Request $request)
  {
    $ticket = DB::table('tickets')->get();
    //var_dump($ticket);
      return view('buyticket.show')->with('ticket',$ticket);

    //echo $id;

      //return view('buyticket.index');
  }
}
