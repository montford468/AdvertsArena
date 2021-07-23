@extends('layouts.app')
@section('content')

<div class="page-header" style="background: url(assets/img/banner1.jpg);">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="breadcrumb-wrapper">
    <h2 class="product-title">Pricing Packages</h2>
    <ol class="breadcrumb">
    <li><a href="#">Home /</a></li>
    <li class="current">Package</li>
    </ol>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <section id="pricing-table" class="section-padding">
    <div class="container">
    <div class="row">
    <div class="col-12">
    <h2 class="section-title">Pricing Plan</h2>
    </div>
    <div class="col-lg-4 col-md-6 col-xs-12">
    <div class="table">
    <div class="icon">
    <i class="lni-gift"></i>
    </div>
    <div class="pricing-header">
    <p class="price-value">29 ceedis</p>
    </div>
    <div class="title">
    <h3>Basic</h3>
    </div>
    <ul class="description">
    <li>Web UI Design</li>
    <li>App UI Design</li>
    <li>Responsive Design</li>
    <li>Ipad UI Design</li>
    <li>Branding Identity</li>
    </ul>
    <button class="btn btn-common">Purchase</button>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-xs-12">
    <div class="table" id="active-tb">
    <div class="icon">
    <i class="lni-leaf"></i>
    </div>
    <div class="pricing-header">
    <p class="price-value">49 cedis</p>
    </div>
    <div class="title">
    <h3>Standard</h3>
    </div>
    <ul class="description">
    <li>Web UI Design</li>
    <li>App UI Design</li>
    <li>Responsive Design</li>
    <li>Ipad UI Design</li>
    <li>Branding Identity</li>
    </ul>
    <button class="btn btn-common">Purchase</button>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-xs-12">
    <div class="table">
    <div class="icon">
    <i class="lni-layers"></i>
    </div>
    <div class="pricing-header">
    <p class="price-value">69 cedis</p>
    </div>
    <div class="title">
    <h3>Premium</h3>
    </div>
    <ul class="description">
    <li>Web UI Design</li>
    <li>App UI Design</li>
    <li>Responsive Design</li>
    <li>Ipad UI Design</li>
    <li>Branding Identity</li>
    </ul>
    <button class="btn btn-common">Purchase</button>
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