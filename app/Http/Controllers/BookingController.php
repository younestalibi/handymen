<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings =  Booking::orderBy('created_at', 'desc')->paginate(3);
        $myProfile = User::find(Auth::user()->id)->Profile;
        return view('booking.index', compact('myProfile', 'bookings'));
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
        $validated = $request->validate([
            'name' => 'required',
            'service_id' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'nullable',
        ]);
        $service = new Booking();
        $service->fill($validated)->save(); 
        return redirect()->back()->with('success', 'New Booking Created successfully');
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
        $booking = Booking::find($id);
        $myProfile = User::find(Auth::user()->id)->Profile;
        return view('booking.edit', compact('booking', 'myProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'status' => 'required',
            'price' => 'nullable',
        ]);
        $booking = Booking::findOrFail($request->id);
        $booking->status=$validated['status'];
        $booking->price=$validated['price'];
        $booking->save();
        return redirect()->back()->with('success', 'New Booking Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return response()->json([
            'status' => true,
            'success' => 'booking deleted successfully',
        ]);
    }
}