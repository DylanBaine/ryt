@extends('layout')

@section('content')
	<section class="col-md-12 half-height flex-center linear-bg" >
		<div class="col-md-10">
			<div class="col-md-4 login-link"><a href="/band/login" class="btn btn-block btn-primary">Login as a Band</a></div>
			<div class="col-md-4 login-link"><a href="/promoter/login" class="btn btn-block btn-primary">Login as a Promoter</a></div>
			<div class="col-md-4 login-link"><a href="/venue/login" class="btn btn-block btn-primary">Login as a Venue</a></div>
		</div>
	</section>

	<style>
		a.login{
			text-decoration: underline;
		}
	</style>

@stop