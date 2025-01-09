<x-guest-layout>
    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image particle-area" id="particle-area" style="background-image: url({{ asset('public/images/banner/banner-2.jpg') }});">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="banner-heading text-center">
                        <h1 class="text-white font-weight-bold">The #1 Job Board for Hiring Creative Professionals</h1>
                        <div class="col-md-8 banner-text">
                            <p>Each month, more than 3 million job seekers turn to website in their search for work, making over 140,000 applications every single day</p>
                        </div>
                    </div>
                    <form method="post" class="search-jobs-form">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <input type="text" class="form-control form-control-lg" placeholder="Job title, Company...">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Region">
                                    <option>Anywhere</option>
                                    <option>San Francisco</option>
                                    <option>Palo Alto</option>
                                    <option>New York</option>
                                    <option>Manhattan</option>
                                    <option>Ontario</option>
                                    <option>Toronto</option>
                                    <option>Kansas</option>
                                    <option>Mountain View</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type">
                                    <option>Part Time</option>
                                    <option>Full Time</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <button class="theme-btn btn-style-one btn-lg btn-block btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 popular-keywords">
                                <h3>Trending Keywords:</h3>
                                <ul class="keywords list-unstyled m-0 p-0">
                                    <li><a href="#" class="theme-btn btn-style-three">UI/UX Designer</a></li>
                                    <li><a href="#" class="theme-btn btn-style-three">WordPress</a></li>
                                    <li><a href="#" class="theme-btn btn-style-three">SEO</a></li>
                                    <li><a href="#" class="theme-btn btn-style-three">WEB</a></li>
                                    <li><a href="#" class="theme-btn btn-style-three">PHP</a></li>
                                    <li><a href="#" class="theme-btn btn-style-three">Freelancer</a></li>
                                    <li><a href="#" class="theme-btn btn-style-three">Android</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Most Popular & Trending Jobs Starts -->
    <section class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="sec-title">
                        <span class="title">Lorem ipsum dolor sit amet</span>
                        <h2>Find Your Career You Deserve it</h2>
                    </div>
                </div>
            </div>

            <nav>
                <div class="nav nav-tabs nav-fill mb-5" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All Jobs</a>
                    <a class="nav-item nav-link" id="nav-full-tab" data-toggle="tab" href="#nav-full" role="tab" aria-controls="nav-full" aria-selected="false">Full Time Jobs</a>
                    <a class="nav-item nav-link" id="nav-freelance-tab" data-toggle="tab" href="#nav-freelance" role="tab" aria-controls="nav-freelance" aria-selected="false">Freelancer</a>
                    <a class="nav-item nav-link" id="nav-part-tab" data-toggle="tab" href="#nav-part" role="tab" aria-controls="nav-part" aria-selected="false">Part Time Jobs</a>
                    <a class="nav-item nav-link" id="nav-entern-tab" data-toggle="tab" href="#nav-entern" role="tab" aria-controls="nav-entern" aria-selected="false">Internship</a>
                </div>
            </nav>

            <div class="row extra-mrg">
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon1.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Sales Analytics</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></li>
                                    </ul>
                                    <span class="tag part-time">Part Time</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon2.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Web Designer</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p></li>
                                    </ul>
                                    <span class="tag tg-featuretag freelanc">Freelancer</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon3.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Team Director</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p></li>
                                    </ul>
                                    <span class="tag Internship">Internship</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon4.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Project & Team Head</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325 New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p></li>
                                    </ul>
                                    <span class="tag full-time">Full Time</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon5.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Product Manager</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p></li>
                                    </ul>
                                    <span class="tag full-time">Full Time</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon6.jpg') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Data Entry</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p></li>
                                    </ul>
                                    <span class="tag part-time">Part Time</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon7.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Web Developer</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p></li>
                                    </ul>
                                    <span class="tag freelanc">Freelancer</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon1.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Tasks Management</a></h3>
                                    </div>

                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p></li>
                                    </ul>
                                    <span class="tag Internship">Internship</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-full" role="tabpanel" aria-labelledby="nav-full-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon1.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Sales Analytics</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></li>
                                    </ul>
                                    <span class="tag full-time">Full Time</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon1.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Sales Analytics</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></li>
                                    </ul>
                                    <span class="tag full-time">Full Time</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon2.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Web Designer</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p></li>
                                    </ul>
                                    <span class="tag full-time">Full Time</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon3.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Team Director</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p></li>
                                    </ul>
                                    <span class="tag full-time">Full Time</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon4.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Project & Team Head</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325 New Market, NY</p>

                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li>
                                            <p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p>
                                        </li>
                                    </ul>
                                    <span class="tag full-time">Full Time</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon5.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Product Manager</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li>
                                            <p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p>
                                        </li>
                                    </ul>
                                    <span class="tag full-time">Full Time</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon6.jpg') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Data Entry</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li>
                                        <p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p>
                                        </li>
                                    </ul>
                                    <span class="tag full-time">Full Time</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon7.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Web Developer</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>

                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li>
                                        <p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p>
                                        </li>
                                    </ul>
                                    <span class="tag full-time">Full Time</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-freelance" role="tabpanel" aria-labelledby="nav-freelance-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon1.png') }}" class="img-responsive"
                                    alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Sales Analytics</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                    <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                    <li>
                                        <span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span>
                                    </li>
                                    </ul>
                                    <span class="tag freelanc">Freelancer</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon1.png') }}" class="img-responsive"
                                    alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Sales Analytics</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                    <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                    <li>
                                        <span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span>
                                    </li>
                                    </ul>
                                    <span class="tag freelanc">Freelancer</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon2.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Web Designer</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p></li>
                                    </ul>
                                    <span class="tag freelanc">Freelancer</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon3.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Team Director</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p></li>
                                    </ul>
                                    <span class="tag freelanc">Freelancer</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon4.png') }}" class="img-responsive"
                                    alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                    <h3><a href="job-detail.html">Project & Team Head</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325 New Market, NY</p>

                                    <ul class="grid-view-caption">
                                    <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                    <li>
                                    <p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p>
                                    </li>
                                </ul>
                                <span class="tag freelanc">Freelancer</span>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon5.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Product Manager</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li>
                                            <p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p>
                                        </li>
                                    </ul>
                                    <span class="tag freelanc">Freelancer</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon6.jpg') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Data Entry</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li>
                                            <p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p>
                                        </li>
                                    </ul>
                                    <span class="tag freelanc">Freelancer</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon7.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Web Developer</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li>
                                        <p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p>
                                        </li>
                                    </ul>
                                    <span class="tag freelanc">Freelancer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                    <div class="tab-pane fade" id="nav-part" role="tabpanel" aria-labelledby="nav-part-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon1.png') }}" class="img-responsive"
                                    alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Sales Analytics</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                    <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                    <li>
                                        <span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span>
                                    </li>
                                    </ul>
                                    <span class="tag part-time">Part Time</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon1.png') }}" class="img-responsive"
                                    alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Sales Analytics</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                    <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                    <li>
                                        <span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span>
                                    </li>
                                    </ul>
                                    <span class="tag part-time">Part Time</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon2.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Web Designer</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p></li>
                                    </ul>
                                    <span class="tag part-time">Part Time</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon3.png') }}" class="img-responsive"  alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Team Director</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p></li>
                                    </ul>
                                    <span class="tag part-time">Part Time</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon4.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Project & Team Head</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325 New Market, NY</p>

                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p></li>
                                    </ul>
                                    <span class="tag part-time">Part Time</span>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon5.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Product Manager</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li>
                                            <p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p>
                                        </li>
                                    </ul>
                                    <span class="tag part-time">Part Time</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon6.jpg') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Data Entry</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p></li>
                                    </ul>
                                    <span class="tag part-time">Part Time</span>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon7.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Web Developer</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>

                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li><p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p></li>
                                    </ul>
                                    <span class="tag part-time">Part Time</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-entern" role="tabpanel" aria-labelledby="nav-entern-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon1.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Sales Analytics</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li>
                                            <span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span>
                                        </li>
                                    </ul>
                                    <span class="tag Internship">Internship</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon1.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Sales Analytics</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li>
                                            <span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span>
                                        </li>
                                    </ul>
                                    <span class="tag Internship">Internship</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon2.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Web Designer</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li>
                                        <p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p>
                                        </li>
                                    </ul>
                                    <span class="tag Internship">Internship</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon3.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Team Director</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li>
                                            <p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p>
                                        </li>
                                    </ul>
                                    <span class="tag Internship">Internship</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon4.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Project & Team Head</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325 New Market, NY</p>

                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li>
                                        <p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p>
                                        </li>
                                    </ul>
                                    <span class="tag Internship">Internship</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon5.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Product Manager</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li>
                                            <p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p>
                                        </li>
                                    </ul>
                                    <span class="tag Internship">Internship</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon6.jpg') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Data Entry</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>
                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li>
                                            <p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p>
                                        </li>
                                    </ul>
                                    <span class="tag Internship">Internship</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="grid-view popular-job-list">
                                    <div class="popular-job-company-img"><img src="{{ asset('public/images/logo/icon7.png') }}" class="img-responsive" alt=""/></div>
                                    <div class="popular-job-position mb-3">
                                        <h3><a href="job-detail.html">Web Developer</a></h3>
                                    </div>
                                    <p><span class="icon icon-map-marker"></span> 325, New Market, NY</p>

                                    <ul class="grid-view-caption">
                                        <li><span class="popular-job-time"> <span class="icon icon-clock-o"></span>2h ago</span></li>
                                        <li>
                                            <p><span class="popular-job-salary"><span class="icon icon-money"></span>$110 - 200</span></p>
                                        </li>
                                    </ul>
                                    <span class="tag Internship">Internship</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="#" class="theme-btn btn-style-one">Browse All Jobs</a>
            </div>
        </div>
    </section>


    <!-- Start Counter Area -->
    <section class="counters-area site-section py-5">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="section-title mb-2 text-white">Job Set Site Stats</h2>
                    <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde officiis recusandae sequi excepturi corrupti.</p>
                </div>
            </div>
            <div class="row pb-0 block__19738 section-counter">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter my-4">
                        <div class="counter-icon">
                            <span class="icon icon-file-text"></span>
                        </div>
                        <div class="counter-content">
                            <span class="number timer text-white" data-number="1930">0</span>
                            <label class="mb-0 text-white">Jobs Posted</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="counter my-4">
                        <div class="counter-icon">
                            <span class="icon icon-file"></span>
                        </div>
                        <div class="counter-content">
                            <span class="number timer text-white" data-number="1230">0</span>
                            <label class="mb-0 text-white">Jobs Filled</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="counter my-4">
                        <div class="counter-icon">
                            <span class="icon icon-briefcase"></span>
                        </div>
                        <div class="counter-content">
                            <span class="number timer text-white" data-number="120">0</span>
                            <label class="mb-0 text-white">Companies</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="counter my-4">
                        <div class="counter-icon">
                            <span class="icon icon-users"></span>
                        </div>
                        <div class="counter-content">
                            <span class="number timer text-white" data-number="129">0</span>
                            <label class="mb-0 text-white">Members</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Area -->

    <!-- Offers Section -->
    <section class="offers-section">
        <div class="container">
            <div class="sec-title">
                <span class="title">Open lesser winged midst</span>
                <h2>Featured Cities</h2>
            </div>
            <div class="masonry-items-container row">
                <!-- Projects Block -->
                <div class="projects-block masonry-item col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('public/images/cities/new-york.jpg') }}" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="#">London</a></h3>
                                        <a href="#" class="category">1980</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Projects Block -->
                <div class="projects-block masonry-item col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('public/images/cities/img5.jpg') }}" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="#">New York</a></h3>
                                        <a href="#" class="category">1130</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Projects Block -->
                <div class="projects-block masonry-item col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('public/images/cities/11.jpg') }}" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="#">Liverpool</a></h3>
                                        <a href="#" class="category">620</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Projects Block -->
                <div class="projects-block masonry-item col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('public/images/cities/12.jpg') }}" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="#">Istanbul</a></h3>
                                        <a href="#" class="category">1700</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Projects Block -->
                <div class="projects-block masonry-item col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('public/images/cities/14.jpg') }}" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="#">California</a></h3>
                                        <a href="#" class="category">1139</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Offers Section -->

    <!-- Start Blog Area -->
    <section class="blog-section site-section2">
        <div class="container">
            <div class="sec-title">
                <span class="title">Open lesser winged midst</span>
                <h2>News, Tips & Articles</h2>
            </div>
            <div class="row">
                <!-- News Block Two -->
                <div class="col-lg-4 news-block-two">
                    <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                        <div class="image">
                            <div class="category"><a href="#">Tips & Advice</a></div>
                            <a href="blog-single.html"><img src="{{ asset('public/images/resource/news-5.jpg') }}" alt=""></a>
                            <div class="post-meta-info">
                                <a href="#"><span class="icon icon-eye"></span>21</a>
                                <a href="#"><span class="icon icon-comment"></span>08</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="blog-single.html">11 Tips To Help You Get More Clients</a></h4>
                            <div class="author-info">
                                <div class="thumb"><img src="{{ asset('public/images/resource/author-thumb-1.jpg') }}" alt=""></div>
                                <div class="author-title"><a href="#">Admin</a></div>
                                <div class="date"><span class="icon icon-clock-o"></span>May 14, 2020</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block Two -->
                <div class="col-lg-4 news-block-two">
                    <div class="inner-box wow fadeInDown" data-wow-delay="400ms">
                        <div class="image">
                            <div class="category"><a href="#">Interviews</a></div>
                            <a href="blog-single.html"><img src="{{ asset('public/images/resource/news-6.jpg') }}" alt=""></a>
                            <div class="post-meta-info">
                                <a href="#"><span class="icon icon-eye"></span>14</a>
                                <a href="#"><span class="icon icon-comment"></span>05</a>
                            </div>
                        </div>
                        <div class="lower-content">

                            <h4><a href="blog-single.html">Attract More Attention Sales & Profit</a></h4>
                            <div class="author-info">
                                <div class="thumb"><img src="{{ asset('public/images/resource/author-thumb-1.jpg') }}" alt=""></div>
                                <div class="author-title"><a href="#">Admin</a></div>
                                <div class="date"><span class="icon icon-clock-o"></span>May 05, 2020</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block Two -->
                <div class="col-lg-4 news-block-two">
                    <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                        <div class="image">
                            <div class="category"><a href="#">Tips</a></div>
                            <a href="blog-single.html"><img src="{{ asset('public/images/resource/news-7.jpg') }}" alt=""></a>
                            <div class="post-meta-info">
                                <a href="#"><span class="icon icon-eye"></span>12</a>
                                <a href="#"><span class="icon icon-comment"></span>02</a>
                            </div>
                            <div class="youtube-video-box"><a href="#"><span class="flaticon-logo"></span></a></div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="blog-single.html">An Overworked Newspaper Editor</a></h4>
                            <div class="author-info">
                                <div class="thumb"><img src="{{ asset('public/images/resource/author-thumb-1.jpg') }}" alt=""></div>
                                <div class="author-title"><a href="#">Admin</a></div>
                                <div class="date"><span class="icon icon-clock-o"></span>May 12, 2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Blog Area -->   
    <section class="site-section2">
        <div class="site-blocks-cover bg-image overlay-primary overlay inner-page" style="background-image: url('{{ asset('public/images/hero_3.jpg') }});" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="text-white mb-1">Make a Difference with Your Online Resume!</h2>
                        <p class="text-white mb-4 mt-3">Your resume in minutes with Jobset resume assistant is ready!</p>
                        <p><a href="#" class="theme-btn btn-style-four">Apply For A Job</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Help to Get Started -->
    <section class="help-area site-section2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title">
                        <span class="title">Open lesser winged midst</span>
                        <h2>Let Us Help You To Get Started</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="get-started text-center mb-4">
                        <img src="{{ asset('public/images/resource/search.svg') }}" alt="help">
                        <h3>Looking for a Job?</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        <a href="#" class="theme-btn btn-style-one">Find A Job</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="get-started text-center mb-4">
                        <img src="{{ asset('public/images/resource/podcast.svg') }}" alt="help">
                        <h3>Employers to Post a Job?</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        <a href="#" class="theme-btn btn-style-one">Post A Job</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="get-started text-center mb-4">
                        <img src="{{ asset('public/images/resource/data-points.svg') }}" alt="help">
                        <h3>Job Market Data</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        <a href="#" class="theme-btn btn-style-one">Get Data</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Help to Get Started End -->

    <!-- Start Compnies Area -->
    <section class="client-section site-section">
        <div class="container">
            <div class="sponsors-carousel owl-carousel">
                <div class="image"><a href="#"><img src="{{ asset('public/images/clients/sponsor1.jpg') }}" alt=""></a></div>
                <div class="image"><a href="#"><img src="{{ asset('public/images/clients/sponsor2.jpg') }}" alt=""></a></div>
                <div class="image"><a href="#"><img src="{{ asset('public/images/clients/sponsor3.jpg') }}" alt=""></a></div>
                <div class="image"><a href="#"><img src="{{ asset('public/images/clients/sponsor4.jpg') }}" alt=""></a></div>
                <div class="image"><a href="#"><img src="{{ asset('public/images/clients/sponsor5.jpg') }}" alt=""></a></div>
                <div class="image"><a href="#"><img src="{{ asset('public/images/clients/sponsor6.jpg') }}" alt=""></a></div>
                <div class="image"><a href="#"><img src="{{ asset('public/images/clients/sponsor7.jpg') }}" alt=""></a></div>
                <div class="image"><a href="#"><img src="{{ asset('public/images/clients/sponsor8.jpg') }}" alt=""></a></div>
            </div>
        </div>
    </section>
    <!-- End  Companies Area -->

    <!-- Start Mobile Area -->
    <section class="mobile-section pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('{{ asset('public/images/parallax7.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
                    <h2 class="text-white">Get The Mobile Apps</h2>
                    <p class="mb-5 lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
                    <p class="mb-0">
                        <a href="#" class="theme-btn btn-style-three"><span class="icon-apple mr-3"></span>App Store</a>
                        <a href="#" class="theme-btn btn-style-three"><span class="icon-android mr-3"></span>Play Store</a>
                    </p>
                </div>
                <div class="col-md-6 mobile-image ml-auto align-self-end">
                    <img src="{{ asset('public/images/mobile.png') }}" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- End  Mobile Area -->

    <!-- Need Help Box Starts -->
    <div class="pricing-box site-section">
        <div class="container">
            <div class="sec-title">
                <span class="title">Lorem ipsum dolor sit</span>
                <h2>Need Any Help?</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="info-box1 bg-light mb-4 mb-md-0">
                    <h4>Chat Us Online</h4>
                    <p>Lorem ipsum dolor sit amet elit ul consectetur adipisicing.</p>
                    <a href="#">Click here for chat</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="info-box2 bg-primary mb-4">
                    <h4>Call us!</h4>
                    <p>Lorem ipsum dolor sit amet elit ul consectetur adipisicing.</p>
                    <a href="tel:0011234123">(001) 1234 123 123</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="info-box3 bg-dark mb-4">
                    <h4>Read our latest news</h4>
                    <p>Lorem ipsum dolor sit amet elit ul consectetur adipisicing.</p>
                    <a href="post-job.html">Post a Job</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Box End -->
</x-guest-layout>
