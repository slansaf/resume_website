<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
     public function showForm()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:500',
            'message' => 'required|string|min:10|max:5000'
        ]);

        // Отправка email (раскомментируйте когда настроите почту)
        // Mail::to('your-email@example.com')->send(new FeedbackMail($validated));

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        
        $contact->save();

        return redirect()->route('home')->with('success', 'Сообщение было добавлено');
    }

    public function allData()
    {
        $contact = new Contact();
        return view('messages', ['data' => $contact->all()]);
    }
}
