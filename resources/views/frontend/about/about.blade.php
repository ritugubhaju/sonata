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
                        <li><a href="{{ url('about') }}">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<!--breadcrumbs area end-->

<div class="about_page_section"> 
   <div class="container">
        <!--about section area -->
        <div class="about_section"> 
            <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about_thumb">
                            <img src="{{asset('assets/images/about1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about_content">
                            <h1>Welcome To alista Store!</h1>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident ducimus id mollitia quisquam accusamus recusandae enim dolorem vitae laborum amet molestiae, molestias alias, neque impedit, assumenda corporis. Facere esse, error? Molestias explicabo voluptate, odit excepturi molestiae pariatur facilis facere, sunt laborum earum tenetur inventore! Error voluptatum iusto quidem officia, et omnis cupiditate rem, tenetur odit explicabo adipisci totam, eius?</p>
                            
                        </div>
                    </div>
                </div>   
        </div>
        <!--about section end-->

        <!--counterup area -->
        <div class="counterup_section"> 
            <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single_counterup">
                           <div class="counter_img">
                                <img src="assets/img/about/count.png" alt="">
                            </div>
                            <div class="counter_info">
                                <h2 class="counter_number">2170</h2>
                                <p>happy customers</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single_counterup count-two">
                            <div class="counter_img">
                                <img src="assets/img/about/count2.png" alt="">
                            </div>
                            <div class="counter_info">
                                <h2 class="counter_number">8080</h2>
                                <p>AWARDS won</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single_counterup">
                            <div class="counter_img">
                                <img src="assets/img/about/count3.png" alt="">
                            </div>
                            <div class="counter_info">
                                <h2 class="counter_number">2150</h2>
                                <p>HOURS WORKED</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single_counterup count-two">
                            <div class="counter_img">
                                <img src="assets/img/about/count4.png" alt="">
                            </div>
                            <div class="counter_info">
                                <h2 class="counter_number">2170</h2>
                                <p>COMPLETE PROJECTS</p>
                            </div>
                        </div>
                    </div>
                </div>  
        </div>
        <!--counterup end-->

       
    </div>
</div>



@endsection