@php
    $img = $data['img']['ID'];
    $name = $data['contact']['name'];
    $tel = $data['contact']['tel'];
    $mail = $data['contact']['mail'];
@endphp

<div class="avatar text">
  {!! image($img, 'full', 'avatar__image') !!}
  <p class="avatar__name text--bold">
    {{ $name }}
  </p>
  <p class="small-text text--thin">
    tel:
    <a href="tel:{{ str_replace(' ', '', $tel) }}" class="avatar__link text small-text ">
      {{ $tel }}
    </a>
    <br />
    mail:
    <a href="mailto:{{ $mail }}" class="avatar__link text small-text ">
     {{ $mail }}
    </a>
  </p>
</div>