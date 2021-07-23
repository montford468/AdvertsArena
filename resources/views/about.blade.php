@extends('layouts.app')
@section('content')

<div class="page-header" style="background: url(img/banner1.jpg);">
    <div class="container">
    <div class="row in">
    <div class="col-md-12">
    <div class="breadcrumb-wrapper">
    <h2 class="product-title">About Us</h2>
    <ol class="breadcrumb">
    <li><a href="#">Home /</a></li>
    <li class="current">About Us</li>
    </ol>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <section id="about" class="section-padding">
    <div class="container">
    <div class="row">
    <div class="col-md-6 col-lg-6 col-xs-12">
    <div class="about-wrapper">
    <h2 class="intro-title">Why We Are Unique</h2>
    <p class="intro-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum, doloremque quaerat sit tempora eius est reiciendis accusamus magnam quae. Explicabo dolore officia, iure a ullam aliquam nemo excepturi, repellat. uod ut delectus ad tempora.
    </p>
    <a href="#" class="btn btn-common btn-lg">Add Listing</a>
    </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xs-12">
    <img class="img-fluid" src="{{asset('img/about/about.png')}}" alt="">
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="counter-section section-padding">
    <div class="container">
    <div class="row">
    
    <div class="col-md-3 col-sm-6 work-counter-widget">
    <div class="counter">
    <div class="icon"><i class="lni-layers"></i></div>
    <h2 class="counterUp">8325</h2>
    <p>Ad Posted</p>
    </div>
    </div>
    
    <div class="col-md-3 col-sm-6 work-counter-widget">
    <div class="counter">
    <div class="icon"><i class="lni-users"></i></div>
    <h2 class="counterUp">5487</h2>
    <p>Members</p>
    </div>
    </div>
    
    <div class="col-md-3 col-sm-6 work-counter-widget">
    <div class="counter">
    <div class="icon"><i class="lni-briefcase"></i></div>
    <h2 class="counterUp">2012</h2>
    <p>Premium Ads</p>
    </div>
    </div>
    
    <div class="col-md-3 col-sm-6 work-counter-widget">
    <div class="counter">
    <div class="icon"><i class="lni-map"></i></div>
    <h2 class="counterUp">200</h2>
    <p>Locations</p>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="services section-padding">
    <div class="container">
    <div class="row">
    
    <div class="col-md-6 col-lg-4 col-xs-12">
    <div class="services-item wow fadeInRight" data-wow-delay="0.2s">
    <div class="icon">
    <i class="lni-book"></i>
    </div>
    <div class="services-content">
    <h3><a href="#">Full Documented</a></h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
    </div>
    </div>
    </div>
    
    <div class="col-md-6 col-lg-4 col-xs-12">
    <div class="services-item wow fadeInRight" data-wow-delay="0.4s">
    <div class="icon">
    <i class="lni-leaf"></i>
    </div>
    <div class="services-content">
    <h3><a href="#">Clean & Modern Design</a></h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
    </div>
    </div>
    </div>
    
    <div class="col-md-6 col-lg-4 col-xs-12">
    <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
    <div class="icon">
    <i class="lni-map"></i>
    </div>
    <div class="services-content">
    <h3><a href="#">Great Features</a></h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
    </div>
    </div>
    </div>
    
    <div class="col-md-6 col-lg-4 col-xs-12">
    <div class="services-item wow fadeInRight" data-wow-delay="0.8s">
    <div class="icon">
    <i class="lni-cog"></i>
    </div>
    <div class="services-content">
    <h3><a href="#">Completely Customizable</a></h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
    </div>
    </div>
    </div>
    
    <div class="col-md-6 col-lg-4 col-xs-12">
    <div class="services-item wow fadeInRight" data-wow-delay="1s">
    <div class="icon">
    <i class="lni-git"></i>
    </div>
    <div class="services-content">
    <h3><a href="#">User Friendly</a></h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
    </div>
    </div>
    </div>
    
    <div class="col-md-6 col-lg-4 col-xs-12">
    <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
    <div class="icon">
    <i class="lni-layout"></i>
    </div>
    <div class="services-content">
    <h3><a href="#">Awesome Layout</a></h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    

    <footer>
    
    <section class="footer-Content">
    <div class="container">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
    <div class="widget">
    <div class="footer-logo"><img src="{{asset('img/logo.png')}}" alt=""></div>
    <div class="textwidget">
    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt consectetur, adipisci velit.</p>
    </div>
    <ul class="mt-3 footer-social">
    <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
    <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
    <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
    <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
    </ul>
    </div>
    </div>

    <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
        <div class="widget">
        <h3 class="block-title">Quick Link</h3>
        <ul class="menu">
        <li><a href="#">- About Us</a></li>
        <li><a href="#">- Blog</a></li>
        <li><a href="#">- Events</a></li>
        <li><a href="#">- Shop</a></li>
        <li><a href="#">- FAQ's</a></li>
        </ul>
        </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
        <div class="widget">
        <h3 class="block-title">Contact Info</h3>
        <ul class="contact-footer">
        <li>
        <strong><i class="lni-phone"></i></strong><span>0558489398 <br> 0501660272 </span>
        </li>
        
        </ul>
        </div>
        </div>
        </div>
        </div>
        </section>
        
        
        <div id="copyright">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="site-info text-center">
        
    
    
    </div>
    </div>
    </div>
    </div>
    </div>
    
@endsection