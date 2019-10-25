@php
    $title = $slide['hero_label'];
    $photo = $slide['background_image']['ID'];
    $desc = $slide['hero_dsc'];
   // $link = 
@endphp
    <div class="hero__overlay"></div>
    {!! image($photo, 'full', 'hero__image') !!}
    <div class="container">
        <div class="hero__content">
            <header class="hero__header">
                <h2 class="hero__slogan">
                    <span class="hero__label">
                        {{$title['label']}}
                    </span>
                    {!! $title['title'] !!}
                </h2>
            </header>
            <div class="hero__description">
                <p class="hero__desc">
                    {!! $desc['description'] !!}
                </p>
            </div>
            <footer class="hero__cta">
                <a class="hero__button button">
                    {!! $desc['button_desc'] !!}
                </a>
                <a href="#" class="hero__link menu-link menu-link--reverse">
                    {!! $desc['link']['title'] !!}
                </a>
            </footer>
        </div>
  </div>
 