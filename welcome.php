<!--
 =========================================================
 * Material Kit - v2.0.6
 =========================================================

 * Product Page: https://www.creative-tim.com/product/material-kit
 * Copyright 2019 Creative Tim (http://www.creative-tim.com)
   Licensed under MIT (https://github.com/creativetimofficial/material-kit/blob/master/LICENSE.md)


 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->


 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    AskReddit 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <link href="./assets/css/coment.css?v=2.0.6" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
</head>

<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/index.html">
          Juan Jose Angel  -  3015983130 </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">apps</i> Components
            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
              <i class="material-icons">apps</i> Sobre Nosotros
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Twitter">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('./assets/img/bg2.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>Welcome!</h1>
            <h3>worldnews is for major news from around the world except US-internal news / US politics</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="section section-basic">
      <div class="container">
       <!--  <div class="title">
          <h2>Temas de Discusión</h2>
        </div>-->
       
       <!--  <div class="space-50"></div>-->
        
       <!--  <div class="space-70"></div>-->
        <!--                 textarea/checkbox/radio/toggle 
        <div id="checkRadios">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="title">
                <h3>Checkboxes</h3>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" value=""> Unchecked
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" value="" checked> Checked
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check disabled">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" value="" disabled> Disabled unchecked
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check disabled">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" value="" disabled checked> Disabled checked
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="title">
                <h3>Radio Buttons</h3>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> Radio is off
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked> Radio is on
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check disabled">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios11" value="option1" disabled> Disabled radio is off
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check disabled">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="exampleRadio1" id="exampleRadios21" value="option2" checked disabled> Disabled radio is on
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="title">
                <h3>Toggle Buttons</h3>
              </div>
              <div class="togglebutton">
                <label>
                  <input type="checkbox" checked="">
                  <span class="toggle"></span>
                  Toggle is on
                </label>
              </div>
              <div class="togglebutton">
                <label>
                  <input type="checkbox">
                  <span class="toggle"></span>
                  Toggle is off
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="space-70"></div>
            progress/sliders -->
            <!--
        <div id="progress">
          <div class="row">
            <div class="col-md-6">
              <div class="title">
                <h3>Progress Bars</h3>
              </div>
              <div class="progress progress-line-primary">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                  <span class="sr-only">60% Complete</span>
                </div>
              </div>
              <div class="progress progress-line-info">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                  <span class="sr-only">60% Complete</span>
                </div>
              </div>
              <div class="progress progress-line-danger">
                <div class="progress-bar progress-bar-success" style="width: 35%">
                  <span class="sr-only">35% Complete (success)</span>
                </div>
                <div class="progress-bar progress-bar-warning" style="width: 20%">
                  <span class="sr-only">20% Complete (warning)</span>
                </div>
                <div class="progress-bar progress-bar-danger" style="width: 10%">
                  <span class="sr-only">10% Complete (danger)</span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="title">
                <h3>Pagination</h3>
              </div>
              <ul class="pagination pagination-primary">
                
                            color-classes: "pagination-primary", "pagination-info", "pagination-success", "pagination-warning", "pagination-danger"
                        
                <li class="page-item">
                  <a href="javascript:void(0);" class="page-link">1</a>
                </li>
                <li class="page-item">
                  <a href="javascript:void(0);" class="page-link">...</a>
                </li>
                <li class="page-item">
                  <a href="javascript:void(0);" class="page-link">5</a>
                </li>
                <li class="page-item">
                  <a href="javascript:void(0);" class="page-link">6</a>
                </li>
                <li class="active page-item">
                  <a href="javascript:void(0);" class="page-link">7</a>
                </li>
                <li class="page-item">
                  <a href="javascript:void(0);" class="page-link">8</a>
                </li>
                <li class="page-item">
                  <a href="javascript:void(0);" class="page-link">9</a>
                </li>
                <li class="page-item">
                  <a href="javascript:void(0);" class="page-link">...</a>
                </li>
                <li class="page-item">
                  <a href="javascript:void(0);" class="page-link">12</a>
                </li>
              </ul>
              <ul class="pagination pagination-info">
                <li class="page-item">
                  <a href="javascript:void(0);" class="page-link"> prev</a>
                </li>
                <li class="page-item">
                  <a href="javascript:void(0);" class="page-link">1</a>
                </li>
                <li class="page-item">
                  <a href="javascript:void(0);" class="page-link">2</a>
                </li>
                <li class="active page-item">
                  <a href="javascript:void(0);" class="page-link">3</a>
                </li>
                <li class="page-item">
                  <a href="javascript:void(0);" class="page-link">4</a>
                </li>
                <li class="page-item">
                  <a href="javascript:void(0);" class="page-link">5</a>
                </li>
                <li class="page-item">
                  <a href="javascript:void(0);" class="page-link">next </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
                       end progress -->
        <!--                 sliders 
        <div id="sliders">
          <div class="row">
            <div class="col-md-6">
              <div class="title">
                <h3>Sliders</h3>
              </div>
              <div id="sliderRegular" class="slider"></div>
              <div id="sliderDouble" class="slider slider-info"></div>
            </div>
            <div class="col-md-6 ml-auto">
              <div class="title">
                <h3>Badges </h3>
              </div>
              <span class="badge badge-pill badge-secondary">Default</span>
              <span class="badge badge-pill badge-primary">Primary</span>
              <span class="badge badge-pill badge-info">Info</span>
              <span class="badge badge-pill badge-success">Success</span>
              <span class="badge badge-pill badge-warning">Warning</span>
              <span class="badge badge-pill badge-danger">Danger</span>
              <span class="badge badge-pill badge-rose">Rose</span>
            </div>
          </div>
        </div>
                        end sliders -->
     <!--  </div>
    </div>
    <div class="section section-navbars cd-section" id="navigation">
      <div class="container">-->
        <!--                 menu 
        <div class="row">
          <div class="col-md-6">
            <div class="title">
              <h3>Menu</h3>
            </div>
            <nav class="navbar navbar-expand-lg bg-primary">
              <div class="container">
                <div class="navbar-translate">
                  <a class="navbar-brand" href="/presentation.html">Menu</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                  </button>
                </div>
                <div class="collapse navbar-collapse">
                  <ul class="navbar-nav">
                    <li class="active nav-item">
                      <a href="#pablo" class="nav-link">Link</a>
                    </li>
                    <li class="nav-item">
                      <a href="#pablo" class="nav-link">Link</a>
                    </li>
                    <li class="dropdown nav-item">
                      <a href="#pablo" class="dropdown-toggle nav-link" data-toggle="dropdown">Dropdown</a>
                      <div class="dropdown-menu">
                        <h6 class="dropdown-header">Dropdown header</h6>
                        <a href="#pablo" class="dropdown-item">Action</a>
                        <a href="#pablo" class="dropdown-item">Another action</a>
                        <a href="#pablo" class="dropdown-item">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a href="#pablo" class="dropdown-item">Separated link</a>
                        <div class="dropdown-divider"></div>
                        <a href="#pablo" class="dropdown-item">One more separated link</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
          <div class="col-md-6">
            <div class="title">
              <h3>Menu with Icons</h3>
            </div>
            <nav class="navbar navbar-expand-lg bg-info">
              <div class="container">
                <div class="navbar-translate">
                  <a class="navbar-brand" href="/presentation.html">Icons</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                  </button>
                </div>
                <div class="collapse navbar-collapse">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a href="#pablo" class="nav-link"><i class="material-icons">email</i></a>
                    </li>
                    <li class="nav-item">
                      <a href="#pablo" class="nav-link"><i class="material-icons">face</i></a>
                    </li>
                    <li class="dropdown nav-item">
                      <a href="#pablo" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">settings</i>
                        <b class="caret"></b>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <h6 class="dropdown-header">Dropdown header</h6>
                        <a href="#pablo" class="dropdown-item">Action</a>
                        <a href="#pablo" class="dropdown-item">Another action</a>
                        <a href="#pablo" class="dropdown-item">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a href="#pablo" class="dropdown-item">Separated link</a>
                        <div class="dropdown-divider"></div>
                        <a href="#pablo" class="dropdown-item">One more separated link</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
         	            end menu -->
       <!--  <div class="title">
          <h3>Navigation</h3>
        </div>
      </div>-->
      <!--             navbar 
      <div id="navbar">
        <div class="navigation-example" style="background-image: url('./assets/img//bg.jpg');">
                  rose navbar with search form 
          <nav class="navbar navbar-expand-lg bg-rose">
            <div class="container">
              <div class="navbar-translate">
                <a class="navbar-brand" href="#0">Brand</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a href="#pablo" class="nav-link">link</a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link">link</a>
                  </li>
                </ul>
                <form class="form-inline ml-auto">
                  <div class="form-group has-white">
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                  <button type="submit" class="btn btn-white btn-raised btn-fab btn-round">
                    <i class="material-icons">search</i>
                  </button>
                </form>
              </div>
            </div>
          </nav>
                  end rose navbar -->
          <!--        info navbar 
          <nav class="navbar navbar-expand-lg bg-info">
            <div class="container">
              <div class="navbar-translate">
                <a class="navbar-brand" href="#0">Info Color</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                  <li class="active nav-item">
                    <a href="#pablo" class="nav-link">
                      Discover
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link">
                      Profile
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link">
                      Settings
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
                end info navbar -->
          <!--        primary navbar 
          <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container">
              <div class="navbar-translate">
                <a class="navbar-brand" href="#0">Primary Color</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                  <li class="active nav-item">
                    <a href="#pablo" class="nav-link">
                      <i class="material-icons">explore</i> Discover
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link">
                      <i class="material-icons">account_circle</i> Profile
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link">
                      <i class="material-icons">settings</i> Settings
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
                  end primary navbar -->
          <!--         inverse navbar with notifications     
          <nav class="navbar navbar-inverse navbar-expand-lg bg-dark" role="navigation-demo">
            <div class="container">
               Brand and toggle get grouped for better mobile display 
              <div class="navbar-translate">
                <a class="navbar-brand" href="#0">Navbar with notification</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
               Collect the nav links, forms, and other content for toggling 
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link">
                      Discover
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link">
                      Wishlist
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="btn btn-rose btn-raised btn-fab btn-round" data-toggle="dropdown">
                      <i class="material-icons">email</i>
                    </a>
                  </li>
                  <li class="dropdown nav-item">
                    <a href="#pablo" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown">
                      <div class="profile-photo-small">
                        <img src="./assets/img/faces/avatar.jpg" alt="Circle Image" class="rounded-circle img-fluid">
                      </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <h6 class="dropdown-header">Dropdown header</h6>
                      <a href="#pablo" class="dropdown-item">Me</a>
                      <a href="#pablo" class="dropdown-item">Settings and other stuff</a>
                      <a href="#pablo" class="dropdown-item">Sign out</a>
                    </div>
                  </li>
                </ul>
              </div>
               /.navbar-collapse -->
           <!--  </div>-->
            <!-- /.container-->
         <!--  </nav>-->
          <!--            end inverse navbar -->
          <!--        default navbar with profile photo -->
         <!--  <nav class="navbar navbar-default navbar-expand-lg" role="navigation-demo">
            <div class="container"> -->
              <!-- Brand and toggle get grouped for better mobile display -->
            <!--   <div class="navbar-translate">
                <a class="navbar-brand" href="#0">Navbar with profile</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>-->
              <!-- Collect the nav links, forms, and other content for toggling -->
              <!-- <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link">
                      Discover
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link">
                      Wishlist
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="btn btn-rose btn-raised btn-round " data-toggle="dropdown">
                      Register
                    </a>
                  </li>
                </ul>
              </div>-->
              <!-- /.navbar-collapse -->
         <!--    </div>-->
            <!-- /.container-->
          <!-- </nav>-->
          <!--                end default navbar -->
          <!--        transparent navbar -->
         <!--  <nav class="navbar navbar-transparent navbar-expand-lg">
            <div class="container">
              <div class="navbar-translate">
                <a class="navbar-brand" href="#pablo">Transparent</a>
                <button type="button" class="ml-auto navbar-toggler" data-toggle="collapse" data-target="#example-navbar-transparent">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse" id="example-navbar-transparent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link">
                      <i class="fa fa-facebook-square"></i> Facebook
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link">
                      <i class="fa fa-twitter"></i> Twitter
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link">
                      <i class="fa fa-instagram"></i> Instagram
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>-->
          <!--        end transparent navbar-->
        <!-- </div>
      </div>-->
      <!-- end navbar  -->
    <!-- </div>-->
   <!--  <div class="section section-tabs">
      <div class="container">-->
        <!--                nav tabs	             -->
        <!-- <div id="nav-tabs">
          <h3>Navigation Tabs</h3>
          <div class="row">
            <div class="col-md-6">
              <h3>
                <small>Tabs with Icons on Card</small>
              </h3>-->
              <!-- Tabs with icons on Card -->
             <!--  <div class="card card-nav-tabs">
                <div class="card-header card-header-primary">-->
                  <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                <!--   <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">face</i> Profile
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">chat</i> Messages
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">build</i> Settings
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body ">
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="profile">
                      <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                    </div>
                    <div class="tab-pane" id="messages">
                      <p> I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                    </div>
                    <div class="tab-pane" id="settings">
                      <p>I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it&#x2019;s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                    </div>
                  </div>
                </div>
              </div>-->
              <!-- End Tabs with icons on Card -->
           <!--  </div>
            <div class="col-md-6">
              <h3>
                <small>Tabs on Plain Card</small>
              </h3>-->
              <!-- Tabs on Plain Card -->
             <!--  <div class="card card-nav-tabs card-plain">
                <div class="card-header card-header-danger">-->
                  <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                  <!-- <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#home" data-toggle="tab">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#updates" data-toggle="tab">Updates</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#history" data-toggle="tab">History</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body ">
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="home">
                      <p>I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it&#x2019;s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                    </div>
                    <div class="tab-pane" id="updates">
                      <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                    </div>
                    <div class="tab-pane" id="history">
                      <p> I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                    </div>
                  </div>
                </div>
              </div>
               End Tabs on plain Card -->
            <!-- </div>
          </div>
        </div>
      </div>
    </div>-->
    <!-- 	            end nav tabs -->
    <div class="section section-white">
      <div class="container">
        
      </div>
    </div>

<!--Inicio elementos contenedor-->

<div class="row">
    <div class="col-md-6">
<div class="panel-body">

<!--Inicio elementos contenedor-->

<div class="section section-white">
<div class="title">
            <h2>Welcome!</h2>
          </div>
          <div class="title">
            <h3>
              <small>Worldnews is for major news from around the world except US-internal news / US politics</small>
            </h3>
          </div>
<div >

<div class="col-sm-2 ml-auto">
              <h4>Circle Image</h4>
              <img src="https://b.thumbs.redditmedia.com/WFgeymV_hst-gtDexMkHnD8o3LmUSY96L2GZjc-K1bc.png" alt="Circle Image" class="rounded-circle img-fluid">
            </div>


<div >
            <form id="frm-comment">
                <div class="input-row">
                    <input type="hidden" name="comentario_id" id="commentId"
                           placeholder="Name" /> <input class="input-field"
                           type="text" name="name" id="name" placeholder="Nombres" />
                </div>
                <div class="input-row">
                    <textarea class="input-field" type="text" name="comment"
                              id="comment" placeholder="Agregar comentario">  </textarea>
                </div>
                <div>
                    <input type="button" class="btn-submit" id="submitButton"
                           value="Publicar Ahora" /><div id="comment-message">Comentario ha sido agregado exitosamente!</div>
                           
                </div>
				<div style="clear:both"></div>
            </form>
        </div>
        <div id="output"></div>
        <script>
            var totalLikes = 0;
            var totalUnlikes = 0;
           
            function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#name").focus();
            }

            $("#submitButton").click(function () {
                $("#comment-message").css('display', 'none');
                var str = $("#frm-comment").serialize();

                $.ajax({
                    url: "add_coment.php",
                    data: str,
                    type: 'post',
                    success: function (response)
                    {
                        var result = eval('(' + response + ')');
                        if (response)
                        {
                            $("#comment-message").css('display', 'inline-block');
                            $("#name").val("");
                            $("#comment").val("");
                            $("#commentId").val("");
                            listComment();
                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
                });
            });

            $(document).ready(function () {
                listComment();
            });

            function listComment() {
                $.post("comet.php",
                        function (data) {
                            var data = JSON.parse(data);

                            var comments = "";
                            var replies = "";
                            var item = "";
                            var parent = -1;
                            var results = new Array();

                            var list = $("<ul class='outer-comment'>");
                            var item = $("<li>").html(comments);

                            for (var i = 0; (i < data.length); i++)
                            {
                                var commentId = data[i]['comentario_id'];
                                parent = data[i]['parent_comentario_id'];

                                var obj = getLikesUnlikes(commentId);
                                
                                if (parent == "0")
                                {
                                	if(data[i]['like_unlike'] >= 1) 
                                    {
                                        like_icon = "<img src='img/MeGusta.png'  id='unlike_" + data[i]['comentario_id'] + "' class='like-unlike'  onClick='likeOrDislike(" + data[i]['comentario_id'] + ",-1)' />";
                                        like_icon += "<img style='display:none;' src='img/NoMeGusta.png' id='like_" + data[i]['comentario_id'] + "' class='like-unlike' onClick='likeOrDislike(" + data[i]['comentario_id'] + ",1)' />";
                                    }
                                    else
                                    {
                                    	   like_icon = "<img style='display:none;' src='img/MeGusta.png'  id='unlike_" + data[i]['comentario_id'] + "' class='like-unlike'  onClick='likeOrDislike(" + data[i]['comentario_id'] + ",-1)' />";
                                        like_icon += "<img src='img/NoMeGusta.png' id='like_" + data[i]['comentario_id'] + "' class='like-unlike' onClick='likeOrDislike(" + data[i]['comentario_id'] + ",1)' />";
                                        
                                    }
                                    
                                    comments = "\
                                        <div class='comment-row'>\
                                            <div class='comment-info'>\
                                            <span class='commet-row-label'> '<img src= https://a.thumbs.redditmedia.com/mtwnduVr0DnrK1o8rpTPi6waLWuPimj_8ntK8i5t890.png></span>\
                                                <span class='commet-row-label'>De</span>\
                                                <span class='posted-by'>" + data[i]['comment_sender_name'] + "</span>\
                                                <span class='commet-row-label'>a las </span> \
                                                <span class='posted-at'>" + data[i]['date'] + "</span>\
                                            </div>\
                                            <div class='comment-text'>" + data[i]['comment'] + "</div>\
                                            <div>\
                                                <a class='btn-reply' onClick='postReply(" + commentId + ")'>Responder</a>\
                                            </div>\
                                            <div class='post-action'>\ " + like_icon + "&nbsp;\
                                                <span id='likes_" + commentId + "'> " + totalLikes + " Me Gusta </span>\
                                            </div>\
                                        </div>";

                                    var item = $("<li>").html(comments);
                                    list.append(item);
                                    var reply_list = $('<ul>');
                                    item.append(reply_list);
                                    listReplies(commentId, data, reply_list);
                                }
                            }
                            $("#output").html(list);
                        });
            }

            function listReplies(commentId, data, list) {

                for (var i = 0; (i < data.length); i++)
                {

                    var obj = getLikesUnlikes(data[i].comentario_id);
                    if (commentId == data[i].parent_comentario_id)
                    {
                        if(data[i]['like_unlike'] >= 1) 
                        {
                            like_icon = "<img src='img/MeGusta.png'  id='unlike_" + data[i]['comentario_id'] + "' class='like-unlike'  onClick='likeOrDislike(" + data[i]['comentario_id'] + ",-1)' />";
                            like_icon += "<img style='display:none;' src='img/NoMeGusta.png' id='like_" + data[i]['comentario_id'] + "' class='like-unlike' onClick='likeOrDislike(" + data[i]['comentario_id'] + ",1)' />";
                            
                        }
                        else
                        {
                         like_icon = "<img style='display:none;' src='img/NoMeGusta.png'  id='unlike_" + data[i]['comentario_id'] + "' class='like-unlike'  onClick='likeOrDislike(" + data[i]['comentario_id'] + ",-1)' />";
                         like_icon += "<img src='img/NoMeGusta.png' id='like_" + data[i]['comentario_id'] + "' class='like-unlike' onClick='likeOrDislike(" + data[i]['comentario_id'] + ",1)' />";
                            
                        }
                        var comments = "\
                                        <div class='comment-row'>\
                                            <div class='comment-info'>\
                                            <span width= '20%', height= '20%'> '<img src = https://a.thumbs.redditmedia.com/mtwnduVr0DnrK1o8rpTPi6waLWuPimj_8ntK8i5t890.png></span>\
                                                <span class='commet-row-label'>De </span>\
                                                <span class='posted-by'>" + data[i]['comment_sender_name'] + "</span>\
                                                <span class='commet-row-label'>a las </span> \
                                                <span class='posted-at'>" + data[i]['date'] + "</span>\
                                            </div>\
                                            <div class='comment-text'>" + data[i]['comment'] + "</div>\
                                            <div>\
                                                <a class='btn-reply' onClick='postReply(" + data[i]['comentario_id'] + ")'>Responder</a>\
                                            </div>\
                                            <div class='post-action'> " + like_icon + "&nbsp;\
                                                <span id='likes_" + data[i]['comentario_id'] + "'> " + totalLikes + " Me Gusta </span>\
                                            </div>\
                                        </div>";

                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comentario_id, data, reply_list);
                    }
                }
            }

            function getLikesUnlikes(commentId)
            {

                $.ajax({
                    type: 'POST',
                    async: false,
                    url: 'end_like.php',
                    data: {comentario_id: commentId},
                    success: function (data)
                    {
                        totalLikes = data;
                    }

                });

            }
            
                         
           function likeOrDislike(comentario_id,like_unlike)
            {
              
                $.ajax({
                    url: 'likes.php',
                    async: false,
                    type: 'post',
                    data: {comentario_id:comentario_id,like_unlike:like_unlike},
                    dataType: 'json',
                    success: function (data) {
                        
                        $("#likes_"+comentario_id).text(data + " likes");
                        
                        if (like_unlike == 1) { 
                            $("#like_" + comentario_id).css("display", "none");
                            $("#unlike_" + comentario_id).show();
                        }

                        if (like_unlike == -1) {
                            $("#unlike_" + comentario_id).css("display", "none");
                            $("#like_" + comentario_id).show();
                        }
                        
                    },
                    error: function (data) {
                        alert("error : " + JSON.stringify(data));
                    }
                });
            }
           
            

        </script>

<!--Fin elementos contenedor-->
</div>
</div>
</div>
</div>
</div>
<!--Fin elementos contenedor-->








    <!--        notifications 
    <div class="section cd-section section-notifications" id="notifications">
      <div class="container">
        <div class="title">
          <h3>Notifications</h3>
        </div>
      </div>
      <div class="alert alert-info">
        <div class="container">
          <div class="alert-icon">
            <i class="material-icons">info_outline</i>
          </div>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="material-icons">clear</i></span>
          </button>
          <b>Info alert:</b> You&apos;ve got some friends nearby, stop looking at your phone and find them...
        </div>
      </div>
      <div class="alert alert-success">
        <div class="container">
          <div class="alert-icon">
            <i class="material-icons">check</i>
          </div>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="material-icons">clear</i></span>
          </button>
          <b>Success Alert:</b> Yuhuuu! You&apos;ve got your $11.99 album from The Weeknd
        </div>
      </div>
      <div class="alert alert-warning">
        <div class="container">
          <div class="alert-icon">
            <i class="material-icons">warning</i>
          </div>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="material-icons">clear</i></span>
          </button>
          <b>Warning Alert:</b> Hey, it looks like you still have the &quot;copyright &#xA9; 2015&quot; in your footer. Please update it!
        </div>
      </div>
      <div class="alert alert-danger">
        <div class="container">
          <div class="alert-icon">
            <i class="material-icons">error_outline</i>
          </div>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="material-icons">clear</i></span>
          </button>
          <b>Error Alert:</b> Damn man! You screwed up the server this time. You should find a good excuse for your Boss...
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <        end notifications -->
    <div class="section">
      <div class="container tim-container">
        <!--     	        typography -->
        <div id="typography" class="cd-section">
          <div class="title">
            <h2>Typography</h2>
          </div>
          <div class="row">
            <div class="tim-typo">
              <h1>
                <span class="tim-note">Header 1</span>The Life of Material Kit </h1>
            </div>
            <div class="tim-typo">
              <h2>
                <span class="tim-note">Header 2</span>The Life of Material Kit</h2>
            </div>
            <div class="tim-typo">
              <h3>
                <span class="tim-note">Header 3</span>The Life of Material Kit</h3>
            </div>
            <div class="tim-typo">
              <h4>
                <span class="tim-note">Header 4</span>The Life of Material Kit</h4>
            </div>
            <div class="tim-typo">
              <h5>
                <span class="tim-note">Header 5</span>The Life of Material Kit</h5>
            </div>
            <div class="tim-typo">
              <h6>
                <span class="tim-note">Header 6</span>The Life of Material Kit</h6>
            </div>
            <div class="tim-typo">
              <h1 class="title">
                <span class="tim-note">Header 1 Title</span>The Life of Material Kit </h1>
            </div>
            <div class="tim-typo">
              <h2 class="title">
                <span class="tim-note">Header 2 Title</span>The Life of Material Kit</h2>
            </div>
            <div class="tim-typo">
              <h3 class="title">
                <span class="tim-note">Header 3 Title</span>The Life of Material Kit</h3>
            </div>
            <div class="tim-typo">
              <h4 class="title">
                <span class="tim-note">Header 4 Title</span>The Life of Material Kit</h4>
            </div>
            <div class="tim-typo">
              <p>
                <span class="tim-note">Paragraph</span>
                I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
            </div>
            <div class="tim-typo">
              <span class="tim-note">Quote</span>
              <div class="blockquote undefined">
                <p>
                  I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                </p>
                <small>
                  Kanye West, Musician
                </small>
              </div>
            </div>
            <div class="tim-typo">
              <span class="tim-note">Muted Text</span>
              <p class="text-muted">
                I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
              </p>
            </div>
            <div class="tim-typo">
              <span class="tim-note">Primary Text</span>
              <p class="text-primary">
                I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
            </div>
            <div class="tim-typo">
              <span class="tim-note">Info Text</span>
              <p class="text-info">
                I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
            </div>
            <div class="tim-typo">
              <span class="tim-note">Success Text</span>
              <p class="text-success">
                I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
            </div>
            <div class="tim-typo">
              <span class="tim-note">Warning Text</span>
              <p class="text-warning">
                I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
              </p>
            </div>
            <div class="tim-typo">
              <span class="tim-note">Danger Text</span>
              <p class="text-danger">
                I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
            </div>
            <div class="tim-typo">
              <h2>
                <span class="tim-note">Small Tag</span>
                Header with small subtitle
                <br>
                <small>Use &quot;small&quot; tag for the headers</small>
              </h2>
            </div>
          </div>
        </div>
        <!--                 end typography -->
        <div class="space-50"></div>
        <!--                 images -->
        <div id="images">
          <div class="title">
            <h2>Images</h2>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-2">
              <h4>Rounded Image</h4>
              <img src="./assets/img/faces/avatar.jpg" alt="Rounded Image" class="rounded img-fluid">
            </div>
            <div class="col-sm-2 ml-auto">
              <h4>Circle Image</h4>
              <img src="./assets/img/faces/avatar.jpg" alt="Circle Image" class="rounded-circle img-fluid">
            </div>
            <div class="col-sm-2 ml-auto">
              <h4>Rounded Raised</h4>
              <img src="./assets/img/faces/avatar.jpg" alt="Raised Image" class="img-raised rounded img-fluid">
            </div>
            <div class="col-sm-2 ml-auto">
              <h4>Circle Raised</h4>
              <img src="./assets/img/faces/avatar.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
            </div>
          </div>
          <div class="row">
          </div>
        </div>
        <!--                 end images	             -->
        <div class="space-50"></div>
      </div>
    </div>
    <div class="section cd-section" id="javascriptComponents">
      <div class="container">
        <div class="title">
          <h2>Javascript components</h2>
        </div>
        <!--                 modals -->
        <div class="row" id="modals">
          <div class="col-md-6">
            <div class="title">
              <h3>Modal</h3>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal">
                  <i class="material-icons">library_books</i> Classic
                </button>
              </div>
            </div>
            <div class="col-md-12">
              <div class="title">
                <h3>Datetime Picker</h3>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="label-control">Datetime Picker</label>
                    <input type="text" class="form-control datetimepicker" value="10/05/2016">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="title">
              <h3>Popovers</h3>
            </div>
            <button type="button" class="btn" data-toggle="popover" data-placement="left" title="Popover on left" data-content="Here will be some very useful information about his popover. Here will be some very useful information about his popover." data-container="body">On left</button>
            <button type="button" class="btn" data-toggle="popover" data-placement="top" title="Popover on top" data-content="Here will be some very useful information about his popover." data-container="body">On top</button>
            <button type="button" class="btn" data-toggle="popover" data-placement="bottom" title="Popover on bottom" data-content="Here will be some very useful information about his popover." data-container="body">On bottom</button>
            <button type="button" class="btn" data-toggle="popover" data-placement="right" title="Popover on right" data-content="Here will be some very useful information about his popover." data-container="body">On right</button>
            <br>
            <br>
            <div class="title">
              <h3>Tooltips</h3>
            </div>
            <button type="button" class="btn" data-toggle="tooltip" data-placement="left" title="Tooltip on left" data-container="body">On left</button>
            <button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="Tooltip on top" data-container="body">On top</button>
            <button type="button" class="btn" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom" data-container="body">On bottom</button>
            <button type="button" class="btn" data-toggle="tooltip" data-placement="right" title="Tooltip on right" data-container="body">On right</button>
          </div>
        </div>
        <!--                 end modals	             -->
        <div class="title">
          <h3>Carousel</h3>
        </div>
      </div>
    </div>
    <!--         carousel  -->
    <div class="section" id="carousel">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mr-auto ml-auto">
            <!-- Carousel Card -->
            <div class="card card-raised card-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="./assets/img/bg2.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Yellowstone National Park, United States
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./assets/img/bg3.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Somewhere Beyond, United States
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./assets/img/bg.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Yellowstone National Park, United States
                      </h4>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="material-icons">keyboard_arrow_left</i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="material-icons">keyboard_arrow_right</i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!-- End Carousel Card -->
          </div>
        </div>
      </div>
    </div>
    <!--         end carousel -->
    <div class="section">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2>Completed with examples</h2>
            <h4>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go. More importantly, looking at them will give you a picture of what you can built with this powerful kit.</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-signup page-header" style="background-image: url('./assets/img/city.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-login">
              <form class="form" method="" action="">
                <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">Login</h4>
                  <div class="social-line">
                    <a href="#pablo" class="btn btn-just-icon btn-link">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-link">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-link">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </div>
                </div>
                <p class="description text-center">Or Be Classical</p>
                <div class="card-body">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">face</i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="First Name...">
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">mail</i>
                      </span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email...">
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input type="password" class="form-control" placeholder="Password...">
                  </div>
                </div>
                <div class="footer text-center">
                  <a href="#pablo" class="btn btn-primary btn-link btn-wd btn-lg">Get Started</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 text-center">
      <a href="examples/login-page.html" class="btn btn-link btn-primary btn-lg" target="_blank">View Login Page</a>
    </div>
    <div class="section section-examples">
      <div class="container-fluid text-center">
        <div class="row">
          <div class="col-md-6">
            <a href="examples/landing-page.html" target="_blank">
              <img src="./assets/img/landing.jpg" alt="Rounded Image" class="img-raised rounded img-fluid">
              <button class="btn  btn-link btn-primary btn-lg">View Landing Page</button>
            </a>
          </div>
          <div class="col-md-6">
            <a href="examples/profile-page.html" target="_blank">
              <img src="./assets/img/profile.jpg" alt="Rounded Image" class="img-raised rounded img-fluid">
              <button class="btn btn-link btn-primary btn-lg">View Profile Page</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-download" id="downloadSection">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-8 ml-auto mr-auto">
            <h2>Do you love this UI Kit?</h2>
            <h4>Cause if you do, it can be yours for FREE. Hit the buttons below to navigate to our website where you can find the kit. Our friends from
              <a href="https://themeisle.com/?utm_campaign=mkfree-hestia&amp;utm_source=creativetim&amp;utm_medium=website" target="_blank">ThemeIsle</a> created a Wordpress Theme which can be also downloaded for free. Start a new project or give an old Bootstrap project a new look!</h4>
          </div>
          <div class="col-sm-8 col-md-6 ml-auto mr-auto">
            <a href="https://www.creative-tim.com/product/material-kit" class="btn btn-primary btn-lg">
              <i class="fa fa-html5"></i> Free HTML Download
            </a>
            <a href="https://themeisle.com/themes/hestia/?utm_campaign=mkfree-hestia&amp;utm_source=creativetim&amp;utm_medium=website" target="_blank" class="btn btn-primary btn-lg">
              <i class="fa fa-wordpress"></i> Wordpress Theme
            </a>
          </div>
        </div>
        <br>
        <br>
        <div class="row text-center">
          <div class="col-md-8 ml-auto mr-auto">
            <h2>Want more?</h2>
            <h4>We've just launched
              <a href="https://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-mk-demos" target="_blank">Material Kit PRO</a>. It has a huge number of components, sections and example pages. Start Your Development With A Badass Bootstrap UI Kit inspired by Material Design.</h4>
          </div>
          <div class="col-sm-8 col-md-5 ml-auto mr-auto">
            <a href="https://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-mk-demos" class="btn btn-rose btn-upgrade btn-lg" target="_blank">
              <i class="material-icons">unarchive</i> Upgrade to PRO
            </a>
          </div>
        </div>
        <div class="sharing-area text-center">
          <div class="row justify-content-center">
            <h3>Thank you for supporting us!</h3>
          </div>
          <button id="twitter" class="btn btn-raised btn-twitter sharrre">
            <i class="fa fa-twitter"></i> Tweet
          </button>
          <button id="facebook" class="btn btn-raised btn-facebook sharrre">
            <i class="fa fa-facebook-square"></i> Share
          </button>
          <button id="googlePlus" class="btn btn-raised btn-google-plus sharrre">
            <i class="fa fa-google-plus"></i> Share
          </button>
          <a id="github" href="https://github.com/creativetimofficial/material-kit" target="_blank" class="btn btn-raised btn-github">
            <i class="fa fa-github"></i> Star
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Classic Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link">Nice Button</button>
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!--  End Modal -->
  <footer class="footer" data-background-color="black">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }

  </script>
</body>

</html>
