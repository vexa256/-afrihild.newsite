<!-- Start header -->
<header id="header" class="wpo-site-header">
    <nav class="navigation navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                    <div class="mobail-menu">
                        <button type="button" class="navbar-toggler open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar first-angle"></span>
                            <span class="icon-bar middle-angle"></span>
                            <span class="icon-bar last-angle"></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html"><img
                                src="assets/images/logo.png"
                                alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-1 col-1">
                    <div id="navbar"
                        class="collapse navbar-collapse navigation-holder">
                        <button class="menu-close"><i
                                class="ti-close"></i></button>
                        <ul class="nav navbar-nav mb-2 mb-lg-0">
                            <li class="menu-item-has-children">
                                <a class="active"
                                    href="{{ url('/') }}">Home</a>
                            </li>
                            <!-- <li class="menu-item-has-children">
                    <a  href="index.html#"></a>
                    <ul class="sub-menu">
                        <li><a href="cause.html">Causes</a></li>
                        <li><a href="cause-single.html">Causes Single</a></li>
                    </ul>
                </li> -->
                            <li class="menu-item-has-children">
                                <a href="#">About</a>
                                <ul class="sub-menu">
                                    <li><a
                                            href="{{ route('AboutTheAfriChildCenterMakerere') }}">About
                                            AfriChild</a>
                                    </li>
                                    <li><a
                                            href="{{ route('OurWorkAtAfriChildCenterMakerere') }}">Our
                                            Work</a></li>
                                    <li>
                                        <a
                                            href="{{ route('TheAfriChildCenterBoardOfDirectors') }}">Board
                                            of
                                            Directors</a>
                                    </li>
                                    <li><a
                                            href="{{ route('TheAfriChildSecretariatTeam') }}">The
                                            Secreteriat</a></li>
                                    <li><a
                                            href="{{ route('TheAfriChildCoreProgramAreas') }}">Core
                                            Programs</a>
                                    </li>
                                    <li>
                                        <a
                                            href="{{ route('AfriChildFounders') }}">Founding
                                            Partners</a>
                                    </li>
                                    <li>
                                        <a
                                            href="{{ route('AfriChildCenterMakerereResearchAssociates') }}">Research
                                            Associates</a>
                                    </li>
                                    <li>
                                        <a
                                            href="{{ route('AfriChildPromotingPartners') }}">Promoting
                                            Partners</a>
                                    </li>
                                    <li><a
                                            href="{{ route('AfriChildCenterMakerereAffiliates') }}">Affiliates</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a
                                    href="{{ route('AfriChildCenterGallery') }}">Gallery</a>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#">Staff Area</a>
                                <ul class="sub-menu">
                                    <li><a
                                            href="https://AfriChild.cloud/login">MIS</a>
                                    </li>
                                    <li><a
                                            href="https://afrimanager.AfriChild.cloud/login">WEB-INV</a>
                                    </li>
                                </ul>
                            </li>

                            <li><a
                                    href="{{ route('Afri_Child_Center_Makerere_Contact_Us') }}">Contact</a>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#">Resources</a>
                                <ul class="sub-menu">
                                    <li><a
                                            href="{{ route('AfriChildResearchPublications') }}">Research</a>
                                    </li>
                                    <li><a
                                            href="{{ asset('AfriChildCenterReports') }}">Reports</a>
                                    </li>
                                    <li><a
                                            href="{{ asset('AfriChildCenterPolicyBriefs') }}">Policy
                                            Briefs</a>
                                    </li>


                                    <li  class="myDiv"> <a target="_blank" href="https://hub.AfriChild.cloud/">Knowledge Hub</a>
                                </li>


                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- end of nav-collapse -->
                </div>
                <div class="col-lg-3 col-md-2 col-2">
                    <div class="header-right">
                        <div class="close-form">
                            <a class="theme-btn"
                                href="https://hub.AfriChild.cloud/">Knowledge
                                Hub</a>
                        </div>
                        {{-- <div class="header-search-form-wrapper">
                            <div class="cart-search-contact">
                                <button class="search-toggle-btn">
                                    <i class="fa fa-search"></i>
                                </button>
                                <div class="header-search-form">
                                    <form>
                                        <div>
                                            <input type="text"
                                                class="form-control"
                                                placeholder="Search here..." />
                                            <button type="submit">
                                                <i
                                                    class="fi flaticon-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- end of container -->
    </nav>
</header>
<!-- end of header -->
