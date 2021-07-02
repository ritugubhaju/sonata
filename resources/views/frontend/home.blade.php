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
                                    <a href="#">{{$category->title}}</a>
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
                                <a data-toggle="tab" href="#Makeup" role="tab" aria-controls="Makeup" aria-selected="false">
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
                                                <a class="primary_img" href=""><img src="{{asset($product->image_path)}}" alt=""></a>
                                                <a class="secondary_img" href="https://demo.hasthemes.com/alista-preview/alista/product-details.html"><img src="{{asset($product->banner_path)}}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">new</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                       
                                                        <li class="view-quickview"><a href="#" data-toggle="modal" data-target="#productquickview" title="Quick View"><i class="ion-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                    <h4><a href="https://demo.hasthemes.com/alista-preview/alista/product-details.html">{{$product->title}}</a></h4>
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
                                                <a class="primary_img" href=""><img src="{{asset($product->image_path)}}" alt=""></a>
                                                <a class="secondary_img" href="https://demo.hasthemes.com/alista-preview/alista/product-details.html"><img src="{{asset($product->banner_path)}}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">new</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                       
                                                        <li class="view-quickview"><a href="#" data-toggle="modal"  data-id="{{$product->id}}"  id="quickviewproduct" data-target="#modal_box" title="Quick View"><i class="ion-eye"></i></a></li>
                                                        {{-- <a title="Quick View" data-product_id="{{$data->id}}" class="btn btn-sm view-quickview" id="quickviewproduct"><i class="icon-size-fullscreen icons"></i></a> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                    <h4><a href="https://demo.hasthemes.com/alista-preview/alista/product-details.html">{{$product->title}}</a></h4>
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



@stop