@php
  if(!$title) $title = $data['title'];    
  if(!$content) $content = $data['content'];    

@endphp
<div class="info-block">
  <h2 class="info-block__title subtitle bold">
    {!! $title !!}
  </h2>
  <div class="info-block__content text light">
    {!! $content !!}
  </div>
  <div class="info-block__footer">
    <a href="./znajdz-mieszkanie" class="button button--primary text  main text--thin">
      Znajdź mieszkanie
    </a>
    <a href="./kontakt" class="button button--primary-light text  main text--thin">
      <img
        class="button__icon"
        src="@asset('images/icons/phone.png')"
        alt="phone"
      />
      Kontakt
    </a>
  </div>
  <nav class="info-block__nav">
    <button class="info-block__button" slide-button data-direction="prev">
        <img
        src="@asset('images/icons/prev.png')"
        alt="poprzedni slide"
      />
    </button>
    <button class="info-block__button"  slide-button data-direction="next">
        <img
        src="@asset('images/icons/next.png')"
        alt="następny slide"
      />
    </button>
  </nav>
</div>
