@extends('layouts.app')

@section('content')
<div id="hero-area">
    <div class="overlay"></div>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12 col-lg-9 col-xs-12 text-center">
    <div class="contents">
    <h1 class="head-title">Welcome to The <span class="year">Adverts Arena</span></h1>
    <p>Buy and sell everything on mind!</p>
    <div class="search-bar">
    <div class="search-inner">
    <form class="search-form">
    <div class="form-group">
    <input type="text" name="customword" class="form-control" placeholder="searching for something?">
    </div>
    <div class="form-group inputwithicon">
    <div class="select">
    <select>
        <option value="none">Locations</option>
        <option value="none">Central Region</option>
        <option value="none">Ashanti Region</option>
        <option value="none">Greater Accra Region</option>
        <option value="none">Bono Region</option>
        <option value="none">Ahafo Region</option>
        <option value="none">Eastern Region</option>
    </select>
    </div>
    <i class="lni-target"></i>
    </div>
    <div class="form-group inputwithicon">
    <div class="select">
    <select>
    <option value="none">Select Catagory</option>
    <option value="none">Jobs</option>
    <option value="none">Electronics</option>
    <option value="none">Mobile</option>
    <option value="none">Training</option>
    <option value="none">Pets</option>
    <option value="none">Real Estate</option>
    <option value="none">Services</option>
    <option value="none">Training</option>
    <option value="none">Vehicles</option>
    </select>
    </div>
    <i class="lni-menu"></i>
    </div>
    <button class="btn btn-common" type="button"><i class="lni-search"></i> Search Now</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
<section id="categories">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-10 col-md-12 col-xs-12">
    <div id="categories-icon-slider" class="categories-wrapper owl-carousel owl-theme">
    <div class="item">
    <a href="/category">
    <div class="category-icon-item">
    <div class="icon-box">
    <div class="icon">
    <img src="{{asset('img/category/img-1.png')}}" alt="">
    </div>
    <h4>Vehicle</h4>
    </div>
    </div>
    </a>
    </div>
    <div class="item">
    <a href="/category">
     <div class="category-icon-item">
    <div class="icon-box">
    <div class="icon">
    <img src="{{asset('img/category/img-2.png')}}" alt="">
    </div>
    <h4>Furniture</h4>
    </div>
    </div>
    </a>
    </div>
    <div class="item">
    <a href="/category">
    <div class="category-icon-item">
    <div class="icon-box">
    <div class="icon">
    <img src="{{asset('img/category/img-3.png')}}" alt="">
    </div>
    <h4>Phones</h4>
    </div>
    </div>
    </a>
    </div>
    <div class="item">
    <a href="/category">
    <div class="category-icon-item">
    <div class="icon-box">
    <div class="icon">
    <img src="{{asset('img/category/img-4.png')}}" alt="">
    </div>
    <h4>Electronic</h4>
    </div>
    </div>
    </a>
    </div>
    <div class="item">
    <a href="/category">
    <div class="category-icon-item">
    <div class="icon-box">
    <div class="icon">
    <img src="{{asset('img/category/img-5.png')}}" alt="">
    </div>
    <h4>Toys</h4>
    </div>
    </div>
    </a>
    </div>
    <div class="item">
    <a href="/category">
    <div class="category-icon-item">
    <div class="icon-box">
    <div class="icon">
    <img src="{{asset('img/category/img-6.png')}}" alt="">
    </div>
    <h4>Cloths</h4>
    </div>
    </div>
    </a>
    </div>
    <div class="item">
    <a href="/category">
    <div class="category-icon-item">
    <div class="icon-box">
    <div class="icon">
    <img src="{{asset('img/category/img-1.png')}}" alt="">
    </div>
    <h4>jobs</h4>
    </div>
    </div>
    </a>
    </div>
    <div class="item">
    <a href="/category">
    <div class="category-icon-item">
    <div class="icon-box">
    <div class="icon">
    <img src="{{asset('img/category/img-1.png')}}" alt="">
    </div>
    <h4>Real Estate</h4>
    </div>
    </div>
    </a>
    </div>
    <div class="item">
    <a href="/category">
    <div class="category-icon-item">
    <div class="icon-box">
    <div class="icon">
    <img src="{{asset('img/category/img-1.png')}}" alt="">
    </div>
    <h4>Laptops</h4>
    </div>
    </div>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="featured section-padding">
    <div class="container">
    <h1 class="section-title">Latest Products</h1>
    <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <div class="featured-box">
    <figure>
    <div class="icon">
    <span class="bg-green"><i class="lni-heart"></i></span>
    <span><i class="lni-bookmark"></i></span>
    </div>
    <a href="#"><img class="img-fluid" src="{{asset('img/featured/img-1.jpg')}}" alt=""></a>
    </figure>
    <div class="feature-content">
    <div class="product">
    <a href="#">Electronic > </a>
    <a href="#">Cameras</a>
    </div>
    <h4><a href="/adsdetail">Canon SX Powershot</a></h4>
    <div class="meta-tag">
    <span>
    <a href="#"><i class="lni-user"></i> John Ampah</a>
    </span>
    <span>
    <a href="#"><i class="lni-map-marker"></i> Kumasi, Ghana</a>
    </span>
    <span>
    <a href="#"><i class="lni-tag"></i> Canon</a>
    </span>
    </div>
    <p class="dsc">Slightly used with no fault and powerful battery strenght</p>
    <div class="listing-bottom">
    <h3 class="price float-left">Cedis 249.00</h3>
    <a href="/adsdetail" class="btn btn-common float-right">View Details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <div class="featured-box">
    <figure>
    <span class="price-save">
    25% Save
    </span>
    <div class="icon">
    <span class="bg-green"><i class="lni-heart"></i></span>
    <span><i class="lni-bookmark"></i></span>
    </div>
    <a href="#"><img class="img-fluid" src="{{asset('img/featured/img-2.jpg')}}" alt=""></a>
    </figure>
    <div class="feature-content">
    <div class="product">
    <a href="#">Electronic > </a>
    <a href="#">Computers</a>
    </div>
    <h4><a href="/adsdetail">Apple Macbook Pro</a></h4>
    <div class="meta-tag">
    <span>
    <a href="#"><i class="lni-user"></i> Sarah Kyei</a>
    </span>
    <span>
    <a href="#"><i class="lni-map-marker"></i> Accra, Ghana</a>
    </span>
    <span>
    <a href="#"><i class="lni-tag"></i> Phones</a>
    </span>
    </div>
    <p class="dsc">Fresh in box. negotiable.</p>
    <div class="listing-bottom">
    <h3 class="price float-left">289.00 cedis</h3>
    <a href="/adsdetail" class="btn btn-common float-right">View Details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <div class="featured-box">
    <figure>
    <div class="icon">
    <span class="bg-green"><i class="lni-heart"></i></span>
    <span><i class="lni-bookmark"></i></span>
    </div>
    <a href="#"><img class="img-fluid" src="{{asset('img/featured/img-3.jpg')}}" alt=""></a>
    </figure>
    <div class="feature-content">
    <div class="product">
    <a href="#">Vehicle > </a>
    <a href="#">Cars</a>
    </div>
    <h4><a href="/adsdetail">Mercedes Benz E200 </a></h4>
    <div class="meta-tag">
    <span>
    <a href="#"><i class="lni-user"></i> Don Prince</a>
    </span>
    <span>
    <a href="#"><i class="lni-map-marker"></i> Abuja, Nigeria</a>
    </span>
    <span>
    <a href="#"><i class="lni-tag"></i> Vehicle</a>
    </span>
    </div>
    <p class="dsc">Negotiable without duty charges.</p>
    <div class="listing-bottom">
    <h3 class="price float-left">19999.00 niara</h3>
    <a href="/adsdetail" class="btn btn-common float-right">View Details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <div class="featured-box">
    <figure>
    <span class="price-save">
    10% Save
    </span>
    <div class="icon">
    <span class="bg-green"><i class="lni-heart"></i></span>
    <span><i class="lni-bookmark"></i></span>
    </div>
    <a href="#"><img class="img-fluid" src="{{asset('img/featured/img-4.jpg')}}" alt=""></a>
    </figure>
    <div class="feature-content">
    <div class="product">
    <a href="#">Others > </a>
    <a href="#">Bags</a>
    </div>
    <h4><a href="/adsdetail">Brown Leather Bag</a></h4>
    <div class="meta-tag">
    <span>
    <a href="#"><i class="lni-user"></i> Agnes Zoe</a>
    </span>
    <span>
    <a href="#"><i class="lni-map-marker"></i> Abidjan, Ivory Coast</a>
    </span>
    <span>
    <a href="#"><i class="lni-tag"></i> Gucci</a>
    </span>
    </div>
    <p class="dsc">sunny weather and rain friendly </p>
    <div class="listing-bottom">
    <h3 class="price float-left">206.90 CFA Franc</h3>
    <a href="/adsdetail" class="btn btn-common float-right">View Details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <div class="featured-box">
    <figure>
    <div class="icon">
    <span class="bg-green"><i class="lni-heart"></i></span>
    <span><i class="lni-bookmark"></i></span>
    </div>
    <a href="#"><img class="img-fluid" src="{{asset('img/featured/img-5.jpg')}}" alt=""></a>
    </figure>
    <div class="feature-content">
    <div class="product">
    <a href="#">Electronic > </a>
    <a href="#">Apple</a>
    </div>
    <h4><a href="/adsdetail">Iphone 6 Plus</a></h4>
    <div class="meta-tag">
    <span>
    <a href="#"><i class="lni-user"></i> Koseh Sam</a>
    </span>
    <span>
    <a href="#"><i class="lni-map-marker"></i> Sunyani, Ghana</a>
    </span>
    <span>
    <a href="#"><i class="lni-tag"></i> Apple</a>
    </span>
    </div>
    <p class="dsc">Factory unlocked, 64GB Memory</p>
    <div class="listing-bottom">
    <h3 class="price float-left">106.70 cedis</h3>
    <a href="/adsdetail" class="btn btn-common float-right">View Details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
    <div class="featured-box">
    <figure>
    <span class="price-save">
    35% Save
    </span>
    <div class="icon">
    <span class="bg-green"><i class="lni-heart"></i></span>
    <span><i class="lni-bookmark"></i></span>
    </div>
    <a href="#"><img class="img-fluid" src="{{asset('img/featured/img-6.jpg')}}" alt=""></a>
    </figure>
    <div class="feature-content">
    <div class="product">
    <a href="#">Furniture > </a>
    <a href="#">Home</a>
    </div>
    <h4><a href="/adsdetail">Wooden Dining Table</a></h4>
    <div class="meta-tag">
    <span>
    <a href="#"><i class="lni-user"></i> miriam Ansah</a>
    </span>
    <span>
    <a href="#"><i class="lni-map-marker"></i> Cape Coast, Ghana</a>
    </span>
    <span>
    <a href="#"><i class="lni-tag"></i> Apple</a>
    </span>
    </div>
    <p class="dsc">Folderable, made of hard wood</p>
    <div class="listing-bottom">
    <h3 class="price float-left">120.00 cedis</h3>
    <a href="/adsdetail" class="btn btn-common float-right">View Details</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="featured-lis section-padding">
    <div class="container">
    <div class="row">
    <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
    <h3 class="section-title">Featured Products</h3>
    <div id="new-products" class="owl-carousel owl-theme">
    <div class="item">
    <div class="product-item">
    <div class="carousel-thumb">
    <img class="img-fluid" src="{{asset('img/product/img-1.jpg')}}" alt="">
    <div class="overlay">
    <div>
    <a class="btn btn-common" href="/adsdetail">View Details</a>
    </div>
    </div>
    <div class="btn-product bg-sale">
    <a href="#">Sale</a>
    </div>
    <span class="price">1999.00 cedis</span>
    </div>
    <div class="product-content">
    <h3 class="product-title"><a href="/adsdetail">Macbook Pro 2020</a></h3>
    <span>Electronic / Computers</span>
    <div class="icon">
    <span><i class="lni-bookmark"></i></span>
    <span><i class="lni-heart"></i></span>
    </div>
    <div class="card-text">
    <div class="float-left">
    <span class="icon-wrap">
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star"></i>
    </span>
    <span class="count-review">
    (12 Review)
    </span>
    </div>
    <div class="float-right">
    <a class="address" href="#"><i class="lni-map-marker"></i> Kumasi</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="product-item">
    <div class="carousel-thumb">
    <img class="img-fluid" src="{{asset('img/product/img-2.jpg')}}" alt="">
    <div class="overlay">
    <div>
    <a class="btn btn-common" href="/adsdetail">View Details</a>
    </div>
    </div>
    <span class="price">269.00 cedis</span>
    </div>
     <div class="product-content">
    <h3 class="product-title"><a href="/adsdetail">Nikon Camera</a></h3>
    <span>Electronic / Camera</span>
    <div class="icon">
    <span><i class="lni-bookmark"></i></span>
    <span><i class="lni-heart"></i></span>
    </div>
    <div class="card-text">
    <div class="float-left">
    <span class="icon-wrap">
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    </span>
    <span class="count-review">
    (2 Review)
    </span>
    </div>
    <div class="float-right">
    <a class="address" href="#"><i class="lni-map-marker"></i> Accra</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="product-item">
    <div class="carousel-thumb">
    <img class="img-fluid" src="{{asset('img/product/img-3.jpg')}}" alt="">
    <div class="overlay">
    <div>
    <a class="btn btn-common" href="/adsdetail">View Details</a>
    </div>
    </div>
    <div class="btn-product bg-slod">
    <a href="#">Sold</a>
    </d
    <span class="price">2799.00 cedis</span>
    </div>
    <div class="product-content">
    <h3 class="product-title"><a href="/adsdetail">iPhone X Refurbished</a></h3>
    <span>Electronic / Phones</span>
    <div class="icon">
    <span><i class="lni-bookmark"></i></span>
    <span><i class="lni-heart"></i></span>
    </div>
    <div class="card-text">
    <div class="float-left">
    <span class="icon-wrap">
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star"></i>
    </span>
    <span class="count-review">
    (8 Review)
    </span>
    </div>
    <div class="float-right">
    <a class="address" href="#"><i class="lni-map-marker"></i> Tamale</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="product-item">
    <div class="carousel-thumb">
    <img class="img-fluid" src="{{asset('img/product/img-4.jpg')}}" alt="">
    <div class="overlay">
    <div>
    <a class="btn btn-common" href="/adsdetail">View Details</a>
    </div>
    </div>
    <span class="price">99.00 cedis</span>
    </div>
    <div class="product-content">
    <h3 class="product-title"><a href="/adsdetail">Baby Toy</a></h3>
    <span>Sports / Baby Toys</span>
    <div class="icon">
    <span><i class="lni-bookmark"></i></span>
     <span><i class="lni-heart"></i></span>
    </div>
    <div class="card-text">
    <div class="float-left">
    <span class="icon-wrap">
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star"></i>
    </span>
    <span class="count-review">
    (12 Review)
    </span>
    </div>
    <div class="float-right">
    <a class="address" href="#"><i class="lni-map-marker"></i> Kasoa</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="product-item">
    <div class="carousel-thumb">
    <img class="img-fluid" src="{{asset('img/product/img-5.jpg')}}" alt="">
    <div class="overlay">
    <div>
    <a class="btn btn-common" href="/adsdetail">View Details</a>
    </div>
    </div>
    <span class="price">99.00 cedis</span>
    </div>
    <div class="product-content">
    <h3 class="product-title"><a href="/adsdetail">Baby Toy</a></h3>
    <span>Sports / Baby Toys</span>
    <div class="icon">
    <span><i class="lni-bookmark"></i></span>
    <span><i class="lni-heart"></i></span>
    </div>
    <div class="card-text">
    <div class="float-left">
    <span class="icon-wrap">
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star"></i>
    </span>
    <span class="count-review">
    (12 Review)
    </span>
    </div>
    <div class="float-right">
    <a class="address" href="#"><i class="lni-map-marker"></i> Elimina</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="product-item">
    <div class="carousel-thumb">
    <img class="img-fluid" src="{{asset('img/product/img-6.jpg')}}" alt="">
    <div class="overlay">
    <div>
    <a class="btn btn-common" href="/adsdetail">View Details</a>
    </div>
    </div>
    <div class="btn-product bg-sale">
    <a href="#">Sale</a>
    </div>
    <span class="price">99.00 cedis</span>
    </div>
    <div class="product-content">
    <h3 class="product-title"><a href="/adsdetail">Baby Toy</a></h3>
    <span>Sports / Baby Toys</span>
    <div class="icon">
    <span><i class="lni-bookmark"></i></span>
    <span><i class="lni-heart"></i></span>
    </div>
    <div class="card-text">
    <div class="float-left">
    <span class="icon-wrap">
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star-filled"></i>
    <i class="lni-star"></i>
    </span>
    <span class="count-review">
    (12 Review)
    </span>
    </div>
    <div class="float-right">
    <a class="address" href="#"><i class="lni-map-marker"></i> New York</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="subscribes section-padding">
    <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="subscribes-inner">
    <div class="icon">
    <i class="lni-pointer"></i>
    </div>
    <div class="sub-text">
    <h3>Subscribe to Newsletter</h3>
    <p>and receive new ads in inbox</p>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <form>
    <div class="subscribe">
    <input class="form-control" name="EMAIL" placeholder="Enter your Email" required="" type="email">
    <button class="btn btn-common" type="submit">Subscribe</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    </section>
@endsection