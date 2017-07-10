@extends('venue.layout.profile-layout')

@section('content')
    <div class="row" id="venue-profile">

        @if ($errors->any())
            <div class="alert alert-danger col-md-4 col-md-offset-4 text-center">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <header class="banner col-md-10 col-md-offset-1 half-height flex-center" style="background: url('{{url('storage/venues/banner/' . $venue->banner_image )}}'); margin-top: -20px;">
            <div>
                <div class="profile-image" style="background: url('{{url('storage/venues/avatar/' . $venue->profile_image )}}'); height: 20vh; margin: auto;">
                    
                </div>
                <div class="text-center" style="padding: 5px; color: black">                
                    
                    <h2 class="text-uppercase">{{$venue->venue_title}}</h2>

                </div>
                @if($venue->booking_email != NULL || $venue->booking_number != NULL )
                    <h3 class="text-center email-cont">{{$venue->booking_email}}</h3>
                    <h3 class="text-center email-cont">{{$venue->booking_number}}</h3>
                @endif

                @if($venue->website != NULL)
                    <a style="padding: 10px;" class="social-link btn btn-block btn-transparent" href="{{$venue->website}}" target="_blank">
                         <small>{{$venue->website}}</small>
                    </a>
                @endif

                @if($venue->category != NULL)
                    <h3 class="email-cont text-center text-capitalize"> {{$venue->category}} </h3>
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
        </header>

        <section id="venue-gallery" class="col-md-10 col-md-offset-1 col-xs-12 text-center" style="padding: 0;"> 
            <span class="gallery-item col-md-2 col-xs-4" 
                @if($venue->gallery_one == NULL )
                    style="background: aquamarine;"
                @else
                    style= "background: url(' {{url('storage/venues/gallery/' . $venue->gallery_one)}} ') "
                @endif
                >
                <div class="film"></div>
            </span>

            <span class="gallery-item col-md-2 col-xs-4" 
                @if($venue->gallery_two == NULL )
                    style="background: aquamarine;"
                @else
                    style= "background: url(' {{url('storage/venues/gallery/' . $venue->gallery_two)}} ') "
                @endif
                >
                <div class="film"></div>
            </span>

            <span class="gallery-item col-md-2 col-xs-4" 
                @if($venue->gallery_three == NULL )
                    style="background: aquamarine;"
                @else
                    style= "background: url(' {{url('storage/venues/gallery/' . $venue->gallery_three)}} ') "
                @endif
                >
                <div class="film"></div>
            </span>

            <span class="gallery-item col-md-2 col-xs-4" 
                @if($venue->gallery_four == NULL )
                    style="background: aquamarine;"
                @else
                    style= "background: url(' {{url('storage/venues/gallery/' . $venue->gallery_four)}} ') "
                @endif
                >
                <div class="film"></div>
            </span>

            <span class="gallery-item col-md-2 col-xs-4" 
                @if($venue->gallery_five == NULL )
                    style="background: aquamarine;"
                @else
                    style= "background: url(' {{url('storage/venues/gallery/' . $venue->gallery_five)}} ') "
                @endif
                >
                <div class="film"></div>
            </span>

            <span class="gallery-item col-md-2 col-xs-4" 
                @if($venue->gallery_six == NULL )
                    style="background: aquamarine;"
                @else
                    style= "background: url(' {{url('storage/venues/gallery/' . $venue->gallery_six)}} ') "
                @endif
                >
                <div class="film"></div>
            </span>

        </section>

        <section class="clearfix" style="margin-bottom: 20px;">
            
            <aside id="venue-amenities" class="col-md-4 col-xs-12 text-center flex-center" style="padding: 0;">

                <div>
                    
                    <header>
                        <h3>Amenities</h3>
                    </header>

                    <article class="text-capitalize">
                        {{$venue->amenities}}
                        @if($venue->amenities == NULL)
                            No amenities added yet.
                        @endif
                    </article>

                </div>
                
            </aside>

            <aside id="venue-location" class="col-md-4 col-xs-12 text-center flex-center" style="padding: 0;">
                <div>
                    <header>
                        <h3>Location</h3>
                    </header>

                    <article>
                        {{$venue->address}}
                        @if($venue->address == NULL)
                            No location added yet.
                        @endif
                    </article>
                    
                </div>
            </aside>

            <aside id="venue-social" class="col-md-4 col-xs-12 text-center flex-center">
                <div>
                    <header>
                        <h3>Social</h3>
                    </header>
                    <article>
                       @if($venue->facebook != NULL)
                        <a href="{{$venue->facebook}}" class="social-link" style="padding: 0px" target="_blank">
                            <img src="{{url('images/icons/facebook-logo-button.png')}}" alt="{{$venue->facebook}}">
                        </a>                
                        @endif
                        
                        @if($venue->twitter != NULL)
                        <a href="{{$venue->twitter}}" class="social-link" style="padding: 0px" target="_blank">
                            <img src="{{url('images/icons/twitter-logo-button.png')}}" alt="{{$venue->twitter}}">
                        </a>
                        @endif

                        @if($venue->instagram != NULL)
                        <a href="{{$venue->instagram}}" class="social-link" style="padding: 0px" target="_blank">
                            <img src="{{url('images/icons/instagram-logo-button.png')}}" alt="{{$venue->twitter}}">
                        </a>
                        @endif

                        @if($venue->facebook == NULL && $venue->twitter == NULL && $venue->instagram == NULL)
                            No social media linked yet.
                        @endif
                    </article>
                </div>
            </aside>

        </section>

        <section id="shows-reviews" class="col-md-9">
            
            <aside id="venue-upcoming-shows" class="col-md-6 text-center">
                <div class="row">
                    
                    <header class="col-xs-12 flex-center">
                        <h3>Previous Shows</h3>
                    </header>
                    <article class="col-xs-12">
                        <div class="shows-cont">
                            <div s>
                                <h3>Band One</h3>
                                <hr>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>

                        <div class="shows-cont">
                            <div s>
                                <h3>band Two</h3>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus molestias assumenda laboriosam.</p>
                            </div>
                        </div>


                        <div class="shows-cont">
                            <div s>
                                <h3>Band Three</h3>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus molestias assumenda laboriosam.</p>
                            </div>
                        </div>

                    </article>

                </div>
            </aside>        

            <aside id="venue-reviews-info" class="col-md-6 text-center">
                <div class="row">
                    
                    <header class="col-xs-12 flex-center">
                        <div>
                            
                            <h3>Latest Reviews</h3>

                        </div>
                    </header>
                    <article class="col-xs-12" style="margin-bottom: 20px;">
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

                    <section id="venue-review-form" class="col-md-12 text-left review-form" style="border-radius: 10px;">
                        <header class="text-center flex-center" style="margin-bottom: 20px;">
                            <h2>Review this venue.</h2>
                        </header>
                        <form action="/venue-review" method="post" class="flex-center">
                            <input type="hidden" value=" {{$venue->id}} " name="venue_id">
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
                                <label for="venue-reviewer" class="text-capitalize">Relation to {{$venue->venue_title}}:</label>
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
        <section id="all-venue-reviews" class="all-reviews-cont">
            <a class="exit-reviews btn btn-danger">exit</a>
            <ul>
                @foreach($venue->reviews as $allReview)
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
@stop