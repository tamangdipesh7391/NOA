<?php

use App\Facades\CommonHelper;

$menuData = CommonHelper::getAllMenu();
?>

@section('menu')
    <div class="stellarnav">
        <ul>
            @foreach($menuData as $menu)
                @if($menu->slug=='home')
                    <li><a href="/"><i class="fa fa-home"></i> </a></li>
                @elseif($menu->slug=='about-us')
                    <li><a href="#">{{$menu->name}}</a>
                        <ul>
                            @foreach($menu->subAboutMenu as $subMenu)
                                <li><a href="{{route('about-us').'/'.$subMenu->slug}}">{{$subMenu->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @elseif($menu->slug=='activities')
                    <li><a href="{{url('activities')}}">{{$menu->name}}</a></li>
                @elseif($menu->slug=='our-projects')
                    <li><a href="{{url('our-projects')}}">{{$menu->name}}</a></li>
                @elseif($menu->slug=='awards')
                    <li><a href="#">{{$menu->name}}</a>
                        <ul>
                            @foreach($menu->subAwardMenu as $subMenu)
                                <li><a href="{{route('awards').'/'.$subMenu->slug}}">{{$subMenu->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <!-- <li><a href="{{url('awards')}}">{{$menu->name}}</a></li> -->
                @elseif($menu->slug=='conference')
                    <li><a href="{{url('conference')}}">{{$menu->name}}</a></li>

                @elseif($menu->slug=='publication')
                    <li><a href="{{url('publication')}}">{{$menu->name}}</a>
                    </li>
                @elseif($menu->slug=='financial-reports-funding')
                    <li><a href="{{url('financial-reports-funding')}}">{{$menu->name}}</a>
                    </li>
                 @elseif($menu->slug=='events')
                    <li><a href="{{url('events')}}">{{$menu->name}}</a></li>
                @elseif($menu->slug=='gallery')
                    <li><a href="{{url('gallery')}}">{{$menu->name}}</a></li>
                @elseif($menu->slug=='video')
                    <li><a href="{{url('video')}}">{{$menu->name}}</a></li>
                @elseif($menu->slug=='rewards')
                    <li><a href="{{url('rewards')}}">{{$menu->name}}</a></li>
                
                @elseif($menu->slug=='travel-grant')
                    <li><a href="{{url('travel-grant')}}">{{$menu->name}}</a></li>
                @endif
            @endforeach
        </ul>
    </div>
@endsection
