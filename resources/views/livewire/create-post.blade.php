<section>
    <form wire:submit="handleSubmit">
        <div class="mb-3">
            <label  class="form-label">Title : </label>
            <input typr="text" class="form-control" wire:model="title">
        </div>
        <div class="mb-3">
            <label  class="form-label">Desc : </label>
            <input typr="text" class="form-control" wire:model="desc">
        </div>
{{--        <button type="button" wire:click="doSomething" class="btn btn-primary">submit</button>--}}
        <input type="text" wire:keydown.enter="doSomething">
    </form>
</section>
