@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/venue/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('venue_title') ? ' has-error' : '' }}">
                            <label for="venue_title" class="col-md-4 control-label">Venue Name</label>

                            <div class="col-md-6">
                                <input id="venue_title" type="text" class="form-control" name="venue_title" value="{{ old('venue_title') }}" autofocus>

                                @if ($errors->has('venue_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('venue_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="login-radio col-md-6 col-md-offset-4">
                        
                            <label for=""><h2>Select the type that best fits.</h2></label>
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

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
