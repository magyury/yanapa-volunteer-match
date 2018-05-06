@extends('layouts.app')

@section('content')
<div class="py-2">
<div class="container">
    <div class="row">   
    <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card text-white p-2 bg-primary">
                <div class="card-body">
                    <h1 class="mb-2">Registrazione</h1>
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="form-group">Name</label>

                            <div class="form-group">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="form-group">E-Mail Address</label>

                            <div class="form-group">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="form-group">Confirm Password</label>

                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            
                                <button type="submit" class="btn btn-success">
                                    Register
                                </button>
                         
                        </div>

                        <!-- login with facebook -->
                        
                        <div class="text-center">
                            <p>Oppure</p>
                        </div>
                        
                        <div class="form-group">
                            <div class= "text-center">
                              <a href="{{url('/redirect')}}" class="btn btn-block btn-lg" style="background-color: #3b5998; color: white;">Iscriviti con Facebook</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
