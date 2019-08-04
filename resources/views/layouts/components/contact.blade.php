@php
  $office_title = get_field('office_title', 'option');
  $office_content = get_field('office_content', 'option');
  $office_persons = get_field('office_persons', 'option');
  $form_title = get_field('form_title', 'option');
  $form_subtitle = get_field('form_subtitle', 'option');
  $form_terms = get_field('form_terms', 'option');
  $form_bg = get_field('form_bg', 'option')['ID'];
@endphp

<section class="contact-section section section--full" id="kontakt">
  <div class="contact-section__boxes">
    <div class="avatar-section">
      <div class="container">
        <div class="avatar-section__content">
          <div class="avatar-section__boxes"></div>
          <div class="avatar-section__desc">
            <h2 class="section-header card-block__title">
              <span
                class="avatar-section__coltext--primary section-header__sub--left subtitle"
              >
                {{ $office_title }}
              </span>
            </h2>
            <p class="text card-block__text avatar-section__coltext--dark">
              {{ $office_content }}
            </p>
            @if($office_persons)
            <div class="avatar-section__boxes">
              <!-- Avatar -->
              @foreach ($office_persons as $person)  
                @include('blocks.avatar', ['data'=>$person])
              @endforeach
              <!--/ Avatar -->
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>

    @php
        $title = get_field('form_title', 'options');
        $subtitle = get_field('form_subtitle', 'options');
    @endphp

    <div class="form-box">
      {!! image($form_bg, 'full', 'form-box__bg') !!}
      <!-- form-box__header -->
      <div class="form-box__header">
        @include('components.section-header.left', ['title'=>$title, 'subtitle'=>$subtitle, 'color'=>'light'])
      </div>
      <!-- form-box__content form -->
      <div class="form-box__content">
        @include('components.form')
      </div>
    </div>
  </div>
</section>
