@extends('layouts.app')

@section('content')



    <!-- Header -->
    <a name="header"></a>
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1><img class="banner-logo" src="img/logo1.png" alt="">Manifest 64</h1>

            <form action="/search" method="get">
                {{csrf_field()}}
                <div class="col-sm-4 col-md-2 col-sm-offset-4 col-md-offset-5">
                    <input type="text" class="form-control" placeholder="Search people..." name="searchQuery">
                    <button type="Search"  class="btn btn-dark btn-lg" >Submit</button>
                </div>
            </form>
            <br>
            <form action="/ships" method="get">
                {{csrf_field()}}
                <div class="col-sm-4 col-md-2 col-sm-offset-4 col-md-offset-5">
                    <input type="text" class="form-control" placeholder="Search ships..." name="searchQuery">
                    <button type="Search"  class="btn btn-dark btn-lg" >Submit</button>
                </div>
            </form>
        </div>
    </header>
    <!-- /.intro-header -->

    <a  name="about"></a>
    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-7 col-lg-offset-1 col-sm-push-4  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">What is Manifest 64?</h2>
                    <p class="lead">
                        Manifest 64 allows users to easily access Queensland immigration records spanning from 1848 to 1912. Manifest 64 provides an efficient search functionality which allows users to quickly locate the information they seek, in an organized and detailed manner. In addition to the search functionality, Manifest 64 also boasts a unique ‘explore’ functionality which allows users  to see visual representations of the existing data such as tables and maps.
                    </p>
                    <p class="lead">
                        Manifest 64 is built upon the existing digital immigration records located on the Queensland State Archives website, the original home of these records. Currently the QSA website does allow users to locate immigration records, however, this task has proven tedious and sometimes unfruitful as PDF files had to be rummaged through manually. As you can imagine, this task could take large amounts of precious time.
                    </p>                </div>
                <div class="col-lg-3 col-sm-pull-8  col-sm-6">
                    <img class="img-responsive" src="img/imacScreen.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div>




    <a  name="features"></a>
    <div class="content-section-b">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="fa fa-search fa-fw"></i>
                                    <h3>Keyword Search</h3>
                                    <p class="text-muted">Search through the archives by either person or ship name!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="fa fa-area-chart fa-fw"></i>
                                    <h3>Infographics</h3>
                                    <p class="text-muted">With Manifest 64, you can now visualise the data in cool and interesting ways!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="fa fa-expand fa-fw"></i>
                                    <h3>Responsive Design</h3>
                                    <p class="text-muted">The website looks great on all devices, including Desktops, iPads and Phones!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="fa fa-graduation-cap fa-fw"></i>
                                    <h3>Education</h3>
                                    <p class="text-muted">Teach students about the history of immigration with our in-class activities!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="img-responsive center-block" src="img/iphoneScreen.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
    <a  name="video"></a>
    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="row" id="video">
                    <h1>Check out our kickstarter video!</h1>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wmxFliCLwNU"></iframe>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <a name="register"></a>
    <a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    <h2>Would you like to keep updated?</h2>
                </div>
                <div class="col-lg-4">
                    <ul class="list-inline banner-social-buttons">
                        <form action="interest.php" method="post">
                            <button name="yes" class="btn btn-default btn-lg"><i class="fa fa-sign-in fa-fw"></i> <span class="network-name">Register Here!</span></button>
                        </form>

                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#features">Features</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#video">Video</a>
                        </li>
                        <li>
                            <a href="#register">Register</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">        Copyright &copy; <a href="#home">Scrumbledore's Army</a> & <a href="http://www.archives.qld.gov.au/">Queensland State Archives</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
@endsection
