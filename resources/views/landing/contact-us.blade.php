@extends('landing.app')

@section('css')
<style>
    .text-primary {
        color: #ee9134 !important;
    }
    .primary-gradient {
        background: rgb(243,112,33);
        background: linear-gradient(180deg, rgba(243,112,33,1) 0%, rgba(252,159,85,1) 86%);
    }
</style>
@endsection

@section('content')

    <!-- start banner section -->
    <section class="d-flex flex-column justify-content-center cover-background"
             style="background-image: url('landing/images/contact_us.png');height: 570px">
        <div class="container" style="max-width: 1400px ">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-xl-8 col-lg-7 col-sm-8 text-center">
                    <span
                        class="text-white title-large alt-font font-weight-300 z-index-9 position-relative d-inline-block letter-spacing-4px">{{ __('landing.contact_us') }}</span>
                </div>
            </div>
        </div>
    </section>

    <section class="lg-padding-30px-lr md-padding-15px-lr sm-margin-40px-bottom primary-gradient">
        <div class="container-fluid">
            <div class="row col-md-10 mx-auto">
                <div class="col-md-4 p-4" >
                    <div class="shadow-lg bg-white p-5">
                        <span class="text-center alt-font text-primary font-weight-500 d-block margin-20px-bottom" style="font-size:22px;">{{ __("landing.job_offer") }}</span>
                        <span class="text-center alt-font font-weight-300 d-block mb-3" style="font-size:16px">joinus@globalhotchain.asia</span>
                    </div>
                </div>
                <div class="col-md-4 p-4" >
                    <div class="shadow-lg bg-white p-5">
                        <span class="text-center alt-font text-primary font-weight-500 d-block margin-20px-bottom" style="font-size:22px;">{{ __("landing.supplier_cooperation") }}</span>
                        <span class="text-center alt-font font-weight-300 d-block mb-3" style="font-size:16px">partners@globalhotchain.asia</span>
                    </div>
                </div>
                <div class="col-md-4 p-4" >
                    <div class="shadow-lg bg-white p-5">
                        <span class="text-center alt-font text-primary font-weight-500 d-block margin-20px-bottom" style="font-size:22px;">{{ __("landing.customer_cooperation") }}</span>
                        <span class="text-center alt-font font-weight-300 d-block mb-3" style="font-size:16px">support@globalhotchain.asia</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" overlap-height wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8 col-lg-7 col-sm-8 text-center ">
                    <span class="text-center alt-font text-primary font-weight-500 d-block margin-20px-bottom letter-spacing-3px" style="font-size:30px;">{{ __("landing.leave_message") }}</span>
                </div>
                <div class="lg-padding-30px-lr md-padding-15px-lr sm-margin-40px-bottom ">
                    <form class="row padding-4-rem-all lg-margin-35px-top md-padding-2-half-rem-all justify-content-center">
{{--                          action="{{ route('landing.contactUs-action') }}" method="post">--}}
                        <div class="col-12 col-xl-6 col-lg-6 ">
                            <label class="text-extra-medium text-extra-dark-gray  alt-font  margin-15px-bottom">{{ __('landing.your_name') }}<span class="required-error text-radical-red">*</span></label>
                            <input class="small-input bg-white margin-30px-bottom required error" type="text" name="name" placeholder="{{ __('landing.enter_your_name') }}" >
                            <label class="text-extra-medium text-extra-dark-gray  alt-font margin-15px-bottom">{{ __('landing.email_address') }}<span class="required-error text-radical-red">*</span></label>
                            <input class="small-input bg-white margin-50px-bottom required" type="email" name="email" placeholder="{{ __('landing.enter_your_email_address') }}">
                            <label class="text-extra-medium text-extra-dark-gray  alt-font  margin-15px-bottom">{{ __('landing.your_message') }}</label>
                            <textarea class="small-input bg-white margin-50px-bottom required" rows="8" name="password" placeholder="{{ __('landing.type_in_your_message') }}"></textarea>
                            <button type="submit" class="text-medium alt-font font-weight-300 btn btn-shadow primary-gradient text-uppercase text-white letter-spacing-2px padding-1-half-rem-lr">
                            {{ __('landing.submit') }}
                            </button>
                        </div>
                        <div class="col-lg-6 mt-5 mt-md-0">
                            <div class="mb-5">
                                <img src="{{ asset('landing/images/image_4.png') }}" alt="">
                            </div>
                            <div class="d-flex flex-column mb-4">
                                <div class="d-flex">
                                    <img src="{{ asset('landing/images/phone.svg') }}" alt="" class="mr-3">
                                    <span class="text-primary">{{ __('landing.support_hotline') }}</span>
                                </div>
                                {{-- <div class="d-flex">
                                    <img src="{{ asset('landing/images/phone.svg') }}" alt="" class="mr-3" style="opacity:0">
                                    XXXXXXXXXXXXx
                                </div> --}}
                            </div>
                            <div class="d-flex flex-column mb-4">
                                <div class="d-flex">
                                    <img src="{{ asset('landing/images/location.svg') }}" alt="" class="mr-3">
                                    <span class="text-primary">{{ __('landing.contact_address') }}</span>
                                </div>
                                <div class="d-flex">
                                    <img src="{{ asset('landing/images/location.svg') }}" alt="" class="mr-3" style="opacity:0">
                                    14 Wall Street, New York City,America
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
