<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EnvoiMessage;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MessagesRequest;
use Mail;
use App\Message;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all();

        return view('admin.contact.messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessagesRequest $request)
    {

        Mail::to(request('email'))->send(new EnvoiMessage($request));

        $message = new Message();
        $message->name = request('name');
        $message->email = request('email');
        $message->subject = request('sujet');
        $message->message = request('message');
        $message->save();

        return redirect()->back()->with('messages', 'votre message a ete envoyé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message= Message::findOrFail($id);
        $messages = Message::all();

        return view('admin.contact.messages.show', compact('message', 'messages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::find($id);

        Storage::delete($message);
        $message->delete();

        return redirect()->route('contact-messages.index');
    }
}
