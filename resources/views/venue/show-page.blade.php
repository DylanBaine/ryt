@extends('venue.layout.profile-layout')

@section('content')
	<div class="container">
		<article>
			<figure>
				<img src="/storage/venues/show-banners/{{$show->image}}" alt="{{$show->title}}" class="col-md-6">
			</figure>
			<figcaption>
				<header class="flex-center half-height">
					<h2>{{$show->title}}</h2>
				</header>
				<article>
					{{$show->details}}
				</article>
				<hr>
				<section class="text-center">
					{{$show->date}}
				</section>
			</figcaption>
		</article>
	</div>
@stop