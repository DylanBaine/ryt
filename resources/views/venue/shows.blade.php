@extends('venue.layout.profile-layout')

@section('content')

		<div class="container">

		<a href="/venue/{{$venue->slug}}" class="col-md-3 col-xs-5 go-back btn btn-danger text-uppercase" style="position: fixed; z-index: 9999; width: auto; box-shadow: 3px 2px 9px #212042;"><i class="glyphicon glyphicon-arrow-left" ></i>Back</a>

		<header class="half-height flex-center">
			<h1>Shows at <span class="text-capitalize">{{$venue->venue_title}}</span></h1>
		</header>

            @foreach($venue->show as $show)

                <div style="padding: 20px;" class="col-md-6">
                    
                    <div class="show-container row">
                        
                        <h3 class="text-center text-capitalize" style="margin: 20px;">{{$show->title}}</h3>
                        <small>{{$show->date}}</small>
                        @if($show->image != 'default-show.jpg')
                        <img src="/storage/venues/show-banners/{{$show->image}}" alt="{{$show->title}}" class="col-md-5 col-md-offset-1">
                        @endif
                        <div class="col-md-5">{{$show->details}}</div>

                        <a href="{{url('venue/' . $venue->slug . '/show/' . $show->show_slug)}}" class="btn btn-primary btn-block col-md-12">See More</a>

                    </div>

                </div>

            @endforeach

	</div>
@stop
