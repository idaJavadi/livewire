<div class="container border my-4 py-2 rounded">
    <div class="row">
        <div class="col">
            <section>
                <form wire:submit.prevent="save">
                    <div class="mb-3">
                        <label class="form-label">Name : </label>
                        <input type="text" class="form-control" wire:model="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price : </label>
                        <input type="text" class="form-control" wire:model="price">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                    <div wire:loading class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </form>
            </section>

        </div>
    </div>
</div>
