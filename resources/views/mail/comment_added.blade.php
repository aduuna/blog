@component('mail::message')
# Comment Added

{{ $comment->user->name }} just commented on your post
click here to view the comment on your post
@component('mail::button', ['url' => "{{ route('posts.show', ['post' => $post]) }}" ])
Open Post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
