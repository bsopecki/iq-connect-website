@php
    $args = array(
    'posts_per_page'   => 999,
    'offset'           => 0,
    'orderby' => 'date',
    'order'    => 'ASC',
    'post_type'        => 'budynki',
    'post_status'      => 'publish',
    'suppress_filters' => true,
  );

  $bildings = get_posts( $args );
@endphp

<section class="section">
    <div class="container">
        <div class="bildings">
            @if($bildings)
                @foreach ($bildings as $bilding)
                <article class="bildings__col" >
                    @include('blocks.bilding', ['data'=>$bilding])
                </article>
                @endforeach
            @endif
        </div>
    </div>
</section>