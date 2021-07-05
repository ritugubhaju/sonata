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
                        <li><a href="{{ url('contact') }}">contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<!--breadcrumbs area end-->

<div class="home_contact_wrapper">
    <div class="container">
         <!--contact map start-->
        <div class="contact_map">
            <div class="row">
                <div class="col-12">
                   <div class="map-area">
                      <div id="googleMap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d56529.64363409014!2d85.3163051184924!3d27.68321969714603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x39eb19b1923a15c3%3A0x8fab2e10d8482402!2saccessworld!3m2!1d27.6794199!2d85.3196747!5e0!3m2!1sen!2snp!4v1618810226314!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                      </div>
                   </div>
                </div>
            </div>
        </div>
        <!--contact map end-->

        <!--contact area start-->
        <div class="contact_area"> 
            <div class="row">
                    <div class="col-lg-6 col-md-12">
                       <div class="contact_message content">
                            <h3>Contact us</h3>    
                             <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human. qui sequitur mutationem consuetudium lectorum. Mirum est notare quam</p>
                            <ul>
                                <li><i class="fa fa-fax"></i> {{setting('address')}}</li>
                                <li><i class="fa fa-phone"></i> <a href="mailto:{{setting('email')}}">{{setting('email')}}</a></li>
                                <li><i class="fa fa-envelope-o"></i><a href="tel:{{setting('phone')}}">{{setting('phone')}}</a></li>
                            </ul>             
                        </div> 
                    </div>
                    <div class="col-lg-6 col-md-12">
                    
                       <div class="contact_message form">
                            <h3>Get in Touch</h3>   
                            <form id="contact-form" method="POST"  action="{{route('send-contact')}}">
                                @csrf
                                <p>  
                                   <label> Your Name (required)</label>
                                    <input name="name" placeholder="Name *" type="text"> 
                                </p>
                                <p>       
                                   <label>  Your Email (required)</label>
                                    <input name="email" placeholder="Email *" type="email">
                                </p>
                                <p>          
                                   <label>  Subject</label>
                                    <input name="subject" placeholder="Subject *" type="text">
                                </p>    
                                <div class="contact_textarea">
                                    <label>  Your Message</label>
                                    <textarea placeholder="Message *" name="message"  class="form-control2" ></textarea>     
                                </div>   
                                <button type="submit"> Send</button>  
                                <p class="form-messege"></p>
                            </form> 

                        </div> 
                    </div>
                </div>   
        </div>
        <!--contact area end-->
    </div>
</div>

@endsection