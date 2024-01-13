@extends('landing.app')

@section('css')
<style>
    .top-banner{
        background-image: url('{{__('landing/images/r_and_d.png')}}');
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
            rgba(0, 0, 0, 0.75) 100%
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
</style>
@endsection
@section('content')
    <!-- start banner section -->
    <section class="d-flex flex-column justify-content-center cover-background"
             style="background-image: url('landing/images/r_and_d.png');height: 570px">
        <div class="container" style="max-width: 1400px ">
            <div class="row align-items-center justify-content-md-end">
                <div class="col-12 col-xl-8 col-lg-7 col-sm-8 text-center">
                    <span
                        class="text-white title-large alt-font font-weight-300 z-index-9 position-relative d-inline-block letter-spacing-4px">{{ __('landing.product_and_r_and_d') }}</span>
                </div>
            </div>
        </div>
    </section>
    
    <section class="overlap-height wow animate__fadeIn">
        <span class="text-center title-small alt-font text-primary font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.ghc_lab') }}</span>
        <div class="padding-twelve-lr xl-padding-five-lr lg-padding-two-lr xs-no-padding-lr">
            <div class="container-fluid mt-5">
                <div class="row justify-content-center">
                    @for($i = 1; $i <= 4; $i++)
                        <div class="col-md-3 p-3 d-flex align-items-center flex-column mb-md-0 mb-5 text-center">
                            <span class="text-center title-small alt-font text-primary font-weight-500 d-block margin-20px-bottom letter-spacing-3px" style="font-weight:700;">{{ __("landing.lab_$i") }}</span>
                            <span class="mt-2 text-center alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.lab_description_$i") }}</span>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>  

    <section class="bg-light-yellow overlap-height wow animate__fadeIn" style="background: #fff5ef;">
        <div class="padding-twelve-lr xl-padding-five-lr lg-padding-two-lr xs-no-padding-lr">
            <div class="row">
                <div class="col-lg-4 col-md-5 mb-5 mb-md-0">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('landing/images/certificate.png') }}" alt="" class="col-lg-8 col-md-10 col-6">
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 d-flex d-md-block justify-content-center flex-column text-center text-md-left px-5">
                    <span class="title-small alt-font text-primary font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.ghc_certification') }}</span>
                    <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.ghc_certification_description") }}</span>
                </div>
            </div>
        </div>
    </section>

    <section class="overlap-height wow animate__fadeIn">
        <div class="padding-twelve-lr xl-padding-five-lr lg-padding-two-lr xs-no-padding-lr">
            <div class="row">
                <div class="col-md-7 d-flex d-md-block justify-content-center flex-column text-center text-md-left px-5">
                    <span class="title-small alt-font text-primary font-weight-300 d-block margin-50px-bottom letter-spacing-3px">{{ __('landing.embl') }}</span>
                    <span class="mt-2 alt-font font-weight-300 d-block mb-3 letter-spacing-3px" style="font-size:20px;">{{ __("landing.embl_description") }}</span>
                </div>
                <div class="col-md-5 mb-5 mb-md-0">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('landing/images/embl.png') }}" alt="" class="col-md-10 col-6">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
