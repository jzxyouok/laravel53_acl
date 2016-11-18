@extends('layouts.master')

@section('content')
    <h2>Login</h2>
    <form class="form-horizontal" action="{{ url('/signin') }}" method="post">
        <div class="form-group">
          <label for="email" class="col-sm-4 control-label">Email</label>
          <div class="col-sm-6">
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-sm-4 control-label">Password</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
          </div>
        </div>

        {{ csrf_field() }}
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Sign in</button>
          </div>
        </div>

    </form>
@endsection
