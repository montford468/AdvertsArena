@extends('layouts.app')
@section('content')

<div class="page-header" style="background: url(assets/img/banner1.jpg);">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="breadcrumb-wrapper">
    <h2 class="product-title">Post your Ads</h2>
    <ol class="breadcrumb">
    <li><a href="#">Home /</a></li>
    <li class="current">Post your Ads</li>
    </ol>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <div id="content" class="section-padding">
    <div class="container">
    <div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
    <aside>
    <div class="sidebar-box">
    <div class="user">
    <figure>
    <a href="#"><img src="{{asset('img/author/img1.jpg')}}" alt=""></a>
    </figure>
    <div class="usercontent">
    <h3>Hello Montford!</h3>
    <h4>Administrator</h4>
    </div>
    </div>
    <nav class="navdashboard">
    <ul>
    <li>
    <a href="/dashboard">
    <i class="lni-dashboard"></i>
    <span>Dashboard</span>
    </a>
    </li>
    <li>
    <a href="/profilesetting">
    <i class="lni-cog"></i>
    <span>Profile Settings</span>
    </a>
    </li>
    <li>
    <a href="/myads">
    <i class="lni-layers"></i>
    <span>My Ads</span>
    </a>
    </li>
    <li>
    <a href="#">
    <i class="lni-envelope"></i>
    <span>Offers/Messages</span>
    </a>
    </li>
    <li>
    <a href="/payments">
    <i class="lni-wallet"></i>
    <span>Payments</span>
    </a>
    </li>
    <li>
    <a href="/favouriteads">
    <i class="lni-heart"></i>
    <span>My Favourites</span>
    </a>
    </li>
    <li>
    <a href="/profilesetting">
    <i class="lni-star"></i>
    <span>Privacy Settings</span>
    </a>
    </li>
    <li>
    <a href="#">
    <i class="lni-enter"></i>
    <span>Logout</span>
    </a>
    </li>
    </ul>
    </nav>
    </div>
    <div class="widget">
    <h4 class="widget-title">Advertisement</h4>
    <div class="add-box">
    <img class="img-fluid" src="{{asset('img/img1.jpg')}}" alt="">
    </div>
    </div>
    </aside>
    </div>
    <div class="col-sm-12 col-md-8 col-lg-9">
    <div class="row page-content">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
    <div class="inner-box">
    <div class="dashboard-box">
    <h2 class="dashbord-title">Ad Detail</h2>
    </div>
    <div class="dashboard-wrapper">
    <div class="form-group mb-3">
    <label class="control-label">Ad</label>
    <input class="form-control input-md" name="Title" placeholder="Title" type="text">
    </div>
    <div class="form-group mb-3 tg-inputwithicon">
    <label class="control-label">Categories</label>
    <div class="tg-select form-control">
    <select>
    <option value="none">Select Categories</option>
    <option value="none">Mobiles</option>
    <option value="none">Electronics</option>
    <option value="none">Training</option>
    <option value="none">Real Estate</option>
    <option value="none">Services</option>
    <option value="none">Training</option>
    <option value="none">Vehicles</option>
    </select>
    </div>
    </div>
    <div class="form-group mb-3">
    <label class="control-label">Price</label>
    <input class="form-control input-md" name="price" placeholder="Ad your Price" type="text">
    <div class="tg-checkbox mt-3">
    <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="tg-priceoncall">
    <label class="custom-control-label" for="tg-priceoncall">Price On Call</label>
    </div>
    </div>
    </div>
    <div class="form-group md-3">
    <section id="editor">
    <div id="summernote">
    </div>
    </section>
    </div>
    <label class="tg-fileuploadlabel" for="tg-photogallery">
    <span>Drop files anywhere to upload</span>
    <span>Or</span>
    <span class="btn btn-common">Select Files</span>
    <span>Maximum upload file size: 500 KB</span>
    <input id="tg-photogallery" class="tg-fileinput" type="file" name="file">
    </label>
    </div>
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
    <div class="inner-box">
    <div class="tg-contactdetail">
    <div class="dashboard-box">
    <h2 class="dashbord-title">Contact Detail</h2>
    </div>
    <div class="dashboard-wrapper">
    <div class="form-group mb-3">
    <strong>I???m a:</strong>
    <div class="tg-selectgroup">
    <span class="tg-radio">
    <input id="tg-sameuser" type="radio" name="usertype" value="same user" checked="">
    <label for="tg-sameuser">Same User</label>
    </span>
    <span class="tg-radio">
    <input id="tg-someoneelse" type="radio" name="usertype" value="someone else">
    <label for="tg-someoneelse">Someone Else</label>
    </span>
    </div>
    </div>
    <div class="form-group mb-3">
    <label class="control-label">First Name*</label>
    <input class="form-control input-md" name="name" type="text">
    </div>
    <div class="form-group mb-3">
    <label class="control-label">Last Name*</label>
    <input class="form-control input-md" name="name" type="text">
    </div>
    <div class="form-group mb-3">
    <label class="control-label">Phone*</label>
    <input class="form-control input-md" name="phone" type="text">
    </div>
    <div class="form-group mb-3">
    <label class="control-label">Enter Address</label>
    <input class="form-control input-md" name="address" type="text">
    </div>
    <div class="form-group mb-3">
    <label class="control-label">Enter Address</label>
    <input class="form-control input-md" name="address" type="text">
    </div>
    <div class="form-group mb-3 tg-inputwithicon">
    <label class="control-label">Country</label>
    <div class="tg-select form-control">
    <select>
    <option value="none">Select Country</option>
     <option value="none">Country 1</option>
    <option value="none">Country 2</option>
    <option value="none">Country 3</option>
    <option value="none">Country 4</option>
    <option value="none">Country 5</option>
    <option value="none">Country 6</option>
    </select>
    </div>
    </div>
    <div class="form-group mb-3 tg-inputwithicon">
    <label class="control-label">Town</label>
    <div class="tg-select form-control">
    <select>
    <option value="none">Select Region</option>
    <option value="none">Select Region</option>
    <option value="none">Select Region</option>
    </select>
    </div>
    </div>
    <div class="form-group mb-3 tg-inputwithicon">
    <label class="control-label">City</label>
    <div class="tg-select form-control">
    <select>
    <option value="none">Select City</option>
    <option value="none">Select City</option>
    <option value="none">Select City</option>
    </select>
    </div>
    </div>
    <div class="tg-checkbox">
    <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="tg-agreetermsandrules">
    <label class="custom-control-label" for="tg-agreetermsandrules">I agree to all <a href="javascript:void(0);">Terms of Use &amp; Posting Rules</a></label>
    </div>
    </div>
    <button class="btn btn-common" type="button">Post Ad</button>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
@endsection