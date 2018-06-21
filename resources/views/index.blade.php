@if ($posts->count())
	@foreach($posts as $post)
		<h3>{{ $post->title }}</h3>
		<p>{{ str_limit($post->body, 100) }}</p>
	@endforeach
@else
	<p>No Posts</p>
@endif
