@foreach ($posts as $post)
    <li class="main-feed-item" data-post-id="{{ $post->id }}">
        <article class="common-post">
            {{-- Header --}}
            <header class="common-post-header u-flex">
                <img src="{{ asset('storage/' . $post->user->image) ?? 'https://assets.codepen.io/65740/internal/avatars/users/default.png' }}"
                    class="user-image" width="40" height="40" alt="{{ $post->user->name ?? 'User' }}">
                <div class="common-post-info">
                    <div class="user-and-group u-flex">
                            {{ $post->user->name ?? 'Unknown User' }}
                    </div>
                    <div class="time-and-privacy">
                        <time
                            datetime="{{ $post->created_at }}">{{ $post->created_at->format('F d \a\t h:i A') }}</time>
                        <span class="icon icon-privacy">🌎</span>
                    </div>
                </div>
            </header>

            {{-- Post Content --}}
            <div class="common-post-content common-content">
                <p><b>{{ $post->title }}</b></p>
                <p>{{ $post->content }}</p>
                @if ($post->image)
                    <img class="embed-content-image" src="{{ asset('storage/' . $post->image) }}"
                        alt="{{ $post->title }}">
                @endif
            </div>

            {{-- Summary --}}
            <div class="summary u-flex post-container">
                <div class="reactions">❤️</div>
                <div class="reactions-total" id="like-count-{{ $post->id }}">
                    {{ $post->likes()->where('is_like', true)->count() }}
                </div>
                <div class="total-comments u-margin-inline-start" id="comment-count-{{ $post->id }}">
                    💬 {{ $post->comments()->count() }} Comments
                </div>
            </div>

            {{-- Action Buttons --}}
            <section class="actions-buttons">
                <ul class="actions-buttons-list u-flex">
                    <li class="actions-buttons-item">
                        @php
                            $liked = $post
                                ->likes()
                                ->where('user_id', auth()->id())
                                ->where('is_like', true)
                                ->exists();
                        @endphp
                        <button class="actions-buttons-button like-btn {{ $liked ? 'liked' : '' }}"
                            data-post-id="{{ $post->id }}">
                            <span class="icon">👍</span><span class="text">Like</span>
                        </button>
                    </li>
                    <li class="actions-buttons-item">
                        <button class="actions-buttons-button comment-toggle" data-post-id="{{ $post->id }}">
                            <span class="icon">💬</span><span class="text">Comment</span>
                        </button>
                    </li>
                </ul>
            </section>

            {{-- Comment Section --}}
            <div class="comment-section" id="comment-section-{{ $post->id }}" style="display: none;">
                <div class="existing-comments" id="comments-list-{{ $post->id }}">
                    @foreach ($post->comments()->latest()->get() as $comment)
                        @include('layout.web.partial.comment', ['comment' => $comment])
                    @endforeach
                </div>

                <form class="comment-form" data-post-id="{{ $post->id }}">
                    @csrf
                    <input type="text" name="comment" placeholder="Write a comment..." required
                        style="width: 100%; padding: 6px; border: 1px solid #ccc;">
                    <button type="submit" class="btn btn-sm btn-primary mt-1">Post Comment</button>
                </form>
            </div>
        </article>
    </li>
@endforeach


<script>
    document.addEventListener('DOMContentLoaded', function() {

        // Like toggle
        document.body.addEventListener('click', function(e) {
            if (e.target.closest('.like-btn')) {
                e.preventDefault();
                const buttonEl = e.target.closest('.like-btn');
                const postId = buttonEl.dataset.postId;
                const likeCount = document.getElementById(`like-count-${postId}`);

                fetch("{{ route('posts.react') }}", {
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}",
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            post_id: postId
                        })
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.status === 'success') {
                            likeCount.textContent = data.like_count;
                            buttonEl.classList.toggle('liked', data.message === 'Post liked');
                        }
                    });
            }
        });

        // Toggle comments
        document.body.addEventListener('click', function(e) {
            if (e.target.closest('.comment-toggle')) {
                const button = e.target.closest('.comment-toggle');
                const section = document.getElementById('comment-section-' + button.dataset.postId);
                section.style.display = section.style.display === 'block' ? 'none' : 'block';
            }
        });

        // Submit comment
        document.body.addEventListener('submit', function(e) {
            if (e.target.matches('.comment-form')) {
                e.preventDefault();
                const form = e.target;
                const postId = form.dataset.postId;
                const input = form.querySelector('input[name="comment"]');
                const comment = input.value.trim();

                if (!comment) return;

                fetch("{{ route('comments.store') }}", {
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}",
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            post_id: postId,
                            comment: comment
                        })
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.status === 'success') {
                            const commentsList = document.getElementById(`comments-list-${postId}`);
                            commentsList.insertAdjacentHTML('afterbegin', data.html);
                            input.value = '';

                            // Update comment count
                            const countEl = document.getElementById(`comment-count-${postId}`);
                            const current = parseInt(countEl.textContent.match(/\d+/)[0]);
                            countEl.textContent = `💬 ${current + 1} Comments`;
                        }
                    });
            }
        });

    });
</script>
