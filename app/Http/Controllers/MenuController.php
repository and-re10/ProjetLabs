<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MenuRequest;
use App\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();

        return view('admin.others.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        if (count($menus) === 0) {
            return view('admin.others.menu.create');
        };

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        $menu = new Menu();

        $menu->logo = request('logo')->store('logo');
        $menu->nom_lien1 = request('nom1');
        $menu->nom_lien2 = request('nom2');
        $menu->nom_lien3 = request('nom3');
        $menu->nom_lien4 = request('nom4');
        $menu->save();

        return redirect()->route('menu.index');
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
        $menu = Menu::find($id);

        return view('admin.others.menu.edit', compact('menu'));       
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
        $request->validate(
            [
                'nom1' => 'required|min:2|max:30',
                'nom2' => 'required|min:2|max:30',
                'nom3' => 'required|min:2|max:30',
                'nom4' => 'required|min:2|max:30',
            ],
            [
                'nom1.required' => 'Ecrivez un nom',
                'nom1.min' => 'Minimum, 2 caractères',
                'nom1.max' => 'Maximum, 30 caractères',


                'nom2.required' => 'Ecrivez un nom',
                'nom2.min' => 'Minimum, 2 caractères',
                'nom2.max' => 'Maximum, 30 caractères',

                'nom3.required' => 'Ecrivez un nom',
                'nom3.min' => 'Minimum, 2 caractères',
                'nom3.max' => 'Maximum, 30 caractères',

                'nom4.required' => 'Ecrivez un nom',
                'nom4.min' => 'Minimum, 2 caractères',
                'nom4.max' => 'Maximum, 30 caractères',
            ]
        );
        $menu = Menu::find($id);

        if (request('logo') !== null) {
            Storage::delete($menu->logo);
            $menu->logo = request('logo')->store('logo');
        };
        $menu->nom_lien1 = request('nom1');
        $menu->nom_lien2 = request('nom2');
        $menu->nom_lien3 = request('nom3');
        $menu->nom_lien4 = request('nom4');
        $menu->save();

        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);

        Storage::delete($menu->logo);
        $menu->delete();

        return redirect()->back();
    }
}
