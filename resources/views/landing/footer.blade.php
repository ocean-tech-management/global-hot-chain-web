<!-- start footer -->
<footer class="footer-dark " style="background-color:#232323">
    <div class="footer-top padding-five-tb lg-padding-eight-tb md-padding-50px-tb">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 col-sm-6 md-margin-40px-bottom xs-margin-25px-bottom">
                    <img src="{{ asset('landing/images/logo.png') }}" alt="">
                    <p class="mt-3">{{ __('landing.footer_description') }}</p>
                </div>
                <div class="col-12 col-lg-2 col-sm-6 md-margin-40px-bottom xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">{{ __('landing.site_map') }}</span>
                    <ul>
                        <li><a href="{{ route('landing.aboutUs') }}">{{ __('landing.about_us') }}</a></li>
                        <li><a href="{{ route('landing.products-and-r-and-d') }}">{{ __('landing.product_and_r_and_d') }}</a></li>
                        <li><a href="{{ route('landing.business-system') }}">{{ __('landing.business_system') }}</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-2 col-sm-6 md-margin-40px-bottom xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">&nbsp;</span>
                    <ul>
                        <li><a href="{{ route('landing.investment-relation') }}">{{ __('landing.investment_relation') }}</a></li>
                        <li><a href="{{ route('landing.contactUs') }}">{{ __('landing.contact_us') }}</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-4 col-sm-6 xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">{{ __('landing.contact_information') }}</span>
                    <ul>
                        <li><a href="{{ route('landing.contactUs') }}">14 Wall Street, New York City,America</a></li>
                        <li>globalhotchain@gmail.com</li>
                    </ul>
                </div>
                <div class="col-12 col-lg-4 col-sm-6 xs-margin-25px-bottom">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom padding-40px-tb border-top border-color-white-transparent">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 last-paragraph-no-margin sm-margin-20px-bottom">
                    <p>Copyright © Global Hot Chain</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
