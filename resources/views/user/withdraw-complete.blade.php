@extends('landing.app')

@section('css')
    <style>
        td {
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>
@endsection
@section('content')
    <!-- start section -->
    <section class=" wow animate__fadeIn cover-background"
             style="background-image: url('{{asset('landing/images/product-details_banner.png')}}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="row col-12  justify-content-center" style="max-width: 935px;">
                    <h6 class="title-small alt-font font-weight-300 dark-gold margin-50px-bottom">{{__('user-portal.withdraw_success')}}</h6>
                    <div class="row justify-content-center">
                        <div class="col-md-12 margin-50px-bottom row justify-content-center">
                            <div class="h-120px w-120px rounded-circle bg-dark-gold row justify-content-center align-items-center">
                                <i class="fa fa-check text-white" style="font-size: 50px" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-6 margin-50px-bottom row justify-content-center mx-auto">
                                 <span class="text-extra-dark-gray text-extra-large alt-font" style="text-align: center">
                                    {{__('user-portal.your_withdrawal_is_success')}}
                                </span>
                        </div>
                        <div class="col-md-12 margin-50px-bottom row justify-content-center mx-auto">
                            <table>
                                <tr>
                                    <td class="text-right alt-font text-extra-large">{{ __('user-portal.transaction_id') }}</td>
                                    <td class="alt-font text-extra-large text-black">{{ $return_data['transaction_id'] }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right alt-font text-extra-large">{{ __('user-portal.date') }}</td>
                                    <td class="alt-font text-extra-large text-black">{{ $return_data['date'] }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right alt-font text-extra-large">{{ __('user-portal.balance_after_withdrawal') }}</td>
                                    <td class="alt-font text-extra-large text-black">{{ number_format($return_data['balance_after']) }} PV</td>
                                </tr>
                            </table>

                        </div>
                        <div class="col-12 margin-10px-bottom row justify-content-center">
                            <a class="text-medium alt-font font-weight-300 btn btn-shadow bg-dark-gold text-uppercase text-white letter-spacing-2px padding-2-half-rem-lr "
                               href="{{ route('user.my-bonus') }}">
                                {{__('user-portal.continue')}}
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
