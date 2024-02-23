@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <main>
        <div class="d-flex justify-content-center main-one-bg">
            <div class="my-container pt-24 pb-24 position-relative">
                <div class="absolute white ps-16 pt-8 pb-8 pe-16 main-two-bg">
                CURRENT SERIES
                </div>
                <div class="d-flex flex-wrap">
                    @foreach ($comics as $elem)
                        <div class="single-card width-a-sixth white margin-cards">
                            <div>
                                <div class="width-a-sixth height-a-sixth mb-16">
                                    <img src="{{$elem['thumb']}}" alt="{{ $elem['series'] }}" class="w-100 h-100" />
                                </div>

                                <h6 class="mb-32">
                                    {{ $elem['series'] }}
                                </h6>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-center">
                    <button class="white ps-16 pt-8 pb-8 pe-16 main-two-bg border-0">
                        LOAD MORE
                    </button>
                </div>
            </div>
        </div>
        
        <div class="d-flex justify-content-center main-two-bg main-two-height">
            <div class="h-100 my-container">
                <div class="h-100 d-flex align-items-center">
                    <div class="h-40 grow-one smaller-plus">
                        <div class="h-100 d-flex justify-content-center align-items-center">
                            <img class="h-100 ps-8 pe-8" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="" />
                            <div class="white">DIGITAL COMICS</div>
                        </div>
                    </div>
                    <div class="h-40 grow-one smaller-plus">
                        <div class="h-100 d-flex justify-content-center align-items-center">
                            <img class="h-100 ps-8 pe-8" src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="" />
                            <div class="white">DC MERCHANDISE</div>
                        </div>
                    </div>
                    <div class="h-40 grow-one smaller-plus">
                        <div class="h-100 d-flex justify-content-center align-items-center">
                            <img class="h-100 ps-8 pe-8" src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="" />
                            <div class="white">SUBSCRIPTION</div>
                        </div>
                    </div>
                    <div class="h-40 grow-one smaller-plus">
                        <div class="h-100 d-flex justify-content-center align-items-center">
                            <img class="h-100 ps-8 pe-8" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="" />
                            <div class="white">COMIC SHOP LOCATOR</div>
                        </div>
                    </div>
                    <div class="h-40 grow-one smaller-plus">
                        <div class="h-100 d-flex justify-content-center align-items-center">
                            <img class="h-100 ps-8 pe-8" src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="" />
                            <div class="white">DC POWER VISA</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
