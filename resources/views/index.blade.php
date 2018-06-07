<form action="{{ route('mailing.create') }}" method="post">
  {{-- {{ csrf_field() }} --}}
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="text" name="email">
  <input type="submit">
</form>
