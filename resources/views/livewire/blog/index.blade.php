<div class="row my-4 g-4">
    @forelse($posts as $post)
        <div class="col-md-4 col-sm-6">
            <div class="card h-100 shadow-lg border-0 rounded-4 overflow-hidden"
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

                    <!-- دسته‌بندی -->
                    <a href="{{ route('category.show', $post->category->id) }}"
                       class="mt-3 text-decoration-none d-inline-flex align-items-center"
                       style="background-color: rgba(13, 110, 253, 0.1); color: #0d6efd; padding: 6px 12px; border-radius: 20px; font-size: 0.9rem; font-weight: 600; transition: all 0.3s;">
                        <i class="bi bi-tag-fill me-1"></i>
                        {{ $post->category->name }}
                    </a>
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
