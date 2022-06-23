<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactComponent extends Component
{
        public $name;
        public $email;
        public $subject;
        public $message;

    public function create(Request $request){


      $contact = new Contact;

      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->subject = $request->subject;
      $contact->message = $request->message;

      $contact->save();


            return back()->with('success', 'Les informations sont bien enregistrés');
    }
    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.base');
    }
}
