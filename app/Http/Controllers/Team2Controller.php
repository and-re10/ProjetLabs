<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Team2Request;
use App\Team1;
use App\Team2;

class Team2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams1 = Team1::all();
        $teams2 = Team2::all();

        return view('admin.home.team.index', compact('teams1', 'teams2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.team.team2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Team2Request $request)
    {
        $team2 = new Team2();

        $team2->img_path = request('image')->store('image');
        $team2->name = request('name');
        $team2->surname = request('surname');
        $team2->work = request('work');
        $team2->save();

        return redirect()->route('team2.index');
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
        $team2 = Team2::find($id);

        return view('admin.home.team.team2.edit', compact('team2'));
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
        $request->validate([
            'name' => 'required|min:2|max:30',
            'surname' => 'required|min:2|max:30',
            'work' => 'required|min:2|max:50',
        ],
        [
            'name.required' => 'Ecrivez votre prenom',
            'name.min' => 'Minimum, 2 caractères',
            'name.max' => 'Maximum, 30 caractères',

            'surname.required' => 'Ecrivez votre nom',
            'surname.min' => 'Minimum, 2 caractères',
            'surname.max' => 'Maximum, 30 caractères',

            'work.required' => 'Ecrivez votre profession',
            'work.min' => 'Minimum, 2 caractères',
            'work.max' => 'Maximum, 50 caractères',
        ]);
        $team2 = Team2::find($id);

        if (request('image') !== null) {
            Storage::delete($team2->img_path);
            $team2->img_path = request('image')->store('image');  
        }
        $team2->name = request('name');
        $team2->surname = request('surname');
        $team2->work = request('work');
        $team2->save();

        return redirect()->route('team2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team2 = Team2::find($id);

        Storage::delete($team2->img_path);
        $team2->delete();

        return redirect()->back();
    }
}
