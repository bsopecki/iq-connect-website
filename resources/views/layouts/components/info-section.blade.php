@php
  $title = get_field('info-section_title', 'options');    
  $subtitle = get_field('info-section_subtitle', 'options');    
  $content = get_field('info-section_content', 'options');    
  $link = get_field('info-section_link', 'options');    
  $image = get_field('info-section_image', 'options')['ID'];    
  $icon_boxs = get_field('icon-boxs', 'options'); 
@endphp

<section class="info-section">
  {!! image($image, 'full', 'info-section__bg') !!}

  <div class="info-section__content container">
    @if($icon_boxs)
    <div class="info-section__boxes">
      @foreach ($icon_boxs as $box)
      <!-- Icon Box -->
      @include('blocks.icon-box', ['data'=> $box])
      <!--/ Icon Box -->
      @endforeach
    </div>
    @endif
    <div class="info-section__desc">
      <div class="card-block">
        @include('components.section-header.left', ['title'=>$title , 'subtitle'=>$subtitle, 'color'=>'light' ])
        
        <p class="text card-block__text">
          {!! $content !!}
        </p>

        @if ($link)
        <a href="{{ $link['url'] }}" class="button button--secondary text  main text--thin">
          {{ $link['title'] }}
        </a>
        @endif
      </div>
    </div>
  </div>
</section>