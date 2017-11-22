<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Http\Requests\BusRequest;
use Illuminate\Http\Request;
use App\Http\Resources\Bus\BusResource;
use Symfony\Component\HttpFoundation\Response;
class BusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Bus::all();
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
    public function store(BusRequest $request)
    {
        $bus=new Bus;
        $bus->bus_number=$request->bus_number;
        $bus->time=$request->time;
        $bus->availablity=$request->availablity;
        $bus->driver_id=$request->driver_id;
        $bus->route_id=$request->route_id;
        $bus->save();
        return response([
            'data' => new BusResource($bus)
        ],Response::HTTP_CREATED);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function show(Bus $bus)
    {
        return new BusResource($bus);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function edit(Bus $bus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bus $bus)
    {


        return $bus->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bus $bus)
    {
        $bus->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
