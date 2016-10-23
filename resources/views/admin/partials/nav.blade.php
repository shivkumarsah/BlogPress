<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- <a class="navbar-brand" href="/admin/dashboard">TechRevel.com</a> -->
        <a class="navbar-brand" href="/admin/dashboard">
            <img src="/img/logo.png" />
        </a>

    </div>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <!--li>
                    <a href="{{ url('') }}"><i class="fa fa-backward"></i> Go to frontend</a>
                </li-->
                <li>
                    <a href="{{url('admin/dashboard')}}">
                        <i class="fa fa-dashboard fa-fw"></i> Dashboard
                    </a>
                </li>
                <!--li>
                    <a href="{{url('admin/language')}}">
                        <i class="fa fa-language"></i> Language
                    </a>
                </li-->
                <!--li>
                    <a href="#">
                        <i class="glyphicon glyphicon-camera"></i> Photo items
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav collapse">
                        <li>
                            <a href="{{url('admin/photoalbum')}}">
                                <i class="glyphicon glyphicon-list"></i> Photo albums
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/photo')}}">
                                <i class="glyphicon glyphicon-camera"></i> Photo
                            </a>
                        </li>
                    </ul>
                </li-->
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-tags"></i> Article Management
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav collapse">
                        <li>
                            <a href="{{url('admin/article')}}">
                                <i class="glyphicon glyphicon-list"></i>  Articles
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/article')}}">
                                <i class="glyphicon glyphicon-plus-sign"></i> Add Article
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-folder-open"></i> Category Management
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav collapse">
                        <li>
                            <a href="{{url('admin/articlecategory')}}">
                                <i class="glyphicon glyphicon-list"></i>  Categories
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/articlecategory')}}">
                                <i class="glyphicon glyphicon-plus-sign"></i> Add Category
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('admin/article')}}">
                        <i class="glyphicon glyphicon-bullhorn"></i> SEO Management
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/ads')}}">
                        <i class="glyphicon glyphicon-bullhorn"></i> Ads Management
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/social')}}">
                        <i class="glyphicon glyphicon-link"></i> Social Media Settings
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/setting')}}">
                        <i class="glyphicon glyphicon-cog"></i> Configuration Management
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/subscriber')}}">
                        <i class="glyphicon glyphicon-download"></i> Subscriber Management
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-user"></i> User Management
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav collapse">
                        <li>
                            <a href="{{url('admin/user')}}">
                                <i class="glyphicon glyphicon-list"></i> Users
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/role')}}">
                                <i class="glyphicon glyphicon-user"></i> Roles
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>