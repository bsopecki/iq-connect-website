@php 
    $icons = $data['icons'];
@endphp

@if($icons)

<section class="stats section">
    <div class="container">
        <div class="stats__wrapper">
            @foreach ( $icons as $icon )
            <div class="stats__col">
                @include('blocks.big-icon', ['data'=>$icon])
            </div>
            @endforeach
        </div>
    </div>
</section>

@endif
