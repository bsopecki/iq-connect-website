@php
    $title = $data['title'];
    $slogan = $data['slogan'];
    $desc = $data['description'];
    $photo = $data['background-image']['ID'];
@endphp
<section class="contact">
        <div class="contact__wrapper">
                {!! image($photo, 'full', 'contact__photo') !!}
            <h2 class="contact__intro"><span class="contact__slogan">{{$title}}</span><br>{{$slogan}}</h2>
            <button class="contact__button button">{{$desc}}</button>
        </div>
</section>