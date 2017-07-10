@extends('layout')

@section('content')
	<div class="container row" style="display: block; margin: 0 auto;">

			<div class="search flex-center">
				<div class="col-xs-12 flex-center">

					@if($search != NULL)
					<a href="/venues" class="col-md-3 col-xs-5 go-back btn btn-danger text-uppercase"><i class="glyphicon glyphicon-arrow-left"></i> Go Back</a>
					@endif

					<button class="col-md-3 col-xs-5 btn btn-primary open-form text-uppercase"><i class="glyphicon glyphicon-search"></i> Search</button>

					<div class="search-form text-center">
						<form method="get" action="{{url('venues')}}" class="col-xs-10">
							<input type="text" name="search" value="{{$search}}" class="col-xs-6" placeholder="ex. rock shawnee oklahoma" style="background-color: gainsboro">
							<input type="submit" value="search" class="btn btn-primary col-xs-4 col-xs-offset-2 text-uppercase">						
						</form>

						<div class="col-xs-2">
							<strong>search powered by: <a href="https://www.algolia.com" target="_blank"><img src="images/algolia.svg" alt="Algolia" style="width: 100px "></a></strong>
						</div>

					</div>		
				</div>
			</div>


{{--		@if($count == 0)
			<div class="flex-center" style="height: 100px">
				<h3>Sorry... no results for "{{$search}}"</h3>
			</div>
			@endif	--}}		

		@foreach($venues as $venue)
			<a href="{{url('venue/' . $venue -> slug)}}" class="col-md-4 col-xs-12 promoter-a">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                	<h3 class="text-center caps">{{$venue->venue_title}}</h3>
	                	<span>{{$venue->type}}</span>
	                </div>

	                <div class="panel-body" style=" background: url('{{url('storage/venues/avatar/' . $venue->profile_image)}}'); background-repeat: no-repeat; background-size: cover;
	                background-position: center; height: 300px;">
	                </div>
	                <div class="panel-footer caps flex-center">
						<div>
								
		                	<p>{{$venue->genre}}</p>
		                	<p> {{$venue->address}} </p>

						</div>
	                </div>
                </div>
            </a>
		@endforeach
		<div class="col-xs-12 text-center">
			{{$venues->links()}}
		</div>
	</div>

<style>
a.venue {
    font-weight: bold;
    border-bottom: solid 2px #51bae1;
    padding-bottom: 12px;
    opacity: 1;
}
</style>

@stop