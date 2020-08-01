@if (count($tasklist) > 0)
    <ul class="list-unstyled">
        @foreach ($tasklists as $tasklist)
           
                    <div>
                        {{-- 投稿の所有者のユーザ詳細ページへのリンク --}}
                        {!! link_to_route('users.show', $tasklist->user->name, ['user' => $tasklist->user->id]) !!}
                        <span class="text-muted">posted at {{ $tasklist->created_at }}</span>
                    </div>
                    <div>
                        {{-- 投稿内容 --}}
                        <p class="mb-0">{!! nl2br(e($tasklist->content)) !!}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $tasklists->links() }}
@endif