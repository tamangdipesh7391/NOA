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
            top: 0;
        }

        .container {
            width: 70%;
            margin: auto;
        }

        .title-section {
            width: 100%;
            background: green;
            height: 30px;
            color: green;
        }

        .footer-section {
            width: 100%;
            background: green;
            height: 30px;
        }

        .body-section {
            width: 100%;
            min-height: 300px;
        }

        .logo-section {
            float: left;
            margin: 20px;
        }
        .body-text-section-box{
            color: green;
        }
        .body-text-section-box h1{
            font-size: 30px;
            margin-bottom: 0;
            padding: 0;
        }

        .photo-footer-section-box {
            width: 100%;

        }

        .photo-footer-section-box h1 {
            font-size: 18px;
            margin-left: 30px;
        }

        .photo-box-section {
            width: 100%;
        }
        .photo-content{
            text-align: center;
        }
        .photo-name-section{
            text-align: center;
        }

        .backend-section {
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="frontend">
        <div class="title-section">

        </div>
        <div class="body-section">
            <div class="logo-section">
                @if($is_download)
                    <img src="{{public_path('icons/logo.png')}}" alt="">
                @else
                    <img src="{{url('icons/logo.png')}}" alt="">
                @endif

            </div>
            <div class="body-text-section-box">
                <h1>Nepalese Association of Optometrists</h1>
                <h3>Thrive for excellence in vision care</h3>
            </div>
            <div class="photo-box-section">
                <div class="photo-title">
                    <h1>Member Id Card</h1>
                </div>
                <div class="photo-content">
                    @if($is_download)
{{--                        <img src="{{public_path('uploads/users/'.$userData->image)}}" width="100" alt="">--}}
                    @else
{{--                        <img src="{{url('uploads/users/'.$userData->image)}}" width="100" alt="">--}}
                    @endif
                </div>
                <div class="photo-name-section">
                    <h1>{{$userData->name}}</h1>
                </div>
                <div class="photo-footer-section-box">
                    <h1> NAO Membership No: 0022{{$userData->id}}</h1>
                    <h1>Membership Type: {{$userData->memberType->type ?? ''}} </h1>
                    <h1>Expiry Date: {{$userData->isExpired()}}</h1>
                    <h1>Citizenship No: {{$userData->userDocuments->citizenship_no ?? ''}}</h1>
                    <h1>Phone No: {{$userData->phone}} </h1>
                    <h1>Address: {{$userData->userAddress->tDistrict->district_name ?? ''}} </h1>
                </div>
            </div>


        </div>
        <div class="footer-section">

        </div>
    </div>


    <div class="backend-section">
        <div class="title-section"></div>
        <div class="title">
            <h1>Note:</h1>
        </div>
        <div class="top-content">
            <p>
                This card is property of the Nepalese Association of Optometrists (NAO)
                It must be carried at all times and presented to NAO officials upon request.
                This card holder is responsible for use & misuse of this card.
            </p>
        </div>
        <div class="footer-content">
            <p>
                If this card is found please return to following address
            </p>
        </div>
        <div class="footer-section"></div>
    </div>

</div>
</body>
</html>
