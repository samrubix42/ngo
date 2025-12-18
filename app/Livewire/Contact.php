<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact as ContactModel;
use Livewire\Attributes\Title;

class Contact extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $subject = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:20',
        'subject' => 'required|string',
        'message' => 'required|string',
    ];

    protected $messages = [
        'name.required' => 'Please enter your full name.',
        'email.required' => 'Please enter your email address.',
        'email.email' => 'Please enter a valid email address.',
        'subject.required' => 'Please select a subject.',
        'message.required' => 'Please enter your message.',
    ];

    public function submitForm()
    {
        $this->validate();

        ContactModel::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        session()->flash('success', 'Thank you for contacting us! We will get back to you soon.');

        $this->reset(['name', 'email', 'phone', 'subject', 'message']);
    }

    #[Title('Contact Us - Swachh SeVa Foundation')]
    public function render()
    {
        return view('livewire.contact');
    }
}
