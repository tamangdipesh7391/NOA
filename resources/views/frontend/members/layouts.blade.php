<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Member Dashboard</title>
    <link href="{{url('members-assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('members-assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <!-- Custom styling plus plugins -->
    <link href="{{url('members-assets/build/css/custom.min.css')}}" rel="stylesheet">

</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="" class="site_title"><i class="fa fa-users"></i> <span>Member Dashboard</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        @if(Auth::guard('web')->user()->image)
                            <img src="{{url('uploads/users/'.Auth::guard('web')->user()->image)}}" alt="admin"
                                 class="img-circle profile_img">
                        @else
                            <img src="{{url('icons/user.png')}}" class="img-circle profile_img" alt="admin">
                        @endif
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{Auth::guard('web')->user()->username}}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="{{route('member-dashboard')}}"><i class="fa fa-home"></i> Dashboard</a></li>
                            <li><a><i class="fa fa-edit"></i>Update Info <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('update-general-info')}}">General Info</a></li>
                                    <li><a href="{{route('update-address-info')}}">Address Info</a></li>
                                    <li><a href="{{route('update-documents-info')}}">Documents</a></li>

                                </ul>
                            </li>
                            <li><a href="{{route('member-certificate')}}"><i class="fa fa-book"></i> Certificate</a>
                            </li>
                            <li><a href="{{route('update-member-voucher')}}"><i class="fa fa-upload"></i> Update Voucher</a>
                            </li>
                            <li><a href="{{route('member-id-card')}}"><i class="fa fa-book"></i> Id Card</a></li>

                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                    <ul class=" navbar-right">
                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                               id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                @if(Auth::guard('web')->user()->image)
                                    <img src="{{url('uploads/users/'.Auth::guard('web')->user()->image)}}" alt="">
                                @else
                                    <img src="{{url('icons/user.png')}}" alt="admin">
                                @endif
                                {{Auth::guard('web')->user()->username}}

                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:;">Setting</a>
                                <a class="dropdown-item" href="{{route('logout')}}"><i
                                        class="fa fa-sign-out pull-right"></i> Log
                                    Out</a>
                            </div>
                        </li>


                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        @yield('member-content')
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Develop by <a href="">Dp Dahal</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<script src="{{url('members-assets/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('members-assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('frontend-assets/custom/js/axios.js')}}"></script>

<script>
    window.ajaxAddressFilerUrl = "{{route('ajax-address-filter')}}";
</script>
<!-- Custom Theme Scripts -->
<script src="{{url('members-assets/build/js/custom.min.js')}}"></script>
<script>
    /*
    ================Ajax Address Filter================
    */
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        /*=======Permanent Address=======*/
        $('#permanent_country').change(function () {
            var country_id = $(this).val();
            let url = ajaxAddressFilerUrl;
            let data = {country_id: country_id};
            axios.post(url, data).then(function (response) {
                $('#permanent_province').html(response.data);
            }).catch(function (error) {
                console.log(error);
            });
        });
        $('#permanent_province').change(function () {
            var province_id = $(this).val();
            let url =ajaxAddressFilerUrl;
            let data = {province_id: province_id};
            axios.post(url, data).then(function (response) {
                $('#permanent_district').html(response.data);
            }).catch(function (error) {
                console.log(error);
            });
        });
        $('#permanent_district').change(function () {
            var district_id = $(this).val();
            let url = ajaxAddressFilerUrl
            let data = {district_id: district_id};
            axios.post(url, data).then(function (response) {
                $('#permanent_municipality').html(response.data);
            }).catch(function (error) {
                console.log(error);
            });
        });

        /*=======End Permanent Address=======*/

        /*=======temporary Address=======*/
        $('#temporary_country').change(function () {
            var country_id = $(this).val();
            let url = ajaxAddressFilerUrl
            let data = {country_id: country_id};
            axios.post(url, data).then(function (response) {
                $('#temporary_province').html(response.data);
            }).catch(function (error) {
                console.log(error);
            });
        });
        $('#temporary_province').change(function () {
            var province_id = $(this).val();
            let url = ajaxAddressFilerUrl;
            let data = {province_id: province_id};
            axios.post(url, data).then(function (response) {
                $('#temporary_district').html(response.data);
            }).catch(function (error) {
                console.log(error);
            });
        });
        $('#temporary_district').change(function () {
            var district_id = $(this).val();
            let url =ajaxAddressFilerUrl;
            let data = {district_id: district_id};
            axios.post(url, data).then(function (response) {
                $('#temporary_municipality').html(response.data);
            }).catch(function (error) {
                console.log(error);
            });
        });
        /*=======End temporary Address=======*/
    });


    /*
    ================End Ajax Address Filter================
     */

</script>
</body>

</html>
