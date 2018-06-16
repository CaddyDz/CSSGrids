<form action="{{ route('newsletter.create') }}" method="post">
	@csrf
	<input type="text" name="email" id="email">
	<input type="submit">
</form>
