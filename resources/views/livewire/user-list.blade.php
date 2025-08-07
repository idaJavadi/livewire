<div class="container py-4">
    <h2 class="mb-4 text-center">لیست کاربران</h2>

    <div class="list-group">
        @foreach($users as $user)
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span class="fw-bold">{{ $user['name'] }}</span>
                <button class="btn btn-sm btn-outline-danger" wire:click="deleteUser({{ $user['id'] }})" wire:confirm.prompt="ایا مطمعنی ؟ تایپ کن بله |بله">
                    حذف
                </button>
            </div>
        @endforeach

        @if(empty($users))
            <div class="alert alert-info text-center mt-3">
                هیچ کاربری پیدا نشد.
            </div>
        @endif
    </div>
</div>
