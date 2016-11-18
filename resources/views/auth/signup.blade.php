@extends('layouts.master')

@section('content')
    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">Register</div>
        <div class="panel-body">
            <form class="form-horizontal" action="{{ url('/signup') }}" method="post">
                <div class="form-group">
                  <label for="first_name" class="col-sm-4 control-label">First Name</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" placeholder="First Name">
                    @if ($errors->has('first_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="last_name" class="col-sm-4 control-label">Last Name</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name">
                    @if ($errors->has('last_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="col-sm-4 control-label">E-Mail</label>
                  <div class="col-sm-6">
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"  placeholder="Email">
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
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password  at least 6 characters">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>

                {{ csrf_field() }}

                <div class="form-group">
                  <div class="col-sm-offset-4 col-sm-6">
                    <button type="submit" class="btn btn-success">Sign Up</button>
                  </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
