@php
    $title = $data['title'];
    $subtitle = $data['subtitle'];
    $content = $data['content'];
    $img = $data['img']['ID'];
    $reverse = $data['reverse'];
@endphp

<section class="flex @if($reverse) flex--reverse @endif">
    <div class="flex__content">
        <header class="flex__header">
            @include('components.section-header.left', ['title'=>$title , 'subtitle'=>$subtitle  , 'color'=>'dark'])
        </header>
        <p class="flex__text text">
            {!! $content !!}
        </p>
    </div>
    {!! image($img, 'full', 'flex__img') !!}
</section>