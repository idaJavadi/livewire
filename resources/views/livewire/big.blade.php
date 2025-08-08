<div>
    <h1>hello big</h1>
    <button wire:click="increment" class="btn btn-success">+</button>
    <p>Count is parent : {{$count }}</p>
    <livewire:small :count="$count"></livewire:small>
</div>
