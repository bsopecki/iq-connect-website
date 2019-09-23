@php
    global $post;
@endphp

<section class="realizations">
        <header class="realizations__header">
            <h1 class="realizations__title">
                creativeroom
                <br>
                <span class="realizations__text">
                    nasze realizacje
                </span>
            </h1>
        </header>
        <div class="container">
        <nav class="realizations__nav">
            @if (has_nav_menu('realizations_navigation'))
            {!! wp_nav_menu(['theme_location' => 'realizations_navigation', 'menu_class' => 'realizations-menu']) !!}
          @endif
        </nav>
    </div>

    @if (!have_posts())
    <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
    @endif
    <div class="realizations__wrapper">
        @while (have_posts()) @php the_post() @endphp
        @php
            $photo = get_post_thumbnail_id();
        @endphp
        <a  href="{{ the_permalink() }}" class="realizations__content">
            {!! image($photo, 'full', 'realizations__photo') !!}
            <div class="realizations__description">
            <div class="realizations__overlay"></div>
                <h2 class="realizations__subtitle">
                    {{the_title()}}
                </h2>
                <div class="realizations__desc">
                    {{ the_excerpt() }}
                </div>
            </div>
        </a>
        @endwhile
    </div>
</section>
@include('layouts.components.contact-section')
@include('layouts.components.footer')

