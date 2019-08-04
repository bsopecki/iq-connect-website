@extends('layouts.app')

@php   
    $heroData = [
        'title'=> $post->post_title,
        'img'=> get_field('img')
    ];

    $flats = get_field('flats');

@endphp

@section('content')
    @include('layouts.components.small-hero', ['data'=>$heroData])

    <section class="section">
        <div class="container">
            @if($flats)
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            NR
                        </th>
                        <th>
                            Powierzchnia
                        </th>
                        <th>
                            Taras / Balkon
                        </th>
                        <th>
                            Piętro
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Cena
                        </th>
                        <th>
                            Zobacz mieszkanie
                        </th>
                    </tr>
                </thead>
               
                <tbody>
                    @foreach ($flats as $flat)
                    <tr>
                        <td>
                            {{ $flat['nr'] }}
                        </td>
                        <td>
                            {{ $flat['area'] }} m²
                        </td>
                        <td>
                            @if( $flat['tarace'])
                                {{ $flat['tarace'] }}
                            @else
                                X
                            @endif
                        </td>
                        <td>
                            @if( $flat['floor'] == '0')
                                Parter
                            @else
                                {{ $flat['floor'] }} 
                            @endif
                        </td>
                        <td>
                            <span class="{{$flat['status']}}">
                                {{ $flat['status'] }} 
                            </span>
                        </td>
                        <td>
                            @if($flat['price']['promo'])

                            <span class="price price--promo">
                                {{ $flat['price']['promo'] }}
                            </span>
                            <span class="price price--del">
                                {{ $flat['price']['regular'] }}
                            </span>

                            @if ($flat['price']['promo_text'])
                            <span class="price price--message">
                                {{ $flat['price']['promo_text'] }}
                            </span>
                            @endif
                            
                            @elseif( $flat['price']['regular'])
                                {{ $flat['price']['regular'] }}
                            @else
                                <a href="{{ home_url('/kontakt') }}"> Zapytaj o cenę</a>
                            @endif
                        </td>
                        <td class="table__plan">
                            @if( $flat['plan'])
                            <div class="table__plan">
                                <a  data-fancybox href="{{ $flat['plan']['url'] }}">
                                    <img src="@asset('images/eye.png')" alt="Plan mieszkania...">
                                </a>
                                <a  href="{{ $flat['plan']['url'] }}">
                                    <img src="@asset('images/download.png')" alt="Plan mieszkania...">
                                </a>
                            </div>
                            @else
                                X
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p class="text">
                Brak informacji o budnyku
            </p>
            @endif
        </div>
    </section>
@endsection
