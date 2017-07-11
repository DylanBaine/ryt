@extends('band.layout.profile-layout')

@section('content')
<div class="container-fluid">

@if ($errors->any())
    <div class="alert alert-danger col-md-4 col-md-offset-4 text-center">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="row">
        <header class="banner col-xs-10 col-xs-offset-1 half-height flex-center" style="background: url('{{url('storage/bands/banner/' . $band->banner_image )}}'); margin-top: -20px;">
            <div>
                <div class="profile-image" style="background: url('{{url('storage/bands/avatar/' . $band->profile_image )}}'); height: 20vh; margin: auto;">
                    
                </div>
				<div class="text-center" style="padding: 5px;">
					
					@if($band->facebook != NULL)
	                <a href="{{$band->facebook}}" class="social-link" style="padding: 0px" target="_blank">
	                	<img src="{{url('images/icons/facebook-logo-button.png')}}" alt="{{$band->facebook}}">
	                </a>				
					@endif

	                @if($band->twitter != NULL)
	                <a href="{{$band->twitter}}" class="social-link" style="padding: 0px" target="_blank">
	                	<img src="{{url('images/icons/twitter-logo-button.png')}}" alt="{{$band->twitter}}">
	                </a>
	                @endif

                <div class="stars">
                	@if($rating <= 1)
                    <span for="" class="star" style="color: #FD4"></span>
                    @elseif($rating <= 2)
                    <span for="" class="star" style="color: #FD4"></span>
                    <span for="" class="star" style="color: #FD4"></span>
					@elseif($rating <= 3)
                    <span for="" class="star" style="color: #FD4"></span>
                    <span for="" class="star" style="color: #FD4"></span>
                    <span for="" class="star" style="color: #FD4"></span>
					@elseif($rating <= 4)
                    <span for="" class="star" style="color: #FD4"></span>
                    <span for="" class="star" style="color: #FD4"></span>
                    <span for="" class="star" style="color: #FD4"></span>
                    <span for="" class="star" style="color: #FD4"></span>
					@elseif($rating <= 5)
                    <span for="" class="star" style="color: #FD4"></span>
                    <span for="" class="star" style="color: #FD4"></span>
					<span for="" class="star" style="color: #FD4"></span>
					<span for="" class="star" style="color: #FD4"></span>
					<span for="" class="star" style="color: #FD4"></span>
					@endif
                </div>


				</div>
				@if($band->email_hidden == 'no')
					<h3 class="text-center email-cont">{{$band->email}}</h3>
				@endif
            </div>
        </header>

		<section class="col-xs-10 col-xs-offset-1 text-center">
			<h1> About {{$band->name}} </h1>
			@if($band->bio == NULL)
				<p style="color: black; font-weight: 400;" class="col-xs-8 col-xs-offset-2">Nothing yet, but we can tell you that {{$band->name}} has been a member since about {{$band->created_at->diffForHumans()}}.</p>
			@else
			<p style="color: black; font-weight: 400;" class="col-xs-8 col-xs-offset-2">{{$band->bio}}</p>
			@endif	
			<hr class="col-md-12">
			
		</section>  

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

		<section class="col-md-9" id="soundcloud-reviews">
			
			<div id="putTheWidgetHere" class="col-md-6"></div>

			<script src="https://connect.soundcloud.com/sdk/sdk-3.1.2.js"></script>
			<script type="text/javascript">
			  SC.oEmbed('{{$band->soundcloud}}', {
			    element: document.getElementById('putTheWidgetHere')
			  });

			</script>
            <aside id="venue-reviews-info"@if($band->soundcloud == NULL) class="col-md-12 text-center" @else class="col-md-6 text-center" @endif>
                <div class="row">
                    
                    <header class="col-xs-12 flex-center">
                        <h3>Reviews</h3>
                    </header>
                    <ul class="col-xs-12">

						@foreach($reviews as $review)

                        <li class="review-cont" style="list-style: none;">
                            <div>
                                <h3 class="text-capitalize">{{$review->reviewer}} <small>{{$review->reviewer_relationship}}</small></h3>
                                <hr>
                                <p>"{{$review->review}}"</p>
                            </div>
                        </li>

						@endforeach

                    </ul>

                </div>

                <a class="btn btn-sm btn-success open-reviews-form open-reviews-form-cont">
                    
                </a href="#venue-review-form">

                <a class="btn btn-sm btn-primary open-all-reviews">See all reviews</a>

                <section id="band-review-form" class="col-md-12 text-left review-form" style="border-radius: 10px;">
                    <header class="text-center flex-center" style="margin-bottom: 20px;">
                        <h2>Review this band.</h2>
                    </header>
                    <form action="/band-review" method="post" class="flex-center">

						<input type="hidden" value=" {{$band->id}} " name="band_id">

                        <div>
                            
                        {{csrf_field()}}

                        <div class="form-group stars">
                            

                            <input class="star star-5" id="star-5" type="radio" name="stars" value="5" />

                            <label class="star star-5" for="star-5"></label>

                            <input class="star star-4" id="star-4" type="radio" name="stars" value="4" />

                            <label class="star star-4" for="star-4"></label>

                            <input class="star star-3" id="star-3" type="radio" name="stars" value="3" />

                            <label class="star star-3" for="star-3"></label>

                            <input class="star star-2" id="star-2" type="radio" name="stars" value="2" />

                            <label class="star star-2" for="star-2"></label>

                            <input class="star star-1" id="star-1" type="radio" name="stars" value="1" />

                            <label class="star star-1" for="star-1"></label>

                             

                        </div>

                        <div class="form-group">
                            <label for="band-reviewer">Your name:</label>
                            <input type="text" class="form-control" id="band-reviewer" name="reviewer">
                        </div>

                        <div class="form-group">
                            <label for="band-reviewer" class="text-capitalize">Relation to {{$band->name}}:</label>
                            <input type="text" class="form-control" id="band-reviewer" name="reviewer_relationship">
                        </div>

                        
                        <div class="form-group">
                            <label for="band-review">Review:</label>
                            <textarea class="form-control" name="review" id="band-review" rows="5"></textarea>
                        </div>

                        <input type="submit" class="btn btn-primary btn-block" value="Save">
                        

                        </div>
                    </form>

                </section>

            </aside>

		</section>
		<section id="all-band-reviews" class="all-reviews-cont">
			<a class="exit-reviews btn btn-danger">exit</a>
			<ul>
				@foreach($band->reviews as $allReview)
                    <li class="review-cont" style="list-style: none;">
                        <div>
                            <h3 class="text-capitalize">{{$allReview->reviewer}} <small>{{$allReview->reviewer_relationship}}</small></h3>
                            <hr>
                            <p>"{{$allReview->review}}"</p>
                        </div>
                    </li>
				@endforeach
			</ul>
		</section>
    </div>
</div>

@endsection
