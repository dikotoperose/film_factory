<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Cinema;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $bookings = Booking::where('user_email', '=', $request->user_email)->get();
        return view('bookings.detail', ['bookings' => $bookings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $seats = Cinema::where('name', $request->cinema)->pluck('seats')->toArray();

        if((int)$seats[0] == 0 )
        {
            return redirect('/dashboard')->with('status', 'Unfortunately, there are no seats available at this cinema.');
        }else{
            return response()->view('bookings.create', [
                'movie_id'=>$request->movie_id,
                'movie'=>$request->movie,
                'cinema'=>$request->cinema,
                'region'=>$request->region
            ]);
        }


    }
        
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $seats = Cinema::where('name', $request->cinema)->pluck('seats')->toArray();
        $seatsLeft = (int)$seats[0] - (int)$request->tickets;

        Cinema::where('name', $request->cinema)->update(['seats'=>$seatsLeft ]);

        $reference_no = 'ff-'. $request->movie_id . '-' . rand(10*45, 100*98);

        $booking = new Booking;
        $booking->movie_name = $request->title;
        $booking->region = $request->region;
        $booking->cinema = $request->cinema;
        $booking->tickets = $request->tickets;
        $booking->movie_date = $request->movie_date;
        $booking->movie_time = $request->movie_time;
        $booking->user_email = $request->user_email;
        $booking->reference_no = $reference_no;
        $booking->save();

        return redirect('/dashboard')->with('status', 'Booking successfully made!');

    }

        /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      // dd($id);
        $booking = Booking::findOrFail($id);
        $delete = $booking->delete($id);

        if($delete) {
            return redirect()->route('dashboard')->with('status', 'Booking successfully cancelled!');;
        }
    }
}
