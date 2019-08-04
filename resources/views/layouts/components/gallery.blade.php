@php
    $gallery = $data['gallery'];
@endphp

@if($gallery)
<section class="gallery">
    @foreach ($gallery as $img)
    <div class="gallery__cell">
        {!! image($img['ID'], 'full','') !!}
    </div>
    @endforeach
</section>
@endif