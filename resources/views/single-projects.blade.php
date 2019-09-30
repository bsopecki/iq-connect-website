@extends('layouts.app')
@php
    $bg_img = get_field('background_image');
    $img = get_field("img");
    $title = get_field("title");
    $subtitle = get_field("subtitle");
    $desc = get_field("description");
    $colors = get_field("colors");
    $color = get_field("color");
    $image = get_field("image");
@endphp

@section('content')
    <section class="website">
        {!! image($bg_img['ID'],'full', 'website__photo')!!}
        <div class="container">
                {!! image($img['ID'],'full', 'website__image')!!}
        <h2 class="website__title">{{$title}}<br><span class="website__slogan">{{$subtitle}}</span></h2>
            <p class="website__description">
                {{$desc}}
            </p>
            <div class="website__box">
                @foreach($colors as $color)
                <div class="website__color">
                <div class="website__overlay @if($color['border']) website__overlay--border @endif" style="background-color: {{$color['color']}}"></div>
                <p class="website__code">{{$color['color']}}</p>
                </div>
                @endforeach
            </div>
            <div class="website__content">
                    {!! image($image['ID'],'full', 'website__overwiev')!!}
            </div>
        </div>
    </section>
    @include('layouts.components.contact-section')
    @include('layouts.components.footer')
@endsection
