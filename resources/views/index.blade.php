@extends('templates.default')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('mailing.create') }}" method="post">
        @csrf
        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}"  {!! old('email') ? 'value="' . old('email') .'"' : ''!!}>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          @if ($errors->has('email'))
            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
          @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection
