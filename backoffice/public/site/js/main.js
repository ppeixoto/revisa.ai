$( document ).ready(function() {
      //slider home
      
  $('.slider-home .items').slick({
        infinite: false,
        autoplay: true,
        autoplaySpeed: 5000,    
        slidesToShow:   1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        nextArrow: '<i class="fas fa-chevron-right"></i>',
        prevArrow: '<i class="fas fa-chevron-left"></i>',
        responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false
              }
            }
          ]
      });  
      // slider artistas
      $('.slider-artistas .items').slick({
        infinite: true,
        autoplay: false,
        autoplaySpeed: 2000,    
        slidesToShow:   5,
        arrows: true,
        nextArrow: '<i class="fas fa-chevron-right"></i>',
        prevArrow: '<i class="fas fa-chevron-left"></i>',
        responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                dots:true,
                slidesToShow: 2,
                slidesToScroll: 2
              }
            }
          ]
      });  
      // slider horas modal disponivel
    function iniciarSliderHoras(){
      $('.slider-horas').slick({
        infinite: false,
        autoplay: false,
        autoplaySpeed: 2000,    
        slidesToShow:   1,
        slidesToScroll: 1,
        nextArrow: '<i class="fas fa-chevron-right"></i>',
        prevArrow: '<i class="fas fa-chevron-left"></i>',
        responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
              }
            }
          ]
      });
    }
    $('#modal-disponivel').on('shown.bs.modal', function (e) {
      iniciarSliderHoras();
    });
      // slider artistas
      $('.parceiros ul').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,    
        slidesToShow:   6,
        arrows: false,
        nextArrow: '<i class="fas fa-chevron-right"></i>',
        prevArrow: '<i class="fas fa-chevron-left"></i>',
        responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                dots:true,
                slidesToShow: 2,
                slidesToScroll: 2
              }
            }
          ]
      });  
    // fixar navbar
    $(function() {
      var header = $(".bar-top");
      $(window).scroll(function() {    
          var scroll = $(window).scrollTop();
          if (scroll >= 10) {
              header.addClass("scrolled");
          } else {
              header.removeClass("scrolled");
          }
      });
    });
  
    // fixar navbar
    $('.navbar-toggler').click(function(){
      $('.navbar-nav').toggleClass('active');
    });
  
    // Search
    $('.more-search').click(function(e){
      e.stopImmediatePropagation();
      $('.advance-search').toggleClass('active');
    });
  
    $('body').scrollspy({
       target: '#menu-float'
      });
  
    $('.toggle-float-menu').click(function(){
      if($(this).find('i').is(".fa-arrow-left")){
        $(this).find('i').removeClass("fa-arrow-left");
        $(this).find('i').addClass("fa-arrow-right");
      }else{
        $(this).find('i').removeClass("fa-arrow-right");
        $(this).find('i').addClass("fa-arrow-left");
      }
      $('#menu-float').toggleClass('active');
    });
  
    // Menu off
    if ($(window).width() > 768) {
      var div_inicio = $('.form-disponivel').offset().top;
      var div_fim = $('#infos').offset().top + -310;
  
      $(window).scroll(function() {
          var window_top = $(window).scrollTop() + 20;
          if (window_top > div_inicio) {
            $('.form-disponivel').addClass('fixed');
          } else {
              $('.form-disponivel').removeClass('fixed');
          }
          if (window_top > div_fim) {
            $('.form-disponivel').removeClass('fixed');
          }
      });
    };  

  

    // galery
    $(".lightgallery").lightGallery({
      selector: '.gallery-item',
      share:false,
      zoom:false,
      download:false
    }); 
  
    // Iniciar wow js
    new WOW().init();
  
    // Iniciar tooltip
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });
  });

  
$(document).ready(function($){

    $('#cep').mask('99999-999');
    $('#celular').mask('(99)9 9999-9999');
    
    $('#cep').keyup(function (event) {
		var cep = $(this).val().replace(/_/g, '').replace(/-/g, '');
		console.log(cep);

		if (cep.length == 8) {
			$.ajax({
				url: 'https://viacep.com.br/ws/' + cep + '/json/',
				type: 'get',
				dataType: 'json',
				success: function (data, textStatus, xhr) {
					if (typeof data.error == 'undefined') {
						$('#city').val(data.localidade);
                        $('#city2').val(data.localidade);
						$('#street').val(data.logradouro);
                        $('#neighborhood').val(data.bairro);
						$('#bairro').val(data.bairro);
						$('#state').val(data.uf);

						$("#cidadeDelay").val(data.localidade);

						setTimeout(function () {
	                        $("select.state").click();
                            $("select.state").change();
	                    }, 100);

                        
						updateInputVal("city");
						updateInputVal("state");
						updateInputVal("street");
						updateInputVal("bairro");
					}
				}
			});
		}
	});



	$(".state").unbind('change');
    $(".state").bind('change', function () {
        var id = $("#state").val();
        console.log(id);
    	$.ajax({
			url: baseurl + 'cadastro/estadosearch/' + id,
			type: 'GET',
			dataType: 'json',
		})

        .done(function (resultado) {
            $("#city").empty();
            resultado.data.forEach(function (item) {
                $("#city").append(
                    '<option value="' + item.title + '">' + item.title + "</option>"
                );
            });
            $("#city").val($("#cidadeDelay").val());

        });
    });
    function updateInputVal(element) {
		console.log(element);
		setTimeout(function () {
			var val = $("#" + element).val();
			if (val != "")
				$("#" + element).parent().addClass("floating-placeholder-float");
			else
				$("#" + element).parent().removeClass("floating-placeholder-float");
		}, 1)
	}
});


function validarEmail(email) {
    if (
        (email.length != 0 && email.includes("@") === false) ||
        email.includes(".") === false ||
        email === "@."
    ) {
        return false;
    }

    const RegexEmail = /\S+@\S+\.\S+/;

    if (RegexEmail.test(email)) {
        return true;
    }

    return false;
}

function ValidaCPF(cpf) {
    if (typeof cpf !== "string") return false
    cpf = cpf.replace(/[\s.-]*/igm, '')
    if (
        !cpf ||
        cpf.length != 11 ||
        cpf == "00000000000" ||
        cpf == "11111111111" ||
        cpf == "22222222222" ||
        cpf == "33333333333" ||
        cpf == "44444444444" ||
        cpf == "55555555555" ||
        cpf == "66666666666" ||
        cpf == "77777777777" ||
        cpf == "88888888888" ||
        cpf == "99999999999" 
    ) {
        return false
    }
    var soma = 0
    var resto
    for (var i = 1; i <= 9; i++) 
        soma = soma + parseInt(cpf.substring(i-1, i)) * (11 - i)
    resto = (soma * 10) % 11
    if ((resto == 10) || (resto == 11))  resto = 0
    if (resto != parseInt(cpf.substring(9, 10)) ) return false
    soma = 0
    for (var i = 1; i <= 10; i++) 
        soma = soma + parseInt(cpf.substring(i-1, i)) * (12 - i)
    resto = (soma * 10) % 11
    if ((resto == 10) || (resto == 11))  resto = 0
    if (resto != parseInt(cpf.substring(10, 11) ) ) return false
    return true
}

function validarNome(nome) {
    nome = nome.trim();

    if (nome.length == 0 || nome == "") {
        return false;
    }

    const regexNome = /^[a-zA-ZãÃáÁàÀâÂäÄéÉèÈêÊëËÚúíÍóÓõÕôÔöÖüÜñÑçÇ]+(([',. -][a-zA-Z ])?[a-zA-ZãÃáÁàÀâÂäÄéÉèÈêÊëËÚúíÍóÓõÕôÔöÖüÜñÑçÇ]*)*$/g;

    if (regexNome.test(nome)) {
        return true;
    }

    return false;
}


// função validar Telefone
function validaTelefone(telefone) {
    telefone = telefone.trim();

    if (telefone == "() -") {
        return false;
    }

    const listaDDD = [
        "11",
        "12",
        "13",
        "14",
        "15",
        "16",
        "17",
        "18",
        "19",
        "21",
        "22",
        "24",
        "27",
        "28",
        "31",
        "32",
        "33",
        "34",
        "35",
        "37",
        "38",
        "41",
        "42",
        "43",
        "44",
        "45",
        "46",
        "47",
        "48",
        "49",
        "51",
        "53",
        "54",
        "55",
        "61",
        "62",
        "63",
        "64",
        "65",
        "66",
        "67",
        "68",
        "69",
        "71",
        "73",
        "74",
        "75",
        "77",
        "79",
        "81",
        "82",
        "83",
        "84",
        "85",
        "86",
        "87",
        "88",
        "89",
        "91",
        "92",
        "93",
        "94",
        "95",
        "96",
        "97",
        "98",
        "99",
    ];

    telefone = telefone.replace(/[^\d]+/g, "");

    const dddTelefone = telefone.slice(0, 2);
    const telefoneSemDDD = telefone.substring(2);

    if (!listaDDD.includes(dddTelefone)) {
        return false;
    }
    if (
        (telefone.length == 11 && telefone == "00000000000") ||
        telefone == "11111111111" ||
        telefone == "22222222222" ||
        telefone == "33333333333" ||
        telefone == "44444444444" ||
        telefone == "55555555555" ||
        telefone == "66666666666" ||
        telefone == "77777777777" ||
        telefone == "88888888888" ||
        telefone == "99999999999" ||
        (telefone.length == 10 && telefone == "0000000000") ||
        telefone == "1111111111" ||
        telefone == "2222222222" ||
        telefone == "3333333333" ||
        telefone == "4444444444" ||
        telefone == "5555555555" ||
        telefone == "6666666666" ||
        telefone == "7777777777" ||
        telefone == "8888888888" ||
        telefone == "9999999999" ||
        telefone.match("111111") ||
        telefone.match("222222") ||
        telefone.match("333333") ||
        telefone.match("444444") ||
        telefone.match("555555") ||
        telefone.match("666666") ||
        telefone.match("777777") ||
        telefone.match("888888") ||
        telefone.match("999999")
    ) {
        return false;
    } else if (telefoneSemDDD.length > 9 || telefoneSemDDD < 8) {
        return false;
    } else if (telefoneSemDDD.length == 9 && telefoneSemDDD.charAt(0) != "9") {
        return false;
    } else if (telefone.length > 11 || telefone.length < 10) {
        return false;
    }
    return true;
}

function validadata(data){ // pega o valor do input
    var patternData = /^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/;
    if(!patternData.test(data)){
        return false;
    }

    data = data.replace(/\//g, "-"); // substitui eventuais barras (ex. IE) "/" por hífen "-"
    var data_array = data.split("-"); // quebra a data em array
    var dia = data_array[2];
    var mes = data_array[1];
    var ano = data_array[0];
 
    // para o IE onde será inserido no formato dd/MM/yyyy
    if(data_array[0].length != 4){
       dia = data_array[0];
       mes = data_array[1];
       ano = data_array[2];
    }
 
    var hoje = new Date();
    var d1 = hoje.getDate();
    var m1 = hoje.getMonth()+1;
    var a1 = hoje.getFullYear();
 
    var d1 = new Date(a1, m1, d1);
    var d2 = new Date(ano, mes, dia);
 
    var diff = d2.getTime() - d1.getTime();
    diff = diff / (1000 * 60 * 60 * 24);
    
    if(diff < 0){
       console.log("Data não pode ser anterior ao dia de hoje!");
       return false;
    }
    return true;
    
 }

$(".btnInitBuy").unbind('click');
$('.btnInitBuy').click(function () {

    $('.form-control').removeClass('inputError');
    $('.informeError').hide();
    var name        = $("#name").val();
    var email       = $("#email").val();
    var telefone    = $("#celular").val();
    var state       = $("#state").val();
    var city        = $("#city2").val();
    var bairro      = $("#bairro").val();
    var date        = $("#dateApresentacao").val();
    var inputsError = false;

    

    if(!state){
        $("#state").addClass('inputError');
        inputsError = true;
    }
    if(!city){
        $("#city2").addClass('inputError');
        inputsError = true;
    }
    if(!bairro){
        $("#bairro").addClass('inputError');
        inputsError = true;
    }

    if(!date || validadata(date) == false){
        $("#date").addClass('inputError');
        inputsError = true;
        
    }
    if(!validarNome(name)){
        $("#name").addClass('inputError');
        inputsError = true;
        
    }
    if(!validarEmail(email)){
        $("#email").addClass('inputError');
        inputsError = true;
        
    }
    if(!validaTelefone(telefone)){
        $("#celular").addClass('inputError');
        inputsError = true;
        
    }

    if(inputsError == true){
        $('.informeError').show();
        return;
    }

    // $('#modal-disponivel').modal('show');
    // setTimeout(function(){ 
    //     calendar.render();
    //     var tableTd = $('.fc-scrollgrid-sync-table td');
    // }, 1000);

   
    $("#initBuy").submit();
    
    // $.ajax({
    //     url: baseurl + 'init_buy',
    //     type: 'POST',
    //     dataType: 'json',
    //     data: $("#initBuy").serialize()
    // })
    // .done(function (result) {
    //     console.log(result.data);
    //     if(result.data && result.data.id_buy){
    //         $("#idBuy").val(result.data.id_buy);
    //     }
    // });

});

$(".saveLocation").unbind('click');
$(".saveLocation").bind('click', function (e) {

    var street               = $("#street").val();
    var bairro               = $("#neighborhood").val();
    var number               = $("#number").val();
    var complement           = $("#complement").val();
    var reference_point      = $("#reference_point").val();
    var city                 = $("#city").val();
    var state                = $("#state").val();
    var cep                  = $("#cep").val();
    var idBuy                = $("#idBuy").val();
    var category             = $("#category").val();
    var title                = $("#title").val();
    var type_apresentation   = $("#type_apresentation").val();
    var text_error = 'Informações obrigatórias: ';
    
    var error = false;
    $('.inputLocation').removeClass('inputError');
    $('#error_location').text('');

    console.log("a1");

    if(cep.length < 1){
        $('#cep').addClass('inputError');
         error = true;
         text_error = text_error + ' Cep,';
    }
    if(state.length < 1){
        $('#state').addClass('inputError');
         error = true;
         text_error = text_error + ' Estado,';
    }
    if(city.length < 1){
        $('#city').addClass('inputError');
         error = true;
         text_error = text_error + ' Cidade,';
    }
    if(street.length < 1){
        $('#street').addClass('inputError');
        error = true;
        text_error = text_error + ' Logradouro,';
    }
    if(bairro.length < 1){
        $('#neighborhood').addClass('inputError');
         error = true;
         text_error = text_error + ' Bairro,';
    }
    if(number.length < 1){
        $('#number').addClass('inputError');
         error = true;
         text_error = text_error + ' Número,';
    }
    if(complement.length < 1){
        $('#complement').addClass('inputError');
         error = true;
         text_error = text_error + ' Complemento,';
    }
    if(category.length < 1){
        $('#category').addClass('inputError');
         error = true;
         text_error = text_error + ' Tipo Local,';
    }

    if(error == true){
        var text_error = text_error.substring(0, text_error.length - 1);
        $('#error_location').text(text_error);
        return;
    }

    var data = {
        "street" : street,
        "bairro" : bairro,
        "number" : number,
        "complement" : complement,
        "reference_point" : reference_point,
        "city" : city,
        "state" : state,
        "cep" : cep,
        "idBuy" : idBuy,
        "category" : category,
        "title" : title,
        "type_apresentation" : type_apresentation
    }

    console.log("a2");

    $.ajax({
        url: baseurl + 'save_address_buy',
        type: 'POST',
        dataType: 'json',
        data: data
    })
    .done(function (result) {
        console.log("a2");
        refreshHoursAvailable();
        if(result.data.is_address_complete == true){
            $('.showBuy').show();
            $('.btnLocation').hide();
        }
    });
});


function refreshHoursAvailable(){

    var idBuy = $("#idBuy").val();
    var data = {
        "idBuy" : idBuy
    }

    $.ajax({
        url: baseurl + 'refresh_times',
        type: 'POST',
        dataType: 'html',
        data: data
    })
    .done(function (html) {
        // $('#hourHtml').append('');
        $('#hourHtml').empty();
        $('#hourHtml').empty().append(html);
    });

}

$(".btnTimeAditionalPlus").unbind('click');
$(".btnTimeAditionalPlus").bind('click', function (e) {

    if($(this).attr('data-time') == '1'){
        var is_increase = calculoTimeMaxApresentatio('hour');
        if(is_increase == false){
            return
        }
    }else {
        var is_increase = calculoTimeMaxApresentatio('minu');
        if(is_increase == false){
            return
        }
    }

    var value = $(this).parent().prev().val();
    value = parseInt(value);
    value++;
    $(this).parent().prev().val(value);
    if($(this).attr('data-time') == '1'){
        valueHoursAditionalModal(value);
        CalculoValueCashAditionalApresentation();
        return;
    }
    $('#minuAditionalString').text();
    CalculoValueCashAditionalApresentation();
    valueMinusAditionalModal(value);

});

$(".btnContinuar").unbind('click');
$(".btnContinuar").bind('click', function (e) {
    $("#carrinhoPost").submit();
});


$(".addTimeExtraString").unbind('click');
$(".addTimeExtraString").bind('click', function (e) {
    $('.timeAditionalApresentatioString').text($('#hourAditionalString').text() + ' ' + $('#minuAditionalString').text());
    $(".divTimeAditionalString").show();
    if($('#hourAditionalString').text() == "" && $('#minuAditionalString').text() == ""){
        $(".divTimeAditionalString").hide();
    }
    $(".DivTempoExtra").hide();

    var data = {aditionalOneHours   : $('#aditionalOneHours').val(), 
                aditionalThirtyMinu : $('#aditionalThirtyMinu').val(),
                id_compra           : $('#id_compra').val()};


    if($(window).width() < 500){
        var scrollTo = $('#localModal');
        $('html,body').animate({scrollTop: scrollTo.offset().top - 150} ,600);
    }
                
    $.ajax({
        url: baseurl + 'save_time_aditional',
        type: 'POST',
        dataType: 'json',
        data: data
    })
    .done(function (result) {
        if(result.data && result.data.cash_aditional){
           
            $('#valueCashAditionalSubTotal').text(new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(result.data.cash_aditional));
            $('#valCacheAdd').val(result.data.cash_aditional);
   
            recalculoTotal();
            $('#timeTotalString').text(result.data.time_total);
            var scrollTo = $('.divDisponibilidade');
            // $('html,body').animate({scrollTop: scrollTo.offset().top - 100} ,600);
            $('.DivTempoExtra ').hide();
            
        }
        console.log(result);
    });
    
});

$(".btnTimeAditionalMinus").unbind('click');
$(".btnTimeAditionalMinus").bind('click', function (e) {
    var value = $(this).parent().next().val();
    value = parseInt(value);
    if(value == 0){
        return;
    }
    value--;
    $(this).parent().next().val(value);
    console.log($(this).attr('data-time'), "VALUE 30", value);
    if($(this).attr('data-time') == '1'){
        CalculoValueCashAditionalApresentation();
        valueHoursAditionalModal(value);
        return;
    }
    CalculoValueCashAditionalApresentation();
    if(value == 0){
        $('#minuAditionalString').text('');
    }
});

function valueHoursAditionalModal(value){
    var hours = "Hora";
    if(value > 1){
        hours = "Horas";
    }
    if(value == 0){
        $('#hourAditionalString').text('');
        if($('#minuAditionalString').text() == 'e 30 Min'){
            $('#minuAditionalString').text('30 Min');
        }
        return;
    }

    if($('#minuAditionalString').text() == '30 Min'){
        $('#minuAditionalString').text('e 30 Min');
    }
    $('#hourAditionalString').text(value + " " + hours);
}

function valueMinusAditionalModal(value){
    
    if($('#minuAditionalString').text() == "e 30 Min" || $('#minuAditionalString').text() == "30 Min"){
        $('#minuAditionalString').text('');
        var newValueMin = $('#aditionalThirtyMinu').val();
        newValueMin--;
        newValueMin--;
        if(newValueMin < 0){
            newValueMin = 0;
        }
        $('#aditionalThirtyMinu').val(newValueMin);

        var newValueHour = $('#aditionalOneHours').val();
        newValueHour++;
        $('#aditionalOneHours').val(newValueHour);
        valueHoursAditionalModal(newValueHour);
        return;
    }
    if($('#hourAditionalString').text() == ''){
        $('#minuAditionalString').text('30 Min');
        return;
    }
    $('#minuAditionalString').text('e 30 Min');
}

function calculoTimeMaxApresentatio(newValue){
    var time_hour =  parseInt($('#aditionalOneHours').val());
    var time_minu =  parseInt($('#aditionalThirtyMinu').val());
    var time_limit = parseInt($('#timeMaxApresentation').val());
    if(newValue == "hour"){
        time_hour++;
    } else {
        time_minu++;
    }
    time_hour = time_hour * 60;
    time_minu = time_minu * 30;
    if((time_hour + time_minu) > time_limit ){
        return false;
    }
    return true;
}

function CalculoValueCashAditionalApresentation(){
    var time_hour =  parseInt($('#aditionalOneHours').val());
    var time_minu =  parseInt($('#aditionalThirtyMinu').val());

    var cash_hour =  parseFloat($('#cashOneHoursApresentation').val());
    var cash_minu =  parseFloat($('#cashThirtyMinusApresentation').val());

    cash_hour = cash_hour * time_hour;
    cash_minu = cash_minu * time_minu;

    var cash_total = cash_hour + cash_minu;

    $('#valueCashAditional').text(new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(cash_total));
}


$(".clickHourSelected").unbind('click');
$(".clickHourSelected").bind('click', function (e) {

    console.log("a1");

    if($(this).hasClass("divHourInitialBoxInactived")){
        return; 
     }

    $('.rowMinuto').show();
    $('.rowHours').hide();
    $('.rowHours').removeClass('d-flex');
    $('.iconEditHourInitial').show();
    
    $('.clickHourSelected').removeClass('divHourInitialBoxSelected');
    
    $('#hourApresentation').val($(this).attr('date-time'));

    $(this).addClass('divHourInitialBoxSelected');
    

    var data = {date      : $('#dateApresentacao').val(), 
                hour      : $('#hourApresentation').val(),
                id_compra : $('#id_compra').val()};
                
        
    $.ajax({
        url: baseurl + 'save_date_hours',
        type: 'POST',
        dataType: 'json',
        data: data
    })
    .done(function (result) {
        if(result.data.hora_inicial){
            // alert(result.data.hora_inicial);
            $('.titleInitial').show();
            $('.showBuyComplete').show();
            $('#hourInitialString').text(result.data.hora_inicial);
            $('#hourEndString').text(result.data.hora_final);
            $('.timeMaxAvailableDay').text(result.data.horas_extras_string);
            var total_minutos_atual = $('#timeMaxApresentation').val();
            var total_minutos_novo = result.data.total_minutos_livres;
            if(parseInt(total_minutos_novo) < parseInt(total_minutos_atual)){
                // $('#timeMaxApresentation').val(total_minutos_novo);
            }
            $('#hourInitial').text('Alterar Horário');
            var scrollTo = $('.divDisponibilidade');
            if($(window).width() < 500){
                $('html,body').animate({scrollTop: scrollTo.offset().top}, 600);
            }
        }
        console.log(result);
    });

});


$(".clickMinuteSelected").unbind('click');
$(".clickMinuteSelected").bind('click', function (e) {
    $('.clickMinuteSelected').removeClass('divHourInitialBoxSelected');
    $(this).addClass('divHourInitialBoxSelected');
});

$(".iconEditHourInitial").unbind('click');
$(".iconEditHourInitial").bind('click', function (e) {
   
    if ($(".rowHours").is(":visible") == true) {
        $('.rowHours').removeClass('d-flex');
        $('.rowHours').hide();
        if($(window).width() < 500){
            $('html,body').animate({scrollTop: $('.rowHourSelec').offset().top - 110}, 600);
        }
        return;
    }

    // var scrollTo = $('.rowHours');
    if($(window).width() < 500){
        $('html,body').animate({scrollTop: $('.rowHourSelec').offset().top + 110}, 600);
    }
    $('.rowHours').addClass('d-flex');
    $('.rowHours').show();
});


$(".callStepTwoBuy").unbind('click');
$(".callStepTwoBuy").bind('click', function (e) {

    $('#msgErrorModal').text("");
    var hour_apresentation = $("#HourMinuteApresentationInitial").val();
    if(!hour_apresentation || hour_apresentation == ""){
        $('#msgErrorModal').text("Para continuar, selecione a hora e minuto de início da apresentação.");
        return;
    }
    $("#formDateApresentation").submit();

});

function recalculoTotal(){

    var value = 0;
    $('input[name^="contracao"]:checked').each(function (position, item) {
        value = value + parseFloat($(item).attr('data-value'));
        console.log($(item).attr('data-value'));
        console.log(value);
    });

    var formatter = new Intl.NumberFormat('ja-JP', {
        style: 'currency',
        currency: 'BRL',
    });

    var valueTotal = parseFloat($('#valCache').val());
    valueTotal += parseFloat($('#valCacheAdd').val());
    valueTotal += parseFloat(value);
    $('#total').text(formatter.format(valueTotal));
}


$(".checkboxStructureHiring").unbind('click');
$(".checkboxStructureHiring").bind('click', function (e) {
    checkboxStructure();
});

function checkboxStructure(){
    var value = 0;
    
    $('input[name^="contracao"]:checked').each(function (position, item) {
        value = value + parseFloat($(item).attr('data-value'));
        console.log($(item).attr('data-value'));
        console.log(value);
    });

    var formatter = new Intl.NumberFormat('ja-JP', {
        style: 'currency',
        currency: 'BRL',
    });
    $('#sub_total_aditional').text(formatter.format(value));

    recalculoTotal();

    var ids = [];
    $('.checkboxStructureHiring:checked').each(function(i, e) {
        ids.push($(this).val());
    });

    var data = {
        'idBuy' : $('#idBuy').val(),
        'ids_structures' : ids
    }
    $.ajax({
        url: baseurl + 'save_structure_buy',
        type: 'POST',
        dataType: 'json',
        data: data
    })
    .done(function (result) {
        console.log(result.data);
    });
    console.log(data);
}




$('#login-form2').validate({
    errorLabelContainer: $('#login-form2').find('.msg-error'),
    ignore: "",
    focusInvalid: false,
    highlight: function (element, errorClass, validClass) {
        $(element).addClass(errorClass).removeClass(validClass);
        $(element).parent().addClass('input-required');
        $(element).siblings('button[type="submit"]').addClass('btn-error');
        setTimeout(function () {
            $(element).siblings('button[type="submit"]').removeClass('btn-error');
        }, 1200);

    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass(errorClass).addClass(validClass);
        $('.valid').parent().removeClass('input-required');
    },
    rules: {
        password: 'required',
        email: {
            required: true,
            email: true
        }
    },
    messages: {
        password: 'Preencha os campos obrigatórios',
        email: {
            required: 'Preencha os campos obrigatórios',
            email: 'Informe um e-mail válido'
        }
    },
    submitHandler: function (form) {
        var data = $(form).serialize();
        $('.msg-reply').text("Aguarde...");
        $('.msg-reply').show();
        $.ajax({
            url: baseurl + 'login/send',
            type: 'POST',
            dataType: 'json',
            data: data,
        })
            .done(function (result) {
                console.log(result);
                if (result.status) {
                    clearInputs(form);
                    $('.msg-reply').text(result.message);
                    $('#login-form').children('button[type="submit"]').addClass('btn-success');
                    console.log(result);
                    setTimeout(function () {
                        if (typeof result.data != "undefined")
                            window.location.href = result.data;
                        else
                            window.location.href = baseurl;
                    }, 500);
                } else {
                    $('.msg-reply').hide();
                    $('.msg-error').show();
                    $('.msg-error').text(result.message);
                }
            })
            .fail(function () {
                console.log("error");
            })
            .always(function () {
                console.log("complete");
            });
        return false;
    },
});

// esqueci a senha form
$('#senha-form').validate({
    errorLabelContainer: $('#senha-form').siblings('.msg-error'),
    ignore: "",
    focusInvalid: false,
    highlight: function (element, errorClass, validClass) {
        $(element).addClass(errorClass).removeClass(validClass);
        $(element).parent().addClass('input-required');
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass(errorClass).addClass(validClass);
        $(element).parent().removeClass('input-required');
    },
    rules: {
        email: {
            required: true,
            email: true
        }
    },
    messages: {
        email: {
            required: 'Preencha os campos obrigatórios',
            email: 'Informe um e-mail válido'
        }
    },
    submitHandler: function (form) {
        var data = $(form).serialize();
        $('.msg-reply').text("Aguarde...");
        $('.msg-reply').show();
        $.ajax({
            url: baseurl + 'esqueci-senha/send',
            type: 'POST',
            dataType: 'json',
            data: data,
        })
            .done(function (result) {
                if (result.status) {
                    clearInputs(form);
                    $('.msg-reply').text(result.message);
                } else {
                    $('.msg-reply').hide();
                    $('.msg-error').show();
                    $('.msg-error').text(result.message);
                }
            })
            .fail(function () {
                console.log("error");
            })
            .always(function () {
                console.log("complete");
            });
        return false;
    },
});


$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

$(function () {
    $("[rel=tooltip]").tooltip({ placement: 'top' });
});

$(function () {
    $("[rel-toogle=tooltip]").tooltip({ placement: 'bottom' });
});


// esqueci email form
$('#email-form').validate({
    errorLabelContainer: $('#email-form').siblings('.msg-error'),
    ignore: "",
    focusInvalid: false,
    highlight: function (element, errorClass, validClass) {
        $(element).addClass(errorClass).removeClass(validClass);
        $(element).parent().addClass('input-required');
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass(errorClass).addClass(validClass);
        $(element).parent().removeClass('input-required');
    },
    rules: {
        cpf: {
            required: true,
        }
    },
    messages: {
        cpf: {
            required: 'Preencha os campos obrigatórios',
        }
    },
    submitHandler: function (form) {
        var data = $(form).serialize();
        $('.msg-reply').text("Aguarde...");
        $('.msg-reply').show();
        $.ajax({
            url: baseurl + 'esqueci-email/send',
            type: 'POST',
            dataType: 'json',
            data: data,
        })
            .done(function (result) {
                if (result.status) {
                    clearInputs(form);
                    // 033.776.734-31

                    $('#email').removeAttr('type');
                    $('#email').val(result.message);
                    $('.msg-reply').text("Sucesso");

                } else {
                    $('#email').attr('type', 'hidden');
                    $('.msg-reply').hide();
                    $('.msg-error').show();
                    $('.msg-error').text(result.message);
                }
            })
            .fail(function () {
                console.log("error");
            })
            .always(function () {
                console.log("complete");
            });
        return false;
    },
});


// resetar a senha form
$('#reset-form').validate({
    errorLabelContainer: $('#reset-form').siblings('.msg-error'),
    ignore: "",
    focusInvalid: false,
    highlight: function (element, errorClass, validClass) {
        $(element).addClass(errorClass).removeClass(validClass);
        $(element).parent().addClass('input-required');
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass(errorClass).addClass(validClass);
        $(element).parent().removeClass('input-required');
    },
    rules: {
        password: 'required',
        confirmPass: {
            required: true,
            equalTo: "#password"
        },
    },
    messages: {
        password: 'Digite uma senha',
        confirmPass: 'Confirmação de senha inválida'
    },
    submitHandler: function (form) {
        var data = $(form).serialize();
        $('.msg-reply').text("Aguarde...");
        $('.msg-reply').show();
        $.ajax({
            url: baseurl + 'resetar-senha/clickpass',
            type: 'POST',
            dataType: 'json',
            data: data,
        })
            .done(function (result) {
                if (result.status) {
                    clearInputs(form);
                    $('.msg-reply').text(result.message);
                    window.location.href = baseurl;
                } else {
                    $('.msg-reply').hide();
                    $('.msg-error').show();
                    $('.msg-error').text(result.message);
                }
            })
            .fail(function () {
                console.log("error");
            })
            .always(function () {
                console.log("complete");
            });
        return false;
    },
});


$('.clickCartaoMeu').click(function () {
    if ($('input[name="donoCartao"]').prop('checked') == true) {
        $('#docNumber').val("");
        $('#telefoneTitular').val("");
        $('#nascimentoTitular').val("");

        $('#docNumber').prop('readonly', false);
        $('#telefoneTitular').prop('readonly', false);
        $('#nascimentoTitular').prop('readonly', false);

        $('#nascimentoTitular').mask('99/99/9999');
        $('#telefoneTitular').mask('(99)9 9999-9999');
        // $('#docNumber').mask('999.999.999-99');


    } else {
        var cpf = $('#cpfLogado').val();
        var cel = $('#telefoneLogado').val();
        var nasc = $('#nascimentoLogado').val();

        var cpf = cpf.replace(".", "");
        var cpf = cpf.replace(".", "");
        var cpf = cpf.replace(".", "");
        var cpf = cpf.replace("-", "");

        $('#docNumber').val(cpf);
        $('#telefoneTitular').val(cel);
        $('#nascimentoTitular').val(nasc);

        $('#docNumber').prop('readonly', true);
        $('#telefoneTitular').prop('readonly', true);
        $('#nascimentoTitular').prop('readonly', true);
    }
});

$("#card-tab").click(function () {
    $('input[name="cepEndFaturamento"]').prop('required', true);
    $('input[name="estadoEndFaturamento"]').prop('required', true);
    $('input[name="cidadeEndFaturamento"]').prop('required', true);
    $('input[name="bairroEndFaturamento"]').prop('required', true);
    $('input[name="logradouroEndFaturamento"]').prop('required', true);
    $('input[name="numeroEndFaturamento"]').prop('required', true);
    $('input[name="complementoEndFaturamento"]').prop('required', true);

    if ($('#cardId').val() == "show") {
        $('.mostrarEndereco').show();
    }

    // 
});

$("#boleto-tab").click(function () {
    $('input[name="cepEndFaturamento"]').prop('required', false);
    $('input[name="estadoEndFaturamento"]').prop('required', false);
    $('input[name="cidadeEndFaturamento"]').prop('required', false);
    $('input[name="bairroEndFaturamento"]').prop('required', false);
    $('input[name="logradouroEndFaturamento"]').prop('required', false);
    $('input[name="numeroEndFaturamento"]').prop('required', false);
    $('input[name="complementoEndFaturamento"]').prop('required', false);
    $('.mostrarEndereco').hide();
});


$('.showEndUser').click(function () {

    if ($('input[name="endFaturamento"]').prop('checked') == true) {

        $('input[name="cepEndFaturamento"]').prop('readonly', true);
        $('input[name="estadoEndFaturamento"]').prop('disabled', true);
        $('input[name="cidadeEndFaturamento"]').prop('readonly', true);
        $('input[name="bairroEndFaturamento"]').prop('readonly', true);
        $('input[name="logradouroEndFaturamento"]').prop('readonly', true);
        $('input[name="numeroEndFaturamento"]').prop('readonly', true);
        $('input[name="complementoEndFaturamento"]').prop('readonly', true);

        var idUser = $('input[name="idUserLogado"]').val();
        // console.log($('input[name="cepEndFaturamento"]').val());

        if ($('input[name="cepEndFaturamento"]').val() == "") {

            $.ajax({
                url: baseurl + 'preencher_ende/' + idUser,
                type: 'get',
                dataType: 'json',
            })
                .done(function (result) {

                    if (result.status == "success") {
                        $('input[name="cepEndFaturamento"]').val(result.cep);
                        // $('input[name="estadoEndFaturamento"]').val(result.estado);
                        $('input[name="cidadeEndFaturamento"]').val(result.cidade);
                        $('input[name="bairroEndFaturamento"]').val(result.bairro);
                        $('input[name="logradouroEndFaturamento"]').val(result.rua);
                        $('input[name="numeroEndFaturamento"]').val(result.numero);
                        $('input[name="complementoEndFaturamento"]').val(result.complemento);
                    }

                })
                .fail(function () {

                })
                .always(function () {

                });
        }

    } else {

        $('input[name="cepEndFaturamento"]').prop('readonly', false);
        $('input[name="estadoEndFaturamento"]').prop('disabled', false);
        $('input[name="cidadeEndFaturamento"]').prop('readonly', false);
        $('input[name="bairroEndFaturamento"]').prop('readonly', false);
        $('input[name="logradouroEndFaturamento"]').prop('readonly', false);
        $('input[name="numeroEndFaturamento"]').prop('readonly', false);
        $('input[name="complementoEndFaturamento"]').prop('readonly', false);

        $('input[name="cepEndFaturamento"]').val('');
        $('input[name="cidadeEndFaturamento"]').val('');
        $('input[name="bairroEndFaturamento"]').val('');
        $('input[name="logradouroEndFaturamento"]').val('');
        $('input[name="numeroEndFaturamento"]').val('');
        $('input[name="complementoEndFaturamento"]').val('');
    }
});

$('.naoDono').click(function () {
    if ($('#naoDono').prop('checked') == true) {
        $(".hiddenCont").show();
        return;
    } else {
        $(".hiddenCont").hide();
        return;
    }
}); 







function clearInputs(form) {
    $(form).find('input[type=text],input[type=email],textarea').each(function () {
        $(this).val('');
    });
}


$('.showBlocosEdit').click(function () {
	var id = $(this).attr('data-total');
    console.log(id);
	if(id == "1"){
        $('html, body').animate({
            scrollTop: $('.clearReadOnlyParte1').offset().top
        }, 500);
		$('.clearReadOnlyParte1').trigger('click');
	}
	if(id == "2"){
        $('html, body').animate({
            scrollTop: $('.clearReadOnlyParte2').offset().top
        }, 500);
        $('.clearReadOnlyParte2').trigger('click');
	}
	if(id == "3"){
        $('html, body').animate({
            scrollTop: $('.clearReadOnlyParte1').offset().top
        }, 500);

        $('.clearReadOnlyParte1').trigger('click');
        $('.clearReadOnlyParte2').trigger('click');
	}
});


$('.clearReadOnlyParte1').click(function () {

	$(".class_init_hide_1").show();
	$(".class_init_show_1").hide();


	$('.boxMeusDados').show();
	$('.boxsResumoDados').hide();
	$('.readOnlyParte1').prop('readonly', false);
	$('.radioGenero').prop('disabled', false);
	$('.radioGenero').prop('required', true);
	$('#submitAccount').show();
	$('input[name="phone2"],input[name="holder_phone"]').mask('(99)9999-9999?9');
	$('input[name="phone"]').mask('(99)99999-9999');
	$('input[name="birthday"]').mask('99/99/9999');
	$('input[name="cpf"]').mask('999.999.999-99');

	if( $('#clienteAntigo').val() == 'sim'){
		$('.readOnlyParte10').prop('readonly', false);
		$('.readOnlyParte10').prop('required', true);
		$('#cpf').mask('999.999.999-99');
		$('#birthday').mask('99/99/9999');	
	}


    $('html, body').animate({
        scrollTop: $('.boxMeusDados').offset().top - 100
    }, 500);
});

$('.clearReadOnlyParte2').click(function () {

	$(this).parent().parent().find(".class_init_hide").show();
	$(this).parent().parent().find(".class_init_show").hide();

	if( $(this).attr('value-id') == "principal"){
		$('.BoxMeusEnderecosPrincipal').show();
		$('.BoxMeusEnderecos').hide();
		$('#idEndereco_new').val('');
	} else {
		$('.BoxMeusEnderecosPrincipal').hide();
		$('.BoxMeusEnderecos').hide();
		$('.showAddress_'+$(this).attr('value-id')).show();
		$('#idEndereco_new').val($(this).attr('value-id'));

	}
	
	$('.readOnlyParte2').prop('readonly', false);
	$('.readOnlyParte2').prop('disabled', false);
	$('#submitAccount').show();
	$('#cep_edit').mask('99999-999');
	$('.cep').mask('99999-999');
	$("#cidadeDelay").val($("#city_edit").val());
	$("select.state_edit").click();

	
});

$('#clearReadOnlyParte3').on('click', function (e) {
	$('.readOnlyParte3').prop('readonly', false);

	$('.boxSenhas').show();
	$('.hideCardSenha').show();
	$('#clearReadOnlyParte3').hide();
	
	// $('#submitAccount').show();
});

$('.hideCardMeusDados').click(function () {

	$('.boxMeusDados').hide();
	$('.boxsResumoDados').show();
	$('#submitAccount').hide();
});

$('.hideCardNovoEndereco').click(function () {

	$('.BoxMeusEnderecosNovos').hide();
	$('#submitAccount').hide();
});

$('.hideCardMeuEndPrincipal').click(function () {

	$('.BoxMeusEnderecosPrincipal').hide();
	$('#submitAccount').hide();
});

$('.hideCardMeuEnd').click(function () {

	$('.BoxMeusEnderecos').hide();
	$('#submitAccount').hide();
});

$('.hideCardSenha').click(function () {

	$('.boxSenhas').hide();
	$('.hideCardSenha').hide();
	$('#clearReadOnlyParte3').show();
	$('#submitAccount').hide();
});

$('.showDivNewsLetter').click(function () {
	$('.inputNewsLetter').show();
	$('.showDivNewsLetter').hide();
});


$('#btnFooter').click(function () {

	var email = $("#exampleInputEmail1").val();

	if(email == ''){
		$('#msgNews').text("Preencha um email.");
		setTime();
		return;
	} else if(validarEmail(email) == false){
		$('#msgNews').text("Preencha um email válido.");
		setTime();
		return;
	} else if(email.length > 50) {
		$('#msgNews').text("Tamanho máximo de caratacteres para o email é de 50.");
		setTime();
		return;
	} else{
		$('#msgNews').text("Cadastrando...");
	}

	$.ajax({
		url: baseurl + 'newslleter',
		type: 'POST',
		dataType: 'json',
		data: { email: email },
	})
	.done(function (result) {
		$('#msgNews').text(result.msg);
        $('.inputNewsLetter').hide();
        $('.showDivNewsLetter').show();
	})
	.fail(function () {
	})
	.always(function () {
		setTime();
	});
});

function setTime(){
	setTimeout(function () {
		$('#msgNews').text("");
		$("#exampleInputEmail1").val("");
	}, 2000);
}

$("#account-form").validate({
    errorLabelContainer: $('#account-form').siblings('.msg-error'),
    ignore: ":not(:visible),[readonly=readonly]",
    focusInvalid: false,
    highlight: function (element, errorClass, validClass) {
        $(element).addClass(errorClass).removeClass(validClass);
        $(element).parent().find('.selectedValue').addClass(errorClass);
        $(element).parent().addClass('input-required');
        $(element).siblings('.alert').addClass('show');
        $(element).parent('.customSelect').siblings('.alert').addClass('show');
        $('#submitAccount').addClass('btn-error');
        setTimeout(function () {
            $('#submitAccount').removeClass('btn-error');
        }, 1200);
        if($('#emailAntigo').val() != $('#email').val()){
            $("#emailConfirma").rules("add", "required");
            $("#emailConfirma").rules("add", "email");
        }else {
            $("#emailConfirma").rules("remove");
        }
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass(errorClass).addClass(validClass);
        $(element).parent().find('.selectedValue').removeClass(errorClass);
        $(element).parent().removeClass('input-required');
        $(element).siblings('.alert').removeClass('show');
        $(element).parent('.customSelect').siblings('.alert').removeClass('show');
        
        if($('#emailAntigo').val() != $('#email').val()){
            $("#emailConfirma").rules("add", "required");
            $("#emailConfirma").rules("add", "email");
        }else {
            $("#emailConfirma").rules("remove");
        }
    },
    rules: {
        email: {
            required: true,
            email: true
        },
        // emailConfirma: {
        //     required: true,
        //     email: true,
        //     equalTo: '#email'
        // },
        phone: 'required',
        cep: 'required',
        city: 'required',
        uf: 'required',
        street: 'required',
        neighborhood: 'required',
        number: 'required',
    },
    messages: {
        phone: 'Seu telefone é obrigatório',
        cep: 'cep é obrigatório',
        city: 'Cidade é obrigatório',
        uf: 'Estado é obrigatório',
        street: 'Logradouro é obrigatório',
        neighborhood: 'Bairro é obrigatório',
        number: 'Número do endereço é obrigatório',
        email: {
            required: 'Preencha os campos obrigatórios',
            email: 'Informe um e-mail válido'
        },
        // emailConfirma: {
        //     required: 'Preencha os campos obrigatórios',
        //     email: 'Informe um e-mail válido',
        //     equalTo: 'A confirmação deve ser igual ao email informado'
        // }            
    },
    submitHandler: function (form) {
        // if($('#emailAntigo').val() != $('#email').val()){
        // 	$("input[name=emailConfirma]").rules("add", "required");
        // 	$("input[name=emailConfirma]").rules("add", "email");
        // }

        var data = $(form).serialize();
        console.log(data);
        $('.msg-reply').text("Aguarde...");
        $('.msg-reply').show();
        $.ajax({
            url: baseurl + 'minhaconta/save',
            type: 'POST',
            dataType: 'json',
            data: data,
        })
            .done(function (result) {
                if (result.status) {
                    clearInputs(form);
                    $('.msg-reply').text(result.message);
                    setTimeout(function () {
                        window.location.href = result.data;
                    }, 1000);

                } else {
                    $('.msg-reply').hide();
                    $('.msg-error').text(result.message);
                    $('.msg-error').show();
                    $('#submitAccount').addClass('btn-error');
                    setTimeout(function () {
                        $('#submitAccount').removeClass('btn-error');
                    }, 1200);
                }
            })
            .fail(function () {
                console.log("error");
            })
            .always(function () {
                console.log("complete");
            });
        return false;
    },
});


// validations
$('input[name="phone2"],input[name="holder_phone"]').mask('(99)9999-9999?9');
$('input[name="cpf"]').mask('999.999.999-99');
$('input[name="cnpj"]').mask('99.999.999/9999-99');
$('input[name="card_expiry"]').mask('99/99');
// $('input[name="rg"]').mask('9.999.999');
$('input[name="birthday"]').mask('99/99/9999');
$('input[name="holder_birthday"]').mask('99/99/9999');
$('input[name="cep"]').mask('99999-999');
$('input[name="holder_cep"]').mask('99999-999');
$('input[name="urlComiss"]').mask('aaaaa?aaaaaaaaaa');
$('input[name="codeComiss"]').mask('aaaaa?aaaaaaaaaa');
$('input[name="code"]').mask('?aaaaaaaaaaaaaaa');


$('.cep').mask('99999-999');
$('.dtNascimento').mask('99/99/9999');
$('.telefoneCel').mask('(99)99999-9999');
$('.telefoneFix').mask('(99)9999-9999');
$('.cpf').mask('999.999.999-99');
$('.nPedido').mask('*****-*****');

$('.mascaraCartao').mask('9999 9999 9999 9999');
$('.dtCartaoValidade').mask('99/9999');
$('.mascaraCartaoExp').mask('999');
$('.searchCep').mask('99999-999');


$('.buttonTempoExtra').click(function () {

    if ($(".DivTempoExtra").is(":visible") == true) {
        $(".DivTempoExtra").hide();
    } else {
        $(".DivTempoExtra").show();
    }
});

$( document ).ready(function() {
    var value_minute = $("#aditionalThirtyMinu").val();
    valueHoursAditionalModal(value_minute);
    if(parseFloat(value_minute) >= 1 ){
        $('#minuAditionalString').text('30 Min');
    }
    var value_hour = $("#aditionalOneHours").val();
    valueHoursAditionalModal(value_hour);

    CalculoValueCashAditionalApresentation();
});


$('.saveComplaint').click(function () {

	var email           = $("#email_denuncia").val();
    var name            = $("#name_denuncia").val();
    var telefone        = $("#telefone_denuncia").val();
    var id_artista      = $("#id_artista").val();
    var texto_denuncia  = $("#texto_denuncia").val();
    $(".form-control").removeClass('inputError');

    // if(!validarNome(name)){
    //     $("#name_denuncia").addClass('inputError');
    //     $('#msgErrorDenuncia').text("Preencha um nome válido");
    //     return;
    // }
    // if(!validaTelefone(telefone)){
    //     $("#telefone_denuncia").addClass('inputError');
    //     $('#msgErrorDenuncia').text("Preencha um telefone válido.");
	// 	return;
    // }


	if(email == ''){
        $("#email_denuncia").addClass('inputError');
		$('#msgErrorDenuncia').text("Preencha um email.");
		return;
	} else if(validarEmail(email) == false){
        $("#email_denuncia").addClass('inputError');
		$('#msgErrorDenuncia').text("Preencha um email válido.");
		return;
	} else if(email.length > 50) {
		$('#msgErrorDenuncia').text("Tamanho máximo de caratacteres para o email é de 50.");
		return;
	} 

    if(texto_denuncia.length <= 3){
        $("#texto_denuncia").addClass('inputError');
		$('#msgErrorDenuncia').text("Preencha um ocorrido.");
    }
    
    $('#msgErrorDenuncia').text("");

	$.ajax({
		url: baseurl + 'complaint',
		type: 'POST',
		dataType: 'json',
		data: { email: email, telefone: telefone, nome: name, artista:id_artista, msg: texto_denuncia },
	})
	.done(function (result) {
		$('#msgSucessoDenuncia').text(result.msg);
        $('#form-denuncia').each (function(){
            this.reset();
        });
        // setTimeout(function () {
        //     $('#modal-denuncia').modal('hide');
        // }, 1000);
	})
	.fail(function () {
	})
	.always(function () {

	});
});

$("#butt1").unbind('click');
$('#butt1').click(function () {
    const butt1 = document.getElementById("butt1");
    const butt2 = document.getElementById("butt2");

    if(butt2.className === "Button Button_secondary") {
      butt1.className = "Button Button_secondary";
      butt2.className = "Button Button_primary";
    }else {
        butt1.className = "Button Button_primary";
      butt2.className = "Button Button_secondary";
    }
    isShowStructure();
});

$("#butt2").unbind('click');
$('#butt2').click(function () {
    const butt1 = document.getElementById("butt1");
    const butt2 = document.getElementById("butt2");
  
    if( butt1.className === "Button Button_primary") {
      butt2.className = "Button Button_primary";
      butt1.className = "Button Button_secondary";
    }else {
      butt2.className = "Button Button_secondary";
      butt1.className = "Button Button_primary";
    }
    isShowStructure();
});

function isShowStructure(){
    var is_structure_show = $("#butt1").hasClass('Button_primary');
    if(is_structure_show == true){
        $('.showStructures').show();
        return;
    }
    $('.showStructures').hide();
    checkboxStructure();  
}

$('.boxStructure').click(function () {
    if($(this).hasClass('boxStructureSelected')){
        $(this).removeClass('boxStructureSelected');
    }else {
        $(this).addClass('boxStructureSelected');
    }
    if($(this).children().prop('checked') == false){
        $(this).children().prop('checked', true);
        $(this).children().attr('checked','checked');
    }else {
        $(this).children().prop('checked', false);
        $(this).children().attr('checked', false);
    }
    checkboxStructure();
});



if($('input[name="tipo_pessoa"]').length) {
    $('input[name="tipo_pessoa"]').unbind('change');
    $('input[name="tipo_pessoa"]').bind('change', function() {
        var value = $('input[name="tipo_pessoa"]:checked').val();

        if(value == tipoPessoa.juridica) {
            $('.pf').hide();
            $('.pj').show();
        } else {
            $('.pf').show();
            $('.pj').hide();
        }
    });
    $('input[name="tipo_pessoa"]').trigger('change');
}

$(".showDisponibilidade").unbind('click');
$('.showDisponibilidade').click(function () {
    $("#form-disponivel").show();
    $("#form-disponivel").removeClass('displayNoneMobile');
    if($(window).width() < 500){
        
    }
    $('html, body').animate({
        scrollTop: $("#form-disponivel").offset().top - 150
    }, 100);

    $('.boxDisponibilidade').hide();

    setTimeout(function () {
        $('#form-disponivel').addClass('newShadow');
    }, 800);
});

$(".closeDisponibilidade").unbind('click');
$('.closeDisponibilidade').click(function () {
    $("#form-disponivel").hide();
    $('.boxDisponibilidade').show();
    $('#form-disponivel').removeClass('newShadow');
});

$(".changeCacheInit").unbind('change');
$('.changeCacheInit').change(function () {
    var value_selected = $(this).val();
    var array_values = $("#valuesCacheMax").val().split(" || ");
    $("#cacheAte").empty();
    console.log(value_selected);
    $("#cacheAte").append('<option value=""></option>');
    console.log(array_values);
    array_values.forEach(function (val) {
        if(parseFloat(val) > parseInt(value_selected)){
            $("#cacheAte").append(
                '<option value="' + val + '">' + formatValueReal(val) + "</option>"
            );
        }
        console.log(parseFloat(val) , parseInt(value_selected));
            //     
            // });
            // $("#city").val($("#cidadeDelay").val());
    });
});

function formatValueReal(value){

    var formatter = new Intl.NumberFormat('ja-JP', {
        style: 'currency',
        currency: 'BRL',
    });
    return formatter.format(value);

}


$('.newEndereco').click(function () {
	$('.BoxMeusEnderecosNovos').show();
    $('html, body').animate({
        scrollTop: $('.BoxMeusEnderecosNovos').offset().top - 100
    }, 500);
});


$("#addres-new-form").validate({
	errorLabelContainer: $('#addres-new-form').siblings('.msg-error'),
    ignore: ":not(:visible),[readonly=readonly]",
	focusInvalid: false,
	highlight: function (element, errorClass, validClass) {
		$(element).addClass(errorClass).removeClass(validClass);
		$(element).parent().find('.selectedValue').addClass(errorClass);
		$(element).parent().addClass('input-required');
		$(element).siblings('.alert').addClass('show');
		$(element).parent('.customSelect').siblings('.alert').addClass('show');
		$('#submitAddressNew').addClass('btn-error');
		setTimeout(function () {
			$('#submitAddressNew').removeClass('btn-error');
		}, 1200);
	},
	unhighlight: function (element, errorClass, validClass) {
		$(element).removeClass(errorClass).addClass(validClass);
		$(element).parent().find('.selectedValue').removeClass(errorClass);
		$(element).parent().removeClass('input-required');
		$(element).siblings('.alert').removeClass('show');
		$(element).parent('.customSelect').siblings('.alert').removeClass('show');
	},
	rules: {
		identificacao_new: 'required',
		cep_new: 'required',
		uf_new: 'required',
		city_new: 'required',
		neighborhood_new: 'required',
		street_new: 'required',
		number_new: 'required',
	},
	messages: {
		identificacao_new: 'identificação de é obrigatório',
		cep_new: 'cep é obrigatório',
		city_new: 'Cidade é obrigatório',
		uf_new: 'Estado é obrigatório',
		street_new: 'Logradouro é obrigatório',
		neighborhood_new: 'Bairro é obrigatório',
		number_new: 'Número do endereço é obrigatório',        
	},
	submitHandler: function (form) {
		var data = $(form).serialize();
		$('.msg-reply-new-end').css('color', 'black').text("Aguarde...");
		$.ajax({
			url: baseurl + 'minhaconta/address_new',
			type: 'POST',
			dataType: 'json',
			data: data,
		})
		.done(function (result) {
			if (result.status) {
				$('.msg-reply-new-end').css('color', 'green').text(result.message);
				$('#submitAddressNew').addClass('btn-success');
				setTimeout(function () {
					window.location.href = 'minha-conta';
				}, 2000);

			} else {
				$('.msg-reply-new-end').css('color', 'red').text(result.message);
				$('#submitAddressNew').addClass('btn-error');
				setTimeout(function () {
					$('#submitAddressNew').removeClass('btn-error');
				}, 2000);
			}
		})
		.fail(function () {
		})
		.always(function () {
		});
	return false;
	},
});

$(".btnExluirEnd").on('click', function (event) {
   
    var id = $(this).attr('data-id');

    console.log($(this).attr('data-address'));
    
    $("#cepDeletar").text('');
    $("#cepDeletar").text($(this).attr('data-cep'));

    $("#AddressDeletar").text('');
    $("#AddressDeletar").text($(this).attr('data-address'));

    $("#cityDeletar").text('');
    $("#cityDeletar").text($(this).attr('data-city'));

    $("#BairroDeletar").text('');
    $("#BairroDeletar").text($(this).attr('data-bairro'));

    setTimeout(function () {
		$("#modalEnderecoExcluir").modal("show");
	}, 120);
    
    $("#btnDeletarEnd").attr("href", baseurl + 'minha-conta/deletar_endereco/' + id);
    
});

$(".btnFavoritarEnd").on('click', function (event) {
    var id = $(this).attr('data-id');

    $("#cepFavoritar").text('');
    $("#cepFavoritar").text($(this).attr('data-cep'));

    $("#AddressFavoritar").text('');
    $("#AddressFavoritar").text($(this).attr('data-address'));

    $("#cityFavoritar").text('');
    $("#cityFavoritar").text($(this).attr('data-city'));

    $("#BairroFavoritar").text('');
    $("#BairroFavoritar").text($(this).attr('data-bairro'));

    setTimeout(function () {
		$("#modalEnderecoFavorito").modal("show");
	}, 120);
    
    $("#btnFavoritarEnd").attr("href", baseurl + 'minha-conta/favoritar_endereco/' + id);
    
});



$('#cep_edit_new').keyup(function (event) {
    var cep = $(this).val().replace(/_/g, '').replace(/-/g, '');
    if (cep.length == 8) {
        $.ajax({
            url: 'https://viacep.com.br/ws/' + cep + '/json/',
            type: 'get',
            dataType: 'json',
            success: function (data, textStatus, xhr) {
                if (typeof data.error == 'undefined') {
                    $('#city_new').val(data.localidade);
                    $('#street_new').val(data.logradouro);
                    $('#neighborhood_new').val(data.bairro);
                    $('#state_new').val(data.uf);
                    $("#cidadeDelayNew").val(data.localidade);

                    setTimeout(function () {
                        $("select.state_new").change();
                    }, 100);

                    updateInputVal("city_new");
                    updateInputVal("street_new");
                    updateInputVal("neighborhood_new");
                    updateInputVal("state_new");
                }
            }
        });
    }
});


$(".state_new").unbind('change');
$(".state_new").bind('change', function () {
    var id = $(".state_new").val();
    
    $.ajax({
        url: baseurl + 'cadastro/estadosearch/' + id,
        type: 'GET',
        dataType: 'json',
    })

    .done(function (resultado) {
        $("#city_new").empty();
        resultado.data.forEach(function (item) {
            $("#city_new").append(
                '<option value="' + item.title + '">' + item.title + "</option>"
            );
        });
        $("#city_new").val($("#cidadeDelayNew").val());

    });
});

$('.ShowStructureContratada').click(function () {
    var is_show = false;
    if($(this).parent().next().is(":visible") == true){
        $(this).parent().next().hide();
        is_show = true;
    }
	$('.divStructureContratada').hide();

    if(is_show == false){
        $(this).parent().next().show();
    }
});

$('.ShowStructureInclusas').click(function () {
    var is_show = false;
    if($(this).parent().next().is(":visible") == true){
        $(this).parent().next().hide();
        is_show = true;
    }
	$('.divStructureInclusas').hide();

    if(is_show == false){
        $(this).parent().next().show();
    }
});
