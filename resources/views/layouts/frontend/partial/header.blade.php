<!-- ================================
        START HEADER AREA
================================= -->
<header class="header-area {{ Request::is('/') ? '':'header-area-2'}}">
    <div class="header-menu-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-full-width">
                        <div class="logo">
                            <a href="index.html">
                                @if(Request::is('/'))
                                    <img src="{{ asset('public/images/logo2.png') }}" alt="logo">
                                @else
                                    <img src="{{ asset('public/images/logo.png') }}" alt="logo">
                                @endif
                            </a>
                        </div><!-- end logo -->
                        <div class="main-menu-content">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">Home <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index2.html">Home 2</a></li>
                                            <li><a href="index3.html">Home 3</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Employers <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="employer-listing.html">Employer Listing</a></li>
                                            <li><a href="employer-details.html">Employer Details</a></li>
                                            <li><a href="employer-dashboard.html">Employer Dashboard</a></li>
                                            <li><a href="employer-dashboard-edit-profile.html">Edit Profile</a></li>
                                            <li><a href="employer-dashboard-post-job.html">Post a Job</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Candidates <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="candidate-listing.html">Candidate Listing</a></li>
                                            <li><a href="candidate-details.html">Candidate Details</a></li>
                                            <li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
                                            <li><a href="candidate-dashboard-edit-profile.html">Edit Profile</a></li>
                                            <li><a href="candidate-add-resume.html">Add a Resume</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Pages <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="invoice.html">Invoice</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="how-it-works.html">How It Works</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="payment-complete.html">Payment Complete</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="page-404.html">404 Page</a></li>
                                            <li><a href="terms-and-condition.html">Terms And Condition</a></li>
                                            <li><a href="recover.html">Recover Password</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Blog <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a href="blog-single.html">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Jobs <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="job-listing.html">Job Listing</a></li>
                                            <li><a href="job-grid-view.html">Job Grid View</a></li>
                                            <li><a href="job-details.html">Job Details </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end main-menu-content -->
                        <div class="logo-right-content">
                            <ul class="author-access-list">
                                <li>
                                    @guest()
                                        <a href="{{ route('login') }}">Login</a>
                                        <span class="or-text">or</span>
                                        <a href="{{ route('register') }}">Sign up</a>
                                    @else
                                        @if(Auth::user()->role->id == 1)
                                            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                        @elseif(Auth::user()->role->id == 2)
                                            <a href="{{ route('employer.dashboard') }}">Dashboard</a>
                                        @else
                                            <a href="{{ route('candidate.dashboard') }}">Dashboard</a>
                                        @endif
                                    @endguest
                                </li>
                                <li>
                                    <a href="employer-dashboard-post-job.html" class="theme-btn">
                                        <span class="la la-plus"></span>
                                        Post a Job
                                    </a>
                                </li>
                            </ul>
                            <div class="side-menu-open">
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                            </div><!-- end side-menu-open -->
                        </div><!-- end logo-right-content -->
                    </div><!-- end menu-full-width -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-wrapper -->
    <div class="side-nav-container">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
        </div><!-- end humburger-menu -->
        <div class="side-menu-wrap">
            <ul class="side-menu-ul">
                <li>
                    <a href="#">Home <i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="index.html">Home 1</a></li>
                        <li><a href="index2.html">Home 2</a></li>
                        <li><a href="index3.html">Home 3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Employers <i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="employer-listing.html">Employer Listing</a></li>
                        <li><a href="employer-details.html">Employer Details</a></li>
                        <li><a href="employer-dashboard.html">Employer Dashboard</a></li>
                        <li><a href="employer-dashboard-edit-profile.html">Edit Profile</a></li>
                        <li><a href="employer-dashboard-post-job.html">Post a Job</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Candidates <i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="candidate-listing.html">Candidate Listing</a></li>
                        <li><a href="candidate-details.html">Candidate Details</a></li>
                        <li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
                        <li><a href="candidate-dashboard-edit-profile.html">Edit Profile</a></li>
                        <li><a href="candidate-add-resume.html">Add a Resume</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages <i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="how-it-works.html">How It Works</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="payment-complete.html">Payment Complete</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="page-404.html">404 Page</a></li>
                        <li><a href="terms-and-condition.html">Terms And Condition</a></li>
                        <li><a href="recover.html">Recover Password</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Blog <i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="blog-grid.html">Blog Grid</a></li>
                        <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                        <li><a href="blog-single.html">Blog Detail</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Jobs <i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="job-listing.html">Job Listing</a></li>
                        <li><a href="job-grid-view.html">Job Grid View</a></li>
                        <li><a href="job-details.html">Job Details </a></li>
                    </ul>
                </li>
            </ul>
            <div class="side-nav-button">
                @guest()
                    <a href="{{ route('login') }}">Login</a>
                    <span class="or-text">or</span>
                    <a href="{{ route('register') }}">Sign up</a>
                @else
                    <div class="tab-pane fade" id="account-home" role="tabpanel" aria-labelledby="account-tab">
                        <div class="user-action-wrap user-sidebar-panel">
                            <div class="mess-dropdown">
                                <div class="mess__title d-flex align-items-center">
                                    <div class="image dot-status online-status">
                                        <a href="#">
                                            <img src="{{ Auth::user()->image }}" alt="John Doe">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="widget-title">
                                            <a href="#">John doe</a>
                                        </h4>
                                        <span class="email">{{ Auth::user()->email }}</span>
                                    </div>
                                </div><!-- end mess__title -->
                                <div class="mess__body">
                                    <a href="candidate-dashboard.html" class="d-block">
                                        <i class="la la-user"></i> Account
                                    </a>
                                    <a href="candidate-dashboard-bookmark.html" class="d-block">
                                        <i class="la la-bookmark"></i> Bookmarks
                                    </a>
                                    <a href="candidate-add-resume.html" class="d-block">
                                        <i class="la la-plus"></i> Add a Resume
                                    </a>
                                    <a href="candidate-dashboard.html" class="d-block">
                                        <i class="la la-question"></i> Help
                                    </a>
                                    <a href="candidate-dashboard.html" class="d-block">
                                        <i class="la la-gear"></i> Setting
                                    </a>
                                    <div class="section-block mt-2 mb-2"></div>
                                    <a href="index.html" class="d-block">
                                        <i class="la la-power-off"></i> Logout
                                    </a>
                                </div><!-- end mess__body -->
                            </div><!-- end mess-dropdown -->
                        </div>
                    </div>
                @endguest
                <a href="employer-dashboard-post-job.html" class="theme-btn">Post a Job</a>
            </div><!-- end side-nav-button -->
        </div><!-- end side-menu-wrap -->
    </div><!-- end side-nav-container -->
</header>
<!-- ================================
         END HEADER AREA
================================= -->
