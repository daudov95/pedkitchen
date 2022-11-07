<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactFormRequest;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    //

    public function index ()
    {
       return view('contactform'); 
    }

    public function sendForm (StoreContactFormRequest $request) 
    {
        // dd($request);
        $req = ContactForm::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'topic' => $request->topic,
            'message' => $request->message,
        ]);

        if($req) {
            return redirect()->back()->with('success', 'Вы успешно отправили форму, дождитесь ответа на почту.');
        }

        return redirect()->back()->with('error', 'Ошибка при отправке данных');
    }
}
