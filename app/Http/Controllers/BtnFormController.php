<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\BtnFormRequest;
use App\BtnForm;

class BtnFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $btnForms = BtnForm::all();

        return view('admin.contact.btn-form.index', compact('btnForms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.btn-form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BtnFormRequest $request)
    {
        $btnForm = new BtnForm();

        $btnForm->btn_name = request('btn_name');
        $btnForm->save();

        return redirect()->route('bouton-form.index');
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
        $btnForm = BtnForm::find($id);

        return view('admin.contact.btn-form.edit', compact('btnForm'));;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BtnFormRequest $request, $id)
    {
        $btnForm = BtnForm::find($id);

        $btnForm->btn_name = request('btn_name');
        $btnForm->save();

        return redirect()->route('bouton-form.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $btnForm = BtnForm::find($id);

        Storage::delete($btnForm);
        $btnForm->delete();

        return redirect()->back();
    }
}
