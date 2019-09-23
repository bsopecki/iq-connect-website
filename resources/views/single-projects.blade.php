@extends('layouts.app')


@section('content')
    <section class="website">
        <img src="@asset('images/IMAGE.png')" alt="hero image" class="website__photo">
        <div class="container">
            <img src="@asset('images/Group 444.png')" alt="overlay" class="website__image">
            <h2 class="website__title">strona internetowa<br><span class="website__slogan">mazury to biznes</span></h2>
            <p class="website__description">
                Naszym zadaniem było zaprojektowanie i wdrożenie strony Mazury to biznes.  Kolory strony zostały dobrane w taki sposób aby pasowały do całej marki.
            </p>
            <div class="website__box">
                <div class="website__color">
                    <div class="website__overlay" style="background-color: #2c8bc6"></div>
                    <p class="website__code">#2C8BC6</p>
                </div>
                <div class="website__color">
                    <div class="website__overlay" style="background-color: #162e5e"></div>
                    <p class="website__code">#162e5e</p>
                </div>
                <div class="website__color">
                    <div class="website__overlay website__overlay--border" style="background-color: #fff"></div>
                    <p class="website__code">#FFFFFF</p>
                </div>
                <div class="website__color">
                    <div class="website__overlay" style="background-color: #000"></div>
                    <p class="website__code">#000000</p>
                </div>
                <div class="website__color">
                    <div class="website__overlay" style="background-color: #e5e9eb"></div>
                    <p class="website__code">#e5e9eb</p>
                </div>
            </div>
            <div class="website__content">
                <img src="@asset('images/overwiew.png')" alt="nie widać" class="website__overwiev">
            </div>
        </div>
    </section>
    @include('layouts.components.contact-section')
    @include('layouts.components.footer')
@endsection
