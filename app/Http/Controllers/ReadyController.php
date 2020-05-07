<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ReadyRequest;
use App\Ready;

class ReadyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $readys = Ready::all();

        return view('admin.home.ready.index', compact('readys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.ready.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReadyRequest $request)
    {
        $ready = new Ready();

        $ready->titre  = request('titre');
        $ready->sous_titre = request('sous_titre');
        $ready->btn_name = request('btn_name');
        $ready->save();

        return redirect()->route('ready.index');
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
        $ready = Ready::find($id);

        return view('admin.home.ready.edit', compact('ready'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReadyRequest $request, $id)
    {
        $ready = Ready::find($id);

        $ready->titre  = request('titre');
        $ready->sous_titre = request('sous_titre');
        $ready->btn_name = request('btn_name');
        $ready->save();

        return redirect()->route('ready.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ready = Ready::find($id);

        Storage::delete($ready);
        $ready->delete();

        return redirect()->back();
    }
}
