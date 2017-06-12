@extends('layout')

@section('content')
	<div class="container row" style="display: block; margin: 0 auto;">

			<div class="search flex-center">
				<div class="col-xs-12 flex-center">

					@if($search != NULL)
					<a href="/promoters" class="col-md-3 col-xs-5 go-back btn btn-danger text-uppercase"><i class="glyphicon glyphicon-arrow-left"></i> Go Back</a>
					@endif

					<button class="col-md-3 col-xs-5 btn btn-primary open-form text-uppercase"><i class="glyphicon glyphicon-search"></i> Search</button>

					<div class="search-form">
						<form method="get" action="{{url('promoters')}}">
							<input type="text" name="search" value="{{$search}}" class="col-xs-5" placeholder="ex. rock shawnee oklahoma">
							<input type="submit" value="search" class="btn btn-primary col-xs-3 col-xs-offset-1 text-uppercase">
						</form>
					</div>		



				</div>
			</div>


{{--		@if($count == 0)
			<div class="flex-center" style="height: 100px">
				<h3>Sorry... no results for "{{$search}}"</h3>
			</div>
			@endif	--}}		

		@foreach($promoters as $promoter)
			<a href="{{url('promoter/' . $promoter -> slug)}}" class="col-md-4 col-xs-12 promoter-a">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                	<h3 class="text-center caps">{{$promoter->agency_name}}</h3>
	                </div>

	                <div class="panel-body" style=" background: url('{{url('images/promoters/' . $promoter->profile_image )}}'); background-repeat: no-repeat; background-size: cover;
	                background-position: center; height: 300px;">
	                </div>
	                <div class="panel-footer caps flex-center">
	                	{{$promoter->genre}}
	                </div>
                </div>
            </a>
		@endforeach
		<div class="col-xs-12 text-center">
			{{$promoters->links()}}
		</div>
	</div>

<style>
a.promoters {
    font-weight: bold;
    border-bottom: solid 2px #51bae1;
    padding-bottom: 12px;
    opacity: 1;
}
</style>

@stop