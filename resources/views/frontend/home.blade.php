@extends('frontend.layouts.app')

@section('content')
     <!--slider area start-->
     <section class="slider_section slider_section_three">
       
            <div class="slider_area owl-carousel">
                @foreach($sliders as $slide)
                    <div class="single_slider d-flex align-items-center" data-bgimg="{{asset($slide->image_path)}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider_content slider_c_three">
                                        <h1>{{$slide->title}}</h1>
                                        <p>{{$slide->caption}}</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
                        
                    </div>
                @endforeach
            </div>
       
     </section>
     <!--slider area end-->

      <!--brand newsletter area start-->
      <div class="brand_area brand_three">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        @foreach($brands as $brand)
                            <div class="single_brand">
                                <a href="#"><img src="{{asset($brand->image_path)}}" alt=""></a>
                            </div>
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->

    <!--banner area start-->
    <div class="banner_area banner_three pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title title_style3">
                        <h3>Featured Category</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-lg-3 col-md-6">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href=""><img src="{{asset($category->image_path)}}" alt=""></a>
                                <div class="banner_text">
                                    <a href="{{ route('products',$category->slug) }}">{{$category->title}}</a>
                                </div>
                            </div>
                        
                        </div>
                    </div> 
                @endforeach
                      
            </div>
        </div>
    </div>
    <!--banner area end-->

     <!--new product area start-->
     <section class="product_area product_three mt-70 mb-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title title_style3">
                        <h3>Our Products</h3>
                    </div>
                    <div class="product_tab_btn3">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#Nailpolish" role="tab" aria-controls="Nailpolish" aria-selected="true"> 
                                    Nailpolish
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#Eyes" role="tab" aria-controls="Eyes" aria-selected="false">
                                    Eyes
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#Perfume" role="tab" aria-controls="Perfume" aria-selected="false">
                                    Perfume
                                </a>
                            </li>
                          
                         
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product_wrapper product_color3">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Nailpolish" role="tabpanel">
                        <div class="row product_slick_row4">
                            @foreach($products as $product)
                            @if($product->category->slug =='nail-polish')
                                <div class="col-lg-3">
                                
                                    <div class="single_product">

                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('products.detail', $product->slug) }}"><img src="{{asset($product->image_path)}}" alt=""></a>
                                                
                                               
                                                <div class="action_links">
                                                    <ul>
                                                       
                                                        <li ><a href="#" class="view-quickview" data-product_id="{{$product->id}}" id="quickviewproduct" data-toggle="modal" data-target="#productquickview" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                    <h4><a href="{{ route('products.detail', $product->slug) }}">{{$product->title}}</a></h4>
                                                </div>
                                                
                                                <div class="price-container">
                                                    <div class="price_box">
                                                        <span class="current_price">Rs {{$product->price}}</span>
                                                      
                                                    </div>
                                                   
                                                </div>

                                            </div>
                                    
                                    </div>
                                
                                </div>
                            @endif
                            @endforeach
                            
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Eyes" role="tabpanel">
                        <div class="row product_slick_row4">
                            @foreach($products as $product)
                            @if($product->category->slug =='eye-liner')
                                <div class="col-lg-3">
                                    
                                    <div class="single_product">

                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('products.detail', $product->slug) }}"><img src="{{asset($product->image_path)}}" alt=""></a>
                                                <a class="secondary_img" href="{{ route('products.detail', $product->slug) }}"><img src="{{asset($product->banner_path)}}" alt=""></a>
                                               
                                                <div class="action_links">
                                                    <ul>
                                                    
                                                        <li ><a href="#" class="view-quickview" data-product_id="{{$product->id}}" id="quickviewproduct" data-toggle="modal" data-target="#productquickview" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                    <h4><a href="{{ route('products.detail', $product->slug) }}">{{$product->title}}</a></h4>
                                                </div>
                                                
                                                <div class="price-container">
                                                    <div class="price_box">
                                                        <span class="current_price">Rs {{$product->price}}</span>
                                                    
                                                    </div>
                                                
                                                </div>

                                            </div>
                                    
                                    </div>
                                
                                </div>
                            @endif
                            @endforeach
                        </div>
                    </div> 
                    <div class="tab-pane fade" id="Perfume" role="tabpanel">
                        <div class="row product_slick_row4">
                            @foreach($products as $product)
                            @if($product->category->slug =='perfume')
                                <div class="col-lg-3">
                                
                                    <div class="single_product">

                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('products.detail', $product->slug) }}"><img src="{{asset($product->image_path)}}" alt=""></a>
                                                <a class="secondary_img" href="{{ route('products.detail', $product->slug) }}"><img src="{{asset($product->banner_path)}}" alt=""></a>
                                               
                                                <div class="action_links">
                                                    <ul>
                                                       
                                                        <li ><a href="#" class="view-quickview" data-product_id="{{$product->id}}" id="quickviewproduct" data-toggle="modal" data-target="#productquickview" title="Quick View"><i class="ion-eye"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                    <h4><a href="{{ route('products.detail', $product->slug) }}">{{$product->title}}</a></h4>
                                                </div>
                                                
                                                <div class="price-container">
                                                    <div class="price_box">
                                                        <span class="current_price">Rs {{$product->price}}</span>
                                                      
                                                    </div>
                                                   
                                                </div>

                                            </div>
                                    
                                    </div>
                                
                                </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!--new product area end-->

      <!--banner fullwidth area start-->
      <div class="banner_fullwidth">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="banner_thumb">
                        <a href="https://demo.hasthemes.com/alista-preview/alista/shop.html"><img src="https://demo.hasthemes.com/alista-preview/alista/assets/img/bg/banner21.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner fullwidth area end-->

     <!--deals section area css here-->
     <section class="deals_section deals_section_three">
        <div class="container">
            <div class="deals_inner_three">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="deals_carousel owl-carousel">
                            <div class="product_caption">
                                <div class="product_name">
                                    <a href="#">Boconi</a>
                                </div>
                                <div class="product_title">
                                    <h3><a href="https://demo.hasthemes.com/alista-preview/alista/product-details.html">Poly and Bark Vortex Side...</a></h3>
                                </div>
                                <div class="product_desc">
                                    <p>
                                       Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we're not typically too concerned with marketing talk this particular statement is clearly pretty accurate. The EOS 5D is unlike any previous digital SLR in that it combines a full-frame (35 mm sized) hig..</p>
                                </div>
                                <div class="product_sale">
                                    <span>Sale - 20% off</span>
                                </div>
                                <div class="product_timing">
                                    <div data-countdown="2023/12/15"></div>
                                </div>
                                <div class="product_button">
                                    <a href="https://demo.hasthemes.com/alista-preview/alista/shop.html">Shop Now</a>
                                </div>
                            </div>
                            <div class="product_caption">
                                <div class="product_name">
                                    <a href="#">Buxton</a>
                                </div>
                                <div class="product_title">
                                    <h3><a href="https://demo.hasthemes.com/alista-preview/alista/product-details.html">Light Inverted Pendant Qu...</a></h3>
                                </div>
                                <div class="product_desc">
                                    <p>
                                       Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we're not typically too concerned with marketing talk this particular statement is clearly pretty accurate. The EOS 5D is unlike any previous digital SLR in that it combines a full-frame (35 mm sized) hig..</p>
                                </div>
                                <div class="product_sale">
                                    <span>Sale - 12% off</span>
                                </div>
                                <div class="product_timing">
                                    <div data-countdown="2022/12/15"></div>
                                </div>
                                <div class="product_button">
                                    <a href="https://demo.hasthemes.com/alista-preview/alista/shop.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="deals_banner">
                            <img src="https://demo.hasthemes.com/alista-preview/alista/assets/img/bg/banner22.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--deals section area css end-->

    <!--new product area start-->
    <section class="product_area product_three mb-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title title_style3">
                        <h3> Best Sellers</h3>
                    </div>
                </div>
            </div>
            <div class="product_wrapper product_color3">
                <div class="row product_slick_column4">
                    @foreach($bestsellerproducts as $product)
                       
                           
                            <div class="col-lg-3">
                                <div class="single_product">

                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('products.detail', $product->slug) }}"><img src="{{asset($product->image_path)}}" alt=""></a>
                                       
                                       
                                        <div class="action_links">
                                            <ul>
                                                <li ><a href="#" class="view-quickview" data-product_id="{{$product->id}}" id="quickviewproduct" data-toggle="modal" data-target="#productquickview" title="Quick View"><i class="ion-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h4><a href="{{ route('products.detail', $product->slug) }}">{{$product->title}}</a></h4>
                                        </div>
                                        
                                        <div class="price-container">
                                            <div class="price_box">
                                                <span class="current_price">Rs {{$product->price}}</span>
                                              
                                            </div>
                                           
                                        </div>

                                    </div>
                            
                                </div>
                            </div>
                            
                       
                    @endforeach
                   
                </div>
            </div>
        </div>
    </section>
    <!--new product area end-->

@stop