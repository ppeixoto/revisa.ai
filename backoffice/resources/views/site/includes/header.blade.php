<header class="header">
    <div class="bar-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container justify-content-between">
                <a class="navbar-brand" href="<?php echo env('APP_URL'); ?>">
                    <img src="<?php echo env('APP_URL'); ?>/site/img/header/logo.svg" alt="Mercado de Bandas">
                </a>
                <div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{ request()->routeIs('site.home') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('site.home') }}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">QUEM SOMOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ARTISTAS</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('site.contact.*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('site.contact.index') }}">CONTATOS</a>
                        </li>


                        <?php if (auth()->user()) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('site.my-account') }}">MINHA CONTA</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('logout') }}">SAIR</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">CADASTRE-SE</a>
                            </li>
                            <li class="nav-item itemLogin">
                                <a class="nav-link" style="color: #fff !important;" href="{{ route('login') }}">LOGIN</a>
                            </li>
                        <?php endif ?>

                        <li class="nav-item navProdutor">
                            <a class="nav-link" href="{{ route('seller.home') }}">Área do Artista</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
