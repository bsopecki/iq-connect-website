@php
    $title = $data['Contact'];
    $services_title = $data['Services'];
    $title_about = $data['About us'];
    $social_title = $data['Social Media'];
    $social_desc = $data['description'];
    $copyright = $data['copyright'];
@endphp
<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__item">
                <h3 class="footer__title">
                    {{$title}}
                </h3>
                <a href="#" class="footer__link text--more">
                    
                </a>
                <a href="#" class="footer__link text--special">
                    
                </a>
            </div>
            <div class="footer__item footer__item--hidden">
                <h3 class="footer__title">
                    {{$services_title}}
                </h3>
                <a href="#" class="footer__link text--more">
                    
                </a>
                <a href="#" class="footer__link text--more">
                    
                </a>
                <a href="#" class="footer__link text--more">
                   
                </a>
                <a href="#" class="footer__link text--more">
                    
                </a>
            </div>
            <div class="footer__item footer__item--hidden">
                <h3 class="footer__title">
                        {{$title_about}}
                </h3>
                <a href="#" class="footer__link text--more">
                    
                </a>
                <a href="#" class="footer__link text--more">
                    
                </a>
                <a href="#" class="footer__link text--more">
                    
                </a>
                <a href="#" class="footer__link text--more">
                    
                </a>
            </div>
            <div class="footer__item">
                <h3 class="footer__title">
                        {{$social_title}}
                </h3>
                <p class="footer__content">
                    {{$social_desc}}
                </p>
                <div class="footer__media-box">
                    <a href="" class="footer__media">
                        <i class=""></i>
                    </a>
                    <a href="" class="footer__media">
                        <i class=""></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__copy">
            <p class="footer__copyright">{{$copyright}}</p>
        </div>
    </div>
    @dump($data)
</footer>