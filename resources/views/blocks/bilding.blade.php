@php
    $title = $data->post_title;
    $id = $data->ID;

    $permalink = get_permalink($id);
    $subtitle = get_field('subtitle', $id);
    $img = get_field('img', $id);

    $flats = get_field('flats', $id);

    $free = 0;
    $sold = 0;
    $taken = 0;

    $size = $flats[0]['area'];

    foreach ($flats as $flat) {
        if($flat['status'] == 'wolne') $free++;
        if($flat['status'] == 'zajęte') $taken++;
        if($flat['status'] == 'sprzedane') $sold++;

        if($flat['area'] < $size) $size = $flat['area'];
    }
@endphp

<div class="bilding">
    <header class="bilding__header">
        @include('components.section-header.left', ['title'=> $title , 'subtitle'=> $subtitle, 'color'=>'light'])
    </header>
    <div class="bilding__content">
        <p class="text text--light text--thin">
            <b> Wolnych mieszkań: </b> {{ $free }}
            <br>
            <b> Sprzedanych mieszkań: </b> {{ $sold }}
            <br>
            <b> Zarezerwowanych mieszkań: </b> {{ $taken }}
            <br>
            <b> Mieszkania od: </b> {{ $size }} m²
        </p>
    </div>
    <footer class="bilding__footer">
        <a href="{{ $permalink }}" class="button button--secondary text  main text--thin">
            Znajdź swoje mieszkanie
        </a>
    </footer>
    {!! image( $img['id'], 'full', 'bilding__image' ) !!}
</div>
