<footer>
    <div class="container">
        <!-- linha 1 -->
        <div class="row mb-4">
            <div class="col-12 col-md-4">
                <a href="#" class="logo-footer"><img src="{{ asset('site/img/logo-footer.png') }}" alt=""></a>
            </div>

            <div class="col-12 col-md-4 text-center">
                <h2>INSTITUCIONAL</h2>
                <ul class="ulFooter">
                    <li>
                        <i class="fa fa-angle-right"></i>
                        <a class="colorWhite" href="#">Quem Somos</a>
                    </li>
                    <li class="">
                        <i class="fa fa-angle-right"></i>
                        <a class="colorWhite" href="#">Contato</a>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-md-4 text-center">
                <h2>NEWSLETTER</h2>
                <p>Receba nossas newsletter</p>
                <button class="btn btn-warning showDivNewsLetter">Cadastrar Agora</button>
                <div class="inputNewsLetter displayNone">
                    <div class="form-group">
                        <input type="email" maxlength="50" class="form-control marginBottomMobile20"
                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div style="text-align: center; margin-top: -11px; margin-bottom: 6px;">
                        <span id="msgNews"></span>
                    </div>
                    <button type="button" id="btnFooter" class="btn btn-warning">Cadastrar Agora</button>
                </div>
            </div>
        </div>

        <div class="row mt-1 ">

            <!-- <div class="col-12 col-md-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac nunc euismod, consectetur nisl in, cursus arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam accumsan
                    lacus vitae purus feugiat, sed pulvinar risus venenatis. Sed tempus ornare enim vel pretium.
                </p>
            </div> -->


            <div class="col-12 col-md-4">
                <ul class="social-links mt-2 mt-0-mobile">
                    <li class="mt-3"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="mt-3"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="mt-3"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="mt-3"><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-12 col-md-8">
                <div class="cards">
                    <span>
                        <img alt="Cartão ; Crédito ; Débito" title="Logo Pagamentos"
                            src="{{ asset('site/img/cards/pagamentos.png') }}">
                    </span>
                    <span>
                        <img alt="Cartão ; Crédito ; Débito ; Visa" title="Logo Visa"
                            src="{{ asset('site/img/cards/visa-logo.png') }}">
                    </span>
                    <span>
                        <img alt="Boleto" title="Logo Boleto" src="{{ asset('site/img/cards/boleto.png') }}">
                    </span>
                    <span>
                        <img alt="Cartão ; Crédito ; Débito ; MasterCard" title="Logo Mastercard"
                            src="{{ asset('site/img/cards/mastercard-logo.png') }}">
                    </span>
                </div>
                <div class="cards mt-0-mobile">
                    <span>
                        <img alt="Cartão ; Crédito ; Débito ; Hiper" title="Logo Hiper"
                            src="{{ asset('site/img/cards/icon_hiper.png') }}">
                    </span>
                    <span>
                        <img alt="Cartão ; Crédito ; Débito ; Dinner" title="Logo Dinner"
                            src="{{ asset('site/img/cards/icon_dinner.png') }}">
                    </span>
                    <span>
                        <img alt="Cartão ; Crédito ; Débito ; Elo" title="Logo Elo"
                            src="{{ asset('site/img/cards/icon_elo.png') }}">
                    </span>
                    <span>
                        <img alt="Cartão ; Crédito ; Débito ; America" title="Logo America"
                            src="{{ asset('site/img/cards/icon_america.png') }}">
                    </span>
                    <span>
                        <img alt="Cartão ; Crédito ; Débito ; MercadoPago" title="Logo MercadoPago"
                            src="{{ asset('site/img/cards/icon_mercado.png') }}">
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p class="copyrightMobile">Copyright © mercadodebandas.com
                Todos os direitos reservados
            </p>
        </div>
    </div>
</footer>
