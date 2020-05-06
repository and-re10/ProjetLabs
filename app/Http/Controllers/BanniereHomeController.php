<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\BanniereHomeRequest;
use App\Banniere_home;
use App\Banniere_home2;

class BanniereHomeController extends Controller
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
        $banniere_homes = Banniere_home::all();
        if (count($banniere_homes) === 0) {
            return view('admin.home.bannière.create', compact('banniere_homes'));
        }
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BanniereHomeRequest $request)
    {
        $banniere_home = new Banniere_home();

        $banniere_home->slogan = request('slogan');
        $banniere_home->save();

        return redirect()->route('banniere-home.index');
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
        $banniere_home = Banniere_home::find($id);

        return view('admin.home.bannière.edit', compact('banniere_home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BanniereHomeRequest $request, $id)
    {
        $banniere_home = Banniere_home::find($id);

        $banniere_home->slogan = request('slogan');
        $banniere_home->save();

        return redirect()->route('banniere-home.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banniere_home = Banniere_home::find($id);

        Storage::delete($banniere_home);
        $banniere_home->delete();

        return redirect()->route('banniere-home.index');
    }
}
