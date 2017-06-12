@extends('band.layout.profile-layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <header class="banner col-xs-10 col-xs-offset-1 half-height flex-center" style="background: url('{{url('images/bands/banner/' . $band->banner_image )}}'); margin-top: -20px;">
            <div>
                <div class="profile-image" style="background: url('{{url('images/bands/' . $band->profile_image )}}'); height: 20vh; margin: auto;">
                    
                </div>
				<div class="text-center" style="padding: 5px;">
					
					@if($band->facebook != NULL)
	                <a href="{{$band->facebook}}" class="social-link" style="padding: 0px" target="_blank">
	                	<img src="{{url('icons/facebook-logo-button.png')}}" alt="{{$band->facebook}}">
	                </a>				
					@endif

	                @if($band->twitter != NULL)
	                <a href="{{$band->twitter}}" class="social-link" style="padding: 0px" target="_blank">
	                	<img src="{{url('icons/twitter-logo-button.png')}}" alt="{{$band->twitter}}">
	                </a>
	                @endif


				</div>
				@if($band->email_hidden == 'no')
					<h3 class="text-center email-cont">{{$band->email}}</h3>
				@endif
            </div>
        </header>

		<div class="col-xs-10 col-xs-offset-1 text-center">
		<h1> About {{$band->name}} </h1>
		@if($band->bio == NULL)
			<p style="color: black; font-weight: 400;" class="col-xs-8 col-xs-offset-2">Nothing yet, but we can tell you that {{$band->name}} has been a member since about {{$band->created_at->diffForHumans()}}.</p>
		@else
		<p style="color: black; font-weight: 400;" class="col-xs-8 col-xs-offset-2">{{$band->bio}}</p>
		@endif	
		<hr class="col-md-12">
		<div id="putTheWidgetHere" class="col-md-6"></div>

		<script src="https://connect.soundcloud.com/sdk/sdk-3.1.2.js"></script>
		<script type="text/javascript">
		  SC.oEmbed('{{$band->soundcloud}}', {
		    element: document.getElementById('putTheWidgetHere')
		  });
		</script>			
		</div>

    </div>
</div>

@endsection
