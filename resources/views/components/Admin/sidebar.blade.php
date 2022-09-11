<div class="headerbar">

    <!-- LOGO -->
    <div class="headerbar-left">
        <a href="/admin/dashboard" class="logo"><img alt="Logo" src="/assets/images/logo.png" /> <span>Admin</span></a>
    </div>

    <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">
                    
                
            

                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="https://iili.io/4skwx4.png" alt="Profile image" class="avatar-rounded">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow"><small>Hello, Admin</small> </h5>
                            </div>

                            <!-- item-->
            

                            <!-- item-->
                            <form action="/admin/logout" method="post">
                                @csrf
                           <button class="dropdown-item notify-item" type="submit">
                                <i class="fa fa-power-off"></i> <span>Logout</span>
                            </button>
                        </form>
                            
                            <!-- item-->
                          
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </li>                        
                </ul>

    </nav>

</div>
<!-- End Navigation -->


<!-- Left Sidebar -->
<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">

        <div id="sidebar-menu">
    
        <ul>

                <li class="submenu">
                    <a class="active" href="/admin/dashboard"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-fw fa-table"></i> <span> Bio </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="/admin/bio/edit">Edit</a></li>
                        </ul>
                </li>
                
                <li class="submenu">
                    <a href="#"><i class="fa fa-fw  fa-paperclip"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
                    
                    <ul class="list-unstyled">
                        <li><a href="/admin/pages/show">Show</a></li>
                        <li><a href="/admin/pages/add">Add</a></li>
                    </ul>
                                    
                <li class="submenu">
                    <a href="#"><i class="fa fa-fw fa-tv"></i> <span> Projects </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="/admin/projects/show">Show</a></li>
                            <li><a href="/admin/projects/add">Add</a></li>
                          
                        </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-fw fa-file-text-o"></i> <span> Site Info </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="/admin/siteinfo/edit">Edit</a></li>

                        </ul>
                </li>
                
                <li class="submenu">
                    <a href="#"><i class="fa fa-fw fa-th"></i> <span> Skills </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="/admin/skills/show">Show</a></li>
                            <li><a href="/admin/skills/add">Add</a></li>
                          
                        </ul>
                </li>

          
        </ul>

        <div class="clearfix"></div>

        </div>
    
        <div class="clearfix"></div>

    </div>

</div>