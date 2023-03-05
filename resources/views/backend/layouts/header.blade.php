@section('header')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{url('backend-assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('backend-assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{url('backend-assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('backend-assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{url('backend-assets/ckeditor/contents.css')}}">

    <link href="{{url('backend-assets/css/style.css')}}" rel="stylesheet">
    <link href="{{url('backend-assets/custom/custom.css')}}" rel="stylesheet">

    @if(isset($title))
        <title>{{$title}}</title>
    @else
        <title>Document</title>
    @endif

</head>
<body>

@endsection
