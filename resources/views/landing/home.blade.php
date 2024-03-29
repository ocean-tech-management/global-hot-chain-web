@extends('landing.app')

@section('css')
<style>
    .top-banner {
        background-image: url('{{__(' landing/images/banner.png')}}');
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
                rgba(0, 0, 0, 0.75) 100%);
        top: 0;
        left: 0;
        z-index: 0;
    }

    .text-primary {
        color: #ee9134 !important;
    }

    @media (max-width: 1200px) {
        .top-banner {
            height: 600px;
        }

    }

    @media (max-width: 600px) {
        .top-banner {
            height: 500px;
        }

    }
</style>
@endsection
@section('content')
<!-- start banner section -->
<section class="d-flex flex-column justify-content-end justify-content-lg-center top-banner">
    <div class="container" style="max-width: 1400px ">
        <div class="row align-items-center justify-content-center">
            <div class="col-9 col-lg-5 col-sm-5 text-center xs-margin-30px-bottom">
                {{-- <img src="images/single-project-page-03-img01.jpg" alt=""/>--}}
            </div>
            <div class="col-10 col-lg-7 col-sm-7">
                <div class="position-relative ">
                    <span class=" text-extra-large alt-font line-height-20px z-index-9 position-relative d-inline-block letter-spacing-4px text-white">{{ __('landing.ghc') }}</span>
                </div>
                <div class="position-relative ">
                    <span class="@if(app()->getLocale() == 'en') title-small pr-md-5 @else title-large @endif alt-font font-weight-300 z-index-9 position-relative d-inline-block letter-spacing-4px text-white">{{ __('landing.starts_from') }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner section -->
<!-- start section -->
<section class=" overlap-height wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-9 col-lg-7 col-sm-8 text-center ">
                <span class="alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __('landing.about_happy_buy_') }}</span>
                <span class="title-small alt-font text-primary font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.about_ghc') }}</span>
                <h5 class="text-extra-large2 alt-font text-extra-medium-gray font-weight-300 letter-spacing-minus-1px mb-0" style="line-height: 42px">{{ __('landing.about_ghc_description') }}</h5>
            </div>
        </div>
    </div>
</section>

<!--
    <section class="bg-light-yellow overlap-height wow animate__fadeIn" style="background: #fff5ef;">
        <span class="text-center alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __('landing.our_advantage') }}</span>
        <span class="text-center title-small alt-font text-primary font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.ghc_financial_strength') }}</span>
        <div class="padding-twelve-lr xl-padding-five-lr lg-padding-two-lr xs-no-padding-lr">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    @for($i = 1; $i <= 5; $i++)
                        <div class="col-lg col-md-4 col-4 p-3 d-flex align-items-center flex-column mb-md-0 mb-5 text-center">
                            <img src='{{ asset("landing/images/investor_$i.png") }}' alt="">
                            <div class="text-primary mt-2" style="font-size:20px;">{{ __("landing.investor_$i") }}</div>                        
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>  
    -->

<section class="overlap-height wow animate__fadeIn">
    <span class="text-center alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __('landing.our_core') }}</span>
    <span class="text-center title-small alt-font text-primary font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.ghc_culture') }}</span>
    <div class="padding-twelve-lr xl-padding-five-lr lg-padding-two-lr xs-no-padding-lr">
        <div class="container-fluid">
            <div class="row justify-content-center">
                @for($i = 1; $i <= 3; $i++) <div class="col-md-4 d-flex align-items-center flex-column mb-md-0 mb-5 text-center">
                    <img src='{{ asset("landing/images/core_$i.svg") }}' alt="">
                    <span class="text-center alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.core_$i") }}</span>
                    <span style="font-size:2rem;padding:0 30px;" class="text-center alt-font text-primary font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __("landing.core_description_$i") }}</span>
            </div>
            @endfor
        </div>
    </div>
    </div>
</section>

<section class="bg-light-yellow overlap-height wow animate__fadeIn" style="background: #fff5ef;">
    <span class="text-center title-small alt-font text-primary font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.ghc_group_value') }}</span>
    <div class="padding-twelve-lr xl-padding-five-lr lg-padding-two-lr xs-no-padding-lr">
        <div class="container-fluid">
            <div class="row justify-content-center">
                @for($i = 1; $i <= 9; $i++) <div class="col-md-4 col-4 p-3 d-flex align-items-center flex-column mb-md-0 mb-5 text-center">
                    <img src='{{ asset("landing/images/value_$i.svg") }}' alt="">
                    <div class="mt-2" style="font-size:20px;">{{ __("landing.value_$i") }}</div>
            </div>
            @endfor
        </div>
    </div>
    </div>
</section>

<section class="overlap-height wow animate__fadeIn">
    <span class="text-center title-small alt-font text-primary font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.ghc_development_achievments') }}</span>
    <div class="padding-twelve-lr xl-padding-five-lr lg-padding-two-lr xs-no-padding-lr">
        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                @for($i = 1; $i <= 4; $i++) <div class="col-md-3 p-3 d-flex align-items-center flex-column mb-md-0 mb-5 text-center">
                    <span class="text-center title-small alt-font text-primary font-weight-500 d-block margin-20px-bottom letter-spacing-3px" style="font-weight:700;">{{ __("landing.achievement_$i") }}</span>
                    <span class="mt-2 text-center alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.achievement_description_$i") }}</span>
            </div>
            @endfor
        </div>
    </div>
    </div>
</section>

<section class="p-5 overlap-height wow animate__fadeIn" style="padding:0px;height: 400px;background: url('{{ asset('landing/images/strength.png') }}');background-size:cover; color:white !important;">
    <span class="text-center title-small alt-font font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.ghc_strength') }}</span>
    <div class="padding-twelve-lr xl-padding-five-lr lg-padding-two-lr xs-no-padding-lr">
        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                @for($i = 1; $i <= 4; $i++) <div class="col-md-3 p-3 d-flex align-items-center flex-column mb-md-0 mb-5 text-center">
                    <span class="text-center title-small alt-font font-weight-500 d-block margin-20px-bottom letter-spacing-3px" style="font-weight:700;">{{ __("landing.strength_$i") }}</span>
                    <span class="mt-2 text-center alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.strength_description_$i") }}</span>
            </div>
            @endfor
        </div>
    </div>
    </div>
</section>

<section class="p-5">
    <span class="text-center title-small alt-font font-weight-300 d-block margin-50px-bottom letter-spacing-3px text-primary">{{ __('landing.ghc_honor') }}</span>
    <div class="container-fluid d-flex justify-content-center">
        <div class="row">
            <!--
                <div class="col-md-5 d-flex justify-content-center">
                    <img src="{{ asset('landing/images/trophy.png') }}" alt="" class="w-75">
                </div>
                -->
            <div class="col-md-7 px-md-5 px-4" style="margin:0 auto;">
                @for($i = 1; $i <= 5; $i++) <div style="display:flex;column-gap:2rem;margin-bottom:4rem;">
                    <img style="width:15vw;" src={{'/landing/images/honors/'.__("landing.honor_image_$i")}} />
                    <div class="d-flex flex-column mb-md-0 mb-5">
                        <span class="alt-font text-primary font-weight-700 d-block letter-spacing-3px" style="font-weight:700;font-size:20px;">{{ __("landing.honor_$i") }}</span>
                        <span class="alt-font font-weight-300 d-block mb-3" style="font-size:14px;">{{ __("landing.honor_description_$i") }}</span>
                    </div>
            </div>
            @endfor
        </div>
    </div>
    </div>
</section>

<!--
    <section class="bg-light-yellow overlap-height wow animate__fadeIn" style="background: #fff5ef;">
        <span class="text-center title-small alt-font text-primary font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.ghc_core_member') }}</span>
        <div class="padding-twelve-lr xl-padding-five-lr lg-padding-two-lr xs-no-padding-lr">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    @for($i = 1; $i <= 5; $i++)
                        <div class="col-lg col-md-4 col-4 p-4 d-flex align-items-center flex-column mb-md-0 mb-5 text-center">
                            <img src='{{ asset("landing/images/member_$i.png") }}?1' alt="">
                            <div class="text-primary mt-2" style="font-size:20px;">{{ __("landing.member_$i") }}</div>           
                            <span class="text-center alt-font font-weight-300 d-block mb-3" style="font-size:14px;">{{ __("landing.member_description_$i") }}</span>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>  
    -->
@endsection