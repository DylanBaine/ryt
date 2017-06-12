@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">

		<div class="container">
			
			<div class="search flex-center">
				<div class="col-xs-12 flex-center">

					@if($search != NULL)
					<a href="/bands" class="col-md-3 col-xs-5 go-back btn btn-danger text-uppercase"><i class="glyphicon glyphicon-arrow-left"></i> Go Back</a>
					@endif

					<button class="col-md-3 col-xs-5 btn btn-primary open-form text-uppercase"><i class="glyphicon glyphicon-search"></i> Search</button>

					<div class="search-form">
						<form method="get" action="{{url('bands')}}">
							<input type="text" name="search" value="{{$search}}" class="col-xs-5" placeholder="ex. rock shawnee oklahoma">
							<input type="submit" value="search" class="btn btn-primary col-xs-3 col-xs-offset-1 text-uppercase">
						</form>
					</div>		



				</div>
			</div>


		</div>

		@foreach($bands as $band)
		<div class="">
			<a class="bands-a" href="{{url('band/' . $band->slug )}}" >
				<hr class="hr" style="width: 20vw; border: solid 1px; transition: all 1s; margin-left: -50px;">
				<section class="half-height flex-center" style="max-width: 100vw;">
					<div class="banner col-md-6 col-xs-12 half-height flex-center right-border" style="background: url('{{url('images/bands/banner/' . $band->banner_image )}}');">
						<h1 style="color: black; font-weight: bold;">{{$band->name}}</h1>
					</div>
					<div class="col-md-3 col-xs-6 text-center right-border">
						<h4>{{$band->genre}}</h4>
					</div>
					<div class="text-center right-border" style="padding: 10px;">
						<h4>
							@if($band->location == NULL)

								No location yet.
							@else
							
								{{$band->location}}
							@endif		
						</h4>
					</div>
				</section>
				<hr class="hr" style="width: 20vw; border: solid 1px; transition: all 1s; margin-right: -50px">
			</a>
						
		</div>
		@endforeach
		<div class="col-xs-12 text-center">
			{{$bands->links()}}
		</div>
	</div>
</div>
<style>
a.bands {
    font-weight: bold;
    border-bottom: solid 2px #51bae1;
    padding-bottom: 12px;
    opacity: 1;
}
</style>
@stop