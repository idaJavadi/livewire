<div class="card shadow-lg border-0 rounded-4 overflow-hidden">
    <!-- هدر -->
    <div class="card-header bg-primary bg-gradient text-white fw-bold d-flex align-items-center rounded-top-4 py-3">
        <i class="bi bi-folder-fill me-2 fs-5"></i>
        {{ $editId ? 'ویرایش مطلب' : 'مدیریت مطالب' }}
    </div>

    <div class="card-body bg-light">
        <!-- پیام موفقیت -->
        @if(session('message'))
            <div class="alert alert-success rounded-3 shadow-sm mb-4 d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill"></i>
                {{ session('message') }}
            </div>
        @endif

        <!-- فرم -->
        <form wire:submit.prevent="save" class="mb-4 p-4 bg-white rounded-3 shadow-sm border">
            <div class="row g-3 align-items-end">
                <!-- عنوان -->
                <div class="col-md-4">
                    <label class="form-label">عنوان</label>
                    <input type="text" wire:model.defer="title"
                           class="form-control rounded-3 border-primary shadow-sm"
                           placeholder="عنوان">
                    @error('title')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- محتوا -->
                <div class="col-md-4">
                    <label class="form-label">محتوا</label>
                    <input type="text" wire:model.defer="content"
                           class="form-control rounded-3 border-primary shadow-sm"
                           placeholder="محتوا">
                    @error('content')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- دسته‌بندی -->
                <div class="col-md-4">
                    <label class="form-label">دسته‌بندی</label>
                    <select wire:model="category_id" class="form-select rounded-3 shadow-sm border-primary">
                        <option value="">انتخاب کنید</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <!-- دکمه‌ها -->
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <button type="submit" wire:loading.attr="disabled"
                            class="btn {{ $editId ? 'btn-warning' : 'btn-success' }} px-4 rounded-3 d-inline-flex align-items-center justify-content-center gap-2">
                        <i class="bi {{ $editId ? 'bi-pencil-fill' : 'bi-plus-circle' }}"></i>
                        {{ $editId ? 'ویرایش' : 'ذخیره' }}
                    </button>

                    @if($editId)
                        <button type="button" wire:click="resetForm"
                                class="btn btn-outline-danger px-4 rounded-3 d-inline-flex align-items-center justify-content-center ms-2">
                            <i class="bi bi-x-circle"></i> انصراف
                        </button>
                    @endif
                </div>
            </div>
        </form>

        <!-- جدول -->
        <div class="table-responsive shadow-sm rounded-3">
            <table class="table table-hover align-middle text-center mb-0">
                <thead class="table-primary">
                <tr>
                    <th style="width: 50px;">#</th>
                    <th>عنوان مطلب</th>
                    <th>محتوا</th>
                    <th>دسته‌بندی</th>
                    <th style="width: 180px;">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @forelse($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <button wire:click="edit({{ $post->id }})"
                                    class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-pencil-fill"></i> ویرایش
                            </button>
                            <button wire:click="delete({{ $post->id }})"
                                    class="btn btn-sm btn-outline-danger"
                                    wire:confirm="آیا مطمئن هستید که می‌خواهید این مطلب را حذف کنید؟">
                                <i class="bi bi-trash-fill"></i> حذف
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-muted py-3">🚫 مطلبی یافت نشد</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
