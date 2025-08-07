<div>
    <input type="text" wire:model="newMessage">
    <button wire:click="addMessage" class="">send</button>
    <div wire:stream="">
        <ul>
           <div>
               @foreach($messages as $message)
                   {{$message['content']}}
               @endforeach
           </div>
        </ul>
    </div>
</div>
