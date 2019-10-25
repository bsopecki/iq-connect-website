@php
    $title = $data['Contact'];
    $services_title = $data['Services'];
    $title_about = $data['About_us'];
    $social_title = $data['Social_Media'];
    $social_desc = $data['description'];
    $copyright = $data['copyright'];
    $icons = $data['footer_social_media'];
    $about_links = $data['footer_about_us'];
    $services_links =$data['footer_services'];
    $contact_links = $data['footer_contact'];
@endphp
<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            @if($contact_links)
            <div class="footer__item">
                <h3 class="footer__title">
                    {{$title}}
                </h3>
                @foreach($contact_links as $link)
                <a href="#" class="footer__link text--more @if('text--special')@endif">
                    {{$link['contact_link']['title']}}
                </a>
                @endforeach
            </div>
            @endif
            @if($services_links)
            <div class="footer__item footer__item--hidden">
                <h3 class="footer__title">
                    {{$services_title}}
                </h3>
                @foreach($services_links as $link)
                <a href="#" class="footer__link text--more">
                    {{$link['service_link']['title']}}
                </a>
                @endforeach
            </div>
            @endif
            @if($about_links)
            <div class="footer__item footer__item--hidden">
                <h3 class="footer__title">
                        {{$title_about}}
                </h3>
                @foreach($about_links as $about_link)
                <a href="#" class="footer__link text--more">
                    {{$about_link['about_link']['title']}}
                </a>
                @endforeach
            </div>
            @endif
            @if($icons)
            <div class="footer__item">
                <h3 class="footer__title">
                        {{$social_title}}
                </h3>
                <p class="footer__content">
                    {{$social_desc}}
                </p>
                <div class="footer__media-box">
                    @foreach($icons as $icon)
                    <a href="#" class="footer__media">
                    <i class="{{$icon['icon_class']}}"></i>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
        <div class="footer__copy">
            <p class="footer__copyright">{{$copyright}}</p>
        </div>
    </div>
</footer>