@extends('layouts.app')

@section('content')
<div class="py-2">
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        
        <div class="card text-white p-3 bg-primary">
            <div class="card-body">
                    <h1 class="mb-2">Login</h1>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="form-group">Indirizzo mail</label>

                            <div class="form-group">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="form-group">Password</label>

                            <div class="form-group">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-secondary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Password dimenticata?
                                </a>
                            </div>
                        </div>
                            @if (session('activationStatus'))
                                <div class="alert alert-success">
                                    {{ trans('auth.activationStatus') }}
                                </div>
                            @endif

                            @if (session('activationWarning'))
                                <div class="alert alert-warning">
                                    {{ trans('auth.activationWarning') }}
                                </div>
                            @endif
                    </form>
                
            </div> <!-- ./ card-body -->
        </div>  <!-- ./ card -->

    </div>
</div>
</div>
@endsection
