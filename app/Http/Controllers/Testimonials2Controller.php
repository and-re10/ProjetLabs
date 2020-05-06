<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Testimonials2Request;
use App\Testimonials1;
use App\Testimonials2;

class Testimonials2Controller extends Controller
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
        return view('admin.home.testimonials.testimonials2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Testimonials2Request $request)
    {
        $testimonial2 = new Testimonials2();

        $testimonial2->img_path = request('image')->store('image');
        $testimonial2->name = request('name');
        $testimonial2->surname = request('surnom');
        $testimonial2->texte = request('texte');
        $testimonial2->work = request('work');
        $testimonial2->save();

        return redirect()->route('testimonials2.index');
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
        $testimonial2 = Testimonials2::find($id);

        return view('admin.home.testimonials.testimonials2.edit', compact('testimonial2'));
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
            'name' => 'required|min:2|max:20',
            'surnom' => 'required|min:2|max:20',
            'texte' => 'required|min:2|max:300',
            'work' => 'required|min:2|max:30',
        ],
        [
            'name.required' => 'Ecrivez votre nom',
            'surnom.required' => 'Ecrivez votre surnom',
            'texte.required' => 'Ecrivez un texte',
            'work.required' => 'Ecrivez votre job',
        ]);

        $testimonial2 = Testimonials2::find($id);
        if (request('image') !== null) {
            Storage::delete($testimonial2->img_path);$testimonial2->img_path = request('image')->store('image');
        }
        
        $testimonial2->name = request('name');
        $testimonial2->surname = request('surnom');
        $testimonial2->texte = request('texte');
        $testimonial2->work = request('work');
        $testimonial2->save();

        return redirect()->route('testimonials2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial2 = Testimonials2::find($id);

        Storage::delete($testimonial2);
        $testimonial2->delete();

        return redirect()->back();
    }
}
