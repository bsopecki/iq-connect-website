@php
    $icon = $data['img']['ID'];
    $text = $data['text'];
@endphp

<div class="big-icon">

    {!! image($icon, 'full', 'big-icon__img') !!}

    <h3 class="big-icon__title large-text text--center">
        {!! $text !!}
    </h3>
</div>