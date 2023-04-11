<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\Employer;

class SendMessage extends Component
{

    public $receiverInstance;
    public $selectedConversation;

    protected $listeners = ['updateSendMessage'];

    public function updateSendMessage(Conversation $conversation, Employer $receiver)
    {
        $this->selectedConversation = $conversation;
        $this->receiverInstance = $receiver;
    }
    
    
    public function render()
    {
        return view('livewire.chat.send-message');
    }
}
