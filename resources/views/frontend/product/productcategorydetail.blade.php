@extends ('frontend.layouts.app')
@section('content')


 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="{{ route('homepage') }}">Home</a></li>
                        <li><a href="{{ route('products.detail', $products->slug) }}">{{$products->title}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<!--breadcrumbs area end-->

<div class="product_container">
    <div class="container">
        <div class="product_container_inner mb-60">
            <!--product details start-->
            <div class="product_details mb-60">
                @if($products)
                
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="product-details-tab">
                                    <div>
                                        <a>
                                            <img src="{{asset($products->image_path)}}">
                                        </a>
                                    </div>
                                    
                                   
                                        <div>
                                           
                                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                                    @if(isset($products->banner_image))
                                                        <li>
                                                          
                                                                <a href="#"  data-update=""  >
                                                                    <img src="{{asset($products->banner_path)}}" alt="ri"/>
                                                                </a>
                                                        
                                                        </li>
                                                    @else 
                                                    <li>
                                                            
                                                        <a href="#"  data-update=""   >
                                                            <img src="{{asset('assets/images/logo.png')}}" alt="ri"/>
                                                        </a>
                                                
                                                    </li>
                                                    @endif

                                                    @if(isset($products->image1))
                                                        <li >
                            
                                                            <a href="#"  data-update=""  >
                                                                <img src="{{asset($products->image_path1)}}" alt=""/>
                                                            </a>

                                                        </li>
                                                     @else 
                                                        <li>
                                                                
                                                            <a href="#"  data-update=""  >
                                                                <img src="{{asset('assets/images/logo.png')}}" alt="ri"/>
                                                            </a>
                                                    
                                                        </li>
                                                    @endif
                                                    
                                                    @if(isset($products->image2))
                                                        <li >
                                                            <a href="#"  data-update="" >
                                                                <img src="{{asset($products->image_path2)}}" alt=""/>
                                                            </a>

                                                        </li>
                                                    @else 
                                                        <li>
                                                                
                                                            <a href="#"  data-update=""  >
                                                                <img src="{{asset('assets/images/logo.png')}}" alt="ri"/>
                                                            </a>
                                                    
                                                        </li>
                                                    @endif
                                            </ul>
                                            
                                        </div>
                                   
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="product_d_right">
                                <form action="#">

                                        <h1>{{$products->title}}</h1>
                                        <div class="price_box">
                                            <span class="current_price"> Rs. {{$products->price}}</span>
                                           

                                        </div>
                                        <div class="product_desc">
                                            <p>{!! $products->description !!}</p>
                                        </div>
                                        <div class="product_variant color">
                                            <h3>Available Options</h3>
                                            <label>color</label>
                                            <ul>
                                                <li class="color1"><a href="#"></a></li>
                                                <li class="color2"><a href="#"></a></li>
                                                <li class="color3"><a href="#"></a></li>
                                                <li class="color4"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                       
                                        <div class="product_meta">
                                            <span>Category: <a href="#">{{ $products->category->title}}</a></span>
                                        </div>

                                    </form>
                                

                                </div>
                            </div>
                        </div> 
                  
                @endif 
            </div>
            <!--product details end-->

            <!--product info start-->
            <div class="product_d_info">
                <div class="row">
                    <div class="col-12">
                        <div class="product_d_inner">   
                            <div class="product_info_button">    
                                <ul class="nav" role="tablist">
                                    <li >
                                        <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                                    </li>
                                    <li>
                                         <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Specification</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                    <div class="product_info_content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                        <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
                                    </div>    
                                </div>
                                <div class="tab-pane fade" id="sheet" role="tabpanel" >
                                    <div class="product_d_table">
                                       <form action="#">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="first_child">Compositions</td>
                                                        <td>Polyester</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Styles</td>
                                                        <td>Girly</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Properties</td>
                                                        <td>Short Dress</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                    <div class="product_info_content">
                                        <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                    </div>    
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>  
            </div>  
            <!--product info end-->
        </div>
       
    </div>
</div>

@endsection