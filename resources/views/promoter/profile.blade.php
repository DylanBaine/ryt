@extends('promoter.layout.profile-layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <header class="banner col-xs-10 col-xs-offset-1 half-height flex-center" style="background: url('{{url('storage/promoters/banner/' . $promoter->banner_image )}}'); margin-top: -20px;">
            <div>
                <div class="profile-image" style="background: url('{{url('storage/promoters/avatar/' . $promoter->profile_image )}}'); height: 20vh; margin: 0 auto;">
                    
                </div>
				<div class="text-center" style="padding: 5px;">
					
					@if($promoter->facebook != NULL)
	                <a href="{{$promoter->facebook}}" class="social-link" style="padding: 0px" target="_blank">
	                	<img src="{{url('icons/facebook-logo-button.png')}}" alt="{{$promoter->facebook}}">
	                </a>				
					@endif

	                @if($promoter->twitter != NULL)
	                <a href="{{$promoter->twitter}}" class="social-link" style="padding: 0px" target="_blank">
	                	<img src="{{url('icons/twitter-logo-button.png')}}" alt="{{$promoter->twitter}}">
	                </a>
	                @endif


				</div>
				@if($promoter->email_hidden == 'no')
					<h3 class="text-center email-cont">{{$promoter->email}}</h3>
				@endif
	            <div class="text-center">
	            	<h3>{{$promoter->type}}</h3>
	            </div>
            </div>

        </header>

		<section id="bio-experience">
			<div class="col-md-10 col-md-offset-1 text-center" style="margin-top: 20px;">
				<div class="col-md-12" style="border-right: solid rgba(0, 0, 0, .3) 1px;">
					
					<h1> About {{$promoter->agency_name}} </h1>
					@if($promoter->bio == NULL)
						<p style="color: black; font-weight: 400;" class="col-xs-8 col-xs-offset-2">Nothing yet, but we can tell you that {{$promoter->agency_name}} has been a member since about {{$promoter->created_at->diffForHumans()}}.</p>
					@else
					<p style="color: black; font-weight: 400;" class="col-xs-8 col-xs-offset-2">{{$promoter->bio}}</p>
					@endif	

				</div>
				<hr class="col-xs-12">
				<div class="col-md-12 flex-center" style="border-left: solid rgba(0, 0, 0, .3) 1px;">
				
					<div class="col-md-12">					
					
						<h1> Experience</h1>
						@if($promoter->experience == NULL)
							<p style="color: black; font-weight: 400;" class="col-xs-8 col-xs-offset-2">Sorry...  <span class="text-capitalize">{{$promoter->agency_name}}</span> has not logged any experience yet.</p>
						@else
						<p style="color: black; font-weight: 400;" class="col-xs-8 col-xs-offset-2">{{$promoter->experience}}</p>
						@endif	

					</div>

				</div>

			<hr class="col-md-12">			
			</div>			
		</section>

		<section id="reviews">

			<aside class="add-space col-md-3 clearfix">
				<div class="add-inner flex-center">

					<div>
						
						<div class="add">
							add one
						</div>

						<div class="add">
							add two
						</div>

						<div class="add">
							add three
						</div>

						<div class="add">
							add four
						</div>


					</div>
					
				</div>
			</aside>

            <aside id="promoter-reviews-info" class="col-md-6 text-center">
                <div class="row">
                    
                    <header class="col-xs-12 flex-center">
                        <h3>Reviews</h3>
                    </header>
                    <article class="col-xs-12">
                        <div class="review-cont">
                            <div s>
                                <h3>The Spree <small>Band</small></h3>
                                <hr>
                                <p>"Lorem ipsum dolor sit amet."</p>
                            </div>
                        </div>

                        <div class="review-cont">
                            <div s>
                                <h3>James <small>Booking Agent</small></h3>
                                <hr>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus molestias assumenda laboriosam."</p>
                            </div>
                        </div>


                        <div class="review-cont">
                            <div s>
                                <h3>Jessie <small>Promoter</small></h3>
                                <hr>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus molestias assumenda laboriosam."</p>
                            </div>
                        </div>

                    </article>

                </div>
            </aside>	

			<aside class="add-space col-md-3 clearfix">
				<div class="add-inner flex-center">

					<div>
						
						<div class="add">
							add one
						</div>

						<div class="add">
							add two
						</div>

						<div class="add">
							add three
						</div>

						<div class="add">
							add four
						</div>


					</div>

				</div>
			</aside>

		</section>

    </div>
</div>

@endsection
