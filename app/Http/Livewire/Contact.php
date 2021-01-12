<?php

namespace App\Http\Livewire;

use App\Mail\NewContact;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    public function render()
    {
        return view('livewire.contact');
    }
    public function submit()
    {
        $res = $this->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'phone'=>'required|min:10|max:12',
                'message'=>'required|max:2048'
            ]);

        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->message = '';
        $contact = new \App\Models\Contact($res);
        $contact->save();

        Mail::to('cholladay0816@gmail.com')->queue(new NewContact($contact));

        $this->redirect(route('contact-success'));
        //Mail::to('markleyc58@gmail.com')->queue(new NewContact($contact));
    }
}
