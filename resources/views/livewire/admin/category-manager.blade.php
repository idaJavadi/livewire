<div class="card shadow-lg border-0 rounded-4 overflow-hidden">
    <div class="card-header bg-primary bg-gradient text-white fw-bold d-flex align-items-center rounded-top-4">
        <i class="bi bi-folder-fill me-2 fs-5"></i> مدیریت دسته‌بندی‌ها
    </div>


    <div class="card-body bg-light">
        @if(session('message'))
            <div class="alert alert-success rounded-3 shadow-sm mb-4">
                <i class="bi bi-check-circle-fill me-1"></i> {{ session('message') }}
            </div>
        @endif

            <form wire:submit.prevent="save" class="mb-4 p-3 bg-white rounded-3 shadow-sm border">
                <div class="row g-2 align-items-center">
                    <div class="col-md-8">
                        <input type="text" wire:model.defer="name"
                               class="form-control rounded-3 border-primary shadow-sm"
                               placeholder="نام دسته‌بندی را وارد کنید">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-4 text-md-start text-center d-flex gap-2 justify-content-center justify-content-md-start">
                        <button type="submit" wire:loading.attr="disabled"
                                class="btn {{ $editId ? 'btn-warning' : 'btn-success' }} w-100 rounded-3 d-flex align-items-center justify-content-center gap-1">
                            <i class="bi {{ $editId ? 'bi-pencil-fill' : 'bi-plus-circle' }}"></i>
                            {{ $editId ? 'ویرایش' : 'ذخیره' }}
                        </button>

                        @if($editId)
                            <button type="button" wire:click="resetForm"
                                    class="btn btn-outline-danger rounded-3 d-flex align-items-center justify-content-center gap-1">
                                <i class="bi bi-x-circle"></i> انصراف
                            </button>
                        @endif
                    </div>
                </div>
            </form>

            <div class="table-responsive">
            <table class="table table-hover align-middle text-center mb-0 shadow-sm rounded-3 overflow-hidden">
                <thead class="table-primary">
                <tr>
                    <th style="width: 50px;">#</th>
                    <th>نام دسته‌بندی</th>
                    <th style="width: 180px;">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <button wire:click="edit({{ $category->id }})" wire:loading.attr="disabled"
                                    class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-pencil-fill"></i> ویرایش
                            </button>
                            <button wire:click="delete({{ $category->id }})" wire:loading.attr="disabled"
                                    class="btn btn-sm btn-outline-danger" wire:confirm="آیا مطمعنی میخوای این دسته بندی رو حذف کنی؟">
                                <i class="bi bi-trash-fill"></i> حذف
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-muted">🚫 دسته‌بندی‌ای یافت نشد</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
