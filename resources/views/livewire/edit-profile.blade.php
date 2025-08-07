<div class="container my-5 p-4 bg-white rounded shadow-sm text-center" dir="rtl">
    <form wire:submit.prevent="save" class="mx-auto" style="max-width: 400px; text-align: right;">
        <h4 class="mb-4 fw-bold text-center">فرم ثبت اطلاعات</h4>

        <div class="mb-3">
            <label for="name" class="form-label">نام</label>
            <input type="text" id="name" wire:model="name" class="form-control">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">ایمیل</label>
            <input type="text" id="email" wire:model="email" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary w-100">ارسال</button>
    </form>

    <div wire:dirty wire:target="name,email" class="mt-3 alert alert-warning text-center">
        تغییراتی وجود دارد که هنوز ذخیره نشده‌اند.
    </div>
</div>
