<!-- ======= Header ======= -->
<header id="header">
  <div class="container">

    <h1><a href="index.html">Rafael Almeida</a></h1>
    <h2><?= $lang['header_subtitle'] ?></h2>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link active" href="#header"><?= $lang['nav_home'] ?></a></li>
        <li><a class="nav-link" href="#about"><?= $lang['nav_about'] ?></a></li>
        <li><a class="nav-link" href="#resume"><?= $lang['nav_resume'] ?></a></li>
        <li><a class="nav-link" href="#services"><?= $lang['nav_services'] ?></a></li>
        <li><a class="nav-link" href="#contact"><?= $lang['nav_contact'] ?></a></li>
        <li>
          <div class="lang-switcher">
            <a href="?lang=en" class="<?= $current_lang === 'en' ? 'active-lang' : '' ?>">EN</a>
            <span>|</span>
            <a href="?lang=pt" class="<?= $current_lang === 'pt' ? 'active-lang' : '' ?>">PT</a>
          </div>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <div class="social-links">
      <a href="https://www.linkedin.com/in/rafaelalmeidab/" class="linkedin"><i class="bi bi-linkedin"></i></a>
      <a href="https://www.instagram.com/rafaelalmeidab" class="instagram"><i class="bi bi-instagram"></i></a>
    </div>

  </div>
</header><!-- End Header -->
