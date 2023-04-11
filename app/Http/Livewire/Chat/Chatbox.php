<?php

namespace App\Http\Livewire\Chat;

use App\Models\Employee;
use App\Models\Conversation;
use App\Models\Message;

use Livewire\Component;

class Chatbox extends Component
{
    public $receiverInstance;
    public $receiver;
    public $selectedConversation;
    public $messages;
    public $messages_count;
    public $pagenateVar = 10;
    protected $listeners=['loadConversation'];

    public function loadConversation(Conversation $conversation, Employee $receiver)
    {
        //dd($conversation, $receiver);
        $this->selectedConversation = $conversation;
        $this->receiverInstance = $receiver;


        $this->messages_count = Message::where('conversation_id', $this->selectedConversation->id)->count();

        $this->messages = Message::where('conversation_id', $this->selectedConversation->id)->skip( $this->messages_count - $this->pagenateVar)->take($this->pagenateVar)->get();

        $this->dispatchBrowserEvent('chatSelected');
    
    }




    public function render()
    {
        return view('livewire.chat.chatbox');
    }
}
