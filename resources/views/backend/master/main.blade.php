@include('backend.layouts.header')
@include('backend.layouts.footer')
@include('backend.layouts.top-header')
@include('backend.layouts.aside')
{{--=====header section=========--}}
@yield('header')
{{--=====end header section=========--}}
{{--========Main section =============--}}
@yield('top-header')
@yield('aside')
@yield('content')
{{--========end Main section =============--}}
{{--===== footer section=========--}}
@yield('footer')
{{--===== end footer section=========--}}
