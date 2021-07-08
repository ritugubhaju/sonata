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
                                <li><a href="{{setting('facebook')}}"><i class="ion-social-facebook"></i></a></li>
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
                        <a href="{{ route('homepage') }}"><img src="{{ asset('assets/images/logo.png') }}" width="65%" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12">
                    <div class="header_middle_right">
                        <div class="header_contact">
                            <div class="contact_static">
                                <a href="tel:{{setting('phone')}}"><i class="ion-android-call"></i> Call Us: {{setting('phone')}}</a>
                                
                            </div>
                            <div class="contact_static">
                                <a href="mailto:{{setting('email')}}"><i class="ion-android-mail"></i> {{setting('email')}}</a>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header middle area end-->
    
    <!--header bottom start-->
    
{{-- menu --}}
<div class="header_bottom sticky-header">
    <div class="container">
        <div class="header_container_right container_position">
            <div class="main_menu menu_three"> 
                <nav>  
                    <ul>
                        <li class="active"><a  href="{{ route('homepage') }}"> Home</a>
                                                        
                        </li>
                        <li class="mega_items"><a href="">Products</a> 
                            <div class="mega_menu">
                                <ul class="mega_menu_inner">
                                 
                                    @foreach($categories as $category)
                                        <li><a href="{{ route('products',$category->slug) }}">{{$category->title}}</a>
                                            <ul>  
                                                <li>
                                                    @foreach($subcategories as $subcategory) 
                                                        @if($category->id == $subcategory->category->id)
                                                            <a href="{{ route('all-products',$subcategory->slug) }}">{{$subcategory->title}}</a>
                                                        @endif
                                                    @endforeach
                                                    
                                                </li>                   
                                            </ul>
                                        </li>
                                    @endforeach
                                    
                                   
                                </ul>
                            </div>
                        </li>
                       
                        <li><a href="{{ route('about') }}"> About Us</a></li>
                        <li><a href="{{ route('contact') }}"> Contact Us</a></li>
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
        <form action="{{route('search')}}">
            <input name="keyword" placeholder="Search here…" type="text">
            <button type="submit"><i class="ion-ios-search-strong"></i></button>
        </form>
    </div>
</div>

<!--search overlay end-->
