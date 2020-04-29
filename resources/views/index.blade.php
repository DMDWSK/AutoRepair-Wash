@extends('layouts.theme')
<!-- inner content -->
  @section('inner_content')
    @if (Session::has('appointment_added'))
      <div id="sessionModal" class="sessionmodal appointment-session alert alert-success">
        <p>{{session('appointment_added')}}</p>
      </div>
    @endif
    <div id="home-slider" class="home-slider">
      <div class="item home-slider-bg" style="background-image: url('images/slider-1.jpg')">
        <div class="container">
          <div class="slider-dtl">
            <h4 class="slider-sub-heading">We Care</h4>
            <h1 class="slider-heading">For Your Car</h1>
            <p>We would be happy to help you choose the team that will make your car like new one again</p>
            <div class="slider-btn">
              <a href="#" class="btn btn-orange">Read More</a>
              <a href="{{url('/pricing_plan')}}" class="btn btn-default">Pricing plan</a>
            </div>
          </div>
        </div>
      </div>
      <div class="item home-slider-bg" style="background-image: url('images/slider-2.jpg')">
        <div class="container">
          <div class="slider-dtl">
            <h4 class="slider-sub-heading">We Care</h4>
            <h1 class="slider-heading">For Your Car</h1>
            <p>We would be happy to help you choose the team that will make your car like new one again</p>
            <div class="slider-btn">
              <a href="#" class="btn btn-orange">Read More</a>
              <a href="{{url('/pricing_plan')}}" class="btn btn-default">Pricing plan</a>
            </div>
          </div>
        </div>
      </div>
      <div class="item home-slider-bg" style="background-image: url('images/slider-3.jpg')">
        <div class="container">
          <div class="slider-dtl">
            <h4 class="slider-sub-heading">We Care</h4>
            <h1 class="slider-heading">For Your Car</h1>
            <p>We would be happy to help you choose the team that will make your car like new one again</p>
            <div class="slider-btn">
              <a href="#" class="btn btn-orange">Read More</a>
              <a href="{{url('/pricing_plan')}}" class="btn btn-default">Pricing plan</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!--  end slider -->
  <!--  who we are -->
    <div id ="who-we-are" class="who-we-are-main-block">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="section">
              <h3 class="section-heading">Who We Are?</h3>
              <p>Our family has been in the auto industry for generations. Naram's grandfather is a mechanic and his father, who is also a mechanic, opened a mechanic shop in Chicago back in 1996. Then in 2015, we opened our 2nd mechanic shop here Park Ridge. We serve the following communities: Park Ridge, Des Plaines, Edison Park, Skokie and Niles.
                We believe great service starts with open, honest communication. We tell each of our customers exactly what we are doing and why we are doing it. This keeps them entirely in the loop and makes them a part of the actual process. We want your business for the long haul. That’s why we keep our prices honest and competitive.  </p>
            </div>
            <div class="row who-we-are-points">
              <div class="col-sm-6">
                <div class="who-we-are-block">
                  <div class="who-we-are-icon">
                    <i class="icon-1" aria-hidden="true"></i>
                  </div>
                  <div class="who-we-are-dtl">
                    <h5 class="who-we-are-heading">Regular Car</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="who-we-are-block">
                  <div class="who-we-are-icon">
                    <i class="icon-2" aria-hidden="true"></i>
                  </div>
                  <div class="who-we-are-dtl">
                    <h5 class="who-we-are-heading">Medium Car</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="who-we-are-block">
                  <div class="who-we-are-icon">
                    <i class="icon-3" aria-hidden="true"></i>
                  </div>
                  <div class="who-we-are-dtl">
                    <h5 class="who-we-are-heading">Compact Suv</h5>

                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="who-we-are-block">
                  <div class="who-we-are-icon">
                    <i class="icon-8" aria-hidden="true"></i>
                  </div>
                  <div class="who-we-are-dtl">
                    <h5 class="who-we-are-heading">Truck</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 hidden-sm">
            <div class="who-we-are-img">
              <img src="images/who-we-are.jpg" class="img-responsive" alt="who-we-are">
            </div>
          </div>
        </div>
      </div>
    </div>
  <!--  end who we are -->
  <!--  services -->
    <div id="services" class="services-main-block">
      <div class="container">
        <div class="section text-center">
          <h3 class="section-heading">Our Services</h3>
        </div>
        <div class="row">
          @if ($services)
            @foreach ($services as $service)
              <div class="col-md-3 col-sm-6">
                <div class="service-block text-center">
                  <div class="service-icon">
                    <a href="#"><img width="30" src="{{asset('images/services')}}/{{$service->icon}}" class="img-responsive" alt="service-01"></a>
                  </div>
                  <div class="service-dtl">
                    <a href="#"><h5 class="service-heading">{{$service->name}}</h5></a>
                  </div>
                </div>
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </div>
  <!--  end services -->
  <!--  gallery -->
    <div id="work-gallery" class="work-gallery-main-block">
      <div class="parallax" style="background-image: url('images/bg/work-gallery-bg.jpg')">
      <div class="overlay-bg"></div>
        <div class="container">
          <div class="section text-center">
            <h3 class="section-heading">Working gallery</h3>
          </div>
          <div id="work-gallery-slider" class="work-gallery-slider">
            @if ($galleries)
              @foreach ($galleries as $gallery)
                <div class="item work-gallery-block">
                  <img src="{{asset('images/gallery')}}/{{$gallery->gallery_img}}" class="img-responsive" alt="gallery">
                  <div class="overlay-bg"><a href="{{asset('images/gallery')}}/{{$gallery->gallery_img}}" title="Your Image Title"><i class="fa fa-plus"></i></a></div>
                </div>
              @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>
    <div id="facts" class="facts-main-block">
      <div class="parallax" style="background-image: url('images/bg/1.jpg')">
      <div class="overlay-bg"></div>
        <div class="container">
          <div class="row">
            @if ($facts)
              @foreach ($facts as $fact)
                <div class="col-md-3 col-sm-6">
                  <div class="facts-block text-center">
                    <div class="facts-icon">
                      <i class="fa {{$fact->icon}}" aria-hidden="true"></i>
                    </div>
                    <h2 class="facts-number counter">{{$fact->number}}</h2>
                    <div class="facts-text">{{$fact->detail}}</div>
                  </div>
                </div>
              @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>
    <div id="testimonials" class="testimonials-main-block">
      <div class="parallax" style="background-image: url('images/bg/testimonials-bg.jpg')">
      <div class="overlay-bg"></div>
        <div class="container">
          <div class="section text-center">
            <h3 class="section-heading">Testimonials</h3>
          </div>
          <div id="testimonials-slider" class="testimonials-slider">
            @if ($testimonials)
              @foreach ($testimonials as $testimonial)
                <div class="item testimonials-block">
                  <div class="testimonials-dtl text-center">
                    <p>{{$testimonial->detail}}</p>
                  </div>
                  <div class="testimonials-client">
                    <div class="testimonials-client-img">
                      <img src="{{asset('images/testimonial')}}/{{$testimonial->image}}" class="img-responsive" alt="client-01">
                    </div>
                    <div class="testimonials-client-dtl">
                      <h6 class="client-name">{{$testimonial->name}}</h6>
                      <div class="client-since">{{$testimonial->post}}</div>
                    </div>
                  </div>
                </div>
              @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>
  <!--  end testimonials -->
  <!--  appointment -->
    <div id="appointment" class="appointment-main-block">
      <div class="container">
        <div class="row">
          <div class="col-md-4 hidden-sm">
            <div class="appointment-img">
              <img src="images/appointment.jpg" class="img-responsive" alt="Appointment">
            </div>
          </div>
          <div class="col-md-8 col-sm-12">
            <div id="order" class="appointment-block">
              <h3 class="section-heading">Get an Appointment</h3>
              {!! Form::open(['method' => 'POST', 'action' => 'HomePageController@store', 'class' => 'appointment-form']) !!}
                <h5 class="form-heading-title"><span class="form-heading-no">1.</span>Vehicle Information</h5>
                <div class="row">
                  <div class="col-sm-6">
                    @if (Auth::check())
                      {!! Form::hidden('user_id', Auth::user()->id) !!}
                    @endif
                    <div class="form-group{{ $errors->has('washing_plan_id') ? ' has-error' : '' }}">
                        {!! Form::select('washing_plan_id', array(''=>'Choose Washing Plan') + $washing_plan_lists, null, ['class' => 'form-control select2', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('washing_plan_id') }}</small>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group{{ $errors->has('vehicle_company_id') ? ' has-error' : '' }}">
                        {!! Form::select('vehicle_company_id', array(''=>'Choose Vehicle Company') + $vehicle_company_lists, null, ['class' => 'form-control select2', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('vehicle_company_id') }}</small>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group{{ $errors->has('vehicle_modal_id') ? ' has-error' : '' }}">
                      {!! Form::select('vehicle_modal_id', array('' =>'Choose Vehicle Modal') + $vehicle_modal_lists , null, ['class' => 'form-control select2', 'required' => 'required']) !!}
                      <small class="text-danger">{{ $errors->first('vehicle_modal_id') }}</small>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group{{ $errors->has('vehicle_types_id') ? ' has-error' : '' }}">
                        {!! Form::select('vehicle_types_id', array(''=>'Choose Vehicle Type') + $vehicle_type_lists, null, ['class' => 'form-control select2', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('vehicle_types_id') }}</small>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <h5 class="form-heading-title"><span class="form-heading-no">2.</span>Appointment Information</h5>
                  <div class="col-sm-6">
                    <div class="form-group{{ $errors->has('appointment_date') ? ' has-error' : '' }}">
                        {!! Form::text('appointment_date', null, ['class' => 'form-control date-pick', 'required' => 'required', 'placeholder' => 'Appointment Date']) !!}
                        <small class="text-danger">{{ $errors->first('appointment_date') }}</small>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group{{ $errors->has('time_frame') ? ' has-error' : '' }}">
                        {!! Form::select('time_frame', array(''=>'Choose Time Frame', 'morning'=>'Morning', 'evening'=>'Evening', 'afternoon'=>'Afternoon'), null, ['class' => 'form-control select2', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('time_frame') }}</small>
                    </div>
                  </div>
                </div>
              <h5 class="form-heading-title"><span class="form-heading-no">3.</span>Our Partners</h5>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group{{ $errors->has('team_id') ? ' has-error' : '' }}">
                    {!! Form::select('team_id', array(''=>'Partners') + $team_lists , null, ['class' => 'form-control select2', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('team_id') }}</small>
                  </div>
                </div>
              </div>
                @if (!Auth::check())
                  <h5 class="form-heading-title"><span class="form-heading-no">4.</span>Contact Details</h5>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Enter Your Name']) !!}
                          <small class="text-danger">{{ $errors->first('name') }}</small>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
                          <small class="text-danger">{{ $errors->first('email') }}</small>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          {!! Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Enter Your Password']) !!}
                          <small class="text-danger">{{ $errors->first('password') }}</small>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                          {!! Form::text('mobile', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Enter Mobile No.']) !!}
                          <small class="text-danger">{{ $errors->first('mobile') }}</small>
                      </div>
                      {!! Form::hidden('sex', '-') !!}
                      {!! Form::hidden('dob', Carbon\Carbon::now()) !!}
                    </div>
                  </div>
                @endif
                <div class="pull-right">
                  {!! Form::submit("Book Now", ['class' => 'btn btn-default pull-right']) !!}
                </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="clients" class="clients-main-block">
      <div class="container">
        <div id="client-slider" class="client-slider">
          @if ($clients)
            @foreach ($clients as $client)
              <div class="item client-img">
                <img src="{{asset('images/clients')}}/{{$client->image}}" class="img-responsive" alt="client-1">
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </div>

  <!--  end clients -->
  @endsection
