<div class="container my-4">
    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
        <!-- هدر -->
        <div class="card-header bg-primary bg-gradient text-white py-3">
            <h2 class="h4 mb-0 fw-bold">
                <i class="bi bi-journal-text me-2"></i>
                {{ $post->title }}
            </h2>
        </div>

        <!-- بدنه -->
        <div class="card-body p-4 bg-light">
            <p class="text-secondary fs-5" style="line-height: 1.8;">
                {{ $post->content }}
            </p>

            <div class="mt-3 text-muted small">
                <i class="bi bi-tag-fill me-1 text-primary"></i>
                دسته‌بندی: <span class="fw-semibold">{{ $post->category->name }}</span>
            </div>
        </div>
    </div>
</div>
