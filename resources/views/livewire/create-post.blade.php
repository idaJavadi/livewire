<section>
    <form wire:submit.prevent="handleSubmit">
        <div class="mb-3">
            <label class="form-label">Title : </label>
            <input type="text" class="form-control" wire:model="title">
        </div>
        <div class="mb-3">
            <label class="form-label">Description : </label>
            <input type="text" class="form-control" wire:model="description">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

        <div wire:loading class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </form>
</section>
