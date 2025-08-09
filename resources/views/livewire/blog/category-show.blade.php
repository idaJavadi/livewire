<div class="container my-5">
    <h3 class="mb-4 fw-bold text-primary">
        پست‌های دسته‌بندی: <span class="text-secondary">{{ $category->name }}</span>
    </h3>

    <div class="row my-4 g-4">
        @forelse($posts as $post)
            <div class="col-md-4 col-sm-6">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden"
                     style="transition: transform 0.3s ease, box-shadow 0.3s ease;"
                     onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.15)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.08)';">

                    <div class="card-body d-flex flex-column p-4">
                        <!-- عنوان -->
                        <h5 class="card-title fw-bold mb-3">
                            <a href="{{ route('post.show', $post->id) }}"
                               class="text-decoration-none"
                               style="color: #0d6efd; transition: color 0.3s;">
                                {{ $post->title }}
                            </a>
                        </h5>

                        <!-- محتوا -->
                        <p class="card-text text-secondary flex-grow-1" style="line-height: 1.7;">
                            {{ Str::limit($post->content, 120, '...') }}
                        </p>

                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <h4 class="text-muted">🚫 مطلبی برای این دسته بندی وجود ندارد</h4>
            </div>
        @endforelse
    </div>
</div>
