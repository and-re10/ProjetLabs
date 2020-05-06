<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Testimonials1Request;
use App\Testimonials1;
use App\Testimonials2;

class Testimonials1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials1 = Testimonials1::all();
        $testimonials2 = Testimonials2::all();

        return view('admin.home.testimonials.index', compact('testimonials1', 'testimonials2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Testimonials1Request $request)
    {
        $testimonial1 = new Testimonials1();

        $testimonial1->titre = request('titre');
        $testimonial1->save();

        return redirect()->route('testimonials1.index');
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
        $testimonial1 = Testimonials1::find($id);

        return view('admin.home.testimonials.edit', compact('testimonial1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Testimonials1Request $request, $id)
    {
        $testimonial1 = Testimonials1::find($id);

        $testimonial1->titre = request('titre');
        $testimonial1->save();

        return redirect()->route('testimonials1.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial1 = Testimonials1::find($id);

        Storage::delete($testimonial1);
        $testimonial1->delete();

        return redirect()->back();
    }
}
