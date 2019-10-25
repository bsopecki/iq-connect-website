@php
    $title = $data['title'];
    $slogan = $data['slogan'];
    $desc = $data['description'];
    $elems = $data['about-us'];
@endphp
<section class="section">
    <div class="container">
        <header class="section__header">
            <h2 class="section__title title--upper">
                <span class="section__subtitle title--upper">
                    {{$title}}
                </span>
                <br>
              {{$slogan}}
            </h2>
            <p class="section__content text--center">
                {{$desc}}
            </p>
        </header>
        <div class="section__wrapper">
            @if($elems)
            <ul class="posts">
                @foreach($elems as $elem)
                @php
                $photo = $elem['logo']['ID'];
                @endphp
                <li class="posts__item">
                    <article class="posts__article">
                            {!! image($photo, 'full', 'posts__logo') !!}
                        <h2 class="posts__intro">
                            {{$elem['subtitle']}}
                        </h2>
                        <p class="posts__summary">
                            {{$elem['desc']}}
                        </p>
                        <a href="#" class="posts__link text--more">
                            {{$elem['link']['title']}}
                        </a>
                    </article>
                </li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
</section>