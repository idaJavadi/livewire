<div class="row my-4 g-4">
    @forelse($posts as $post)
        <div class="col-md-4 col-sm-6">
            <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold text-primary mb-2">
                        <a href="#" class="text-decoration-none text-primary">
                            {{ $post->title }}
                        </a>
                    </h5>

                    <p class="card-text text-secondary flex-grow-1">
                        {{ $post->content }}
                    </p>

                    <p class="text-muted small mt-3">
                        <i class="bi bi-tag-fill me-1 text-primary"></i>
                        دسته‌بندی: {{ $post->category->name }}
                    </p>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center py-5">
            <p class="text-muted fs-5">
                🚫 هیچ مطلبی وجود ندارد
            </p>
        </div>
    @endforelse
</div>
