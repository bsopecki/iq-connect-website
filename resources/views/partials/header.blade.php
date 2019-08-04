<header class="header">
  <a href=""><img src="@asset('images/LOGO.png')" alt=""></a>
  <div class="container">
    <nav class="header__nav" data-nav>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'header__menu']) !!}
      @endif
    </nav>
  </div>
  <div class="phone-number">
    <p class="call">Zadzwoń</p>
    <span class="number">513 529 029</span>
  </div>
  <button class="btn_contact">Kontakt.</button>
</header>

