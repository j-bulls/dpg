@extends('layouts.home')

@section('main')

<div class="features-top">
    <h2>Why QXP</h2>
    <p>An integrated platform that helps you communicate better, engage real time through multifunctional collaboration tools for meeting and learning.</p>
</div>

<div class="row" style="background: #F2F4F4">
    <div class="container">
        {{-- first row --}}
        <div class="row">
            @foreach ($data as $request)  
            <div class="col-md-4 col-sm-6 features">                                 
                <img src="{{asset('images/featured/'.$request->image)}}" alt="">
                <h2>{{$request->heading}}</h2>
                <p>{{$request->l_description}}</p>
                <form action="/newsfeeds/{{$request->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                  <input type="hidden" value="{{$request->id}}">
                  <button type="submit">Learn More</button>
                </form>
                
            </div>
            @endforeach
        </div>

    </div>
</div>
@include('partials.features')

@endsection