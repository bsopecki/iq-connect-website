@php
    $title = $data['title'];
    $label = $data['label'];
    $photo = $data['photo'];
    $alt = $data['alt'];
@endphp

<div class="hero__overlay"></div>
    <img class="hero__image" src=@asset($photo) alt={{$alt}}>
    <div class="container">
        <div class="hero__content">
            <header class="hero__header">
                <h2 class="hero__slogan">
                    <span class="hero__label">
                        {{$label}}
                    </span>
                    {!! $title !!}
                </h2>
            </header>
            <div class="hero__description">
                <p class="hero__desc">
                    Jesteśmy doświadczoną multiagencją działającą w branżach związanych z IT, mediami i Public Relations
                </p>
            </div>
            <footer class="hero__cta">
                <a class="hero__button button">
                    Więcej o nas
                </a>
                <a href="#" class="hero__link menu-link menu-link--reverse">
                    Zobacz film.
                </a>
            </footer>
        </div>
  </div>