<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\BanniereHome2Request;
use App\Banniere_home;
use App\Banniere_home2;

class BanniereHome2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banniere_homes = Banniere_home::all();
        $banniere_homes2 = Banniere_home2::all();

        return view('admin.home.bannière.index', compact('banniere_homes', 'banniere_homes2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.bannière.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BanniereHome2Request $request)
    {
        $banniere_home2 = new Banniere_home2();

        $banniere_home2->img_path = request('image')->store('image');
        $banniere_home2->save();

        return redirect()->route('banniere-home2.index');
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
        $banniere_home2 = Banniere_home2::find($id);

        return view('admin.home.bannière.images.edit', compact('banniere_home2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $banniere_home2 = Banniere_home2::find($id);

        if (request('image') !== null) {
            Storage::delete($banniere_home2->img_path);
            $banniere_home2->img_path = request('image')->store('image');
        }
        $banniere_home2->save();

        return redirect()->route('banniere-home2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banniere_home2 = Banniere_home2::find($id);

        Storage::delete($banniere_home2->img_path);
        $banniere_home2->delete();

        return redirect()->route('banniere-home2.index');
    }
}
