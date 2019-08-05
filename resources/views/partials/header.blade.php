<header class="header">
  <a class="header__logo" href="">
    <img src="@asset('images/LOGO.png')" alt="IQ CONNECT logo">
  </a>
  <div class="container">
    <div class="header__wrapper">
      <nav class="header__nav" data-nav>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu']) !!}
      @endif
      </nav>
      <div class="header__contact">
        <p class="text text--minor">
        Zadzwoń 
          <a href="#" class="link">
          513 529 029
          </a>
        </p>
        <a href="#" class="button">
          <p class="button__text">
        Kontakt.
        </p>
        </a>
      </div>
    </div>
  </div>
</header>
