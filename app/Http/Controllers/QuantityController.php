<?php

namespace App\Http\Controllers;

use App\Quantity;
use Illuminate\Http\Request;

class QuantityController extends Controller
{
    public function __construct(
        Quantity $quantity
       
    )
    {
        $this->quantity = $quantity;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quantities = $this->quantity->getAll();
        // return response()->json($quantities, 201);
        return $quantities;
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

        $quantity = $this->quantity->saveItem($request->all());
        //  Quantity::create($request->all());
        // $quantity = Quantity::with('product');
        return response()->json($quantity, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quantity  $quantity
     * @return \Illuminate\Http\Response
     */
    // public function show(Quantity $quantity)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quantity  $quantity
     * @return \Illuminate\Http\Response
     */
    public function edit(Quantity $quantity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quantity  $quantity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quantity $quantity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quantity  $quantity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quantity $quantity)
    {
        //
    }

    // Todo for history calories

    public function history($day = null, $month = null, $year = null)
    {
        // Show the results based on the parameters
        // If they are not set, show all events
        // dd($year. $month . $day);
        if ($day != null && $month != null && $year != null)
        {
            $quantities= $this->quantity->getHistoric($day,$month,$year);

            return $quantities;

        }

        // If everything else fails, return all events
        return Quantity::all();
    }
}
