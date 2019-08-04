@php
    $title = $data['title'];
    $subtitle = $data['subtitle'];
    $img = $data['img']['ID'];
    $content = $data['content'];
@endphp

<div class="icon-box">
    <h3 class="text text--light">
        {!! $title !!}
    </h3>
    <div>
        {!! image($img, 'full', 'icon-box__icon') !!}
    </div>
    <hr class="icon-box__line">
    <h3 class="text text--light">
        {{ $subtitle }}
    </h3>
    <p class="small-text icon-box__desc">
        {{ $content }}
    </p>  
</div>