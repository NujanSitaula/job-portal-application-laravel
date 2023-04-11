<div>
@if($selectedConversation)
@foreach($messages as $message)
<div class="message-plunch">
    <div class="dash-msg-avatar"><img src="https://ui-avatars.com/api/?name={{ $receiverInstance->firstname }}+{{ $receiverInstance->lastname }}" alt=""></div>
    <div class="dash-msg-text"><p>{{ $message->body }}</p></div>
    <p class="small ms-3 mb-3 rounded-3 text-muted float-right"> {{ $message->created_at->format('d M Y | m: i a') }}</p>
</div>
@endforeach
@else

No Conversation Selected
@endif
</div>


{{-- <div class="message-plunch me">
    <div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""></div>
    <div class="dash-msg-text"><p>looked up one of the more obscure Latin words, consectetur, from a Lorem</p></div>
    <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13 | <span class="text-info">Seen</span></p>
</div>

<div class="message-plunch">
    <div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""></div>
    <div class="dash-msg-text"><p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p></div>
    <p class="small ms-3 mb-3 rounded-3 text-muted float-right">12:00 PM | Aug 13</p>
</div>

<div class="message-plunch me">
    <div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""></div>
    <div class="dash-msg-text"><p>please consider donating a small sum to help pay for the hosting and bandwidth bill.</p></div>
    <p class="small ms-3 mb-3 rounded-3 text-muted float-left">12:00 PM | Aug 13 | <span class="text-info">Seen</span></p>
</div>

<div class="message-plunch">
    <div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""></div>
    <div class="dash-msg-text"><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p></div>
    <p class="small ms-3 mb-3 rounded-3 text-muted float-right">12:00 PM | Aug 13</p>
</div>

<div class="message-plunch me">
    <div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""></div>
    <div class="dash-msg-text"><p>numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p></div>
    <p class="small ms-3 mb-3 rounded-3 text-muted float-left">12:00 PM | Aug 13 | <span class="text-info">Seen</span></p>
</div>

<div class="message-plunch">
    <div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""></div>
    <div class="dash-msg-text"><p>But I must explain to you how all this mistaken idea of denouncing pleasure</p></div>
    <p class="small ms-3 mb-3 rounded-3 text-muted float-right">12:00 PM | Aug 13</p>
</div>

<div class="message-plunch me">
    <div class="dash-msg-avatar"><img src="https://via.placeholder.com/400x400" alt=""></div>
    <div class="dash-msg-text"><p>numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p></div>
    <p class="small ms-3 mb-3 rounded-3 text-muted float-left">12:00 PM | Aug 13 | Sent</p>
</div> --}}