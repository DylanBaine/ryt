@extends('band.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">You are logged in as <span class="caps">{{ Auth::user()->first_name }}</span>.</div>

                <div class="panel-body half-height banner" style=" background: url('{{url('images/bands/banner/' . Auth::user()->banner_image )}}');">
                    <div class="" style="width: 100%; height: 100%; position: relative;  ">
                        
                        <div style="position: relative; top: 0; left: 0; height: 100%;">
                            
                            
                            <div class="profile-image col-md-4" style="padding: 0; position: relative; margin-top: 157px; background: url('{{url('images/bands/' . Auth::user()->profile_image )}}'); height: 20vh;">
                    
                            </div>
                            <form action="/band/{{Auth::user()->slug}}/profile-image" method="post" enctype="multipart/form-data" style="margin-top: 233px;" class="col-xs-4">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                <label for="profile_image">Upload a new profile image.</label>
                                <input type="file" id="profile_image" name="profile_image">
                                <input value="Change Profile Image" type="submit" class="btn btn-transparent" style="position: relative; top: 5px; left: 0;">
                            </form>
                            

                            <form action="/band/{{Auth::user()->slug}}/header-image" method="post" enctype="multipart/form-data" style="margin-left: 73.666667%; margin-top: -92px;" class="col-xs-4">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                <label for="banner_image">Upload a new banner image.</label>
                                <input type="file" id="banner_image" name="banner_image">
                                <input value="Change Banner Image" type="submit" class="btn btn-transparent" style="position: relative; top: 12px;">
                            </form>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>

            <div class="text-center col-md-5">
                <h1>{{Auth::user()->name }} Info</h1>
                <hr>
                <form action="/band/{{Auth::user()->slug}}/info" method="POST">
                    {{csrf_field()}}
                    {{method_field('PUT')}}


                    <label for="">Do you want your email private?</label>
                    <br>
                    
                    
                    <div class="col-xs-6 text-right checkbox-cont">
                        
                        <input type="radio" value="yes" id="yes" @if(Auth::user()->email_hidden == 'yes') checked @endif name="email_hidden" style="opacity: 0;">  
                        <label for="yes">yes</label>  

                    </div>

                    <div class="col-xs-6 text-left checkbox-cont">
                        
                        <input type="radio" value="no" id="no" @if(Auth::user()->email_hidden != 'yes') checked @endif name="email_hidden" style="opacity: 0;">
                        <label for="no">no</label>

                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6">
                            
                            <h3>Email: <input type="text" name="email" value="{{Auth::user()->email}}" class="form-control"></h3>
                            <h3>Phone: <input type="text" name="phone" value="{{Auth::user()->phone}}" class="form-control"></h3>
                            <h3>Genre: <input type="text" name="genre" value="{{Auth::user()->genre}}" class="form-control"></h3>
                        </div>

                        <div class="col-md-6">
                            
                            <h3>First Name: <input type="text" name="first_name" value="{{Auth::user()->first_name}}" class="form-control"></h3>
                            <h3>Last Name: <input type="text" name="last_name" value="{{Auth::user()->last_name}}" class="form-control"></h3>
                            <h3>Location: <input type="text" name="location" value="{{Auth::user()->location}}" class="form-control"></h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h2>Social Media Accounts</h2>                                
                            <div class="col-md-12">
                                <div class="flex-center">
                                    
                                    <img src="{{url('icons/facebook-logo-button.png')}}" style="width: 18%; float: left; margin-right: 10px" />

                                     <input type="text" name="facebook" value="{{Auth::user()->facebook}}" class="form-control" style="width: 78%; float: right;">
                                 </div>

                            </div>
                            <div class="col-md-12">

                                <div class="flex-center">
                                    
                                    <img src="{{url('icons/twitter-logo-button.png')}}" style="width: 18%; float: left; margin-right: 10px" />
                                    
                                     <input type="text" name="twitter" value="{{Auth::user()->twitter}}" class="form-control" style="width: 78%; float: right;">
                                 </div>

                            </div>

                            <div class="col-md-12">

                                <div class="flex-center">
                                    
                                    <img src="{{url('icons/soundcloud-logo.png')}}" style="width: 18%; float: left; margin-right: 10px" />
                                    
                                     <input type="text" name="soundcloud" value="{{Auth::user()->soundcloud}}" class="form-control" style="width: 78%; float: right;">
                                 </div>

                            </div>

                    </div>
                    <br>


                        

                    <input type="submit" value="Save Info" class="btn btn-primary col-xs-12" style="margin-top: 20px;">
                </form>
            </div>

            <div class="col-md-5 col-md-offset-2 text-center">
                <h1>Add a short bio</h1>
                <hr>
                <form action="/band/{{Auth::user()->slug}}/bio" method="POST">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <textarea name="bio" id="" cols="50" rows="17" class="form-control" >{{Auth::user()->bio}}</textarea>
                    <input type="submit" value="Add Bio" class="btn btn-primary col-xs-12" style="border-radius: 0px 0px 5px 5px;">
                </form>
            </div>
    </div>
</div>
@endsection
