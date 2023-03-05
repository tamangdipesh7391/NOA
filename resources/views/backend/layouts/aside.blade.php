@section('aside')
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-people-fill"></i><span>Admin</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('college-admin.create')}}">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('college-admin.index')}}">
                            <i class="bi bi-circle"></i><span>Show</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-menu" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i><span>Menus</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-menu" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('admin-menu.create')}}">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin-menu.index')}}">
                            <i class="bi bi-circle"></i><span>Show</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-content" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i><span>Content</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-content" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('admin-content.create')}}">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin-content.index')}}">
                            <i class="bi bi-circle"></i><span>Show</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="{{route('register-user-list')}}" class="nav-link collapsed">
                    <i class="bi bi-map"></i> Register Members</a>
            </li>
            <!-- End Components Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-about" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i><span>About Us</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-about" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('admin-about.create')}}">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin-about.index')}}">
                            <i class="bi bi-circle"></i><span>Show</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-events" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i><span>Events</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-events" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('admin-events.create')}}">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin-events.index')}}">
                            <i class="bi bi-circle"></i><span>Show</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-ctype" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i><span>Content Types</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-ctype" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('admin-content-type.create')}}">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin-content-type.index')}}">
                            <i class="bi bi-circle"></i><span>Show</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-publication" data-bs-toggle="collapse"
                   href="#">
                    <i class="bi bi-folder"></i><span>Publication</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-publication" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('admin-publication.create')}}">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin-publication.index')}}">
                            <i class="bi bi-circle"></i><span>Show</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-banner" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i><span>Banner</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-banner" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('admin-banner.create')}}">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin-banner.index')}}">
                            <i class="bi bi-circle"></i><span>Show</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-project" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i><span>Project</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-project" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('admin-project.create')}}">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin-project.index')}}">
                            <i class="bi bi-circle"></i><span>Show</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-activities" data-bs-toggle="collapse"
                   href="#">
                    <i class="bi bi-folder"></i><span>activities</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-activities" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('admin-activities.create')}}">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin-activities.index')}}">
                            <i class="bi bi-circle"></i><span>Show</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-awards" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i><span>Awards</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-awards" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('admin-awards.create')}}">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin-awards.index')}}">
                            <i class="bi bi-circle"></i><span>Show</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-rewards" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i><span>Rewards</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-rewards" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('admin-rewards.create')}}">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin-rewards.index')}}">
                            <i class="bi bi-circle"></i><span>Show</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-cfc" data-bs-toggle="collapse"
                   href="#">
                    <i class="bi bi-folder"></i><span>conference</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-cfc" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('admin-conference.create')}}">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin-conference.index')}}">
                            <i class="bi bi-circle"></i><span>Show</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-news" data-bs-toggle="collapse"
                   href="#">
                    <i class="bi bi-folder"></i><span>News</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-news" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('admin-news.create')}}">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin-news.index')}}">
                            <i class="bi bi-circle"></i><span>Show</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-farf" data-bs-toggle="collapse"
                   href="#">
                    <i class="bi bi-folder"></i><span>Financial reports & funding</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-farf" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('admin-fraf.create')}}">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin-fraf.index')}}">
                            <i class="bi bi-circle"></i><span>Show</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->


            <li class="nav-item">
                <a href="{{route('admin-gallery.index')}}" class="nav-link">
                    <i class="bi bi-map"></i> Gallery</a>
            </li>

            <li class="nav-item">
                <a href="{{route('admin-partners.index')}}" class="nav-link">
                    <i class="fa fa-users"></i> Partners</a>
            </li>


            <li class="nav-item">
                <a href="{{route('manage-address')}}" class="nav-link">
                    <i class="bi bi-map"></i> Address</a>
            </li>

            <li class="nav-item">
                <a href="{{route('setting.index')}}" class="nav-link">
                    <i class="bi bi-gear"></i> Setting</a>
            </li>
        </ul>

    </aside><!-- End Sidebar-->
@endsection
