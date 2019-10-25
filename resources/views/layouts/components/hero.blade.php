@php
    $Slider = $data['hero'];
@endphp

<section class="hero">
    @foreach ($Slider as $slide)
    
    <div class="hero__cell">
        @include('blocks.slider', ['data' => $slide])
    </div>
    @endforeach
</section>
