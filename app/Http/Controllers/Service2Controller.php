<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Service2Request;
use App\Service1;
use App\Service2;

class Service2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services1 = Service1::all();
        $services2 = Service2::all();

        return view('admin.services.services1.index', compact('services1', 'services2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.services1.services2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Service2Request $request)
    {
        $service2 = new Service2();

        $service2->titre = request('titre');
        $service2->description = request('description');
        $service2->icon = request('icon');
        $service2->save();

        return redirect()->route('service2.index');
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
        $service2 = Service2::find($id);

        return view('admin.services.services1.services2.edit', compact('service2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Service2Request $request, $id)
    {
        $service2 = Service2::find($id);

        $service2->titre = request('titre');
        $service2->description = request('description');
        $service2->icon = request('icon');
        $service2->save();

        return redirect()->route('service2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service2 = Service2::find($id);

        Storage::delete($service2);
        $service2->delete();

        return redirect()->back();
    }
}
