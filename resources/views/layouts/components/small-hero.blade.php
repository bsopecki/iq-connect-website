@php
    $img = $data['img']['ID'];
    $title = $data['title'];
@endphp

<section class="small-hero">
    {!! image($img, 'full', 'small-hero__image') !!}

    <header class="small-hero__header">
        @include('components.section-header.special', ['title'=>$title, 'color'=>'light'])
    </header>
</section>