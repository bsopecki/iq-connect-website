@php
    $Slider = [
        [
            'title' => 'od pomysłu do realiacji',
            'label' => 'IQ Connect',
            'photo' => 'images/holger-link-748973-unsplash.png',
            'alt' => "First slide"
        ],
        [
            'title' => 'od pomysłu do realiacji',
            'label' => 'IQ Connect',
            'photo' => 'images/jason-blackeye-XYrjl3j7smo-unsplash.jpg',
            'alt' => "Second slide"
        ],
        [
            'title' => 'od pomysłu do realiacji',
            'label' => 'IQ Connect',
            'photo' => 'images/keith-camilleri-ZMJa82kxjRM-unsplash.jpg',
            'alt' => "Third slide"
        ]
    ]
@endphp

<section class="hero">
    @foreach ($Slider as $slide)
    <div class="hero__cell">
        @include('blocks.slider', ['data' => $slide])
    </div>
    @endforeach
</section>