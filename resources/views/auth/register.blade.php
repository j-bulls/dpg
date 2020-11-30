@extends('layouts.home')

@section('main')
    <div class="meeting-login-design">
        @if(Session::has("flash_message_error")) 
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{!! session('flash_message_error') !!}</strong>
            </div> 
        @endif 

        @if(Session::has("flash_message_success")) 
            <div class="alert progress-bar-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong style="color:white;">{!! session('flash_message_success') !!}</strong>
            </div> 
        @endif
        <div class="login-pref login-meeting-overlay">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="register-spacer">
                        <img src="http://0.gravatar.com/avatar/fcf3541949a1700be9f391b9430484b6?s=300&d=mm&r=g" alt="">
                        <h1>Lets Get you Started</h1>
                        <p>For meeting and working online with teleconferencing, video conference, remote working, work from home and work from anywhere</p>
                    </div>    
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="register-custom-login">
                       
                
                        <form method="POST" action="{{ route('register2') }}">
                            @csrf

                            {{-- <div class="form-group row " style="display: none;">
                                <select id="role_id" class="form-control @error('role_id') is-invalid @enderror" 
                                name="role_id" value="{{ old('role_id') }}"  required autocomplete="role_id" autofocus>
                                  <option v alue="3">Student</option>
                                  <option value="2">Teacher</option>
                                </select>
                            </div> --}}
	                              

                           
                            <div class="form-group row">
                                   
                                    <input id="name" placeholder="FullName" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  required autocomplete="name">
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>
    
                            <div class="form-group row">
                                    <input id="email" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                               
                            </div>

                            <div class="form-group row">

                                    <input id="phone" placeholder="Phone No" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
    
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                               
                            </div>
    
                            <div class="form-group row">
                                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                              
                            </div>
    
                            <div class="form-group row">
                               <input id="password-confirm" placeholder="Confirm-Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                

                            </div>
                            <button type="submit" class="btn btn-primary col-md-12" style="margin-top: 10px;">
                                {{ __('Register') }}
                            </button>


                        </form>
                    </div>    
                </div>
            </div>
        </div>  
    </div>

@endsection