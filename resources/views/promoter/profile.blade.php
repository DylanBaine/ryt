@extends('promoter.layout.profile-layout')

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
                    </article>

                   <a class="btn btn-sm btn-success open-reviews-form open-reviews-form-cont">
                        
                    </a>

                    <a class="btn btn-sm btn-primary open-all-reviews">See all reviews</a>


                    <section id="promoter-review-form" class="col-md-12 text-left review-form" style="border-radius: 10px;">
                        <header class="text-center flex-center" style="margin-bottom: 20px;">
                            <h2>Review this venue.</h2>
                        </header>
                        <form action="/promoter-review" method="post" class="flex-center">
                            <input type="hidden" value=" {{$promoter->id}} " name="promoter_id">
                            <div>
                                
                            {{csrf_field()}}

                            <div class="form-group stars">
                                

                                <input class="star star-5" id="star-5" type="radio" name="star" value="5" />

                                <label class="star star-5" for="star-5"></label>

                                <input class="star star-4" id="star-4" type="radio" name="star" value="4" />

                                <label class="star star-4" for="star-4"></label>

                                <input class="star star-3" id="star-3" type="radio" name="star" value="3" />

                                <label class="star star-3" for="star-3"></label>

                                <input class="star star-2" id="star-2" type="radio" name="star" value="2" />

                                <label class="star star-2" for="star-2"></label>

                                <input class="star star-1" id="star-1" type="radio" name="star" value="1" />

                                <label class="star star-1" for="star-1"></label>

                                 

                            </div>

                            <div class="form-group">
                                <label for="venue-reviewer">Your name:</label>
                                <input type="text" class="form-control" id="venuereviewer" name="reviewer">
                            </div>

                            <div class="form-group">
                                <label for="venue-reviewer" class="text-capitalize">Relation to {{$promoter->agency_name}}:</label>
                                <input type="text" class="form-control" id="venuereviewer" name="reviewer_relationship">
                            </div>

                            
                            <div class="form-group">
                                <label for="venue-review">Review:</label>
                                <textarea class="form-control" name="review" id="venue-review" rows="5"></textarea>
                            </div>

                            <input type="submit" class="btn btn-primary btn-block" value="Save">
                            

                            </div>
                        </form>

                    </section>

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

        <section id="all-promoter-reviews" class="all-reviews-cont">
            <a class="exit-reviews btn btn-danger">exit</a>
            <ul>
                @foreach($promoter->reviews as $allReview)
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

@endsection
