<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\InfoContactRequest;
use App\InfoContact;

class InfoContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infoContacts= InfoContact::all();

        return view('admin.contact.info-contact.index', compact('infoContacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.info-contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InfoContactRequest $request)
    {
        $infoContact = new InfoContact();

        $infoContact->titre1 = request('titre1');
        $infoContact->texte = request('texte');
        $infoContact->titre2 = request('titre2');
        $infoContact->address = request('address');
        $infoContact->phone = request('phone');
        $infoContact->email = request('email');
        $infoContact->save();

        return redirect()->route('info-contact.index');
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
        $infoContact = InfoContact::find($id);

        return view('admin.contact.info-contact.edit', compact('infoContact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InfoContactRequest $request, $id)
    {
        $infoContact = InfoContact::find($id);

        $infoContact->titre1 = request('titre1');
        $infoContact->texte = request('texte');
        $infoContact->titre2 = request('titre2');
        $infoContact->address = request('address');
        $infoContact->phone = request('phone');
        $infoContact->email = request('email');
        $infoContact->save();

        return redirect()->route('info-contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $infoContact = InfoContact::find($id);

        Storage::delete($infoContact);
        $infoContact->delete();
        
        return redirect()->back();
    }
}
