@extends('layouts.app')


@section('content')
    <section class="website">
        <div class="background">
            <img src="@asset('images/IMAGE.png')" alt="hero image" class="background__image">
        </div>
        <div class="container">
            <div class="website__overlay">
                <img src="@asset('images/Group 444.png')" alt="overlay" class="website__image">
            </div>
            <h2 class="website__title">strona internetowa<span class="website__slogan">mazury to biznes</span></h2>
            <p class="webiste__description">
                Naszym zadaniem było zaprojektowanie i wdrożenie strony Mazury to biznes.  Kolory strony zostały dobrane w taki sposób aby pasowały do całej marki.
            </p>
            <div class="website__box">
                <div class="website__color">
                    <div class="website__overlay"></div>
                    <p class="website_code">#2C8BC6</p>
                </div>
                <div class="website__color">
                    <div class="website__overlay"></div>
                    <p class="website_code">#162e5e</p>
                </div>
                <div class="website__color">
                    <div class="website__overlay"></div>
                    <p class="website_code">#FFFFFF</p>
                </div>
                <div class="website__color">
                    <div class="website__overlay"></div>
                    <p class="website_code">#000000</p>
                </div>
                <div class="website__color">
                    <div class="website__overlay"></div>
                    <p class="website_code">#e5e9eb</p>
                </div>
            </div>
            <div class="website__content">
                <img src="@asset('images/overwiew.png')" alt="nie widać" class="website__overwiev">
            </div>
        </div>
    </section>
@endsection
