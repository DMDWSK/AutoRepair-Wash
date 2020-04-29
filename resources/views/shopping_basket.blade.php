<html lang="en">
<head>
    <title>Auto Plus – Car Wash &amp; Car Repair HTML Template</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Auto Care" />
    <meta name="keywords" content="car wash, html template, car wash template, auto plus, car repair, auto wash, auto detail, auto detailing, car, cleaning, mechanic, repair, wash, car service, workshop">
    <meta name="author" content="Media City" />
    <meta name="MobileOptimized" content="320" />
    <link rel="icon" type="image/icon" href="images/favicon/logo.ico"> <!-- favicon-icon -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
    <link href="{{asset('css/icon-font.css')}}" rel="stylesheet" type="text/css"/> <!-- icon-font css -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700|Poppins:400,500,700" rel="stylesheet"> <!-- google font -->
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" type="text/css"> <!-- Select2 -->
    <link href="{{asset('css/menumaker.css')}}" rel="stylesheet" type="text/css"/> <!-- menu css -->
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
    <link href="{{asset('css/datepicker.css')}}" rel="stylesheet" type="text/css"/> <!-- datepicker css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/> <!-- custom css -->
    <link href="css/style.css" rel="stylesheet" type="text/css"/> <!-- custom css -->
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
    <!-- end theme style -->
</head>
<!-- end head -->
<!--body start-->
<body>
<div class="top-bar hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="info-bar">
                    <ul>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> info@company.com</li>
                        <li>|</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>+1234567890</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  end top bar -->
<!--  navigation -->
<div class="nav-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-8">
                <div class="navigation">
                    <div id="cssmenu">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a>
                            </li>
                            <li><a href="{{url('/pricing_plan')}}">Pricing Plan</a></li>

                            <li><a href="{{url('/team')}}">Partners</a>
                            </li>
                            <li><a href="{{url('/')}}#order">Order</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container">
    @foreach ($appointments as $app)
    <div class="card-media">
        <!-- media container -->
        <div class="card-media-object-container">
            <div class="card-media-object" style="background-image: url(images/teams/{{$app->team['photo']}});"></div>
        </div>
        <!-- body container -->
        <div class="card-media-body">
            <div class="card-media-body-top">
                <span class="subtle">{{$app->appointment_date}}</span>

            </div>
            <span class="card-media-body-heading">{{$app->washing_plan['name']}}</span>
            <div class="card-media-body-supporting-bottom">
                <span class="card-media-body-supporting-bottom-text subtle">{{$app->vehicle_modal['vehicle_modal']}}</span>
{{--                <span class="card-media-body-supporting-bottom-text subtle u-float-right"> $30</span>--}}
            </div>
            <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
                <a  href="{{url('/pricing_plan')}}" class="card-media-body-supporting-bottom-text card-media-link u-float-right">View prices</a>
            </div>
        </div>
    </div>
    @endforeach

</div>