@php
    $title = $data['title'];
    $subtitle = $data['subtitle'];
    $icons = $data['icons'];
@endphp

<section class="section icons-section">
  <div class="container">
    <div class="row">
      <!-- Header -->
      <header class="section__header">
        @include('components.section-header.default', ['title'=>$title, 'subtitle'=>$subtitle])
      </header>
      <!-- /Header -->

      <!-- Content -->
      <div class="icons-section__content">
        @if($icons)
        @foreach ($icons as $icon)

        @include('blocks.icon', ['data'=>$icon])
            
        @endforeach
        @endif
        

      </div>
      <!-- /Content -->

      <!-- Footer -->
      {{-- <footer class="section__footer">
        <a href="#" class="button button--primary text  main text--thin">
          Dowiedz się więcej
        </a>
      </footer> --}}
      <!-- /Footer -->
    </div>
  </div>
</section>
