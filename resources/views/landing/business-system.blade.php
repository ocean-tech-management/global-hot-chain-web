@extends('landing.app')

@section('css')
<style>
    .top-banner {
        background-image: url('{{__(' landing/images/business_system.png')}}');
        height: 840px;
        background-position: left center;
        background-size: cover;
        position: relative
    }

    .top-banner::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgb(0, 0, 0);
        background: linear-gradient(180deg,
                rgba(0, 0, 0, 0.3255427170868347) 0%,
                rgba(0, 0, 0, 0.60) 100%);
        top: 0;
        left: 0;
        z-index: 0;
    }

    .text-primary {
        color: #ee9134 !important;
    }

    @media (max-width: 991px) {
        .top-banner {
            height: 740px;
        }

    }
</style>
@endsection
@section('content')
<!-- start banner section -->
<section class="d-flex flex-column justify-content-center cover-background" style="background-image: url('landing/images/business_system.png');height: 570px">
    <div class="container" style="max-width: 1400px ">
        <div class="row align-items-center justify-content-md-end">
            <div class="col-12 col-xl-8 col-lg-7 col-sm-8 text-center">
                <span class="text-white title-large alt-font font-weight-300 z-index-9 position-relative d-inline-block letter-spacing-4px">{{ __('landing.business_system') }}</span>
            </div>
        </div>
    </div>
</section>

<section class="bg-light-yellow overlap-height wow animate__fadeIn" style="background: #fff5ef;">
    <span class="text-center title-small alt-font text-primary font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.core_business_and_services') }}</span>
    <div class="padding-twelve-lr xl-padding-five-lr lg-padding-two-lr xs-no-padding-lr">
        <div class="container-fluid">
            <div class="row justify-content-center">
                @for($i = 1; $i <= 3; $i++) <div class="col-lg col-md-4 p-3 d-flex align-items-center flex-column mb-md-0 mb-5 text-center">
                    <img src='{{ asset("landing/images/core_business_and_services_$i.png") }}' alt="">
                    <div class="text-primary mt-2" style="font-size:20px;">{{ __("landing.core_business_and_services_$i") }}</div>
            </div>
            @endfor
        </div>
    </div>
    </div>
</section>

<section class="bg-light-yellow overlap-height wow animate__fadeIn" style="background: #fff5ef;">
    <div class="padding-twelve-lr xl-padding-five-lr lg-padding-two-lr xs-no-padding-lr">
        <div class="row align-items-center">
            <div class="col-md-5 mb-5 mb-md-0">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('landing/images/phone2.png') }}" alt="" class="col-md-10 col-6">
                </div>
            </div>
            <div class="col-md-5 d-flex d-md-block justify-content-center flex-column text-center text-md-left px-5">
                <span class="title-small alt-font text-primary font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.e_commerce_platform') }}</span>
                <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.e_commerce_platform_1") }}</span>
                <br>
                <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.e_commerce_platform_2") }}</span>
                <br>
                <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.e_commerce_platform_3") }}</span>
            </div>
        </div>
    </div>
</section>

<section class="overlap-height wow animate__fadeIn pt-0">
    <div class="row align-items-center">
        <div class="col-md-6 d-flex justify-content-center p-5">
            <div class="d-flex col-md-7 justify-content-center flex-column">
                <span class="title-small alt-font text-primary font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.ai_medical') }}</span>
                <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ai_medical_1") }}</span>
                <br>
                <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:16px;">{{ __("landing.ai_medical_2") }}</span>
            </div>
        </div>
        <div class="col-md-6 mb-5 mb-md-0">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('landing/images/robot.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="pt-0 overlap-height wow animate__fadeIn">
    <span class="text-center title-small alt-font text-primary font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.chain_business') }}</span>
    <div class="padding-twelve-lr xl-padding-five-lr lg-padding-two-lr xs-no-padding-lr">
        <div class="container-fluid">
            <div class="row justify-content-center">
                @for($i = 1; $i <= 3; $i++) <div class="col-lg col-md-4 p-3 d-flex align-items-center flex-column mb-md-0 mb-5 text-center">
                    <img src='{{ asset("landing/images/chain_business_$i.png") }}' alt="">
                    <div class="text-primary mt-2" style="font-size:20px;">{{ __("landing.chain_business_$i") }}</div>
                    <span class="mt-2 alt-font font-weight-300 d-block mb-3 col-11 text-center" style="font-size:14px;">{{ __("landing.chain_business_description_$i") }}</span>
            </div>
            @endfor
        </div>
    </div>
    </div>
</section>

<section class="bg-light-yellow overlap-height wow animate__fadeIn" style="background: #fff5ef;">
    <span class="text-center title-small alt-font text-primary font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.ghc_partners') }}</span>
    <div class="padding-twelve-lr xl-padding-five-lr lg-padding-two-lr xs-no-padding-lr" style="margin: 0 3rem">
        <span class="mt-2 alt-font font-weight-900 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_1") }}</span>
        <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_1_1") }}</span>
        <br>
        <span class="mt-2 alt-font font-weight-900 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_2") }}</span>
        <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_2_1") }}</span>
        <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_2_2") }}</span>
        <br>
        <span class="mt-2 alt-font font-weight-900 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_3") }}</span>
        <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_3_1") }}</span>
        <br>
        <span class="mt-2 alt-font font-weight-900 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_4") }}</span>
        <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_4_1") }}</span>
        <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_4_2") }}</span>
        <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_4_3") }}</span>
        <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_4_4") }}</span>
        <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_4_5") }}</span>
        <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_4_6") }}</span>
        <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_4_7") }}</span>

        <br>
        <span class="mt-2 alt-font font-weight-900 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_5") }}</span>
        <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_5_1") }}</span>
        <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_5_2") }}</span>
        <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_5_3") }}</span>
        <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_5_4") }}</span>
        <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_5_5") }}</span>
        <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_5_6") }}</span>
        <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_partners_5_7") }}</span>

    </div>
    <!--    
        <div class="container-fluid">
                <div class="row justify-content-center">
                    @for($i = 1; $i <= 9; $i++)
                        <div class="col-md-4 col-4 p-3 d-flex align-items-center flex-column mb-md-0 mb-5 text-center">
                            @if($i <= 7)
                                <img src='{{ asset("landing/images/partner_$i.png") }}' alt="" style="margin-top:40px;">
                            @else
                                <img src='{{ asset("landing/images/partner_$i.svg") }}' alt="" style="margin-top:40px;">
                            @endif
                        </div>
                    @endfor
                </div>
            </div>
        </div>
-->
</section>

<section class="overlap-height wow animate__fadeIn">
    <span class="text-center title-small alt-font text-primary font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.ghc_physical_store') }}</span>
    <div class="padding-twelve-lr xl-padding-five-lr lg-padding-two-lr xs-no-padding-lr">
        <div class="container-fluid">
            <div class="row justify-content-center">
                @for($i = 1; $i <= 3; $i++) <div class="col-lg col-md-4 col-4 p-3 d-flex align-items-center flex-column mb-md-0 mb-5 text-center">
                    <img src='{{ asset("landing/images/physical_store_$i.png") }}' alt="">
                    <div class="text-primary mt-2" style="font-size:20px;">{{ __("landing.ghc_physical_store_$i") }}</div>
            </div>
            @endfor
        </div>
    </div>
    </div>
</section>
@endsection