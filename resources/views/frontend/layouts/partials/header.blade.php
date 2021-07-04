<!--header area start-->
<header class="header_area">
    <!--header top area start-->
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header_top_right">
                        
                        <div class="header_social">
                            <ul>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header top area end -->
    
    <!--header middle area start-->
    <div class="header_middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12">
                    <div class="logo logo_three">
                        <a href="https://demo.hasthemes.com/sonata-preview/sonata/index.html"><img src="https://demo.hasthemes.com/sonata-preview/sonata/assets/img/logo/logo-4.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12">
                    <div class="header_middle_right">
                        <div class="header_contact">
                            <div class="contact_static">
                                <a href="tel:{{setting('phone')}}"><i class="ion-android-call"></i> Call Us: {{setting('phone')}}</a>
                                <span>MON- SAT 8:30 AM - 6:00 PM</span>
                            </div>
                            <div class="contact_static">
                                <a href="mailto:{{setting('email')}}"><i class="ion-android-mail"></i> {{setting('email')}}</a>
                                <span>Sonata ONLINE SUPPORT 24H/7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header middle area end-->
    
    <!--header bottom start-->
    <div class="header_bottom sticky-header">
        <div class="container">
            <div class="header_container_right container_position">
                <div class="main_menu menu_three"> 
                    <nav>  
                        <ul>
                            @foreach(menus() as $menu)
                                <?php
                                $hasSub = !$menu->subMenus->isEmpty();
                                ?>
                                <li class="{{($hasSub) ? "dropdown" : ""}}">
                                    <a class="{{($hasSub) ? "dropdown-toggle" : ""}} nav-link" href="{{ url($menu->url) }} "
                                    data-toggle="{{($hasSub) ? "dropdown" : ""}}">
                                        {{$menu->name}}
                                    </a>
                                    @if($hasSub)
                                        <div class="dropdown-menu">
                                            <ul>
                                                @foreach($menu->subMenus as $key => $sub)
                                                    <li>
                                                        <a class="dropdown-item nav-link nav_item"
                                                        href="{{url($sub->url)}}">{{ $sub->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </li>
                             @endforeach                           
                        </ul>  
                    </nav> 
                </div>
                <div class="header_block_right">
                    <ul>
                        <li class="search_bar"><a href="javascript:void(0)"><i class="ion-ios-search-strong"></i></a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--header bottom end-->
    </div>
</header>
<!--header area end-->
<!--search overlay-->

<div class="dropdown_search dropdown_search_three">
    <div class="search_close_btn">
        <i class="ion-android-close btn-close"></i>
    </div>
    <div class="search_container">
        <form action="#">
            <input placeholder="I’m shopping for..." type="text">
            <button type="submit"><i class="ion-ios-search-strong"></i></button>
        </form>
    </div>
</div>

<!--search overlay end-->

<!--Offcanvas menu area start-->

<div class="off_canvars_overlay">
            
</div>
<div class="Offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <span>MENU</span>
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div class="Offcanvas_menu_wrapper">
                    <div class="canvas_close">
                          <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                    </div>
                    <div class="header_top_right">
                        {{-- <div class="header_shipping">
                            <a href="#">Free Shipping on order over $99</a>
                        </div> --}}
                        <div class="header_social">
                            <ul>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header_block_right">
                        <ul>
                            <li class="search_bar"><a href="javascript:void(0)"><i class="ion-ios-search-strong"></i></a>
                                <div class="dropdown_search">
                                    <div class="search_close_btn">
                                        <i class="ion-android-close btn-close"></i>
                                    </div>
                                    <div class="search_container">
                                        <form action="#">
                                            <input placeholder="I’m shopping for..." type="text">
                                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="setting_container"><a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                                <div class="setting_wrapper">
                                    <div class="setting_close_btn">
                                        <i class="ion-android-close btn-close"></i>
                                    </div>
                                    <div class="logo">
                                       <a href="https://demo.hasthemes.com/sonata-preview/sonata/index.html"><img src="https://demo.hasthemes.com/sonata-preview/sonata/assets/img/logo/logo-2.png" alt=""></a>
                                    </div>
                                    <div class="header_description">
                                        <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart themes and provide premium and dedicated support to our products.</p>
                                    </div>
                                    <div class="setting_social">
                                         <ul>
                                             <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                             <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                             <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                                             <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                         </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="#">Home</a>    
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop Layouts</a>
                                        <ul class="sub-menu">
                                            <li><a href="https://demo.hasthemes.com/sonata-preview/sonata/shop.html">shop</a></li>
                                            <li><a href="https://demo.hasthemes.com/sonata-preview/sonata/shop-fullwidth.html">Full Width</a></li>
                                            <li><a href="https://demo.hasthemes.com/sonata-preview/sonata/shop-fullwidth-list.html">Full Width list</a></li>
                                            <li><a href="https://demo.hasthemes.com/sonata-preview/sonata/shop-right-sidebar.html">Right Sidebar </a></li>
                                            <li><a href="https://demo.hasthemes.com/sonata-preview/sonata/shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                            <li><a href="https://demo.hasthemes.com/sonata-preview/sonata/shop-list.html">List View</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">blog</a>
                                <ul class="sub-menu">
                                    <li><a href="https://demo.hasthemes.com/sonata-preview/sonata/blog.html">blog</a></li>
                                    <li><a href="https://demo.hasthemes.com/sonata-preview/sonata/blog-details.html">blog details</a></li>
                                    <li><a href="https://demo.hasthemes.com/sonata-preview/sonata/blog-fullwidth.html">blog fullwidth</a></li>
                                    <li><a href="https://demo.hasthemes.com/sonata-preview/sonata/blog-sidebar.html">blog sidebar</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="https://demo.hasthemes.com/sonata-preview/sonata/about.html">about Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="https://demo.hasthemes.com/sonata-preview/sonata/contact.html"> Contact Us</a> 
                            </li>
                        </ul>
                    </div>

                    <div class="Offcanvas_footer">
                        <span><a href="#"><i class="fa fa-envelope-o"></i>info@yourdomain.com</a></span>
                        <ul>
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Offcanvas menu area end--