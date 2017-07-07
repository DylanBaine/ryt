@extends('layout')

@section('content')
	<section class="col-md-12 half-height flex-center linear-bg">
		<div class="col-md-10">
			<div class="col-md-4 login-link"><a href="/band/register" class="btn btn-block btn-primary">Register as a Band</a></div>
			<div class="col-md-4 login-link"><a href="/promoter/register" class="btn btn-block btn-primary">Promoter / Booking Agent</a></div>
			<div class="col-md-4 login-link"><a href="/venue/register" class="btn btn-block btn-primary">Submit your Venue</a></div>
		</div>
	</section>

	<style>
		a.register{
			text-decoration: underline;
		}
	</style>
@stop