<footer id="footer" class="footer-main-block">
    <div class="container-fluid pl-3 pl-lg-5">
        <div class="footer-block">
            @php
                $widgets = App\WidgetSetting::first();
            @endphp
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">
                   
                    <div class="footer-logo">
                        <h3 class="bold text-white" style="font-weight: bolder;">DISCLAIMER</h3>
                        <p class="text-white">All information in this website are only for education and knowledge on investment strategy that you can used. Information in this website are based on research and fact-finding by Author of Lubok Harta and it remains as Author's opinion and idea. We are not involving in any fund/money collection, any buy or sell call on any investment either by derivatives/securities/stocks/bond. All investment decisions are yours.</p>
                    </div>
                </div>
                @if(isset($widgets))

                <!-- <div class="col-lg-2 col-md-6 col-4 offset-lg-2">
                    <div class="widget"><b>QUICK LINKS</b></div>
                    <div class="footer-link">
                        <ul>
                            <li><a href="{{ route('blog.all') }}" title="Blog">Articel</a></li> 
                            <li><a href="{{ url('course/1/webdevelopment') }}" title="Blog">Courses</a></li> 
                            <li><a href="{{ route('comingsoon.page') }}" title="Blog">Webinars</a></li> 
                        </ul>
                    </div>
                </div> -->
                <div class="col-lg-2 col-md-6 col-4 offset-4">
                    <div class="widget"><b>SUPPORT</b></div>
                    <div class="footer-link">
                        <ul>
                            <!-- <li><a href="{{ route('careers.show') }}" title="Careers">{{ __('frontstaticword.Careers') }}</a></li> -->
                            <li><a href="{{ route('about.show') }}" title="About Us">{{ __('frontstaticword.Aboutus') }}</a></li>
                            <li><a href="{{url('user_contact')}}" title="Contact Us">{{ __('frontstaticword.Contactus') }}</a></li>
                            <!-- <li><a href="{{url('terms_condition')}}" title="Terms">{{ __('frontstaticword.Terms&Condition') }}</a></li>  -->
                            <li><a href="{{url('privacy_policy')}}" title="Policy">{{ __('frontstaticword.PrivacyPolicy') }}</a></li>
                        </ul>
                    </div>
                </div>
                @endif
                
            </div>
        </div>
    </div>
    <hr>
    <div class="tiny-footer">
        <div class="container-fluid pl-3 pl-lg-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="logo-footer">
                        <ul>
                            <a href="{{ url('/') }}"><b style="color: white;">{{ $gsetting->project_title }}</b></a>
                            <p class="text-muted bold mt-2">{{$gsetting->default_address}}</p>
                            <p class="text-muted bold">{{$gsetting->default_phone}}</p>
                            <p class="text-muted bold">{{$gsetting->wel_email}}</p>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 offset-2">
                    <div class="copyright-social">
                        <ul>
                            <li><a href="" target="_blank" title="facebook" style="color: #d79618"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                            <li><a href="" target="_blank" title="instagram" style="color: #d79618"><i class="fab fa-instagram fa-2x" aria-hidden="true"></i></a></li>
                            <li><a href="" target="_blank" title="twitter" style="color: #d79618"><i class="fab fa-twitter fa-2x" aria-hidden="true"></i></a></li>
                        </ul>
                        <p class="text-right text-white">{{ $cpy_txt }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

@include('instructormodel')
