<?php
$is_download = true;
?>
 <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: url("{{public_path('icons/icons.png')}}");

        }

        .container {
            width: 95%;
            margin: auto;
        }

        .register-number {
            width: 100%;
        }

        .logo-with-header {
            width: 100%;
        }

        .logo-with-header .logo-section {
            float: left;

        }

        .logo-with-header .logo-text-section {
            text-align: center;
            color: #00b700;


        }

        .logo-text-section h1 {
            font-size: 25px;
            margin-top: -5px;
        }

        .logo-text-section h3 {
            margin-top: -8px;
        }

        .photo-section-box {
            width: 100%;
            height: 150px;

        }

        .image-box {
            border: 1px solid #c4c4c4;
            float: right;
            background: white;
            padding: 5px;

        }

        .certificate-title {
            width: 100%;
        }

        .certificate-title h1 {
            text-align: center;
        }

        .top-certification-text-section {
            width: 100%;

        }

        .info-wrapper {
            width: 100%;
            height: 170px;
        }

        .left-info {
            width: 50%;
            float: left;

        }

        .info-wrapper .right-info {
            width: 50%;
            float: left;
        }

        .info-last {
            width: 100%;

        }

        .signature-box {
            width: 100%;
            float: left;

        }

        .signature-box .left-signature-box {
            float: left;

        }

        .signature-box .right-signature-box {
            float: right;

        }

        .logo-wrap-section {
            width: 100%;
            background: url("{{public_path('icons/main-background.png')}}") no-repeat;
            background-position: center;
            background-size: 40% 70%;

        }
    </style>
</head>
<body>
<div class="container">
    <div class="register-number">
        <h3>Regd.No:570-031/62</h3>
    </div>


    <div class="logo-with-header">
        <div class="logo-section">
            @if($is_download)
                <img src="{{public_path('icons/logo.png')}}" alt="">
            @else
                <img src="{{url('icons/logo.png')}}" alt="">
            @endif

        </div>
        <div class="logo-text-section">

            @if($is_download)
                <img src="{{public_path('icons/title.png')}}" width="200" alt="">
            @else
                <img src="{{url('icons/title.png')}}" width="200" alt="">
            @endif

            <h1>Nepalese Association of Optometrists </h1>
            <h3> Kathmandu, Nepal</h3>
        </div>
    </div>

    <div class="photo-section-box">
        <div class="image-box">
            @if($is_download)
{{--                <img src="{{public_path('uploads/users/'.$userData->image)}}" width="80" alt="">--}}
            @else
{{--                <img src="{{url('uploads/users/'.$userData->image)}}" width="80" alt="">--}}
            @endif

        </div>

    </div>
    <div class="logo-wrap-section">
        <div class="certificate-title">
            <h1>Certificate of Registration</h1>
        </div>

        <div class="top-certification-text-section">
            <p>This is to certify that
                ....{{$userData->name}}....................................................................</p>
            <p>Permanent resident of .......{{$userData->userAddress->pDistrict->district_name}}..................................
                has
                been duly</p>
            <p>registered to Nepalese Association of Optometrists(NAO) </p>
            <p>under the Clause 5.1 'Ka' according to By-Law of NAO - 2013.</p>
        </div>


        <div class="info-wrapper">
            <div class="left-info">
                <p> NAO Registration No: ..................................</p>
                <p>Membership Type ....{{$userData->memberType->type ?? ''}}...........</p>
                <p>Date of Registration: ....{{$userData->date_of_registration ?? ''}}............</p>
                <p>Qualification ....{{$userData->userDocuments->qualification ?? ''}}.........</p>
            </div>
            <div class="right-info">
                <p> Citizenship No ....{{$userData->userDocuments->citizenship_no ?? '' }}.......... .</p>
                @if($userData->memberType->type=='yearly')
                    <p>Expiry Date Date ....{{$userData->isExpired()}}.......... </p>
                @endif

                <p> Date of Issue: ....{{date('Y-m-d')}}..........</p>
                <p>Year of Graduation: ....{{$userData->userDocuments->year_of_graduation ?? ''}}......... </p>

            </div>
        </div>
    </div>


    <div class="info-last">
        <p>University: ......{{$userData->userDocuments->university ?? ''}}
            ......................................................................</p>
    </div>


    <div class="signature-box">
        <div class="left-signature-box">
            <div>
                @if($is_download)
                    <img src="{{public_path('icons/logo-background.png')}}" width="40" alt="">
                @else
                    <img src="{{url('icons/logo-background.png')}}" width="40" alt=""> <br>
                @endif
            </div>
            <div>
                .............................
            </div>
            Official Seal
        </div>
        <div class="right-signature-box">
            <div>
                @if($is_download)
                    <img src="{{public_path('icons/sign.png')}}" width="80" alt="">
                @else
                    <img src="{{url('icons/sign.png')}}" width="80" alt=""> <br>
                @endif
            </div>
            <div>
                ...........................
            </div>

            President
        </div>
    </div>
</div>


</body>
</html>
