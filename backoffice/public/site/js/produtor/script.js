var Admin = Admin || (function($) {

    $(".input-file").change(function(){
        $(this).parent().find('.bt-file').text($(this).val())
    });
    
    $(".bt-file").click(function() {
       $(this).parent().find('.input-file').click()
    });

    // if (statusNave == 0) {
    //     closeNave();
    // }else{
    //     openNave(); 
    // };

    $("textarea[maxlength]").keydown( function(e) {
        var key = e.which;  // backspace = 8, delete = 46, arrows = 37,38,39,40

        if ( ( key >= 37 && key <= 40 ) || key == 8 || key == 46 ) return;

        return $(this).val().length < $(this).attr( "maxlength" );
    });

    var delay = (function(){
        var timer = 0;
        return function(callback, ms){
            clearTimeout (timer);
            timer = setTimeout(callback, ms);
        };

    })();

    
    $('.input-search').keyup(function(){
       var text = $(this).val();
       var val  = $('.select-search').val();
    
        delay(function (){

            $.ajax({
                url: baseurl+'produtor/'+controller+'/searchAjax/'+text+'/'+val,
                type: 'GET',
                dataType: 'json',
            })
            .done(function(result) {

                var resultHtml = '';

                $.each(result.id, function(index, val) {


                    resultHtml += '
                            <tr class="teste">
                                <td> '+ result.id[index] +'</td>
                                <td class="td-gravatar"> '+ result.gravatar[index] +'</td>
                                <td class="td-name"> '+ result.name[index] +'</td>
                                <td class="td-email"> '+ result.email[index] +'</td>
                            </tr>';
                    
                    resultHtml += '
                            <tr class="teste">
                                <td> '+ result.id[index] +'</td>
                                <td class="td-gravatar"> '+ result.gravatar[index] +'</td>
                                <td class="td-name"> '+ result.name[index] +'</td>
                                <td class="td-email"> '+ result.email[index] +'</td>
                            </tr>';

                });

                $('.teste').hide();
                $('.imprimir-tr').after(resultHtml);

                console.log("success");
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            
        }, 2000);
    });

    // interactions nav
    var filterNav = false;

    // $('#mainMenu').hover(function(){
    //     if(filterNav == true){
    //         $('.nav-toggle').toggle();
    //         $('.logoff-main').toggle();
            
    //         if($('#wrapper').hasClass('active-wrapper')){
    //             $('.list-items').hide();
    //         } else {
    //             setTimeout(function() {
    //                 $('.list-items').fadeIn();
    //             }, 250);
    //             setTimeout(function() {
    //                 $('.list-items').jScrollPane();
    //             }, 400);
    //         }
    //         $('#openNav').toggle();
            
    //         $('#wrapper').toggleClass('active-wrapper');
    //     }
    // });

    // $('#openNav').click(function(event) {

    //     var status = $(this).data('id');

    //     $.ajax({
    //         url: baseurl+'produtor/main/statusNave',
    //         type: 'POST',
    //         data: {status: status},
    //     })
    //     .done(function() {
    //         openNave();
    //         console.log("success");
    //     })
    //     .fail(function() {
    //         console.log("error");
    //     })
    //     .always(function() {
    //         console.log("complete");
    //     });
    // });

    //  $('#closeNav').click(function(event) {

    //     var status = $(this).data('id');

    //     console.log(status);

    //     $.ajax({
    //         url: baseurl+'produtor/main/statusNave',
    //         type: 'POST',
    //         data: {status: status},
    //     })
    //     .done(function() {
           
    //         closeNave();
    //         console.log("success");
    //     })
    //     .fail(function() {
    //         console.log("error");
    //     })
    //     .always(function() {
    //         console.log("complete");
    //     });
        
    // });

     function closeNave () {
        $('.nav-toggle').show();
        $('#openNav').hide();
        $('#closeNav').hide();
        $('.list-items').hide();
        $('.logoff-main').fadeOut();
        $('#wrapper').removeClass('active-wrapper');

        setTimeout(function() {
            filterNav = true;
        }, 600);
     }

     function openNave () {
        $('#openNav').hide();
        $('.nav-toggle').hide();
        $('#closeNav').show();
        $('.list-items').fadeIn();
        $('.logoff-main').fadeIn();
        $('#wrapper').addClass('active-wrapper');
        filterNav = false;
     }

    $('.bt-tooltip').tooltip();

    
    // plugin mask money
    $("#money").maskMoney({
        prefix:'R$ ', 
        allowNegative: true, 
        thousands:'.', 
        decimal:',', 
        affixesStay: false
    });
    

    // jquery Jcrop
    var jcrop_api;

    $('#cropbox').Jcrop({
      onChange:   showCoords,
      onSelect:   showCoords,
      onRelease:  clearCoords,
      maxSize: [imageWidthResize, imageHeightResize],
      setSelect: [imageWidthResize,imageHeightResize,0,0]
    },function(){
      jcrop_api = this;
    });

    $('#coords').on('change','input',function(e){
      var x1 = $('#x1').val(),
          x2 = $('#x2').val(),
          y1 = $('#y1').val(),
          y2 = $('#y2').val();
      jcrop_api.setSelect([x1,y1,x2,y2]);
    });

    // crop plugin
    var cropperHeader = new Array();
    var cropperOptions = new Array();


  // Simple event handler, called from onChange and onSelect
  // event handlers, as per the Jcrop invocation above
  function showCoords(c)
  {
    $('#x1').val(c.x);
    $('#y1').val(c.y);
    $('#x2').val(c.x2);
    $('#y2').val(c.y2);
    $('#w').val(c.w);
    $('#h').val(c.h);
  };

  function clearCoords()
  {
    $('#coords input').val('');
  };

// variaveis
var Utils   = {}, // Your Toolbox  
    Ajax    = {}, // Your Ajax Wrapper
    Events  = {}, // Event-based Actions   
    App     = {}, // Your Global Logic and Initializer
    Public  = {}; // Your Public Functions

Utils = {
    settings: {
        debug: true,
        meta: {
            controller: -1,
            currentUser: -1,
            homeURL: -1
        },
        init: function() {
            _log('Initializing Settings');
            Utils.settings.meta.controller  = $('meta[name="controller"]').attr("content");
            Utils.settings.meta.currentUser = $('meta[name="userid"]').attr("content");
            Utils.settings.meta.homeURL     = $('meta[name="url"]').attr("content");
            _log('Initialized Settings');
        }
    },
    cache: {
        window: window,
        document: document
    },
    home_url: function(path){
        if(typeof path=="undefined"){
            path = '';
        }
        return Utils.settings.meta.homeURL+path;            
    },
    log: function(what) {
        if (Utils.settings.debug) {
            console.log(what);
        }
    }
};
var _log = Utils.log;

Ajax = {
    ajaxUrl: Utils.home_url('ajax'),
    checkAuth: function(returnFunc)
{        if(typeof returnFunc == 'function' && Utils.settings.meta.currentUser==-1){
            returnFunc.call();
            return false;
        }
    },
    call: function(method, data, returnFunc, authRequiredFunc){

        Ajax.checkAuth(authRequiredFunc);

        $.ajax({
            type:'POST',
            url: Ajax.ajaxUrl+method,
            dataType:'json',
            data: data,
            success: returnFunc
        });
    },
    get: function(method, data, returnFunc, authRequiredFunc){

        Ajax.checkAuth(authRequiredFunc);

        $.ajax({
            type:'GET',
            url: Ajax.ajaxUrl+method,
            dataType:'json',
            data: data,
            success: returnFunc
        });
    }
};

Events = {
    endpoints: {
        addGallery: function (event){

            var count = $(this).data('count');

            var index = $('.cropContainerHeader'+count).length;

            var html = '<div class="form-group">';
                    html += '<label class="col-sm-2 control-label" for="status"></label>';
                    html += '<div class="col-sm-5">';
                        html += '<div class="col-lg-6 cropContainerHeader'+count+'">';
                            html += '<div id="'+count+'yourId'+index+'"></div>';
                            html += '<input type="hidden" name="photos'+count+'[]" id="'+count+'cropOutput'+index+'">';
                            html += '<legend></legend>'
                            html += '<span class="btn" id="'+count+'myDivId'+index+'"><span class="glyphicon glyphicon-open"></span>';
                        html += '</div>';
                    html += '</div>';
                html += '</div>';

            $('#formGroupGallery'+count).next().append(html);    
            //mobile
            if(count == '3'){
                cropUrl = 'produtor/attraction/img_crop_to_file/mobile'
            } else {
                cropUrl = 'produtor/attraction/img_crop_to_file'
            }


            cropperOptions[cropperOptions.length] = {
                uploadUrl:baseurl+'produtor/attraction/img_save_to_file',
                modal: true,
                cropUrl:baseurl+cropUrl,
                customUploadButtonId: count+'myDivId'+index,
                outputUrlId: count+'cropOutput'+index,
                typeofimage: parseInt(count),
                loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
                onBeforeImgUpload:  function(e){ console.log('onBeforeImgUpload') },
                onAfterImgUpload:   function(){ console.log('onAfterImgUpload') },
                onImgDrag:      function(){ console.log('onImgDrag') },
                onImgZoom:      function(){ console.log('onImgZoom') },
                onBeforeImgCrop:    function(){ console.log('onBeforeImgCrop') },
                onAfterImgCrop:     function(){ console.log('onAfterImgCrop') }        

            }

            console.log(cropperOptions);

            cropperHeader[cropperHeader.length] = new Croppic(count+'yourId'+index, cropperOptions[cropperOptions.length - 1]);

        },
        removeImage: function (event) {
            console.log($(this).data('id'));
            $('.'+$(this).data('id')).remove();

        },
        removeEntries: function (event) {

            event.preventDefault();

            alertify.set({ labels: { ok: "Remover", cancel: "Cancelar" } });

            alertify.confirm( 'Você tem certeza que deseja remover os itens selecionados?', function (answer) {
                if (answer) $(event.target).parents('form').submit();
            });

        },
        removePhotos: function (event) {

            event.preventDefault();

            alertify.set({ labels: { ok: "Remover", cancel: "Cancelar" } });

            alertify.confirm( 'Você tem certeza que deseja remover os itens selecionados?', function (answer) {
                if (answer) {
                    $.each($(".checklist:checked"), function(){
                        var id = $(this).val();
                        text = '<input type="hidden" name="removePhotos[]" value="'+id+'" />';
                        $("#removeList").append(text);
                        $("#image_"+id).remove();
                    });
                }

            });

        },
        selectAll: function (event) {

            if($(this).is(':checked')) {
                $(".mark-i:checkbox:not(:checked)").click();
            } else {
                $(".mark-i:checkbox:checked").click();
            }
        },
        selectAllImages: function (event) {

            var n = $(this);
            if (n.is(":checked") == true) {
                $(".mark-img").each(function(){
                    $(this).attr("checked", "checked");
                    n.attr("checked", "checked");
                });
            }else{
                $(".mark-img").each(function(){

                    $(this).removeAttr("checked");
                    n.removeAttr("checked");
                });
            }
        },
        markImage: function (event) {
            $(this).each(function() {
                if ($(this).is(':checked') == false) {      
                    $("#markImage").removeAttr("checked");
                }
            });
        },
        cancelPhoto: function (event) {
            var photo = $(this).attr("alt");
            $(photo).remove();
        },
        status: function (event) {

            event.preventDefault();

            var anchor     = $(this);
            var id         = $(this).attr('data-id');
            var controller = $(this).attr('data-controller');

            $.post(Admin.home_url('produtor/'+controller+'/status'), 
            {'id': $(this).attr('data-id')},
            function(data) {
                if(parseInt(data)) {
                    $(anchor).find('i').attr('class', 'icon-circle');
                    alertify.success('Registro ativado com sucesso.');
                } else {
                    $(anchor).find('i').attr('class', 'icon-circle-blank');
                    alertify.success('Registro desativado com sucesso.');
                }
            });
        },
        read: function (event) {

            event.preventDefault();

            var anchor     = $(this);
            var id         = $(this).attr('data-id');
            var controller = $(this).attr('data-controller');

            $.post(Admin.home_url('produtor/'+controller+'/read'), 
            {'id': $(this).attr('data-id')},
            function(data) {
                if(parseInt(data)) {
                    $(anchor).find('i').attr('class', 'icon-envelope-alt');
                    $(anchor).parents('tr').addClass('warning');
                    $(anchor).attr('title', 'Marcar como não lido');
                    alertify.success('Contato marcado como não lido.');
                } else {
                    $(anchor).find('i').attr('class', 'icon-envelope');
                    $(anchor).parents('tr').removeClass('warning');
                    $(anchor).attr('title', 'Marcar como lido');
                    alertify.success('Contato marcado como lido.');
                }
            });
        },
        featured: function (event) {

            event.preventDefault();

            var anchor     = $(this);
            var id         = $(this).attr('data-id');
            var controller = $(this).attr('data-controller');
            
            // $(anchor).find('i').attr('class', 'icon-refresh icon-spin');

            $.post(Admin.home_url('produtor/'+controller+'/featured'), 
            {'id': $(this).attr('data-id')},
            function(data) {
                if(parseInt(data)) {
                    $(anchor).find('i').attr('class', 'icon-star');
                    alertify.success('Adicionado destaque com sucesso.');
                } else {
                    $(anchor).find('i').attr('class', 'icon-star-empty');
                    alertify.success('Removido destaque com sucesso.');
                }
            });
        },
        fillLoremIpsum: function(event) {
            $('#register').find('input:text, textarea').each(function() {

                var text = lorem.ipsum('p4').replace(/(<([^>]+)>)/ig,"");

                if($(this).attr('readonly') || $(this).attr('disabled') || $(this).hasClass('select2-input')) return true;

                if($(this).attr('maxlength')) text = text.slice(0, $(this).attr('maxlength'));

                if($(this).hasClass('tinymce')) {
                    for (editorID in tinyMCE.editors)
                        tinyMCE.editors[editorID].setContent(lorem.ipsum('p4'));
                }

                if($(this).hasClass('email')) text = 'lorem@ipsum.com';

                if($(this).hasClass('url')) text = 'http://www.loremipsum.com';

                if($(this).hasClass('digits')) text = Math.floor((Math.random()*10)+2000);

                $(this).val(text);
                
            });
        },
        forgetPassword: function (event) {

            event.preventDefault();

            alertify.set({ labels: { ok: "Enviar", cancel: "Cancelar" } });

            alertify.prompt( 'Qual o email que você deseja recuperar?', function (answer, email) {
                if (answer) {

                    $.ajax({
                      url: Admin.home_url()+'produtor/main/forgetPassword',
                      type: 'POST',
                      dataType: 'json',
                      data: {'email': email},
                      success: function(data, textStatus, xhr) {
                        if (data.status) {
                            alertify.success(data.message);
                        } else {
                            alertify.error(data.message);
                        }
                      }
                    });
                }
            });

        },
        toggleDuplicate: function (event) {
            event.preventDefault();
            $('#duplicate').click();
        }
    },
    bindEvents: function(){
        _log('Binding Events');
        $('[data-event]').each(function(){
            var $this = $(this),
            method = $this.attr('data-method') || 'click',
            name = $this.attr('data-event'),
            bound = $this.attr('data-bound')=='true';

            _log(method);

            if(typeof Events.endpoints[name] != 'undefined'){
                if(!bound){
                    $this.attr('data-bound', 'true');
                    $this.on(method, Events.endpoints[name]);
                }
            }
        });
        _log('Events Bound');
    },
    init: function(){
        Events.bindEvents();
    }
};
App = {
    logic: {},
    initTinyMCE: function () {

        if(typeof tinyMCE === 'undefined') return;

        var elements = new Array();

        $('.tinymce').each(function(){
            elements.push($(this).attr('id'));
        });

        tinyMCE.init({
            theme : "advanced",
            mode : "exact",
            elements : elements.join(','),
            language : "pt",

            relative_urls : false,
            convert_urls : false,

            plugins : "inlinepopups",

            theme_advanced_buttons1 : "bold,italic,underline,justifyleft,justifycenter,justifyright,justifyfull,image",
            theme_advanced_buttons2 : "bullist,numlist,outdent,indent,undo,redo,link,unlink,code",
            theme_advanced_buttons3 : "hr,removeformat,sub,sup,formatselect",

            file_browser_callback : "tinyBrowser",
            theme_advanced_toolbar_align : "left",
            theme_advanced_toolbar_location : "top",
            onchange_callback: function (editor)
            {
                tinyMCE.triggerSave();
                $("#" + editor.id).valid();
            }
        });
    },
    initLists: function () {
        if($(".list").length > 0) {
            $(".list").sortable({
                cursor: "move",
                revert: true,
                placeholder: "span3 gallery-item"
            }).disableSelection();
        }
    },
    initLimiter: function () {
        if(typeof $.fn.inputlimiter === 'undefined') return;

        $('input[maxlength], textarea[maxlength]').inputlimiter({
            boxClass: 'label',
            limit: $(this).attr('maxlength'),
            remText: '%n caractere%s restando...',
            limitText: 'Limite de %n caractere%s.'
        });
    },
    initBootstrap: function () {
        $('[rel="popover"]').popover();
        $('[rel="tooltip"]').tooltip();
    },
    initValidator: function () {
        $.validator.setDefaults({ ignore: [] });
        $('#register').find('input:text, select, textarea').addClass('required');
        $("#register .ignore, .select2-input, .ignore-input").removeClass('required');
        $("#register input:visible:not([readonly])").eq(0).focus();
        $("#register").validate({
            ignore: ".ignore-input",
            rules: {
                password: "required",
                password_confirm: {
                    equalTo: "#password"
                }
            },


            highlight: function(element, errorClass) {
                $(element).parents('.control-group').addClass(errorClass);

                $('label.error').each(function(){
                    $(this).appendTo($(this).parent());
                });
            },
            unhighlight: function(element, errorClass) {
                $(element).parents('.control-group').removeClass(errorClass);
            }
        });
    },
    initUploader: function () {
        if($('#upFile').length > 0) {
            var uploader = new qq.FileUploader({
                element: document.getElementById('upFile'),
                action: baseurl+'js/produtor/upload.php',

                onSubmit: function (id, fileName) {

                    var html = '<div id="progress_'+id+'" class="progress">'+
                    '<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>'+
                    '</div>';

                    $('.upload-list').before(html);


                },
                onProgress: function(id, fileName, loaded, total){

                    var percent = loaded / total * 100;

                    $('#progress_'+id+' .bar').width(percent+'%');

                },
                onComplete: function(id, fileName, responseJSON){

                    var html = '<li id="img_'+id+'" class="span3 gallery-new-item">'+
                    '<div class="thumbnail" title="Clique para remover esta imagem">'+
                    '<img src="'+baseurl+'uploads/temp/'+responseJSON.fileName+'" alt="#img_'+id+'" data-event="cancelPhoto" />'+
                    '<input type="hidden" name="galleries[]" value="'+responseJSON.fileName+'" />'+
                    '</div>'+
                    '</li>';

                    $('#progress_'+id).animate({opacity:0}, function(){
                        $(this).slideUp(1000);
                    });

                    $(html).hide().appendTo('.upload-list').fadeIn(1000);

                    Admin.rebindEvents();

                }
            });
        }
    },
    initSelect2: function() {
        $('.select2').each(function() {

            var input = this;

            $(input).select2({
                tags: $(input).data('tags').toString().split(','),
                formatSelection: function (tag) {
                    return '<i class="icon-tag"></i> '+tag.text;
                },
                formatResult: function (tag) {
                    return '<i class="icon-tag"></i> '+tag.text;
                }
            });

        });
    },
    initPickadate: function() {
        $('.pickadate').each(function() {
            var calendar = $(this).pickadate({
                formatSubmit: 'yyyy-mm-dd'
            });

            if($(this).attr('data-value')) {
                var datetime = new Date($(this).attr('data-value'));

                calendar.data('pickadate').setDate(datetime.getFullYear(), datetime.getMonth()+1, datetime.getDate()+1);
            }
        });

    },
    initCropAjax: function(){
        $("#coords").submit(function(e){
            var postData = $(this).serialize();
            var formURL = $(this).attr("action");
            $("#cropsubmit").attr("disabled", "disabled");
            $(".progress").removeClass('hide');
            $.ajax(
            {
                url : formURL,
                type: "POST",
                data : postData,
                success:function(data, textStatus, jqXHR) 
                {

                    $("#preview").modal('hide');
                    
                    if(data.status == true){
                        alertify.success('Imagem cortada com sucesso!');

                        /* Lógica para atualizar a imagem */
                        if($('#previewresize').css('display') == "none"){
                            $('#previewresize').show();
                        }
                        
                        var src = baseurl+data.image+'?'+Math.floor((Math.random()*10000)+1);; // usei o random pq algums servidores deixam em cach a imagem, so serve pra troca ro nome
                        $('#image_resize').removeAttr('src');
                        $('#image_resize').attr('src', src);
                        
                    } else {
                        alertify.error(data.message);
                    }
                    
                    $("#cropsubmit").attr('disabled', false);
                    $(".progress").addClass('hide');



                },
                error: function(jqXHR, textStatus, errorThrown) 
                {
                    alert("Ocorreu um erro");
                    $("#cropsubmit").attr('disabled', false);
                    $(".progress").addClass('hide');
                }
            });
            e.preventDefault(); //STOP default action
        });
    },
    initDatetimepicker: function() {

        if(typeof $.fn.datetimepicker == 'undefined') return;

        $('#datetimepicker1').datetimepicker({
            startDate: new Date(),
            language: 'pt-BR'
        });

        $('#datetimepicker1 input').focus(function (event) {
            $(this).next().click();
        });

    },
    init: function() {
        _log('Initializing App');
        Utils.settings.init();

        App.initTinyMCE();
        App.initLists();
        App.initLimiter();
        App.initBootstrap();
        App.initCropAjax();
        App.initValidator();
        App.initUploader();
        App.initSelect2();
        App.initPickadate();
        App.initDatetimepicker();

        Events.init();
        _log('Initialized App');
    }
};

Public = {
    init: App.init,
    rebindEvents: Events.bindEvents,
    home_url: Utils.home_url,
    meta: Utils.settings.meta
};

return Public;

})(window.jQuery);

jQuery(document).ready(Admin.init);

// Jquery Tour BootStrap
// $(function() {
//   var $start, tour;
//   $start = $("#start");
//   tour = new Tour({
//     backdrop: true,
//     keyboard: true,
//     onStart: function() {
//       return $start.addClass("disabled", true);
//     },
//     onEnd: function() {
//       return $start.removeClass("disabled", true);
//     },
//     debug: true
//   });
//   tour.addSteps([
//         // adicione quantos elementos quiser, existentes na pagina atual
//         {
//             element: "#navigateMain",
//             placement: "bottom",
//             title: "Guia de ajuda",
//             content: "Bem vindo ao Gerenciador de conteúdo Safari! Vamos começar!"
//         },
//         {
//             element: "#mainMenu", // string referente ao elemento em que o popover aparacerá próximo
//             placement: "right",
//             title: "Menu principal", // string - título do popover
//             content: "Esse é o menu principal do gerenciador. Nele você pode navegar pelos conteúdos disponíveis em seu site" // string - conteudo do popover
//         },
//         {
//             element: "#accordion",
//             placement: "bottom",
//             title: "Histórico de ações",
//             content: "Nessa tabela você fica sabendo de todas as ações realizadas nesse gerenciador."
//         }
//   ]);
//   tour.init();
//   tour.start();
  
//   $(document).on("click", ".start", function(e) {
//     e.preventDefault();
//     if ($(this).hasClass("disabled")) {
//       return;
//     }
//     tour.restart();
//   });
// });




// $(".datetimepicker1")
//     .datetimepicker({
//         // startDate: date,
//         language: "pt-BR",
//         format: "DD/MM/YYYY",
//         pickTime: false
//     })
//     .on("change.dp", function (e) {
//         if (!$(e.currentTarget).hasClass("lotdate") && typeof e.date !== "undefined") {
//             $(".datetimes").find("input[data-format]").each(function (i, html) {
//                 $(".referencied_date_option" + (i + 1)).val($(html).val());
//                 $(".referencied_date_option" + (i + 1)).text($(html).val());
//                 $('.date_attraction_' + (i + 1)).text($(html).val());
//             });
//         }
//     });

// $(".datetimepicker1 input").focus(function (event) {
//     $(this).next().click();
// });

// $(".datetimepicker2").datetimepicker({
//         // startDate: date,
//         language: "pt-BR",
//         pickTime: true,
//         format: "DD/MM/YYYY HH:mm"
// })
// .unbind('change.dp')
// .bind("change.dp", function (e) {

//     console.log('aqui');

//     $(e.currentTarget).find("input").first().attr("value", $(e.currentTarget).find("input").val());

//     $(".datetimes").find("input[data-format]").each(function (i, html) {
//         $(".referencied_date_option" + (i + 1)).val($(html).val());
//         $(".referencied_date_option" + (i + 1)).text($(html).val());
//     });

//     e.stopPropagation();
// });

// $(".datetimepicker2 input").focus(function (event) {
//     $(this).next().click();
// });

