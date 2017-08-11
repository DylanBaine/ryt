@extends('venue.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default" style="margin-bottom: 0;">
            <div class="panel-heading">You are logged in as <span class="caps">{{ Auth::user()->name }}</span>.</div>

            <div class="panel-body half-height banner flex-center" style=" background: url('{{url('storage/venues/banner/' . Auth::user()->banner_image )}}');">
                <div>
                        
                        
                        <div class="profile-image col-md-4" style="background: url('{{url('storage/venues/avatar/' . Auth::user()->profile_image )}}'); height: 20vh;">
                
                        </div>

                </div>
            </div>
            <div class="panel-footer row">
                 <form action="/venue/{{Auth::user()->slug}}/profile-image" method="post" enctype="multipart/form-data" class="col-md-6 text-center image-form" style="border-right: solid grey 1px;">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <label for="profile_image" class="btn btn-transparent">Change Profile Image</label>
                    <input type="file" id="profile_image" name="profile_image">
                    <input value="Save Change" type="submit" class="btn btn-primary">
                </form>                        

                <form action="/venue/{{Auth::user()->slug}}/header-image" method="post" enctype="multipart/form-data" class="col-md-6 text-center image-form">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <label for="banner_image" class="btn btn-transparent">Change Banner Image</label>
                    <input type="file" id="banner_image" name="banner_image">
                    <input value="Save Change" type="submit" class="btn btn-primary">
                </form>               
            </div>
        </div>
        <section id="edit-venue-gallery">
            <form action="/venue/{{Auth::user()->slug}}/gallery" method="post" enctype="multipart/form-data" style="margin: 0; padding: 0;">
                {{csrf_field()}}
                {{method_field('PUT')}}

                <div 
                    class="gallery-item col-md-2 col-xs-4" 
                    @if(Auth::user()->gallery_one == NULL)
                        style="background: aquamarine;"
                    @else
                        style="background: url(' {{url('storage/venues/gallery/' . Auth::user()->gallery_one)}} ')"
                    @endif
                    >

                    <div class="gallery-inner">
                        <label for="gallery_one" class="btn btn-transparent">Change Image</label>
                        <input type="file" id="gallery_one" name="gallery_one">
                    </div>

                </div>

                <div 
                    class="gallery-item col-md-2 col-xs-4" 
                    @if(Auth::user()->gallery_two == NULL)
                        style="background: cornflowerblue;"
                    @else
                        style="background: url(' {{url('storage/venues/gallery/' . Auth::user()->gallery_two)}} ')"
                    @endif
                    >

                    <div class="gallery-inner">
                        <label for="gallery_two" class="btn btn-transparent">Change Image</label>
                        <input type="file" id="gallery_two" name="gallery_two">
                    </div>

                </div>

                <div 
                    class="gallery-item col-md-2 col-xs-4" 
                    @if(Auth::user()->gallery_three == NULL)
                        style="background: pink;"
                    @else
                        style="background: url(' {{url('storage/venues/gallery/' . Auth::user()->gallery_three)}} ')"
                    @endif
                    >

                    <div class="gallery-inner">
                        <label for="gallery_three" class="btn btn-transparent">Change Image</label>
                        <input type="file" id="gallery_three" name="gallery_three">
                    </div>

                </div>

                <div 
                    class="gallery-item col-md-2 col-xs-4" 
                    @if(Auth::user()->gallery_four == NULL)
                        style="background: coral;"
                    @else
                        style="background: url(' {{url('storage/venues/gallery/' . Auth::user()->gallery_four)}} ')"
                    @endif
                    >

                    <div class="gallery-inner">
                        <label for="gallery_four" class="btn btn-transparent">Change Image</label>
                        <input type="file" id="gallery_four" name="gallery_four">
                    </div>

                </div>


                <div 
                    class="gallery-item col-md-2 col-xs-4" 
                    @if(Auth::user()->gallery_five == NULL)
                        style="background: aqua;"
                    @else
                        style="background: url(' {{url('storage/venues/gallery/' . Auth::user()->gallery_five)}} ')"
                    @endif
                    >

                    <div class="gallery-inner">
                        <label for="gallery_five" class="btn btn-transparent">Change Image</label>
                        <input type="file" id="gallery_five" name="gallery_five">
                    </div>

                </div>

                <div 
                    class="gallery-item col-md-2 col-xs-4" 
                    @if(Auth::user()->gallery_six == NULL)
                        style="background: darkolivegreen;"
                    @else
                        style="background: url(' {{url('storage/venues/gallery/' . Auth::user()->gallery_six)}} ')"
                    @endif
                    >

                    <div class="gallery-inner">
                        <label for="gallery_six" class="btn btn-transparent">Change Image</label>
                        <input type="file" id="gallery_six" name="gallery_six">
                    </div>

                </div> 
                <input type="submit" class="btn btn-primary btn-block" value="Save">
            </form>           
        </section>
        <aside id="edit-venue-social" class="col-md-12">

            <form class="form-inline" action="/venue/{{Auth::user()->slug}}/edit-info" method="post" id="edit-venue-form">
                {{csrf_field()}}
                {{method_field('PUT')}}

                <div class="col-md-4 text-center">
                    <header>
                        <h3>Amenities</h3>
                    </header> 

                    <div class="col-xs-6">                        
                        <label for="bed">Bed</label>
                        <input 
                            type="checkbox" 
                            id="bed" 
                            value="bed"
                            class="amenities-checkbox">
                    </div>

                    <div class="col-xs-6">                        
                        <label for="showers">Showers</label>
                        <input 
                            type="checkbox" 
                            id="showers" 
                            value="showers"
                            class="amenities-checkbox">
                    </div>

                    <div class="col-xs-6">                        
                        <label for="catering">Catering</label>
                        <input 
                            type="checkbox" 
                            id="catering" 
                            value="catering"
                            class="amenities-checkbox">
                    </div>

                    <div class="col-xs-6">                        
                        <label for="security">Security</label>
                        <input 
                            type="checkbox" 
                            id="security" 
                            value="security"
                            class="amenities-checkbox">
                    </div>

                    <div class="col-xs-6">                        
                        <label for="sound-system">PA</label>
                        <input 
                            type="checkbox" 
                            id="sound-system" 
                            value="sound system"
                            class="amenities-checkbox">
                    </div>

                    <div class="col-xs-6">                        
                        <label for="air-conditioning">A/C</label>
                        <input 
                            type="checkbox" 
                            id="air-conditioning" 
                            value="air conditioning"
                            class="amenities-checkbox">
                    </div>

                    <div class="col-xs-6">                        
                        <label for="balcony">Balcony</label>
                        <input 
                            type="checkbox" 
                            id="balcony" 
                            value="balcony"
                            class="amenities-checkbox">
                    </div>

                    <div class="col-xs-6">                        
                        <label for="free-parking">Free Parking</label>
                        <input 
                            type="checkbox" 
                            id="free-parking" 
                            value="free parking"
                            class="amenities-checkbox">
                    </div>

                    <div class="col-xs-6">                        
                        <label for="paid-parking">Paid Parking</label>
                        <input 
                            type="checkbox" 
                            id="paid-parking" 
                            value="Paid Parking"
                            class="amenities-checkbox">
                    </div>

                    <div class="col-xs-6">                        
                        <label for="green-room">Green Room</label>
                        <input 
                            type="checkbox" 
                            id="green-room" 
                            value="green room"
                            class="amenities-checkbox">
                    </div>

                    <div class="col-xs-6">                        
                        <label for="heating">Heating</label>
                        <input 
                            type="checkbox" 
                            id="heating" 
                            value="heating"
                            class="amenities-checkbox">
                    </div>

                    <div class="col-xs-6">                        
                        <label for="wifi">wifi</label>
                        <input 
                            type="checkbox" 
                            id="wifi" 
                            value="wifi"
                            class="amenities-checkbox">
                    </div>

                    <div class="col-xs-6">                        
                        <label for="smoking">Smoking</label>
                        <input 
                            type="checkbox" 
                            id="smoking" 
                            value="smoking"
                            class="amenities-checkbox">
                    </div>

                    <div class="col-xs-6">                        
                        <label for="lighting">Lighting</label>
                        <input 
                            type="checkbox" 
                            id="lighting" 
                            value="lighting"
                            class="amenities-checkbox">
                    </div>
                        
                        <h5 class="col-md-12">Add your own amenities</h5>
                        <textarea cols="40" rows="5" id="amenities-input" class=" col-md-12 text-capitalize" name="amenities" style="border: solid grey 1px; outline: transparent; background: transparent; box-shadow: none;">{{Auth::user()->amenities}}</textarea>

                </div>

                <div class="col-md-4 text-center flex-center" style="height: 100%; display: block;">
                    <header>
                        <h3>Location</h3>
                    </header>
                    <div class="form-group">
                        
                        <label for="">Address:</label>
                        <br>
                        <input type="text" name="address" class="location-input form-control" value=" {{Auth::user()->address}} ">

                    </div>

                    <header>
                        <h3>Website</h3>
                    </header>
                    <div class="form-group">
                        
                        <label for="">Make sure you use the full url.
                        <br>
                        <small>Ex: https://routeyourtour.com</small></label>
                        <br>
                        <input type="text" name="website" class="location-input form-control" value=" {{Auth::user()->website}} ">

                    </div>

                    <header>
                        <h3>Venue Type</h3>
                    </header>
                    <div class="form-group">
                        
                        <label for="">Select the type that best fits.</label>
                        <br>
                        
                        <div class="form-group radio-cont">                            
                            <label for="amphitheater">Amphitheater</label>
                            <input type="radio" name="category" id="amphitheater" value="amphitheater">
                        </div>

                        <div class="form-group radio-cont">                            
                            <label for="arena">Arena</label>
                            <input type="radio" name="category" id="arena" value="arena">
                        </div>


                        <div class="form-group radio-cont">                            
                            <label for="auditorium">Auditorium</label>
                            <input type="radio" name="category" id="auditorium" value="auditorium">
                        </div>

                        <div class="form-group radio-cont">                            
                            <label for="bar-venue">Bar Venue</label>
                            <input type="radio" name="category" id="bar-venue" value="bar venue">
                        </div>

                        <div class="form-group radio-cont">                          
                            <label for="casino-venue">Casino Venue</label>
                            <input type="radio" name="category" id="casino-venue" value="casino venue">
                        </div> 

                        <div class="form-group radio-cont">                          
                            <label for="church-venue">church venue</label>
                            <input type="radio" name="category" id="church-venue" value="church venue">
                        </div> 

                        <div class="form-group radio-cont">                            
                            <label for="club">club</label>
                            <input type="radio" name="category" id="club" value="club">
                        </div>

                        <div class="form-group radio-cont">                            
                            <label for="coffee-house">coffee house</label>
                            <input type="radio" name="category" id="coffee-house" value="coffee house">
                        </div>

                        <div class="form-group radio-cont">                            
                            <label for="event-venue">event venue</label>
                            <input type="radio" name="category" id="event-venue" value="event venue">
                        </div>

                        <div class="form-group radio-cont">                            
                            <label for="music-hall">music hall</label>
                            <input type="radio" name="category" id="music-hall" value="music hall">
                        </div>

                        <div class="form-group radio-cont">                            
                            <label for="restaurant-venue">restaurant venue</label>
                            <input type="radio" name="category" id="restaurant-venue" value="restaurant venue">
                        </div>

                        <div class="form-group radio-cont">                            
                            <label for="outdoor-festival">outdoor festival</label>
                            <input type="radio" name="category" id="outdoor-festival" value="outdoor festival">
                        </div>

                        <div class="form-group radio-cont">                            
                            <label for="stadium-venue">stadium venue</label>
                            <input type="radio" name="category" id="stadium-venue" value="stadium venue">
                        </div>

                        <div class="form-group radio-cont">                            
                            <label for="amphitheater">Amphitheater</label>
                            <input type="radio" name="category" id="amphitheater" value="amphitheater">
                        </div>




                    </div>


                </div>
                
                <div class="col-md-4 text-center" style="height: 100%;">

                    <div>
                        
                        <header>
                            <h3>Social Links</h3>
                        </header>
                        
                        <div class="form-group">
                            <label for="">
                                <img class="social-image" src="{{url('images/icons/facebook-logo-button.png')}}" alt="{{Auth::user()->facebook}}">
                            </label>
                            <input 
                                name="facebook" 
                                type="text" 
                                class="form-control" 
                                value=" {{Auth::user()->facebook}} ">
                        </div>

                        <div class="form-group">
                            <label for="">
                                <img class="social-image" src="{{url('images/icons/twitter-logo-button.png')}}" alt="{{Auth::user()->twitter}}" value=" {{Auth::user()->twitter}} ">
                            </label>
                            <input 
                                name="twitter" 
                                type="text" 
                                class="form-control"
                                value=" {{Auth::user()->twitter}}">
                        </div>

                        <div class="form-group">
                            <label for="">
                                <img class="social-image" src="{{url('images/icons/instagram-logo-button.png')}}" alt="{{Auth::user()->instagram}}">
                            </label>
                            <input 
                                name="instagram" 
                                type="text" 
                                class="form-control"  
                                value="{{Auth::user()->instagram}}">
                        </div>

                    </div>

                </div>

                <input id="venue-form-btn" type="submit" value="Save" class="btn btn-primary btn-block">
            </form>

        </aside>
        <section id="add-show-form" class="col-md-6">
            <header class="text-center" style="padding: 20px;">
                <h3>Add a Show</h3>
            </header>
            <form action="/venue/add-show" method="post" enctype="multipart/form-data">

                    {{csrf_field()}}
                    <input type="hidden" name="relation" value="{{Auth::user()->id}}">

                <div class="form-group">
                    <label for="show-title">Title of the show:</label>
                    <input type="text" id="show-title" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="show-date">date:</label>
                    <input type="text" id="show-date" name="date" class="form-control">
                </div>

                <div class="form-group">
                    <label for="show-title">Details:</label>
                    <textarea id="show-title" name="details" class="form-control" cols="10" rows="5"></textarea>
                </div>

                <div class="show-banner"></div>

                <div class="form-group">
                    <label for="show-banner" class="btn btn-transparent">Add A Show Banner</label>
                    <input type="file" id="show-banner" name="image">                    
                </div>
                <input type="submit" value="Save Show" class="btn btn-primary btn-block">    

            </form>
        </section>
        <section id="make-shows" class="col-md-6">
            <header class="text-center" style="padding: 20px;">
                <h3>Added Shows</h3>
            </header>

            @foreach(Auth::user()->show as $show)
                <div class="show-container row">

                    <h3 class="text-capitalize">{{$show->title}}</h3>
                    <hr>
                
                    <div class="text-center">
                        <a href="{{url('venue/'. Auth::user()->slug .'/show/' . $show->show_slug)}}" class="btn btn-primary">See Show Page</a>
                        <button class="btn btn-success text-uppercase {{$show->show_slug}}-show-edit-form">Edit Show</button>
                        <br>
                        <br>
                        <form action="{{url('/venue/' . $show->id . '/delete')}}" method="post">

                            {{csrf_field()}}

                            {{method_field('delete')}}


                            <input type="submit" value="Delete this Show" class="btn btn-danger text-uppercase">
                            <small>(cant be undone)</small>
                        </form>
                    </div>
                </div>
                <div class="{{$show->show_slug}}-edit-form edit-form modal flex-center">
                    <button class="btn btn-danger {{$show->show_slug}}-hide-edit-form" style="position: absolute; top: 50px; left: 50px;">Cancel</button>
                    <form action="{{url('venue/'. Auth::user()->slug .'/show/' . $show->show_slug . '/edit')}}" method="post" enctype="multipart/form-data" class="col-md-6">

                        {{csrf_field()}}

                        <input type="hidden" name="relation" value="{{Auth::user()->id}}">

                        <div class="form-group">
                            <label for="show-title">Title of the show:</label>
                            <input type="text" id="show-title" name="title" class="form-control" value="{{$show->title}}">
                        </div>

                        <div class="form-group">
                            <label for="show-date">date:</label>
                            <input type="text" id="show-date" name="date" class="form-control" value="{{$show->date}}">
                        </div>

                        <div class="form-group">
                            <label for="show-title">Details:</label>
                            <textarea id="show-title" name="details" class="form-control" cols="10" rows="5">
                                {{$show->details}}
                            </textarea>
                        </div>

                        <input type="submit" value="UPDATE" class="btn btn-primary btn-block">    

                    </form>

                    <script>
                        $('.{{$show->show_slug}}-show-edit-form').click(function(){
                            $('.{{$show->show_slug}}-edit-form').css({
                                  'height': '100vh',
                                  'width': '100vw',
                                  'z-index': '99999',
                            });                            
                        });

                        $('.{{$show->show_slug}}-hide-edit-form').click(function(){
                            $('.{{$show->show_slug}}-edit-form').css({
                                  'height': '0vh',
                                  'width': '0vw',
                                  'z-index': '-1',
                            });                            
                        });

                    </script>

                </div>
            @endforeach
        </section>
    </div>
</div>

@endsection
