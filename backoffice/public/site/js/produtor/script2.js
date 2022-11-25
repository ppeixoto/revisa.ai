$(".datetimepicker1")
    .datetimepicker({
        // startDate: date,
        language: "pt-BR",
        format: "DD/MM/YYYY",
        pickTime: false
    })
    .on("change.dp", function (e) {
        if (!$(e.currentTarget).hasClass("lotdate") && typeof e.date !== "undefined") {
            $(".datetimes").find("input[data-format]").each(function (i, html) {
                $(".referencied_date_option" + (i + 1)).val($(html).val());
                $(".referencied_date_option" + (i + 1)).text($(html).val());
                $('.date_attraction_' + (i + 1)).text($(html).val());
            });
        }
    });

$(".datetimepicker1 input").focus(function (event) {
    $(this).next().click();
});

$(".datetimepicker2").datetimepicker({
        // startDate: date,
        language: "pt-BR",
        pickTime: true,
        format: "DD/MM/YYYY HH:mm"
})
.unbind('change.dp')
.bind("change.dp", function (e) {

    $(e.currentTarget).find("input").first().attr("value", $(e.currentTarget).find("input").val());

    $(".datetimes").find("input[data-format]").each(function (i, html) {
        $(".referencied_date_option" + (i + 1)).val($(html).val());
        $(".referencied_date_option" + (i + 1)).text($(html).val());
    });

    e.stopPropagation();
});

$(".datetimepicker2 input").focus(function (event) {
    $(this).next().click();
});


$(".buttonReportProd").unbind('click');
$(".buttonReportProd").bind('click', function (e) {
   $('#tipoPainelProd').val( $(this).attr("data-type") );
   // $('form#formReport').submit();
});
 



$(".dropdownOpenReport").unbind('click');
$(".dropdownOpenReport").bind('click', function (e) {
    if($(this).next().hasClass("in")){
       $(this).children().addClass("glyphicon-chevron-down");
       $(this).children().removeClass("glyphicon-chevron-up");
    } else {
        $(this).children().removeClass("glyphicon-chevron-down");
        $(this).children().addClass("glyphicon-chevron-up");
    }
});




$(".buttonReportProd").unbind('click');
$(".buttonReportProd").bind('click', function (e) {
    var cla = $(this).attr('data-type');
    $('.boxMenu').hide();
    $('.'+cla).show();
    $('.buttonReportProd').children().removeClass('activeBox');
    $(this).children().addClass('activeBox');
});

/* Kristuff.WebUI.SideMenu */
(function (window, undefined) {
    'use strict';
    // responsive pinnable sidemenu component
    var sideMenu = function (el) {
        var htmlSideMenu = el, htmlSideMenuPinTrigger = {}, htmlSideMenuPinTriggerImage = {}, htmlOverlay = {};
        var init = function () {
            htmlSideMenuPinTrigger = el.querySelector('.wui-side-menu-pin-trigger');
            htmlSideMenuPinTriggerImage = htmlSideMenuPinTrigger.querySelector('i.fa');
            htmlOverlay = document.querySelector('.wui-overlay');
            Array.prototype.forEach.call(document.querySelectorAll('.wui-side-menu-trigger'), function (elmt, i) {
                elmt.addEventListener('click', function (e) {
                    e.preventDefault();
                    toggleMenuState();
                }, false);
            });
            htmlSideMenuPinTrigger.addEventListener('click', function (e) {
                e.preventDefault();
                toggleMenuPinState();
            }, false);
            htmlOverlay.addEventListener("click", function (e) {
                htmlSideMenu.classList.remove('open');
            }, false);
            window.addEventListener("resize", checkIfNeedToCloseMenu, false);
            checkIfNeedToCloseMenu();
        };
        var toggleMenuState = function () {
            htmlSideMenu.classList.toggle('open');
            menuStateChanged(htmlSideMenu, htmlSideMenu.classList.contains('open'));
        };
        var toggleMenuPinState = function () {
            htmlSideMenu.classList.toggle('pinned');
            htmlSideMenuPinTriggerImage.classList.toggle('fa-rotate-90');
            if (htmlSideMenu.classList.contains('pinned') !== true) {
                htmlSideMenu.classList.remove('open');
            }
            menuPinStateChanged(htmlSideMenu, htmlSideMenu.classList.contains('pinned'));
        };
        var checkIfNeedToCloseMenu = function () {
            var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
            if (width <= 767 && htmlSideMenu.classList.contains('open') === true) {
                htmlSideMenu.classList.remove('open');
                menuStateChanged(htmlSideMenu, htmlSideMenu.classList.contains('open'));
            }
            if (width > 767 && htmlSideMenu.classList.contains('pinned') === false) {
                htmlSideMenu.classList.remove('open');
                menuStateChanged(htmlSideMenu, htmlSideMenu.classList.contains('open'));
            }
        };
        var menuStateChanged = function (element, state) {
            var evt = new CustomEvent('menuStateChanged', { detail: { open: state} });
            element.dispatchEvent(evt);
        };
        var menuPinStateChanged = function (element, state) {
            var evt = new CustomEvent('menuPinStateChanged', { detail: { pinned: state} });
            element.dispatchEvent(evt);
        };
        init();
        return {
            htmlElement: htmlSideMenu,
            toggleMenuState: toggleMenuState,
            toggleMenuPinState: toggleMenuPinState
        };
    };
    
    window.SideMenu = sideMenu;
})(window);


var documentReady = function (fn) {
  if (document.readyState != 'loading') {
    fn();
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
};



$('.cpf').mask('999.999.999-99');
$('.birthday').mask('99/99/9999');
$('.cep').mask('99999-999');	
$(".cnpj").mask("99.999.999/9999-99")


$('.cep_edit_principal').keyup(function (event) {
    var cep = $(this).val().replace(/_/g, '').replace(/-/g, '');
    // console.log(cep);

    if (cep.length == 8) {
        $.ajax({
            url: 'https://viacep.com.br/ws/' + cep + '/json/',
            type: 'get',
            dataType: 'json',
            success: function (data, textStatus, xhr) {
                
                if (typeof data.error == 'undefined') {
                    $('#city_edit').val(data.localidade);
                    $('#logradouro').val(data.logradouro);
                    $('#bairro').val(data.bairro);
                    $('#state_edit').val(data.uf);
                    $("#cidadeDelay_edit").val(data.localidade);

                    setTimeout(function () {
                        $("select.state_edit_principal").change();
                    }, 100);
                }
            }
        });
    }
});

$(".state_edit_principal").unbind('change');
$(".state_edit_principal").bind('change', function () {
    var id = $(this).val();
    
    $.ajax({
        url: baseurl + 'cadastro/estadosearch/' + id,
        type: 'GET',
        dataType: 'json',
    })

    .done(function (resultado) {
        $("#city_edit").empty();
        resultado.data.forEach(function (item) {
            $("#city_edit").append(
                '<option value="' + item.title + '">' + item.title + "</option>"
            );
        });
        $("#city_edit").val($("#cidadeDelay_edit").val());

    });
});

$("#type_doc").unbind('change');
$("#type_doc").bind('change', function () {
    var typ = $(this).val();
    if(typ == "RG"){
        $('.typeRg').show();
        $('.typeCnh').hide();
        $('.showButtonSaveProductor').show();
        return;
    }else if(typ == "CNH"){
        $('.typeRg').hide();
        $('.typeCnh').show();
        $('.showButtonSaveProductor').show();
        return;
    }
    $('.typeRg').hide();
    $('.typeCnh').hide();
    $('.showButtonSaveProductor').hide();
});

$("#type_doc_produtora").unbind('change');
$("#type_doc_produtora").bind('change', function () {
    var typ = $(this).val();
    if(typ == "CNPJ"){
        $('.typeCnpj').show();
        $('.showButtonSaveProdutoraAnexo').show();
        return;
    }
    $('.typeCnpj').hide();
    if(!$('.input_show_produtora').is(':visible')){
        $('.showButtonSaveProdutoraAnexo').hide();
    }
});

$(".btnNewAccount").unbind('click');
$(".btnNewAccount").bind('click', function () {
    $('.btnNewAccount').hide();
    $('.rowBank').removeClass('displayNone');
    $('.rowBank').show();
    $('#contaExistente').val('');
});



$(".showInfoDados").unbind('click');
$(".showInfoDados").bind('click', function () {
    $('.label-show').hide();
    $('.input_show').show();
});


$(".showInfoAddress").unbind('click');
$(".showInfoAddress").bind('click', function () {
    $('.label-show-address').hide();
    $('.input_show_address').show();
});

$(".showInfoProdutora").unbind('click');
$(".showInfoProdutora").bind('click', function () {
    $('.label-show-produtora').hide();
    $('.input_show_produtora').show();
    $('.showButtonSaveProdutora').show();
});

$(".showSelectDocProductor").unbind('click');
$(".showSelectDocProductor").bind('click', function () {
    $('.showSelectDocProductor').hide();
    $('.selectDocProductor').show();
});

$(".showSelectDocProdutora").unbind('click');
$(".showSelectDocProdutora").bind('click', function () {
    $('.showSelectDocProdutora').hide();
    $('.selectDocProdutora').show();
});

$(".container-fluid").unbind('click');
$(".container-fluid").bind('click', function () {
    $('.mini-menu-header').removeClass('displayAbsolute');
    $('.mini-menu-header').addClass('displayNoneImport');
});

$(".showMiniMenu").unbind('click');
$(".showMiniMenu").bind('click', function () {
    setTimeout(function () {
        $('.mini-menu-header').addClass('displayAbsolute');
        $('.mini-menu-header').removeClass('displayNoneImport');
    }, 100);
});

$("#tipo_cliente").unbind('change');
$("#tipo_cliente").bind('change', function () {
    var value = $("#tipo_cliente").val();
    if(value == "10"){
        var val = $("#cpfCliente").val();
        $("#numeroDocumento").val(val);
        $('.tipoCliente').text("CPF");
        return;
    } else if(value == "11"){
        var val = $("#cnpjCliente").val();
        $("#numeroDocumento").val(val);
        $('.tipoCliente').text("CNPJ");
        return;
    }
    $('.tipoCliente').text("Número do Documento");
    $("#numeroDocumento").val('');
    return;
    
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

$(".editAccountBank").unbind('click');
$(".editAccountBank").bind('click', function () {
    var id = $(this).attr('data-id');

    $.ajax({
        url: baseurl + 'produtor/settings/search_account/' + id,
        type: "GET",
        dataType: "json"
    })

    .done(function (result) {
        if(result.status == "success"){;
            $('.rowBank').removeClass('displayNone');
            $('.rowBank').show();
            $('#numeroDocumento').val(result.number_document);
            $('#agencia').val(result.agencia);
            $('#conta').val(result.conta);
            $('#tipo_cliente').val(result.type_client);
            $('#bank').val(result.bank);
            $('#tipo_conta').val(result.type_account);
            $('#contaExistente').val(id);            
            console.log(result.bank);
        } 
    });
   
});

runCropEvents();

function runCropEvents() {

    console.log("chama crop");

    var cropBoxData;
    var canvasData;
    var cropper;
    var uploadedImageType;
    var uploadedImageName;
    var input;
    var cropped;


    $('input[name="file_cnpj"],input[name="file_frente_rg"],input[name="file_verso_rg"],input[name="file_cnh"]').unbind('change');
    $('input[name="file_cnpj"],input[name="file_frente_rg"],input[name="file_verso_rg"],input[name="file_cnh"]').bind('change', function(e) {

        input = e.target;

        $('#preview_img_crop').modal("show");

        if (input.files) {

            cropped = false;

            var file = input.files[input.files.length - 1];

            uploadedImageType = file.type;
            uploadedImageName = file.name;

            console.log(uploadedImageType, uploadedImageName);

            var reader = new FileReader();

            reader.onload = function (e) {

                $('#previewimage').attr('src', e.target.result);

                var image = document.getElementById('previewimage');


                cropper = new Cropper(image, {
                    center: true,
                    dragMode: 'crop',
                    restore: true,
                    guides: true,
                    highlight: true,
                    cropBoxMovable: true,
                    cropBoxResizable: true,
                    toggleDragModeOnDblclick: true,
                    responsive: false,
                    ready: function () {
                        var cropper = this.cropper;
                        var containerData = cropper.getContainerData();
                        var cropBoxData = cropper.getCropBoxData();
                    },
                    cropmove: function () {
                        var cropper = this.cropper;
                        var cropBoxData = cropper.getCropBoxData();
                        var aspectRatio = cropBoxData.width / cropBoxData.height;
                    },
                });

            };

            reader.readAsDataURL(input.files[0]);
        }

    })


    $('.zoom-in').unbind('click');
    $('.zoom-in').bind('click', function(e) {
        cropper.zoom(0.1);
    });

    $('.zoom-out').unbind('click');
    $('.zoom-out').bind('click', function(e) {
        cropper.zoom(-0.1);
    });


    $('.removeCroppedImg').unbind('click');
    $('.removeCroppedImg').bind('click', function(e){
        $(this).parent().siblings().val('');
        $(this).parent().hide();
        $(this).parent().find('input').remove(); //rmeove hidden blob input
    })

    $('.openNewTabCroppedImage').unbind('click');
    $('.openNewTabCroppedImage').bind('click', function(e){
        var image = new Image();
        image.src = $(this).attr('href');

        var w = window.open("");
        w.document.write(image.outerHTML);
    })


    $('.crop').unbind('click');
    $('.crop').bind('click', function(e){
        var imgurl =  cropper.getCroppedCanvas({ width: 800, height: 800 }).toDataURL(uploadedImageType);
        var divCropControls = $(input).next();

        
        divCropControls.show(); //$('.crop-controls')

        divCropControls.append('<input type="hidden" name="blob_'+input.name+'" value="'+imgurl+'"/>')
        
        divCropControls.find('.imageBlob').attr('href', imgurl);
        $('#preview_img_crop').modal("hide");

        cropped = true;
    })

    $('#preview_img_crop').unbind('hidden.bs.modal');
    $('#preview_img_crop').bind('hidden.bs.modal', function(e){
        cropBoxData = cropper.getCropBoxData();
        canvasData = cropper.getCanvasData();
        cropper.destroy();

        if(!cropped){
            $(input).val('');
            $(input).next().hide();
            $(input).next().find('input').remove();
        }

        console.log(cropped);
        console.log('destroy cropper');
    })
}

$(".modalVoucher").unbind('click');
$(".modalVoucher").bind('click', function (e) {
    $("#modalEntregaVoucher").modal("show");
});

$(".search_voucher").unbind('click');
$(".search_voucher").bind('click', function () {
    var id = $('#voucher_search').val();
    var event = $('#id_event').val();

    $('#bodyVoucher').append('<h4>Buscando...</h4>');
    $.ajax({
        url: baseurl + 'produtor/check_in/search_voucher',
        type: "POST",
        data: {event: event, code:id},
        dataType: "html"
    })

    .done(function (result) {
     
        $('#bodyVoucher').children().remove();
        $('.delivery_voucher').removeClass('displayBlock');
        var error = result.includes('"status":"error"');
        if(error){
            var json = JSON.parse(result);
            if(json.status && json.status == 'error'){
                $('#bodyVoucher').children().remove();
                $('#bodyVoucher').append('<h4>'+ json.message +'</h4>');
                setTimeout(function () {
                    $('#bodyVoucher').children().remove();
                }, 2000);
                return;
            }
        }
        $('#bodyVoucher').append(result);
        $('.delivery_voucher').addClass('displayBlock');
        $('.delivery_voucher').attr("href", baseurl + 'produtor/check_in/deliveryCode/' + event + '/' + id);

    });
   
});

$(".search_evento_data").unbind('change');
$(".search_evento_data").change(function () {
    var horaEvento = $(this).val();

    var idEvento = $('#search_evento').val();
    limparSelecs();
    var data = { idEvento: idEvento, horaEvento: horaEvento };

    $.ajax({
        url: baseurl + "produtor/check_in/pesquisarGeralPorData",
        type: "POST",
        data: data,
        dataType: "json"
    })
        .done(function (result) {
            $("#search_evento_ingresso").empty();
            $("#search_evento_sexo").empty();
            $("#search_evento_status_compra").empty();
            $("#search_evento_status").empty();

            for (i = 0; i < result.length; i++) {
                if (i == 0) {
                    if (result[i].length == 1 && result[i][0] == "Sem tipo de ingresso") {
                        $("#search_evento_ingresso").append(
                            $("<option>", { text: "Sem tipo de ingresso", value: null })
                        );
                    } else {
                        $("#search_evento_ingresso").append(
                            $("<option>", { text: "Todas", value: "todos" })
                        );
                        for (x = 0; x < result[i].length; x++) {
                            $("#search_evento_ingresso").append(
                                $("<option>", { text: result[i][x], value: result[i][x] })
                            );
                        }
                    }
                }
                if (i == 1) {
                    if (result[i].length == 1 && result[i][0] == "Sem Genêro") {
                        $("#search_evento_sexo").append(
                            $("<option>", { text: "Sem Genêro", value: null })
                        );
                    } else {
                        $("#search_evento_sexo").append(
                            $("<option>", { text: "Todos", value: "todos" })
                        );
                        for (x = 0; x < result[i].length; x++) {
                            $("#search_evento_sexo").append(
                                $("<option>", { text: result[i][x], value: result[i][x] })
                            );
                        }
                    }
                }
                if (i == 3) {
                    if (result[i].length == 1 && result[i][0] == "Sem status entrega") {
                        $("#search_evento_status_compra").append(
                            $("<option>", { text: "Sem status entrega", value: null })
                        );
                    } else {
                        $("#search_evento_status_compra").append(
                            $("<option>", { text: "Todos os Status", value: "todos" })
                        );
                        for (x = 0; x < result[i].length; x++) {
                            var val = "Aprovados";
                            if (result[i][x] == "1") {
                                val = "Em Análise";
                            } else if (result[i][x] == "3") {
                                val = "Cancelados";
                            }
                            $("#search_evento_status_compra").append(
                                $("<option>", { text: val, value: result[i][x] })
                            );
                        }
                    }
                }
                if (i == 2) {
                    if (result[i].length == 1 && result[i][0] == "Sem status compra") {
                        $("#search_evento_status").append(
                            $("<option>", { text: "Sem status compra", value: null })
                        );
                    } else {
                        var radioSelect = $(
                            "input[name=tipoImpressao]:checked",
                            "#pesquisaVoucher"
                        ).val();

                        if (radioSelect == "voucher") {
                            $("#search_evento_status").append(
                                $("<option>", { text: "Todos os Status", value: "todos" })
                            );
                        }

                        for (x = 0; x < result[i].length; x++) {
                            var val = "Já Entregues";
                            if (result[i][x] == "0") {
                                val = "Não Retirados";
                            }

                            var value = result[i][x];
                            if (result[i][x] == true) {
                                value = "1";
                            }
                            console.log(value);
                            $("#search_evento_status").append(
                                $("<option>", { text: val, value: value })
                            );
                        }
                    }
                }
            }
        })
        .always(function () { });
});



function limparSelecs() {
    $("#search_evento_ingresso").empty();
    $("#search_evento_sexo").empty();
    $("#search_evento_status").empty();

    $("#search_evento_ingresso").append($("<option>", { text: "Carregando..." }));

    $("#search_evento_sexo").append(
        $("<option>", { text: "todos", value: "Todos" })
    );
    $("#search_evento_sexo").append(
        $("<option>", { text: "Feminino", value: "Feminino" })
    );
    $("#search_evento_sexo").append(
        $("<option>", { text: "Masculino", value: "Masculino" })
    );
    $("#search_evento_sexo").append(
        $("<option>", { text: "Unissex", value: "Unissex" })
    );

    var radioSelect = $(
        "input[name=tipoImpressao]:checked",
        "#pesquisaVoucher"
    ).val();

    if (radioSelect == "voucher") {
        $("#search_evento_status").append(
            $("<option>", { value: "todos", text: "Todos os Status" })
        );
    }

    $("#search_evento_status").append(
        $("<option>", { value: "1", text: "Já Entregues" })
    );
    $("#search_evento_status").append(
        $("<option>", { value: "0", text: "Não Retirados" })
    );
}


$(".urlLink").unbind('click');
$(".urlLink").bind('click', function (e) {

    var copyText = $(this).attr('value-link');
    console.log(copyText);
    navigator.clipboard.writeText(copyText);
});

    



// documentReady(function() {
//     var sample = new SideMenu(document.querySelector('.wui-side-menu'))
//     sample.htmlElement.addEventListener('menuPinStateChanged', function(e) {
//       document.querySelector('#events').innerHTML += 'menuPinStateChanged , menu pinned? => ' 
//         + e.detail.pinned + '<br>'; 
//     }, false);
//     sample.htmlElement.addEventListener('menuStateChanged', function(e) {
//       document.querySelector('#events').innerHTML += 'menuStateChanged , menu open? => ' 
//         + e.detail.open + '<br>'; 
//     }, false);
// });


// $('.datepicker').datepicker();