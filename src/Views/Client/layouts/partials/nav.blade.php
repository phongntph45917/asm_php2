    <!-- navigation -->
    <header class="navigation fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-white">
                <a class="navbar-brand order-1" href="{{ url('/') }}">
                    <img class="img-fluid" width="100px" src="{{ asset('/assets/client/images/logo.png') }}"
                        alt="Reader | Hugo Personal Blog Template">
                </a>
                <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ url('/') }}">
                                Trang chủ <i class="ti-angle-down ml-1"></i>
                            </a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                About <i class="ti-angle-down ml-1"></i>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Pages <i class="ti-angle-down ml-1"></i>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/products') }}">Bài viết</a>
                        </li>
                        <li class="nav-item">
                            @if (!auth_check())
                                <a class="nav-link" href="{{ url('/login') }}">Login</a>
                            @endif

                            @if (auth_check())
                                <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
                            @endif
                        </li>
                        </li>
                        <li class="nav-item">
                            @if (is_admin())
                                <a class="nav-link" href="{{ url('/admin') }}">Admin</a>
                            @endif

                            @if (!is_admin())
                            @endif
                        </li>
                    </ul>

                </div>

                <div class="order-2 order-lg-3 d-flex align-items-center">
                    <select class="m-2 border-0 bg-transparent" id="select-language">
                        <option id="en" value="" selected>En</option>
                        <option id="fr" value="">Fr</option>
                    </select>

                    <!-- search -->
                    <form class="search-bar">
                        <input id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
                    </form>

                    <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse"
                        data-target="#navigation">
                        <i class="ti-menu"></i>
                    </button>
                </div>

            </nav>
        </div>
    </header>
    <!-- /navigation -->
