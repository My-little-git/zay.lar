<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Subject;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        $subjects = Subject::all();
        return view('contact', compact('subjects'));
    }

    public function add(ContactRequest $request)
    {
        Contact::create($request->validated());
        return redirect()->to('contact')->with('msg', 'Обращение успешно отправленно');
    }
}
