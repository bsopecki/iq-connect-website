@php
    $title = $data['text'];
    $icon = $data['icon']['ID'];
@endphp

<div class="icon-text">
    {!! image($icon, '', 'icon-text__icon') !!}
    <p class="text icon-text__text">
        {!! $title !!}
    </p>
</div>
