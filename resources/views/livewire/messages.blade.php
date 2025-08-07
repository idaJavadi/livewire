<div wire:poll.500ms="loadMessages">
    <h1>پیام ها</h1>
    <ul>
        @foreach($messages as $message)
            <li>{{$message->txt}}</li>
        @endforeach
    </ul>
</div>
