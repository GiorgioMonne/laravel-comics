@extends('layouts.base')


@section('pageContent')
    <div class="main">

        <div class="cards">

            @foreach ($comics as $fumetto)
            <div class="card">

                <img src="{{$fumetto['thumb']}}" alt="">
                <h3>{{$fumetto['series']}}</h3>

            </div>
            @endforeach

        </div>

        <div class="load">
            <button class="load-btn">LOAD MORE</button>
        </div>


        <div class="icons">
            <div class="box">

                <img src="{{asset('img/buy-comics-digital-comics.png')}}"alt="">
                <h3>DIGITAL COMICS</h3>

            </div>
            <div class="box">

                <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                <h3>DC MERCHANDISE</h3>
                
            </div>
            <div class="box">
                
                <img src="{{asset('img/buy-comics-subscriptions.png')}}"alt="">
                <h3>SUBSCRIPTION</h3>

            </div>
            <div class="box">
                
                <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                <h3>COMIC SHOP LOCATOR</h3>

            </div>
            <div class="box">

                <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                <h3>DC POWER VISA</h3>
                
            </div>
        </div>
            
    </div>
@endsection