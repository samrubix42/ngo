<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contact as ContactModel;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.admin')]
class Contact extends Component
{
    use WithPagination;

    public $selectedContact = null;
    public $showModal = false;

    public function viewMessage($id)
    {
        $this->selectedContact = ContactModel::findOrFail($id);
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->selectedContact = null;
    }

    public function deleteMessage($id)
    {
        ContactModel::findOrFail($id)->delete();
        $this->closeModal();
        session()->flash('success', 'Message deleted successfully!');
    }

    public function render()
    {
        return view('livewire.admin.contact', [
            'contacts' => ContactModel::latest()->paginate(10)
        ]);
    }
}
