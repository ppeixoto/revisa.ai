(function (environment, window, document, $, eventData) {

    window.Mercadopago.getIdentificationTypes();

    $('.changePaymentType').on('click', function (e) {
        var value = $(this).data('value');
        $('input[name="payment_type"]').val(value);
    });

    var errosPadrao = {
        '205': 'Digite o número do seu cartão.',
        '208': 'Escolha um mês.',
        '209': 'Escolha um ano.',
        '212': 'Informe seu documento.',
        '213': 'Informe seu documento.',
        '214': 'Informe seu documento.',
        '220': 'Informe seu banco emissor.',
        '221': 'Digite o nome e sobrenome.',
        '224': 'Digite o código de segurança.',
        'E301': 'Há algo de errado com o número do cartão. Digite novamente.',
        'E302': 'Confira o código de segurança do cartão.',
        '316': 'Por favor, digite um nome válido.',
        '322': 'Confira seu documento.',
        '323': 'Confira seu documento.',
        '324': 'Confira seu documento.',
        '325': 'Confira o mês de validade.',
        '326': 'Confira o ano de validade.',
        '3031': 'Código de segurança do Cartão não pode ser vazio'
    };

    var errorsCriacaoTokenDoCartao = {
        '106': 'Não pode efetuar pagamentos a usuários de outros países.',
        '109': 'A operadora do cartão não processa pagamentos parcelados. Escolha outro cartão ou outra forma de pagamento.',
        '126': 'Não conseguimos processar seu pagamento. Tente novamente ou utilize outro cartão',
        '129': 'A operadora do cartão não processa pagamentos para o valor selecionado. Escolha outro cartão ou outra forma de pagamento.',
        '145': 'Não conseguimos processar seu pagamento. Tente novamente ou utilize outro cartão',
        '150': 'Você não pode efetuar pagamentos.',
        '151': 'Você não pode efetuar pagamentos.',
        '160': 'Não conseguimos processar seu pagamento. Tente novamente ou utilize outro cartão',
        '204': 'A operadora do cartão não está disponível neste momento. Escolha outro cartão ou outra forma de pagamento.',
        '801': 'Você efetuou um pagamento no mesmo valor alguns minutos atrás. Aguarde mais um pouco para tentar novamente.'
    };

    var valorTotal = parseFloat($('#totalInput').val());


    $(document).on('keyup', '#cardNumber', function () {
        var bin = $(this).val().replace(/[^\d]/, '').substring(0, 6);
        var sel = $('#cardId').val();
        console.log(bin, "no bin", sel);

        console.log(bin);
        if (bin.length >= 6) {

            window.Mercadopago.getPaymentMethod({
                "bin": bin
            }, setPaymentMethodInfo);

            window.Mercadopago.getInstallments({
                "bin": bin,
                "amount": valorTotal
            }, setInstallmentInfo);
        }
    });



    $('.hideCard').click(function () {
        // $("#cardId").trigger("change");
        $(".showCard").show();
        $(".hideCard").hide();
    });

    $(document).ready(function () {
        var tamanho = $('#tamanhoCard').val();
        console.log(tamanho);
        if (tamanho != null && tamanho > 0) {

            $('#cardNumber').remove();
            $('#holder_name').remove();
            $('#cardExpirationMonth').remove();
            $('#cardExpirationYear').remove();
            $('#card_code').remove();

            $('.divMeusCartoes').show();
            $('#cvvDiv').hide();
            $('.showCard').hide();
            $('.showParcelas').hide();

        } else if (tamanho == 0) {
            $('.divMeusCartoes').hide();
            $('.showCard').show();
            $('.showParcelas').show();


        }
    });

    $('#cardId').change(function () {
        var valor = this.value;
        var dado = $(this).find(':selected').attr('first_six_digits');
        var val = $(this).find(':selected').val();


        if (dado && dado.length >= 6) {

          
            $('#cvvDiv').show();
            $('#cardNumber').remove();
            $('#holder_name').remove();
            $('#cardExpirationMonth').remove();
            $('#cardExpirationYear').remove();
            $('#card_code').remove();
            $('.hide').show();

            $("#cvv").prop('required', true);
            $("#cvv").attr("required", true);

            $('.showCard').hide();
            $('.showParcelas').show();
            window.Mercadopago.getPaymentMethod({
                "bin": dado
            }, setPaymentMethodInfo);

            window.Mercadopago.getInstallments({
                "bin": dado,
                "amount": valorTotal
            }, setInstallmentInfo);
        } else if (val == "show") {

    
            $('#cvvDiv').hide();
            var anoInit = $('#limitAno').val();
            var ops = "";
            $("#cvv").prop('required', false);
            $("#cvv").attr("required", false);

            for (var i = anoInit; i <= 2050; i++) {
                ops += '<option value="' + i + '">' + i + '</option>';
            }



            $('<input id="cardNumber" data-checkout="cardNumber" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" type="text"  placeholder="Número do cartão de crédito" class="only-digit form-control" autocomplete="false" style="width: 100%; margin-bottom: 10px;" >').insertAfter("#labelNCartao");
            $('<input id="holder_name" data-checkout="cardholderName" class="only-letters form-control" placeholder="Nome impresso no cartão de crédito" type="text" maxlength="20" autocomplete="false" style=" margin-bottom: 10px;">').insertAfter("#labelNomeCartao");
            $('<select id="cardExpirationMonth" class="form-control" data-checkout="cardExpirationMonth" autocomplete="false" style=" margin-bottom: 10px;"><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option</select>').insertAfter("#labelMesCartao");
            $('<select id="cardExpirationYear" data-checkout="cardExpirationYear" class="form-control" style=" margin-bottom: 10px;" autocomplete="false">' + ops + '</select>').insertAfter("#labelAnoCartao");
            $('<input  id="card_code" class="form-control" data-checkout="securityCode" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" name="card_code" type="text" maxlength="4" class="only-digit" style=" margin-bottom: 10px;" autocomplete="false">').insertAfter("#labelCodCartao");

            $('.showCard').show();
            $('.showParcelas').show();
        } else {
            $('#cvvDiv').hide();
            $('#cardNumber').remove();
            $('#holder_name').remove();
            $('#cardExpirationMonth').remove();
            $('#cardExpirationYear').remove();
            $('#card_code').remove();
            $('.showCard').hide();
            $('#portion_buy').empty();
            $('.showParcelas').hide();


        }

    });

    function setInstallmentInfo(status, response) {

        $('#portion_buy').html('');
        $('.msg-error').html('');
        $('.msg-reply').html('');

        if (status == 200) {

            var payer_costs = response[0].payer_costs;
            var html = [];

            for (var i in payer_costs) {

                var parcela = payer_costs[i].installments;

                if (typeof parcela != 'undefined' &&
                    typeof eventData != 'undefined' && eventData &&
                    parcela <= eventData.maxInstallments) {

                    var percJuros = 0;

                    if(parcela > eventData.maxInstallmentsWithoutInterests) {
                       percJuros = eventData.jurosParcelamento[parcela];
                    }

                    var totalCoust = payer_costs[i].total_amount;

                    var hasJuros = true;

                    if (percJuros > 0) {
                    
                        totalCoust += (percJuros * totalCoust / 100);
                    
                    } else {

                        hasJuros = false;

                    }

                    var valorParcela = totalCoust / parcela;
                    valorParcela = valorParcela.toFixed(2).split('.').join(',');

                    var option = '\
                    <option data-total="' + totalCoust.toFixed(2) + '" value="' + parcela + '">\
                        ' +payer_costs[i].installments + '\
                        x de R$ '+ valorParcela.toLocaleString("pt-BR") + ' ' + (hasJuros ? "(com juros)" : "") + '</option>';
                    

                    html.push(option);
                }
            }

            $('#portion_buy').html(html.join(''));

        } else {

            $('#cardNumber').focus();
            return $('.msg-error').html('<strong>Falha em carregar parcelas, tente novamente, e verifique se seu cartão de crédito está informado corretamente</strong>');

        }
    }

    function setPaymentMethodInfo(status, response) {
        if (status == 200) {
            console.log(response);

            var paymentMethodElement = $('input[name="paymentMethodId"]');

            if (paymentMethodElement) {

                $('input[name="paymentMethodId"]').val(response[0].id);

                console.log('Adicionando payment method info 2', paymentMethodElement.value);

            } else {

                console.log('Adicionando payment method info', response);

                var input = document.createElement('input');

                input.setattribute('name', 'paymentMethodId');
                input.setAttribute('type', 'hidden');
                input.setAttribute('value', response[0].id);

                form.appendChild(input);

            }
        } else {
            console.error('payment method info error: '+response);
            return $('.msg-error').html('<strong>Falha em carregar parcelas, tente novamente, e verifique se seu cartão de crédito está informado corretamente</strong>');
        }
    };

    var doSubmit = false;
    console.log($('#docType').length, $('#docType').attr('cnpj'))

    if($('#docType').length > 0 && $('#docType').attr('cnpj')) {

        console.log('aqui2');
        var interval = setInterval(function() {
            console.log('aqui');

            if($('#docType').find('option').length > 0){
                $('#docType').val('CNPJ');
                stopInterval();
            }

        }, 1000);


        function stopInterval() {
            clearInterval(interval);
        }

    }   


    $('#boleto-tab').on('click', function (e) {
        $("#cvv").attr("required", false);
    });

    $('#card-tab').on('click', function (e) {
        console.log("card", $('#cardId').val());
        if ($('#cardId').val() != "" && $('#cardId').val() == "value") {
            $("#cvv").attr("required", true);
            // $('.showCard').show();
        }

        var tamanho = $('#tamanhoCard').val();
       
       
        if ($('#cardId').val() == "value" || $('#cardId').val() == "" || typeof $('#tamanhoCard').val().currentTarget == 'undefined' || $('#tamanhoCard').val() == 'undefined') {
            // $("#cvv").attr("required", true);
            $('.showEnd').show();
        }

         if (tamanho != null && tamanho > 0 && $('#cardId').val() == "") {
            $('.showEnd').hide();
            $("#cvv").attr("required", false);
         }


    });


    $('#pay').on('submit', function (e) {

        e.preventDefault();

        var paymentType = $('input[name="payment_type"]').val();
        if (!doSubmit) {


            var $form = document.querySelector('#pay');

            $('button[type="submit"]').attr('disabled', true);


            var val = $('#cardId').val();


            if (val == "show") {
                $('#cardId').val(null);
            }

            if (paymentType == '1') {
                window.Mercadopago.createToken($form, sdkResponseHandler); // The function "sdkResponseHandler" is defined below
            } else {
                runAjax($($form).serialize());
            }

            return false;
        }
    });

    function sdkResponseHandler(status, response) {

        if (status != 200 && status != 201) {

            $("#cardNumber").focus();

            var causes = response.cause.reduce(function (resultadoFinal, cause) {

                var errorString = typeof errorsCriacaoTokenDoCartao[cause.code] !== 'undefined' ? errorsCriacaoTokenDoCartao[cause.code] : '';

                if (errorString === '') {
                    errorString = typeof errosPadrao[cause.code] !== 'undefined' ? errosPadrao[cause.code] : cause.description;
                }

                resultadoFinal.push(errorString);

                return resultadoFinal;
            }, []);

            $('button[type="submit"]').attr('disabled', false);

            return $('.msg-error').html('<strong>' + causes.join('<br/>') + '</strong>');

        } else {

            $("#totalInputWithInterest").val(
                $("#portion_buy")
                    .find("option:selected")
                    .attr("data-total")
            );

            var form = document.querySelector('#pay');
            var card = document.createElement('input');
            card.setAttribute('name', 'token');
            card.setAttribute('type', 'hidden');
            card.setAttribute('value', response.id);
            form.appendChild(card);
            // doSubmit=true;
            // console.log(card);
            // form.submit();

            runAjax($(form).serialize());
        }
    };



    $('.labels-payment').show();
    $('.waiting-payment-method').hide();


    $('input[name="myCard"]').change(function () {
        if ($(this).val() == "0") {
            $('#orderCard').show();
            $('.installmentcount').hide();
        }
        else {
            card.brand = $(this).data('brand');
            card.hashNumber = $(this).val();
            getInstallments();
            $('#orderCard').hide();
            $('.installmentcount').show();
        }
    });
    

    function runAjax(data) {
        $('.loading-payment').show();
        $('#loadCompleto').show();
        $.ajax({
            url: baseurl + 'send-payment-mercadopago',
            type: 'POST',
            dataType: 'json',
            data: data
        })
            .done(function (result) {
                console.log(result);
                if (result.status) {



                    if (typeof result.data != "undefined") {
                        $('.info-modal-request').html(result.data);


                        var url = baseurl + "compra-concluida/" + result.data;
                        $(location).attr('href', url);


                        // $('.msg-reply').html(result.data);

                    } else {
                        $('.msg-error').html("<strong>Compra feita com sucesso, olhe em meus pedidos o andamento do seu status</strong>");
                    }

                    doSubmit = true;
                    // $('button[type="submit"]').remove();

                    // var product_id = $('input[name="event_id"]').val();
                    // var product_price = parseFloat($('#totalReal').attr('data-total').replace(',','.'));

                    //    fbq('track', 'Purchase', {
                    //      content_ids: [product_id],
                    //      content_type: 'product',
                    //      value: product_price,
                    //      currency: 'BRL'
                    //    });

                } else {

                    runError(result.message);

                    if (typeof result.attrs != "undefined" && result.attrs != null) {
                        $('input[name="' + result.attrs + '"]').parent().addClass('input-required');
                    }

                    if (typeof result.inputsHtml != "undefined" && result.inputsHtml.length > 0) {

                        var fullHtml = "";

                        for (i = 0; i < result.inputsHtml.length; i++) {
                            fullHtml += result.inputsHtml[i];
                        }

                        $('.error_card').html(fullHtml);

                        $('.error_card').find('li').addClass('input-required')
                        $('.error_card').find('input').attr('required', true);

                        // cardErrorMasks();
                    }
                }
            }).error(function () {

                runError("Ocorreu um erro na sua requisição, por favor tente novamente.");
                // $('button[type="submit"]').attr('disabled', false)
            })
            .always(function () {
                // $('button[type="submit"]').attr('disabled', false)
                $('.loading-payment').hide();
                $('#loadCompleto').hide();
            })
    }


    function runError(message) {
        $('.modal-request').fadeOut('fast');
        console.log("Mensagem de error: ".message);
        $('.msg-error').html(message);
        window.Mercadopago.clearSession();
        $('button[type="submit"]').attr('disabled', false)
    }

	/*
	if($('#confirmBuy').length && window.innerWidth > 680) {
	  $('#pay').card({
		container: '.card-wrapper',
		placeholders: {
		  number: '**** **** **** ****',
		  name: 'Joao B R Souza',
		  expiry: '99/99',
		  cvc: '999'
		},
		formSelectors: {
		  numberInput: 'input#cardNumber', // optional — default input[name="number"]
		  expiryInput: 'input#expiryInput', // optional — default input[name="expiry"]
		  cvcInput: 'input#card_code', // optional — default input[name="cvc"]
		  nameInput: 'input#holder_name', // optional - defaults input[name="name"]
		},
	  });
	}
  
	$('#cardExpirationMonth,#cardExpirationYear').on('change', function(e){
  
	  var stringValidate = $('#cardExpirationMonth').val() + '/' + $('#cardExpirationYear').val().substring(2);
  
	  $('#expiryInput').val(stringValidate);
	  $('#expiryInput').trigger('keyup');
	  $('#expiryInput').trigger('change');
	});
	*/



})(environment, window, document, jQuery, eventData);