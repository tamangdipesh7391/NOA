@section('header')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Nepalese Association of Optometrist</title>
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300,400" rel="stylesheet">
    <link rel="stylesheet" href="{{url('frontend-assets/bootstrap/css/bootstrap.css')}}">
    <link href="{{url('backend-assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('frontend-assets/menu/css/stellarnav.css')}}">
    <link rel="stylesheet" media="all" href="{{url('frontend-assets/menu/css/menu.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/custom/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3" style="padding-right: 0;">
                        <div class="logo">
                            <img src="{{url('icons/logo.jpg')}}" alt="logo">
                        </div>
                    </div>
                    <div class="col-md-9" style="padding-left: 0;">
                        <div class="company-name">
                            <h1>Nepalese Association of
                                Optometrists (NAO)</h1>
                            <p style="margin-bottom: 0;font-size: 20px;">नेपाल दृष्टि विशेषज्ञ संघ </p>
                            <p style="margin-bottom: 0;">Thrive for excellence in vision care </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-12">
                    <ul class="top-right-section">
                        <li class="find-optometrists"><a href="">Find Optometrists</a></li>
                        <li class="join-nao"><a href="{{route('register.step.one')}}">Join NAO</a></li>
                        <li class="member-login"><a href="{{route('login')}}">Member Login</a></li>
                    </ul>


                </div>
                <div class="col-md-12">
                    <ul class="top-company-logo-section">
                        <li>
                            <a href="https://worldcouncilofoptometry.info/">
                                <img src="{{url('image/world.png')}}" alt="" width="120">
                            </a>
                        </li>
                        <li>
                            <a href="https://asiapacificoptometry.org/">
                                <img src="{{url('image/Artboard-1-1.png')}}" alt="" width="120">
                            </a>
                        </li>
                    </ul>


                </div>
            </div>
        </div>
    </div>


</header>
@endsection
