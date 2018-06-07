<form action="{{ route('mailing.create') }}" method="post">
  {{-- {{ csrf_field() }} --}}
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <label for="email">
    Email:
    <input type="text" name="email" id="email">
  </label>
  <input type="submit">
</form>
@if ($errors->has('email'))
  {{ $errors->first('email') }}
@endif
