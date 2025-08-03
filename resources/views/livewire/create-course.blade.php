<section>
    <form wire:submit="save">
        <div class="mb-3">
            <label  class="form-label">Name: </label>
            <input typr="text" class="form-control" wire:model="name">
        </div>
        <div class="mb-3">
            <label  class="form-label">Price: </label>
            <input typr="text" class="form-control" wire:model="price">
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
        <input type="text" wire:keydown.shift.enter="doSomething($event.target.value)">
        <div wire:loading>
            loading.....
        </div>
    </form>
</section>
