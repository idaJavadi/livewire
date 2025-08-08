<div>
    <h1>ToDos</h1>
    <livewire:to-do-input wire:model="todo"></livewire:to-do-input>
    <button wire:click="add">add</button>
    <hr>
    <div>
        @foreach($todos as $todo)
            <div>{{$todo}}</div>
        @endforeach
    </div>
</div>
