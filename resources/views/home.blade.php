
@include('layouts.header')
    <div class="section-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-xs 12">
                    <div class="content-logo pt-5">
                        <a href="{{ route('accueil') }}"><img src="../images/logo.svg" alt="Logo"></a>
                    </div>
                    <div class="head-title">
                        <h1>We are <br>Orchestra!</h1>
                        <div class="paragram"> 
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </div>
                        <a href="">Learn more</a>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-xs 12 text-right"  style="background-image: url('images/i3.jpeg'); height: 100vh; background-size: cover; background-position: center; position: relative;">
                    <div class="menu-block">
                        <nav class="menu-nav">
                            <a class="menu-nav__link" href="{{ route('accueil') }}">Home</a>
                            <a class="menu-nav__link" href="#ourvalues">Our Values</a>
                            <a class="menu-nav__link" href="{{ route('work.index') }}">Work</a>
                            <a class="menu-nav__link" href="{{ route('blog.index') }}">Press</a>
                            <a class="menu-nav__link" href="#">Our Agencies</a>
                            <a class="menu-nav__link" href="#contact">Contacts</a>
                        </nav>
                        <a href="#" class="menu-btn">
                            <span></span>
                        </a>
                    </div>
                    <div class="line-divider"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-2" id="ourvalues">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-xs 12">
                    <div class="head-title head-title-2">
                        <h1>Providing African <br>Solutions to African <br>Problems.</h1>
                        <div class="paragram"> 
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </div>
                        <a href="">Learn more</a>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-xs 12 text-right"  style="background-image: url('images/i1.jpeg'); height: 100vh; background-size: cover; background-position: center; position: relative;">
                    <div class="line-divider-2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid section-3">
        <div class="head-title-3">
            <h1>Leadership</h1>
            <div class="paragram-3"> 
                A versitle team of decison markers
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide content-slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner slide-content">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="item-slide-content">
                                <a href="{{ route('leadership.show') }}">
                                    <img class="d-block w-100" src="images/i1.jpeg" alt="First slide">
                                </a>
                                <div class="slide-title-item">
                                    <h4>Tendai Moyo</h4>
                                    <h6>Chairman and CEO</h6>
                                </div>     
                            </div>                             
                        </div>
                        <div class="col-md-3">
                            <div class="item-slide-content">
                                <a href="{{ route('leadership.show') }}">
                                    <img class="d-block w-100" src="images/i3.jpeg" alt="Second slide">
                                </a>
                                <div class="slide-title-item">
                                    <h4>Tendai Moyo</h4>
                                    <h6>Chairman and CEO</h6>
                                </div>     
                            </div>  
                        </div>
                        <div class="col-md-3">
                            <div class="item-slide-content">
                                <a href="{{ route('leadership.show') }}">
                                    <img class="d-block w-100" src="images/i1.jpeg" alt="First slide">
                                </a>
                                <div class="slide-title-item">
                                    <h4>Tendai Moyo</h4>
                                    <h6>Chairman and CEO</h6>
                                </div>     
                            </div>  
                        </div>
                        <div class="col-md-3">
                            <div class="item-slide-content">
                                <a href="{{ route('leadership.show') }}">
                                    <img class="d-block w-100" src="images/i3.jpeg" alt="Second slide">
                                </a>
                                <div class="slide-title-item">
                                    <h4>Tendai Moyo</h4>
                                    <h6>Chairman and CEO</h6>
                                </div>     
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="item-slide-content">
                                <a href="{{ route('leadership.show') }}">
                                    <img class="d-block w-100" src="images/i1.jpeg" alt="First slide">
                                </a>
                                <div class="slide-title-item">
                                    <h4>Tendai Moyo</h4>
                                    <h6>Chairman and CEO</h6>
                                </div>     
                            </div>  
                        </div>
                        <div class="col-md-3">
                            <img class="d-block w-100" src="images/i3.jpeg" alt="Second slide">
                        </div>
                        <div class="col-md-3">
                            <img class="d-block w-100" src="images/i1.jpeg" alt="Third slide">
                        </div>
                        <div class="col-md-3">
                            <div class="item-slide-content">
                                <a href="{{ route('leadership.show') }}">
                                    <img class="d-block w-100" src="images/i3.jpeg" alt="Second slide">
                                </a>
                                <div class="slide-title-item">
                                    <h4>Tendai Moyo</h4>
                                    <h6>Chairman and CEO</h6>
                                </div>     
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="item-slide-content">
                                <a href="{{ route('leadership.show') }}">
                                    <img class="d-block w-100" src="images/i1.jpeg" alt="First slide">
                                </a>
                                <div class="slide-title-item">
                                    <h4>Tendai Moyo</h4>
                                    <h6>Chairman and CEO</h6>
                                </div>     
                            </div>  
                        </div>
                        <div class="col-md-3">
                            <img class="d-block w-100" src="images/i3.jpeg" alt="Second slide">
                        </div>
                        <div class="col-md-3">
                            <div class="item-slide-content">
                                <a href="{{ route('leadership.show') }}">
                                    <img class="d-block w-100" src="images/i1.jpeg" alt="First slide">
                                </a>
                                <div class="slide-title-item">
                                    <h4>Tendai Moyo</h4>
                                    <h6>Chairman and CEO</h6>
                                </div>     
                            </div>  
                        </div>
                        <div class="col-md-3">
                            <div class="item-slide-content">
                                <a href="{{ route('leadership.show') }}">
                                    <img class="d-block w-100" src="images/i3.jpeg" alt="Second slide">
                                </a>
                                <div class="slide-title-item">
                                    <h4>Tendai Moyo</h4>
                                    <h6>Chairman and CEO</h6>
                                </div>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        <div class="paragram-title-3 mt-3 text-white"> 
            Board of Directors
        </div>
    </div>



@include('layouts.contact')
@include('layouts.footer')