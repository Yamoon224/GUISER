<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div> 

<header class="site-navbar" id="mynavbarst">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="site-logo col-6"><a href="index.html"> <img src="{{ asset('public/images/logo-white.png') }}" class="img-responsive" alt="Logo Image"></a></div>

            <nav class="mx-auto site-navigation">
                <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                    <li class="has-children">
                        <a href="#" class="nav-link active">Home</a>
                        <ul class="dropdown">
                            <li><a href="index.html" class="active">Homepage 1</a></li>
                            <li><a href="index-2.html">Homepage 2</a></li>
                            <li><a href="index-3.html">Homepage 3</a></li>
                            <li><a href="index-4.html">Homepage 4</a></li>
                        </ul>
                    </li>
                
                    <li class="has-children">
                        <a href="#">Employers</a>
                        <ul class="dropdown">
                            <li><a href="employer-listing.html">Employer Listing</a></li>
                            <li><a href="employer-detail.html">Employer Details</a></li>
                            <li><a href="post-job.html">Post a Job</a></li>
                            <li><a href="admin/dashboard-employer.html">Dashboard</a></li>
                        </ul>
                    </li>

                    <li class="has-children">
                        <a href="#">Candidates</a>
                        <ul class="dropdown">
                            <li><a href="candidate-listing.html">Candidate Listing</a></li>
                            <li><a href="submit-candidate.html">Add a Candidate</a></li>
                            <li><a href="candidate-single.html">Candidate Detail</a></li>
                            <li><a href="admin/dashboard-candidates.html">Dashboard</a></li>
                        </ul>
                    </li>

                    <li class="has-children">
                        <a href="#">Jobs</a>
                        <ul class="dropdown">
                            <li><a href="job-listing.html">Job Listing</a></li>
                            <li><a href="job-grid.html">Job Grid</a></li>
                            <li><a href="job-grid.html">Job Grid Sidebar</a></li>
                            <li><a href="job-detail.html">Job Detail</a></li>
                        </ul>
                    </li>

                    <li class="has-children">
                        <a href="#">Pages</a>
                        <ul class="dropdown">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="pricing.html">Pricing Table</a></li>
                            <li><a href="faq.html">FAQ's</a></li>
                            <li><a href="404.html">404 Error Page</a></li>               
                        </ul>
                    </li>

                    <li class="has-children">
                        <a href="#">Blog</a>
                        <ul class="dropdown">
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-classic.html">Blog Classic</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                <div class="ml-auto">
                    <a href="post-job.html" class="theme-btn btn-style-three border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>
                    <a href="javascript()" data-toggle="modal" data-target="#tg-login" class="theme-btn btn-style-four border-width-2 d-none d-lg-inline-block">
                        <span class="mr-2 icon-lock_outline"></span>Log In
                    </a>
                </div>
                <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
            </div>
        </div>
    </div>
</header>