<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ServicesPrimesRequest;
use App\ServicesPrimes;

class ServicesPrimesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicesPrimes = ServicesPrimes::all();

        return view('admin.services.services-primes.index', compact('servicesPrimes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.services-primes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServicesPrimesRequest $request)
    {
        $servicePrime = new ServicesPrimes();

        $servicePrime->titre = request('titre');
        if (request('image') !== null) {
            $servicePrime->img_path = request('image')->store('image');
        } else {
            $servicePrime->img_path = request('image');
        };
        $servicePrime->btn_name = request('btn_name');
        $servicePrime->save();

        return redirect()->route('services-primes.index');
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
        $servicePrime = ServicesPrimes::find($id);

        return view('admin.services.services-primes.edit', compact('servicePrime'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServicesPrimesRequest $request, $id)
    {
        $servicePrime = ServicesPrimes::find($id);

        $servicePrime->titre = request('titre');
        if (request('image') !== null) {
            Storage::delete($servicePrime->img_path);
            $servicePrime->img_path = request('image')->store('image');
        };
        $servicePrime->btn_name = request('btn_name');
        $servicePrime->save();

        return redirect()->route('services-primes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicePrime = ServicesPrimes::find($id);

        Storage::delete($servicePrime->img_path);
        $servicePrime->delete();

        return redirect()->back();
    }
}
