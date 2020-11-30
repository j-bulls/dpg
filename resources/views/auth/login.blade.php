@extends('layouts.home')

@section('main')
    <div class="row meeting-login-design">
        <div class="login-pref login-meeting-overlay">
            <div class="row">
                <div class="col-md-7">
                    <div class="meeting-spacer">
                        <h1>Connecting People Together</h1>
                      <p>For meeting and working online with teleconferencing, video conference, remote working, work from home and work from anywhere</p> 
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="meeting-custom-login">
                        <div class="text-center">
                            <img class="text-center" src="{{asset('images/logo/bgAsset7.svg')}}" width="100" height="100">
                        </div>
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul style="list-style: none">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                          {{-- login form --}}
                          <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>

                            <div class="form-group">
                               
                                    <label>
                                        <input type="checkbox" name="remember"> Remember me
                                    </label>

                            </div>
                            <div class="form-group meeting-submit">  
                                <button type="submit">
                                    Login
                                </button>
                            </div>
                            
                            <div class="form-group">
                                <a href="{{ route('password.request') }}">Lost your password? | Register</a>
                            </div>

                          </form>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection