@extends('landing.app')

@section('css')
<style>
    .top-banner{
        background-image: url('{{__('landing/images/investment_relation.png')}}');
        height: 840px;
        background-position: left center;
        background-size:cover;
        position:relative
    }
    .top-banner::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgb(0, 0, 0);
        background: linear-gradient(
            180deg,
            rgba(0, 0, 0, 0.3255427170868347) 0%,
            rgba(0, 0, 0, 0.60) 100%
        );
        top: 0;
        left: 0;
        z-index: 0;
    }

    .text-primary {
        color: #ee9134 !important;
    }

    @media (max-width: 991px) {
        .top-banner{
            height: 740px;
        }

    }

    .custom-line {
        position:relative;
    }

    .custom-line::before{
        content: '';
        width: 1px;
        height:70%;
        position: absolute;
        background: #999999;
        left: -50px;
        top:30px;
    }

    .primary-gradient {
        background: rgb(243,112,33);
        background: linear-gradient(180deg, rgba(243,112,33,1) 0%, rgba(252,159,85,1) 86%);
    }

    .custom-title{
        white-space: nowrap;
        overflow: hidden;
        display: block;
        text-overflow: ellipsis;
    }
</style>
@endsection
@section('content')
    <!-- start banner section -->
    <section class="d-flex flex-column justify-content-center cover-background"
             style="background-image: url('landing/images/investment_relation.png');height: 570px">
        <div class="container" style="max-width: 1400px ">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-xl-8 col-lg-7 col-sm-8 text-center">
                    <span
                        class="text-white title-large alt-font font-weight-300 z-index-9 position-relative d-inline-block letter-spacing-4px">{{ __('landing.investment_relation') }}</span>
                </div>
            </div>
        </div>
    </section>
    
    <section class="overlap-height wow animate__fadeIn">
        <span class="text-center title-small alt-font text-primary font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.ghc_structure') }}</span>
        <img src="{{ asset('landing/images/company_structure.png') }}" alt="">
    </section>  

    <section class="bg-light-yellow overlap-height wow animate__fadeIn px-4" style="background: #fff5ef;">
        <span class="text-center alt-font text-primary font-weight-300 d-block margin-50px-bottom letter-spacing-3px" style="font-size:30px;">{{ __('landing.ghc_partners') }}</span>
        <div class="padding-twelve-lr xl-padding-five-lr lg-padding-two-lr xs-no-padding-lr d-flex flex-column align-items-center">
            @for($i = 1; $i <= 7; $i++)
                <div class="d-flex flex-column">
                    <div class="d-flex">
                        <div class="mr-4 primary-gradient p-3 text-white" style="border-radius:50%">{{ __("landing.ghc_partners_year_$i") }}</div>
                        <div class="primary-gradient p-3 text-white custom-title" style="border-radius:12px;@if(app()->getLocale() == 'en') min-width:200px; @else width:200px; @endif max-width:70%;">{{ __("landing.ghc_partners_title_$i") }}</div>
                    </div>
                    <div class="d-flex">
                        <div class="mr-4 primary-gradient p-3 text-white" style="border-radius:50%;opacity:0;">2018</div>
                        <div class="p-3 @if(!$i == 7) custom-line @endif" style="color:#707070;border-radius:12px;width:320px;font-weight:300;">{{ __("landing.ghc_partners_description_$i") }}</div>
                    </div>
                </div>
            @endfor
        </div>
    </section>

@endsection
