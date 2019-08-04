@php
    $special = $data['special'];
    $title = $data['title'];
    $subtitle = $data['subtitle'];
    $content = $data['content'];
    $link = $data['link'];
@endphp

<section class="section text-section">
    <div class="container">
        <div class="row"> 
            <!-- Header -->
            @if($title)
            <header class="section__header">
                @if($special)
                    @include('components.section-header.special', ['title'=>$title])
                @else 
                    @include('components.section-header.default', ['title'=>$title, 'subtitle'=>$subtitle])
                @endif 
            </header>
            @endif
            <!-- /Header -->

            <!-- Content -->
            <p class="text-section__content text text--center">
                {!! $content !!}
            </p>
            <!-- /Content -->

            <!-- Footer -->
            @if($link)
            <footer class="section__footer">
            <a href="{{ $link['url'] }}" class="button button--primary text  main text--thin">
                {{ $link['title'] }}
            </a>
            </footer>
            @endif
            <!-- /Footer -->
        </div>
    </div>
</section>


