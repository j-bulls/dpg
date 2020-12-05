@extends('layouts.home')

@section('main')

    <div class="container news-feed-container">
        <div class="row">
            <p>{{$data->title}}</p>
        </div>
        <div class="row">
            <div class="col-md-4 recent-posts">
                <div>
                    Recent Posts
                </div>
            </div>
            <div class="col-md-8 news-feed-content">
            <img src="{{asset('images/featured/'.$data->image)}}" alt="">
                <div>
                    <h4>{{$data->title}}</h4> 
                    {!! $data->d_description !!}
                </div>
            </div>
        </div>
    </div>
    
@endsection
