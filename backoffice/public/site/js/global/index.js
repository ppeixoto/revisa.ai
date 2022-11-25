/* Kristuff.WebUI.SideMenu */
(function (window, undefined) {
    "use strict";
    // responsive pinnable sidemenu component
    var sideMenu = function (el) {
        var htmlSideMenu = el,
            htmlSideMenuPinTrigger = {},
            htmlSideMenuPinTriggerImage = {},
            htmlOverlay = {};
        var init = function () {
            htmlSideMenuPinTrigger = el.querySelector(
                ".wui-side-menu-pin-trigger"
            );
            htmlSideMenuPinTriggerImage =
                htmlSideMenuPinTrigger.querySelector("i.fa");
            htmlOverlay = document.querySelector(".wui-overlay");
            Array.prototype.forEach.call(
                document.querySelectorAll(".wui-side-menu-trigger"),
                function (elmt, i) {
                    elmt.addEventListener(
                        "click",
                        function (e) {
                            e.preventDefault();
                            toggleMenuState();
                        },
                        false
                    );
                }
            );
            htmlSideMenuPinTrigger.addEventListener(
                "click",
                function (e) {
                    e.preventDefault();
                    toggleMenuPinState();
                },
                false
            );
            // htmlOverlay.addEventListener("click", function (e) {
            //     htmlSideMenu.classList.remove('open');
            // }, false);
            window.addEventListener("resize", checkIfNeedToCloseMenu, false);
            checkIfNeedToCloseMenu();
        };
        var toggleMenuState = function () {
            htmlSideMenu.classList.toggle("open");
            menuStateChanged(
                htmlSideMenu,
                htmlSideMenu.classList.contains("open")
            );
        };
        var toggleMenuPinState = function () {
            htmlSideMenu.classList.toggle("pinned");
            htmlSideMenuPinTriggerImage.classList.toggle("fa-rotate-90");
            if (htmlSideMenu.classList.contains("pinned") !== true) {
                htmlSideMenu.classList.remove("open");
            }
            menuPinStateChanged(
                htmlSideMenu,
                htmlSideMenu.classList.contains("pinned")
            );
        };
        var checkIfNeedToCloseMenu = function () {
            var width =
                window.innerWidth ||
                document.documentElement.clientWidth ||
                document.body.clientWidth;
            if (
                width <= 767 &&
                htmlSideMenu.classList.contains("open") === true
            ) {
                htmlSideMenu.classList.remove("open");
                menuStateChanged(
                    htmlSideMenu,
                    htmlSideMenu.classList.contains("open")
                );
            }
            if (
                width > 767 &&
                htmlSideMenu.classList.contains("pinned") === false
            ) {
                htmlSideMenu.classList.remove("open");
                menuStateChanged(
                    htmlSideMenu,
                    htmlSideMenu.classList.contains("open")
                );
            }
        };
        var menuStateChanged = function (element, state) {
            var evt = new CustomEvent("menuStateChanged", {
                detail: { open: state },
            });
            element.dispatchEvent(evt);
        };
        var menuPinStateChanged = function (element, state) {
            var evt = new CustomEvent("menuPinStateChanged", {
                detail: { pinned: state },
            });
            element.dispatchEvent(evt);
        };
        init();
        return {
            htmlElement: htmlSideMenu,
            toggleMenuState: toggleMenuState,
            toggleMenuPinState: toggleMenuPinState,
        };
    };

    window.SideMenu = sideMenu;
})(window);

var documentReady = function (fn) {
    if (document.readyState != "loading") {
        fn();
    } else {
        document.addEventListener("DOMContentLoaded", fn);
    }
};

documentReady(function () {
    var sample = new SideMenu(document.querySelector(".wui-side-menu"));
    sample.htmlElement.addEventListener(
        "menuPinStateChanged",
        function (e) {
            document.querySelector("#events").innerHTML +=
                "menuPinStateChanged , menu pinned? => " +
                e.detail.pinned +
                "<br>";
        },
        false
    );
    sample.htmlElement.addEventListener(
        "menuStateChanged",
        function (e) {
            document.querySelector("#events").innerHTML +=
                "menuStateChanged , menu open? => " + e.detail.open + "<br>";
        },
        false
    );
});

calculoValuesWeek();

var formSteps = $(".wizard");

if (formSteps) {
    var lastHeight = $("step.container.current").css("height");
    var checkHeightChange = function () {
        var newHeight = $("step.container.current").css("height");

        if (lastHeight != newHeight) {
            $(".wizard>.content").css("min-height", newHeight);
            lastHeight = newHeight;
        }
    };
    setInterval(checkHeightChange, 500);

    formSteps
        .steps({
            headerTag: "h3",
            bodyTag: "step",
            enableAllSteps: formSteps.attr("data-enableAllSteps"),
            showFinishButtonAlways: formSteps.attr(
                "data-showFinishButtonAlways"
            ),
            enableKeyNavigation: true,
            transitionEffect: "slideLeft",
            onInit: function (event, currentIndex) {
                runEventsCadastroEvento();
            },
            onStepChanging: function (event, currentIndex, newIndex) {
                // insertStepToCache(wizard, index, step)

                if ($(".one-check-required:visible").length) {
                    var valid = true;
                    $(".one-check-required:visible").each(function (i, html) {
                        var div = this;

                        if (
                            $(div).find('input[type="checkbox"]:checked')
                                .length <= 0
                        ) {
                            $(div)
                                .find('input[type="checkbox"]')
                                .each(function (j, input) {
                                    $(input).addClass("error");
                                    $(div).find("label").addClass("error");

                                    $(input).unbind("change");
                                    $(input).bind("change", function () {
                                        $(input).removeClass("error");
                                        $(div)
                                            .find("label")
                                            .removeClass("error");
                                    });
                                });

                            valid = false;

                            return alert($(this).attr("data-error"));
                        }
                    });

                    if (!valid) {
                        runEventsCadastroEvento();
                        return false;
                    }
                }
                runEventsCadastroEvento();
                return formSteps.valid();
            },
            onStepChanged: function (event, currentIndex, priorIndex) {
                //     // Used to skip the "Warning" step if the user is old enough.
                //     if (currentIndex === 2 && Number($("#age-2").val()) >= 18)
                //     {
                //         formSteps.steps("next");
                //     }
                //     // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
                //     if (currentIndex === 2 && priorIndex === 3)
                //     {
                //         formSteps.steps("previous");
                //     }

                var currentHeight = $("step.container.current").css("height");
                $(".wizard>.content").css("min-height", currentHeight);

                var currentHeight = $("step.container.current").css("height");
                $(".wizard>.content").css("min-height", currentHeight);
            },
            onFinishing: function (event, currentIndex) {
                if ($(".one-check-required:visible").length) {
                    var valid = true;
                    $(".one-check-required:visible").each(function (i, html) {
                        var div = this;

                        if (
                            $(div).find('input[type="checkbox"]:checked')
                                .length <= 0
                        ) {
                            $(div)
                                .find('input[type="checkbox"]')
                                .each(function (j, input) {
                                    $(input).addClass("error");
                                    $(div).find("label").addClass("error");

                                    $(input).unbind("change");
                                    $(input).bind("change", function () {
                                        $(input).removeClass("error");
                                        $(div)
                                            .find("label")
                                            .removeClass("error");
                                    });
                                });

                            valid = false;

                            return alert($(this).attr("data-error"));
                        }
                    });

                    if (!valid) {
                        runEventsCadastroEvento();
                        return false;
                    }
                }

                // formSteps.validate().settings.ignore = ":disabled";
                return formSteps.valid();
            },

            addStepToCache: function (event, currentIndex) {},
            onFinished: function (event, currentIndex) {
                $(formSteps)[0].submit();
            },
        })
        .validate({
            errorPlacement: function errorPlacement(error, element) {
                element.before(error);
            },
            submitHandler: function (form) {
                return false;
            },
        });
}

function runEventsCadastroEvento() {
    function prepStringUrl(string) {
        var mapaAcentosHex = {
            a: /[\xE0-\xE6]/g,
            A: /[\xC0-\xC6]/g,
            e: /[\xE8-\xEB]/g,
            E: /[\xC8-\xCB]/g,
            i: /[\xEC-\xEF]/g,
            I: /[\xCC-\xCF]/g,
            o: /[\xF2-\xF6]/g,
            O: /[\xD2-\xD6]/g,
            u: /[\xF9-\xFC]/g,
            U: /[\xD9-\xDC]/g,
            c: /\xE7/g,
            C: /\xC7/g,
            n: /\xF1/g,
            N: /\xD1/g,
            "-": /\s/g,
        };

        for (var letra in mapaAcentosHex) {
            var expressaoRegular = mapaAcentosHex[letra];
            string = string.replace(expressaoRegular, letra);
        }

        string = string.split(" ").join("-").toLowerCase();
        string2 = string.replaceAll(new RegExp("[0-9]", "g"), "");

        return string2;
    }

    $("#undefined_date").unbind("change");
    $("#undefined_date").bind("change", function (e) {
        return !$(this).prop("checked")
            ? $(".datetimes").hide()
            : $(".datetimes").show();
    });

    $('input[name="todas_as_classes"]').unbind("change");
    $('input[name="todas_as_classes"]').bind("change", function (e) {
        var isChecked = $(this).prop("checked");
        var count = $(this).val();
        $('input[name="classe_' + count + '[]"]').each(function (i, html) {
            $(html).prop("checked", isChecked);
            $(html).trigger("change");
        });
        if (isChecked) {
            $(this).parent().addClass("active");
        } else {
            $(this).parent().removeClass("active");
        }
    });

    $('input[name^="classe"]').unbind("change");
    $('input[name^="classe"]').bind("change", function (e) {
        if ($(this).prop("checked")) {
            $(this).parent().addClass("active");
        } else {
            $(this).parent().removeClass("active");
        }
    });

    $('input[name^="classe"]').trigger("change");

    $("#avaliable_parc_credit_site").unbind("change");
    $("#avaliable_parc_credit_site").bind("change", function (e) {
        var maxVal = parseInt($(this).val());

        $("#avaliable_parc_credit_without_interest_site")
            .find("option")
            .each(function (i, html) {
                var valOp = parseInt($(html).val());
                var valSelected = parseInt(
                    $("#avaliable_parc_credit_without_interest_site").val()
                );

                if (maxVal < valOp) {
                    $(html).prop("disabled", true);
                    $(html).hide();
                } else {
                    $(html).prop("disabled", false);
                    $(html).show();
                }

                if (valSelected > maxVal) {
                    $("#avaliable_parc_credit_without_interest_site").val(
                        maxVal
                    );
                }
            });
    });
    $("#avaliable_parc_credit_site").trigger("change");

    $("#name").unbind("keyup");
    $("#name").bind("keyup", function (e) {
        var value = e.target.value;
        $(".gerar-permalink").trigger("click");
        $("#title_google")[0].value = value.toUpperCase() + " | " + siteTitle;
        $("#description_google")[0].value =
            "Os melhores Artistas você encontra no " +
            siteTitle +
            ". Contrate já o " +
            value.toUpperCase() +
            " em até 12x!";
        $("#perma_seller").text(prepStringUrl(value));
    });

    $("#permalink").unbind("keyup");
    $("#permalink").bind("keyup", function (e) {
        $("#permalink").val(prepStringUrl($("#permalink").val()));
    });

    $(".gerar-permalink").unbind("click");
    $(".gerar-permalink").bind("click", function () {
        var name = $("#name").val();
        $("#permalink").val(prepStringUrl(name));
    });

    $(".validar-permalink").unbind("click");
    $(".validar-permalink").bind("click", function () {
        $("#messageValidado").text("Validando aguarde...");

        $.ajax({
            url: baseurl + "admin/event_all/validar_permalink",
            type: "POST",
            dataType: "json",
            data: { permalink: $("#permalink").val() },
        })
            .done(function (result) {
                $("#messageValidado").text(result.message);
            })
            .fail(function () {
                alert("Falha em se contactar com o servidor");
            });
    });

    $(".horaMask").unmask().mask("99:99");

    $("#cepLocal").mask("99999-999");
    $("#cepLocal").unbind("blur");
    $("#cepLocal").bind("blur", function (event) {
        var cep = $(this).val().replace(/\D/gi, "");

        if (cep.length == 8) {
            $("#load").fadeIn("slow");

            $.ajax({
                url: "https://viacep.com.br/ws/" + cep + "/json/",
                type: "GET",
                dataType: "json",
            }).done(function (resultado) {
                if (resultado.erro) {
                    return;
                }

                var valSet = $("#estadoLocal").val();

                $("#ruaLocal").val(resultado.logradouro);
                $("#bairroLocal").val(resultado.bairro);
                $("#cidadeLocal").val(resultado.localidade);
                $("#estadoLocal").val(resultado.uf);

                $("#cidadeDelay").val(resultado.localidade);
                // if (resultado.uf != valSet) {
                setTimeout(function () {
                    $("select.estadosId").change();
                }, 100);

                setTimeout(function () {
                    $("#cidadeLocal").val(resultado.localidade);
                    $("#retornoAjax").text("Carregando Mapa...");
                }, 1000);

                setTimeout(function () {
                    preencharMapa();
                }, 1500);
                // }
            });
        }
    });

    $(".cidadeLocal").unbind("change");
    $(".cidadeLocal").bind("change", function () {
        setTimeout(function () {
            $("#retornoAjax").text("Gerando Mapa...");
            preencharMapa();
        }, 1500);
    });

    $(".estadosId").unbind("change");
    $(".estadosId").bind("change", function () {
        var id = $(this).children(":selected").attr("id");

        $.ajax({
            url:
                "https://servicodados.ibge.gov.br/api/v1/localidades/estados/" +
                id +
                "/municipios/",
            type: "GET",
            dataType: "json",
        }).done(function (resultado) {
            $("#cidadeLocal").empty();
            resultado.forEach(function (item) {
                $("#cidadeLocal").append(
                    '<option value="' +
                        item.nome +
                        '">' +
                        item.nome +
                        "</option>"
                );
            });
            $("#cidadeLocal").val($("#cidadeDelay").val());
        });
    });

    runCropEvents();

    $('input[name="payments_site[]"]').unbind("change");
    $('input[name="payments_site[]"]').bind("change", function (e) {
        var containsCartao = false;
        $('input[name="payments_site[]"]:checked').each(function (i, html) {
            if ($(this).val() == paymentsSiteConstants.credit) {
                containsCartao = true;
            }
        });

        if (!containsCartao) {
            $(".config-cartao-site").hide();
        } else {
            $(".config-cartao-site").show();
        }
    });

    $(".abriModalFormaParcelamento").unbind("click");
    $(".abriModalFormaParcelamento").bind("click", function (e) {
        var botaoModal = this;

        var type = $(this).attr("data-type");

        $("#selecionar_parcelamento_" + type).modal("show");

        $('form[name="formSelecionarParcelamento' + type + '"]').unbind(
            "submit"
        );
        $('form[name="formSelecionarParcelamento' + type + '"]').bind(
            "submit",
            function (e) {
                e.preventDefault();
                var form = e.target;

                $(botaoModal).find("input").remove();
                $(botaoModal).append(
                    $(
                        'input[name="avaliable_parc_credit_' + type + '[]"]'
                    ).clone()
                );

                if (
                    $(
                        'input[name="avaliable_parc_credit_with_interest_' +
                            type +
                            '[]"]'
                    ).length
                ) {
                    $(botaoModal).append(
                        $(
                            'input[name="avaliable_parc_credit_with_interest_' +
                                type +
                                '[]"]'
                        ).clone()
                    );
                }

                $("#selecionar_parcelamento_" + type).modal("hide");
            }
        );

        $('input[id^="parc_' + type + '_"').unbind("change");
        $('input[id^="parc_' + type + '_"').bind("change", function (e) {
            var value = parseInt($(this).val());

            if (!$(this).prop("checked")) {
                $('input[id^="parc_' + type + '_"').each(function (i, html) {
                    if ($(html).prop("disabled")) {
                        $(html).prop("checked", true);
                        return;
                    }

                    if (parseInt($(html).val()) > value) {
                        $(html).prop("checked", false);
                    }
                });
            } else {
                $('input[id^="parc_' + type + '_"').each(function (i, html) {
                    if ($(html).prop("disabled")) {
                        $(html).prop("checked", true);
                        return;
                    }
                    if (parseInt($(html).val()) < value) {
                        $(html).prop("checked", true);
                    }
                });
            }
        });

        $('input[id^="juros_"').unbind("change");
        $('input[id^="juros_"').bind("change", function (e) {
            var value = parseInt($(this).val());

            if (!$(this).prop("checked")) {
                $('input[id^="juros_"').each(function (i, html) {
                    if ($(html).prop("disabled")) {
                        $(html).prop("checked", true);
                        return;
                    }

                    if (parseInt($(html).val()) < value) {
                        $(html).prop("checked", false);
                    }
                });
            } else {
                $('input[id^="juros_"').each(function (i, html) {
                    if ($(html).prop("disabled")) {
                        $(html).prop("checked", true);
                        return;
                    }

                    if (parseInt($(html).val()) > value) {
                        $(html).prop("checked", true);
                    }
                });
            }
        });
    });

    $(".abrirModalLocal").unbind("click");
    $(".abrirModalLocal").bind("click", function (e) {
        $("#preview2").modal("show");

        $("#estadoLocal").empty();
        $.ajax({
            url: "https://servicodados.ibge.gov.br/api/v1/localidades/estados/",
            type: "GET",
            dataType: "json",
        })
            .done(function (resultado) {
                resultado.forEach(function (item) {
                    $("#estadoLocal").append(
                        '<option id="' +
                            item.id +
                            '" value="' +
                            item.sigla +
                            '">' +
                            item.nome +
                            "</option>"
                    );
                });
            })
            .always(function () {});
    });

    $(".abrirModalProdutora").unbind("click");
    $(".abrirModalProdutora").bind("click", function (e) {
        $("#previewProdutora").modal("show");
    });
}

function runCropEvents() {
    var cropBoxData;
    var canvasData;
    var cropper;
    var uploadedImageType;
    var uploadedImageName;
    var input;
    var cropped;

    $(
        'input[name="image"],input[name="image_secundaria[]"],input[name^="image_secundaria_substituir_"]'
    ).unbind("change");
    $(
        'input[name="image"],input[name="image_secundaria[]"],input[name^="image_secundaria_substituir_"]'
    ).bind("change", function (e) {
        input = e.target;

        $("#preview_img_crop").modal("show");

        if (input.files) {
            cropped = false;

            var file = input.files[input.files.length - 1];

            uploadedImageType = file.type;
            uploadedImageName = file.name;

            var reader = new FileReader();

            reader.onload = function (e) {
                $("#previewimage").attr("src", e.target.result);

                var image = document.getElementById("previewimage");

                cropper = new Cropper(image, {
                    minCropBoxWidth: 585,
                    minCropBoxHeight: 585,
                    center: true,
                    dragMode: "move",
                    restore: false,
                    guides: false,
                    highlight: true,
                    cropBoxMovable: false,
                    cropBoxResizable: false,
                    toggleDragModeOnDblclick: false,
                    minContainerWidth: 350,
                    minContainerHeight: 350,
                    ready: function () {
                        var cropper = this.cropper;
                        var containerData = cropper.getContainerData();
                        var cropBoxData = cropper.getCropBoxData();
                    },
                    cropmove: function () {
                        var cropper = this.cropper;
                        var cropBoxData = cropper.getCropBoxData();
                        var aspectRatio =
                            cropBoxData.width / cropBoxData.height;
                    },
                });
            };

            reader.readAsDataURL(input.files[0]);
        }
    });

    $(".zoom-in").unbind("click");
    $(".zoom-in").bind("click", function (e) {
        cropper.zoom(0.1);
    });

    $(".zoom-out").unbind("click");
    $(".zoom-out").bind("click", function (e) {
        cropper.zoom(-0.1);
    });

    $(".removeCroppedImg").unbind("click");
    $(".removeCroppedImg").bind("click", function (e) {
        $(this).parent().siblings().val("");
        $(this).parent().hide();
        $(this).parent().find("input").remove(); //rmeove hidden blob input

        $(this)
            .parent()
            .parent()
            .parent()
            .find(".newpreviewimage")
            .find("a")
            .prop("href", "#")
            .removeClass("openNewTabCroppedImage");
        $(this)
            .parent()
            .parent()
            .parent()
            .find(".newpreviewimage")
            .find("img")
            .removeAttr("src");
    });

    function reRunOpenNewTabCroppedImage() {
        $(".openNewTabCroppedImage").unbind("click");
        $(".openNewTabCroppedImage").bind("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
            var image = new Image();
            image.src = $(this).attr("href");
            var w = window.open("");
            w.document.write(image.outerHTML);
        });
    }
    reRunOpenNewTabCroppedImage();

    $(".crop").unbind("click");
    $(".crop").bind("click", function (e) {
        var imgurl = cropper
            .getCroppedCanvas({ width: 585, height: 585 })
            .toDataURL(uploadedImageType);
        var divCropControls = $(input).next();
        var divCropControls2 = $(input).parent().next();

        divCropControls.show(); //$('.crop-controls')

        divCropControls.append(
            '<input type="hidden" name="blob_' +
                input.name +
                '" value="' +
                imgurl +
                '"/>'
        );

        divCropControls.find(".imageBlob").attr("href", imgurl);
        divCropControls
            .parent()
            .parent()
            .find(".newpreviewimage")
            .find("a")
            .prop("href", imgurl)
            .addClass("openNewTabCroppedImage");
        divCropControls
            .parent()
            .parent()
            .find(".newpreviewimage")
            .find("img")
            .prop("src", imgurl);

        divCropControls2.show(); //$('.crop-controls')

        divCropControls2.append(
            '<input type="hidden" name="blob_' +
                input.name +
                '" value="' +
                imgurl +
                '"/>'
        );

        divCropControls2.find(".imageBlob").attr("href", imgurl);
        divCropControls2
            .parent()
            .parent()
            .find(".newpreviewimage")
            .find("a")
            .prop("href", imgurl)
            .addClass("openNewTabCroppedImage");
        divCropControls2
            .parent()
            .parent()
            .find(".newpreviewimage")
            .find("img")
            .prop("src", imgurl);
        reRunOpenNewTabCroppedImage();

        $("#preview_img_crop").modal("hide");

        cropped = true;
    });

    $("#preview_img_crop").unbind("hidden.bs.modal");
    $("#preview_img_crop").bind("hidden.bs.modal", function (e) {
        cropBoxData = cropper.getCropBoxData();
        canvasData = cropper.getCanvasData();
        cropper.destroy();

        if (!cropped) {
            $(input).val("");
            $(input).next().hide();
            $(input).next().find("input").remove();
        }
    });
}

$("#cep").keyup(function (event) {
    var cep = $(this).val().replace(/_/g, "").replace(/-/g, "");

    if (cep.length == 8) {
        $.ajax({
            url: "https://viacep.com.br/ws/" + cep + "/json/",
            type: "get",
            dataType: "json",
            success: function (data, textStatus, xhr) {
                if (typeof data.error == "undefined") {
                    setListCityOnSeleted(data.uf);
                    $("#street").val(data.logradouro);
                    $("#bairro").val(data.bairro);
                    $("#state").val(data.uf);
                    // $("#cidadeDelay").val(data.localidade);
                    console.log("cidade ", data.localidade);
                    // if (resultado.uf != valSet) {
                    setTimeout(function () {
                        $("#city").val(data.localidade);
                    }, 700);

                }
            },
        });
    }
});

function setListCityOnSeleted(uf) {
    $.ajax({
        url: baseurl + "cadastro/estadosearch/" + uf,
        type: "GET",
        dataType: "json",
    })
    .done(function (resultado) {
        $("#city").empty();
        resultado.data.forEach(function (item) {
            $("#city").append(
                '<option value="' + item.title + '">' + item.title + "</option>"
            );
        });
    });
}

$("#state").unbind("change");
$("#state").bind("change", function () {
    var state = $(this).val();
    if (state) {
        setListCityOnSeleted(state);
    }
});

$("#newIntegranteBanda").unbind("click");
$("#newIntegranteBanda").bind("click", function (e) {

    

    var funcoes_artistas = $("#funcoes_integrantes_string").val().split(" | ");
    var countIntegrantes = $("#count_integrantes_banda").val();
    countIntegrantes = parseInt(countIntegrantes) + 1;
    $("#count_integrantes_banda").val(countIntegrantes);

    var is_new_artista = $(this).attr('data-new-object');
    if(is_new_artista == "true"){
        $('#qty_integrantes_terrestres').val(countIntegrantes);
        console.log("entrou aq");
    }

    var html =
        '<input type="hidden" name="integrante_id_' + countIntegrantes + '" >';

    html +=
        '<label for="name" class="col-sm-4 control-label titulosSteps" style="font-size: 14px;">Integrante ' +
        countIntegrantes +
        '</label>';
    html += '<div class="col-md-2" >';
    html += '<div class="form-group">';
    html +=
        ' <input type="search" class="form-control inputMobileIntegrante ignore-input" placeholder="Nome ou Apelido" name="name_integrante_' +
        countIntegrantes +
        '" >';
    html += "</div>";
    html += "</div>";

    html += '<div class="form-group">';
    html += '<div class="col-sm-4 ">';
    html +=
        ' <input type="hidden" id="function_member_' +
        countIntegrantes +
        '" name="function_member_' +
        countIntegrantes +
        '" class="span12 select2MobileIntegrantes select2"';
    html += ' data-no-create="true"';
    html += ' placeholder="Posições / Instrumentos do Integrante"';
    html += ' data-tags="' + $("#funcoes_integrantes_string").val() + '" >';
    html += "</div>";

    html += ' <div class="col-sm-1">';
    html += ' <button type="button" class="deleteIntegrantes btnDeleteAdm" data-id="0"> Deletar</button>';
    html += ' </div>';

    html += "</div>";

    $("#novasfuncoesBanda").append(html);

    setTimeout(function () {
        initSelect2FromInputParam($("#function_member_" + countIntegrantes));
    }, 100);

    // funcoes_artistas.forEach(function (name) {
    //     $("#funcao_one_" + countIntegrantes).append( '<option value="' + name + '">' + name + "</option>");
    //     $("#funcao_two_" + countIntegrantes).append( '<option value="' + name + '">' + name + "</option>");
    //     $("#funcao_three_" + countIntegrantes).append( '<option value="' + name + '">' + name + "</option>");
    // });
});

$("#newLinkVideos").unbind("click");
$("#newLinkVideos").bind("click", function (e) {
    var countLink = $("#count_link_videos").val();
    countLink = parseInt(countLink) + 1;
    $("#count_link_videos").val(countLink);

    var html = '<div class="clearfix"></div>';
    html += '<div class="col-md-3"></div>';
    html += '<div class=" col-md-3 col-12 ">';
    html +=
        '<input class="form-control ignore-input videoKeyup" data-id="' +
        countLink +
        '" id="video_' +
        countLink +
        '" name="video_' +
        countLink +
        '" placeholder="Insira aqui o link do vídeo no Youtube" type="url">';
    html += "</div>";
    html += '<div class=" col-md-4 col-12 mt-10-mobile" >';
    html +=
        '<div id="videobox_' +
        countLink +
        '" style="display: none; width: 406px; height: 235px;" class="form-group mb-0-mobile video-container">';
    html +=
        '<div id="video-preview_' +
        countLink +
        '" class="video-container "></div>';
    html += "</div>";
    html += "</div>";

    html += " <div class='col-sm-1 divDeleteBtn'>";
    html += " <button type='button' class='deleteVideos btnDeleteAdm' data-id='0'> Deletar</button>";
    html += "</div>";
    
    $("#divNewLinkVideos").append(html);
});

$(".videoKeyup").unbind("change");
$(document.body).on("change", ".videoKeyup", function (e) {
    var data_id = $(this).attr("data-id");
    console.log(data_id);
    var videobox = document.getElementById("videobox_" + data_id);
    if ($(this).val() === "") {
        videobox.style.display = "none";
    } else {
        var url = $(this).val();

        var url_display = "";
        if (url.includes("vimeo")) {
            url_display = "//player.vimeo.com/video/" + url.split("/")[3];
        } else if (url.includes("www.youtube.com/watch?v")) {
            url_display = "//www.youtube.com/embed/" + url.split("=")[1];
        } else {
            url_display = "//www.youtube.com/embed/" + url.split(".be/")[1];
        }

        var ifrm = document.createElement("iframe");
        ifrm.src = url_display;
        ifrm.width = "350";
        ifrm.height = "150";
        ifrm.frameborder = "0";
        ifrm.allowfullscreen = true;
        ifrm.scrolling = "no";
        $("#video-preview_" + data_id).html(ifrm);
        videobox.style.display = "block";
    }
});

$("#newLinkDateMemorial").unbind("click");
$("#newLinkDateMemorial").bind("click", function (e) {
    var countLink = $("#count_dates_memorial").val();
    countLink = parseInt(countLink) + 1;
    $("#count_dates_memorial").val(countLink);

    $(".datetimepicker1").datetimepicker({
        // startDate: date,
        language: "pt-BR",
        format: "DD/MM/YYYY",
        pickTime: false,
    });

    var html = '<div class="clearfix"></div>';
    html += '<div class="col-md-3"  style="padding: 1px 10px;">';
    html += '<label for="">Data</label>';
    html += '<div class="input-group date datetimepicker1 dateMemorial">';
    html +=
        '      <input id="date" name="date_reference_' +
        countLink +
        '" data-format="DD/MM/YYYY" type="text" class="form-control" readonly> ';
    html +=
        '            <span class="input-group-addon newPadding"><span class="glyphicon glyphicon-calendar"></span>';
    html += "        </span>";
    html += "    </div> ";
    html += " </div>";

    html += ' <div class="col-md-3"  style="padding: 1px 10px;">';
    html += '    <label for="">De</label>';
    html += '    <div class="input-group date datetimepicker1 dateMemorial">';
    html +=
        '        <input id="date" name="date_init_' +
        countLink +
        '" data-format="DD/MM/YYYY" type="text" class="form-control" readonly>';
    html +=
        '            <span class="input-group-addon newPadding"><span class="glyphicon glyphicon-calendar"></span>';
    html += "        </span>";
    html += "    </div> ";
    html += "</div>";

    html += '<div class="col-md-3"  style="padding: 1px 10px;">';
    html += '    <label for="">Até</label>';
    html += '   <div class="input-group date datetimepicker1 dateMemorial">';
    html +=
        '        <input id="date" name="date_end_' +
        countLink +
        '" data-format="DD/MM/YYYY" type="text" class="form-control" readonly>';
    html +=
        '            <span class="input-group-addon newPadding"><span class="glyphicon glyphicon-calendar"></span>';
    html += "        </span>";
    html += "    </div> ";
    html += "</div>";
    html += '<input type="hidden" name="date_id_' + countLink + '" >';

    setTimeout(function () {
        $(".dateMemorial").datetimepicker({
            // startDate: date,
            language: "pt-BR",
            format: "DD/MM/YYYY",
            pickTime: false,
        });
    }, 1000);

    $("#divNewDatesMemorial").append(html);
});



$("#add15Minute").unbind("click");
$("#add15Minute").bind("click", function (e) {
    var hours = $("#timePresentation").val().split(":");
    if (hours[1] == "45") {
        var hoursCurrent = parseInt(hours[0]);
        hoursCurrent++;
        $("#timePresentation").val(hoursCurrent + ":00");
        $(".valueCashString").text(hoursCurrent + ":00");
        return;
    }
    var minuteCurrent = hours[1];
    minuteCurrent = parseInt(minuteCurrent) + parseInt("15");
    $("#timePresentation").val(hours[0] + ":" + minuteCurrent);
    $(".valueCashString").text(hours[0] + ":" + minuteCurrent);
});

$("#remove15Minute").unbind("click");
$("#remove15Minute").bind("click", function (e) {
    var hours = $("#timePresentation").val().split(":");
    if (hours[0] == "0" && hours[1] == "30") {
        return;
    }
    if (hours[1] == "00") {
        var hoursCurrent = parseInt(hours[0]);
        hoursCurrent--;
        $("#timePresentation").val(hoursCurrent + ":45");
        $(".valueCashString").text(hoursCurrent + ":45");
        return;
    }
    var minuteCurrent = hours[1];
    minuteCurrent = parseInt(minuteCurrent) - parseInt("15");
    if (minuteCurrent == 0) {
        minuteCurrent = "00";
    }
    $("#timePresentation").val(hours[0] + ":" + minuteCurrent);
    $(".valueCashString").text(hours[0] + ":" + minuteCurrent);
});

$("#add15MinuteTimeMax").unbind("click");
$("#add15MinuteTimeMax").bind("click", function (e) {
    var hours = $("#timePresentationMax").val().split(":");
    if (hours[0] == "12") {
        return;
    }
    if (hours[1] == "45") {
        var hoursCurrent = parseInt(hours[0]);
        hoursCurrent++;
        $("#timePresentationMax").val(hoursCurrent + ":00");
        return;
    }
    var minuteCurrent = hours[1];
    minuteCurrent = parseInt(minuteCurrent) + parseInt("15");
    $("#timePresentationMax").val(hours[0] + ":" + minuteCurrent);
});

$("#remove15MinuteTimeMax").unbind("click");
$("#remove15MinuteTimeMax").bind("click", function (e) {
    var hours = $("#timePresentationMax").val().split(":");
    if (hours[0] == "1" && hours[1] == "00") {
        return;
    }
    if (hours[1] == "00") {
        var hoursCurrent = parseInt(hours[0]);
        hoursCurrent--;
        $("#timePresentationMax").val(hoursCurrent + ":45");
        return;
    }
    var minuteCurrent = hours[1];
    minuteCurrent = parseInt(minuteCurrent) - parseInt("15");
    if (minuteCurrent == 0) {
        minuteCurrent = "00";
    }
    $("#timePresentationMax").val(hours[0] + ":" + minuteCurrent);
});

$(".money2").maskMoney({
    prefix: "R$ ",
    allowNegative: true,
    thousands: ".",
    decimal: ",",
    affixesStay: true,
    allowEmpty: true,
});

$(".percentagem").maskMoney({
    suffix: " %",
    allowNegative: true,
    thousands: ".",
    decimal: ".",
    affixesStay: true,
    allowEmpty: true,
    maxlength: 2,
});

$(".clearKm").unbind("click");
$(".clearKm").bind("click", function (e) {
    var value = $(this).val();
    $(this).val(value.replaceAll(" KM", ""));
});

$(".clearKm").unbind("blur");
$(".clearKm").bind("blur", function (e) {
    var value = $(this).val();
    value = value.replaceAll(" KM", "");
    $(this).val(value);
    $(this).val(value + " KM");
});

$(".clearKm").unbind("change");
$(".clearKm").bind("change", function (e) {
    var value = $(this).val();
    value = value.replaceAll(" KM", "");
    $(this).val(value);
    $(this).val(value + " KM");
});

$("#limit_distancia_terrestre").unbind("blur");
$("#limit_distancia_terrestre").bind("blur", function (e) {
    var value = $(this).val();
    value = value.replaceAll(" KM", "");
    $("#limitAereo").text(value + " KM");
});

function calculoPorcentagem(value_total, value_porcentagem) {
    var porcentagem = (value_total * value_porcentagem) / 100;
    var formatter = new Intl.NumberFormat("ja-JP", {
        style: "currency",
        currency: "BRL",
    }).format(porcentagem);
    return formatter.format(porcentagem);
}

function conversor(str) {
    if (typeof str == "number") return str;
    var nr;
    var virgulaSeparaDecimais = str.match(/(,)\d{2}$/);
    if (virgulaSeparaDecimais) nr = str.replace(/\./g, "").replace(",", ".");
    else nr = str.replace(",", "");
    return parseFloat(nr);
}

function formatInCash(value_total) {
    var formatter = new Intl.NumberFormat("ja-JP", {
        style: "currency",
        currency: "BRL",
    }).format(value_total);
    return formatter.format(value_total);
}


$("#is_recorrent").unbind("change");
$("#is_recorrent").bind("change", function (e) {
    if ($(".notRecorrent").is(":visible")) {
        $(".notRecorrent").hide();
        $(".show_week_discount_recurrent").hide();
    } else {
        $(".notRecorrent").show();
        if ($("#week_discount_recurrent").val() == "on") {
            $(".show_week_discount_recurrent").show();
        }
    }
});

$("#equipamentos_incluidos").unbind("change");
$("#equipamentos_incluidos").bind("change", function (e) {
    if ($(".divEquipmentIncluded").is(":visible")) {
        $(".divEquipmentIncluded").hide();
    } else {
        $(".divEquipmentIncluded").show();
    }
});

$(".value_date_memorial_change").unbind("change");
$(document.body).on("change", ".value_date_memorial_change", function (e) {
    console.log("entrando no calculo");
    var value = $(this).val();
    var data_count = $(this).attr("data-count");
    console.log(value);
    console.log(data_count);
    value = value.replaceAll("R$ ", "");
    value = value.replaceAll(".", "");
    value = value.replaceAll(",", ".");
    var value_client_ordinary = $("#valor_cache").val();
    // var value_client_recurrent = $("#valor_cache_recurrent").val();
    // console.log(value_client_recurrent);

    value_client_ordinary = value_client_ordinary.replaceAll("R$ ", "");
    value_client_ordinary = value_client_ordinary.replaceAll(".", "");
    value_client_ordinary = value_client_ordinary.replaceAll(",", ".");

    // value_client_recurrent = value_client_recurrent.replaceAll("R$ ", "");
    // value_client_recurrent = value_client_recurrent.replaceAll(".", "");
    // value_client_recurrent = value_client_recurrent.replaceAll(",", ".");

    // if (!value_client_recurrent) {
    //     value_client_recurrent = 0;
    // }
    if (!value_client_ordinary) {
        value_client_ordinary = 0;
    }
    if (!value) {
        value = 0;
    }

    // console.log(value_client_recurrent);

    var formatter = new Intl.NumberFormat("ja-JP", {
        style: "currency",
        currency: "BRL",
    });

    value_client_ordinary =
        parseFloat(value_client_ordinary) + parseFloat(value);
    // value_client_recurrent =
    //     parseFloat(value_client_recurrent) + parseFloat(value);

    // console.log(value_client_recurrent);

    $(".spanVal_" + data_count).text(formatter.format(value_client_ordinary));
    // $(".spanVal2_" + data_count).text(formatter.format(value_client_recurrent));

    // $(this).parent().next().children().text(formatter.format(value_client_ordinary));
    // $(this).parent().next().children().next().text( formatter.format(value_client_recurrent));
    // $('.changeCepAdd').text(value);
});

$("#newEstrutura").unbind("click");
$("#newEstrutura").bind("click", function (e) {
    var counStructure = $("#count_structure").val();
    counStructure = parseInt(counStructure) + 1;
    $("#count_structure").val(counStructure);

    var html = '<div class="col-md-3">';
    html += '      <div class="form-group">';
    html += '          <label for="">Nome</label>';
    html +=
        '          <input name="title_structure_' +
        counStructure +
        '" type="text" class="form-control"  >';
    html += "      </div> ";
    html += "  </div>";

    html += '  <div class="col-md-3">';
    html += '      <label for="">Unidade</label>';
    html +=
        '      <select name="unidade_structure_' +
        counStructure +
        '" class="form-control">';
    html += '          <option value="Metros">Metros</option>';
    html += '          <option value="Unidade">Unidade</option>';
    html += '          <option value="M²">M²</option>';
    html += "       </select>";
    html += "  </div>";

    html += '<div class="col-md-3" >';
    html += '    <div class="form-group">';
    html += '       <label class="control-label" for="title">Detalhes</label>';
    html +=
        '       <input name="detalhe_structure_' +
        counStructure +
        '" type="text" class="form-control ignore-input" >';
    html += "  </div> ";
    html += "</div>";
    html += '<div class="clearfix"></div>';

    $("#novasEstruturas").append(html);
});

$(".newEquipment").unbind("click");
$(".newEquipment").bind("click", function (e) {
    var id_equipamento = $(this).attr("data-id");
    var count_Equipamento = $("#count_equipamento_" + id_equipamento).val();

    count_Equipamento = parseInt(count_Equipamento) + 1;
    $("#count_equipamento_" + id_equipamento).val(count_Equipamento);

    var html = '<div class="col-sm-1 mt-20-mobile"></div>';
    html += '<div class="col-sm-2 mb-10-mobile">';
    html +=
        '       <input type="text" class="form-control " placeholder="Nome" id="name_new_equipment_' +
        id_equipamento +
        "_" +
        count_Equipamento +
        '"  name="name_new_equipment_' +
        id_equipamento +
        "_" +
        count_Equipamento +
        '" >';
    html += "</div>";
    html += ' <label class="col-sm-3 noneDesktop width2 " >Qtd.</label>';
    html += '  <div class="col-sm-1 col-4 selectStructure displayInlineFlex">';
    html +=
        '      <select name="quantity_new_equipment_' +
        id_equipamento +
        "_" +
        count_Equipamento +
        '" class="form-control">';
    for (var i = 0; i <= 100; i++) {
        html += '          <option value="' + i + '">' + i + "</option>";
    }
    html += "      </select>";
    html += "  </div>";
    html +=
        '  <div class="col-sm-3  unityStructureNew displayInlineFlex" style="padding-right: 0px; margin-left: -20px;">';
    html +=
        '      <select name="uninade_new_equipment_' +
        id_equipamento +
        "_" +
        count_Equipamento +
        '" class="form-control">';
    html += '          <option value="Metros">Metros</option>';
    html += '          <option value="Unidade">Unidade</option>';
    html += '          <option value="M²">M²</option>';
    html += "      </select>";
    html += "  </div>";
    html += '  <div class="col-sm-3 mt-10-mobile">';
    html +=
        '       <input type="text" class="form-control " id="" placeholder="Detalhe" name="description_new_equipment_' +
        id_equipamento +
        "_" +
        count_Equipamento +
        '" >';
    html += "  </div>";
    html += "<div class='col-sm-1'>";
    html += "<button type='button' style='margin-top: 0px' class='deleteEquipmentMandatory mt-10-mobile btnDeleteAdm' data-equip='0' data-id='0'> Deletar </button>";
    html += "</div>";

    html += '  <div class="clearfix"></div>';
    html += '  <div class="mb-10"></div>';

    $("#DivEquipement_" + id_equipamento).append(html);
});
$(".changeEstruturasEquipamentos").unbind("change");
$(".changeEstruturasEquipamentos").bind("change", function (e) {
    if ($(".hideEstruturasEquipamentos").is(":visible")) {
        $(".hideEstruturasEquipamentos").hide();
        return;
    }
    $(".hideEstruturasEquipamentos").show();
});

$(".changeAvailableRentStructure").unbind("change");
$(".changeAvailableRentStructure").bind("change", function (e) {
    if ($(".showValueRentStructure").is(":visible")) {
        $(".showValueRentStructure").hide();
        $(".showContactRentStructure").show();
        return;
    }
    $(".showValueRentStructure").show();
    $(".showContactRentStructure").hide();
});

$(".valueRentStructure").unbind("change");
$(".valueRentStructure").bind("change", function (e) {
    var value = $(this).val().replace("R$", "");
    value = conversor(value);
    var porcentagem = calculoPorcentagem(value, 15).replace("R$", "");
    var final = value - porcentagem;
    var formatter = new Intl.NumberFormat("ja-JP", {
        style: "currency",
        currency: "BRL",
    }).format(final);
    $(this).parent().next().children().val(formatter.format(final));

    var valueTotal = 0;
    var totalLiquido = 0;
    $(".valueRentStructure").each(function () {
        var valueInput = $(this).val().replace("R$", "");
        valueInput = conversor(valueInput);
        valueTotal = parseFloat(valueInput) + parseFloat(valueTotal);
    });

    var formatter = new Intl.NumberFormat("ja-JP", {
        style: "currency",
        currency: "BRL",
    }).format(valueTotal);
    $("#valueRentStructureFinal").val(formatter.format(valueTotal));
});

function initSelect2FromInputParam(input) {
    var tags = $(input).attr("data-tags").toString().split(" | ");
    var canCreate = !$(input).attr("data-no-create");

    $(input).select2({
        tags: tags,
        formatSelection: function (tag, container) {
            if (canCreate || tags.includes(tag.text.toString()))
                return tag.text;
            throw "Você não pode cadastrar este valor";
        },
        formatResult: function (tag) {
            return tag.text;
        },
    });
}

document.addEventListener("DOMContentLoaded", init, false);

//To save an array of attachments
var AttachmentArray = [];

//counter for attachment array
var arrCounter = 0;

//to make sure the error message for number of files will be shown only one time.
var filesCounterAlertStatus = false;

//un ordered list to keep attachments thumbnails
var ul = document.createElement("ul");
ul.className = "thumb-Images";
ul.id = "imgList";

function init() {
    //add javascript handlers for the file upload event
    document
        .querySelector("#files")
        .addEventListener("change", handleFileSelect, false);
}

//the handler for file upload event
function handleFileSelect(e) {
    //to make sure the user select file/files
    if (!e.target.files) return;

    //To obtaine a File reference
    var files = e.target.files;

    // Loop through the FileList and then to render image files as thumbnails.
    for (var i = 0, f; (f = files[i]); i++) {
        //instantiate a FileReader object to read its contents into memory
        var fileReader = new FileReader();

        // Closure to capture the file information and apply validation.
        fileReader.onload = (function (readerEvt) {
            return function (e) {
                //Apply the validation rules for attachments upload
                ApplyFileValidationRules(readerEvt);

                //Render attachments thumbnails.
                RenderThumbnail(e, readerEvt);

                //Fill the array of attachment
                FillAttachmentArray(e, readerEvt);
            };
        })(f);

        // Read in the image file as a data URL.
        // readAsDataURL: The result property will contain the file/blob's data encoded as a data URL.
        // More info about Data URI scheme https://en.wikipedia.org/wiki/Data_URI_scheme
        fileReader.readAsDataURL(f);
    }
    document
        .getElementById("files")
        .addEventListener("change", handleFileSelect, false);
}

//To remove attachment once user click on x button
jQuery(function ($) {
    $("div").on("click", ".img-wrap .close", function () {
        var id = $(this).closest(".img-wrap").find("img").data("id");

        //to remove the deleted item from array
        var elementPos = AttachmentArray.map(function (x) {
            return x.FileName;
        }).indexOf(id);
        if (elementPos !== -1) {
            AttachmentArray.splice(elementPos, 1);
        }

        //to remove image tag
        $(this).parent().find("img").not().remove();

        //to remove div tag that contain the image
        $(this).parent().find("div").not().remove();

        //to remove div tag that contain caption name
        $(this).parent().parent().find("div").not().remove();

        //to remove li tag
        var lis = document.querySelectorAll("#imgList li");
        for (var i = 0; (li = lis[i]); i++) {
            if (li.innerHTML == "") {
                li.parentNode.removeChild(li);
            }
        }
    });
});

//Apply the validation rules for attachments upload
function ApplyFileValidationRules(readerEvt) {
    //To check file type according to upload conditions
    if (CheckFileType(readerEvt.type) == false) {
        alert(
            "O Arquivo (" +
                readerEvt.name +
                ") é diferentes dos formatos aceitos. ( Formato JPEG, GIF ou PNG )"
        );
        e.preventDefault();
        return;
    }

    //To check file Size according to upload conditions
    if (CheckFileSize(readerEvt.size) == false) {
        alert(
            "O Arquivo (" +
                readerEvt.name +
                ") é maior que o tamanho máximo de 2MB "
        );
        e.preventDefault();
        return;
    }

    //To check files count according to upload conditions
    if (CheckFilesCount(AttachmentArray) == false) {
        if (!filesCounterAlertStatus) {
            filesCounterAlertStatus = true;
            alert("Limite de 9 uplodas por vez!");
        }
        e.preventDefault();
        return;
    }
}

//To check file type according to upload conditions
function CheckFileType(fileType) {
    if (fileType == "image/jpeg") {
        return true;
    } else if (fileType == "image/png") {
        return true;
    } else if (fileType == "image/gif") {
        return true;
    } else {
        return false;
    }
    return true;
}

//To check file Size according to upload conditions
function CheckFileSize(fileSize) {
    if (fileSize < 3000000) {
        return true;
    } else {
        return false;
    }
    return true;
}

//To check files count according to upload conditions
function CheckFilesCount(AttachmentArray) {
    //Since AttachmentArray.length return the next available index in the array,
    //I have used the loop to get the real length
    var len = 0;
    for (var i = 0; i < AttachmentArray.length; i++) {
        if (AttachmentArray[i] !== undefined) {
            len++;
        }
    }
    //To check the length does not exceed 10 files maximum
    var imgAlreadyRegistered = parseInt($("#totalImagens").val());
    if (len > 8 - imgAlreadyRegistered) {
        return false;
    } else {
        return true;
    }
}

//Render attachments thumbnails.
function RenderThumbnail(e, readerEvt) {
    var li = document.createElement("li");
    ul.appendChild(li);
    li.innerHTML = [
        '<div class="img-wrap"> <span class="close">&times;</span>' +
            '<img class="thumb" src="',
        e.target.result,
        '" title="',
        escape(readerEvt.name),
        '" data-id="',
        readerEvt.name,
        '"/>' + "</div>",
    ].join("");

    var div = document.createElement("div");
    div.className = "FileNameCaptionStyle";
    li.appendChild(div);
    div.innerHTML = [readerEvt.name].join("");
    document.getElementById("Filelist").insertBefore(ul, null);
}

//Fill the array of attachment
function FillAttachmentArray(e, readerEvt) {
    AttachmentArray[arrCounter] = {
        AttachmentType: 1,
        ObjectType: 1,
        FileName: readerEvt.name,
        FileDescription: "Attachment",
        NoteText: "",
        MimeType: readerEvt.type,
        Content: e.target.result.split("base64,")[1],
        FileSizeInBytes: readerEvt.size,
    };
    arrCounter = arrCounter + 1;
}

$(".deleteImagesArray").unbind("click");
$(".deleteImagesArray").bind("click", function () {
    var id = $(this).attr("data-id");
    $(this).prev().hide();
    $(this).hide();
    $.ajax({
        url: baseurl + "artistas/delete_img_secunday/" + id,
        type: "GET",
        dataType: "json",
    })
        .done(function (result) {})
        .fail(function (p1, p2, p3) {
            alert("Falha em se contactar com o servidor");
        });
});

$("#week_discount").unbind("change");
$("#week_discount").bind("change", function (e) {
    if ($(".show_week_discount").is(":visible")) {
        $(".show_week_discount").hide();
        return;
    }
    $(".show_week_discount").show();
});

$("#week_discount_recurrent").unbind("change");
$("#week_discount_recurrent").bind("change", function (e) {
    if ($(".show_week_discount_recurrent").is(":visible")) {
        $(".show_week_discount_recurrent").hide();
        return;
    }
    $(".show_week_discount_recurrent").show();
});

$("#newDatesMemorial").unbind("click");
$("#newDatesMemorial").bind("click", function (e) {
    var dates_memorial_string = $("#dates_memorial_string").val().split(" | ");
    var countDates = $("#count_dates_memorial").val();
    countDates = parseInt(countDates) + 1;
    $("#count_dates_memorial").val(countDates);

    var html = '<div class="clearfix"></div>';
    html += '<div class="col-md-3"></div>';

    html += '<input type="hidden" name="dates_memorial_id_' + countDates + '">';
    html += '<div class="col-md-2 col-sm-6 col-xs-6 col-6 mt-10">';
    html +=
        '<select name="date_memorial_' +
        countDates +
        '" id="date_memorial_' +
        countDates +
        '" class="form-control ignore-input state mb10"> ';
    html += '<option value="">Selecionar Datas</option>';
    html += " </select>";
    html += "</div>";

    html += '<div class="col-md-2  mt-10 col-sm-1 col-1 divInputDatesMemorial">';
    html +=
        '<input type="tel" inputmode="numeric" class="form-control ignore-input money2 value_date_memorial_change" ';
    html += 'id="date_memorial_percentagem_' + countDates + '" ';
    html += 'data-count="' + countDates + '"';
    html += 'name="date_memorial_percentagem_' + countDates + '" ';
    html += 'placeholder="R$ 0,00" >';
    html += "</div>";

    html += '<div class="col-md-1 col-xs-6 col-sm-6 divValuesChangeDatesMemorial mt-10">';
    html +=
        '<span class="spanVal_' +
        countDates +
        '" style="margin-right: -30px; ">R$ 0,00 </span>';
    html +=
         '<i data-toggle="tooltip" data-placement="top" title="Cachê Padrão." style="margin-top: 3px;" class="fas fa-info-circle"></i>';

    // html +=
    //     '<span class="spanVal2_' +
    //     countDates +
    //     '" style="margin-right: -30px;">R$ 0,00 </span>';
    // html +=
    //     ' <i data-toggle="tooltip" data-placement="top" title="Valor de Contratantes Recorrentes - Cachê Padrão" class="far fa-question-circle textValue"></i>';
    html += "</div>";

    html += "<div class='col-md-1 col-xs-6 col-sm-6'>";
    html += "<button type='button' class='deleteValoresDatasComemorativas btnDeleteAdm' data-id='0'> Deletar</button>";
    html += "</div>";

    setTimeout(function () {
        $(".money2").maskMoney({
            prefix: "R$ ",
            allowNegative: true,
            thousands: ".",
            decimal: ",",
            affixesStay: true,
            allowEmpty: true,
        });
        dates_memorial_string.forEach(function (name) {
            $("#date_memorial_" + countDates).append(
                '<option value="' + name + '">' + name + "</option>"
            );
        });
        $("body").tooltip({
            selector: '[data-toggle="tooltip"]',
        });
    }, 100);

    $("#novasDates").append(html);
});

$("#custo_limit_transport_free").unbind("change");
$("#custo_limit_transport_free").bind("change", function (e) {
    var value = $(this).val();
    $(".valueInclusoAte").text(value + " KM");
});

$(".day_week").unbind("change");
$(".day_week").bind("change", function (e) {
    var text = "";
    $('input[name="days_week_discount[]"]:checked').each(function (i, html) {
        text = i != 0 ? text + " - " + html.value : html.value;
        console.log(i, html.value);
    });
    $(".daysSelect").text("( " + text + " )");
});

$(".day_week_recurrent").unbind("change");
$(".day_week_recurrent").bind("change", function (e) {
    var text = "";
    $('input[name="days_week_discount_recurrent[]"]:checked').each(function (
        i,
        html
    ) {
        text = i != 0 ? text + " - " + html.value : html.value;
        console.log(i, html.value);
    });
    $(".daysSelect_recurrent").text("( " + text + " )");
});

$(".btnTimePlus").unbind("click");
$(".btnTimePlus").bind("click", function (e) {
    var hours = $(this).prev().val().split(":");
    if (hours[1] == "45") {
        var hoursCurrent = parseInt(hours[0]);
        hoursCurrent++;
        $(this)
            .prev()
            .val(hoursCurrent + ":00");
        return;
    }
    var minuteCurrent = hours[1];
    minuteCurrent = parseInt(minuteCurrent) + parseInt("15");
    $(this)
        .prev()
        .val(hours[0] + ":" + minuteCurrent);
});

$(".btnTimeMinus").unbind("click");
$(".btnTimeMinus").bind("click", function (e) {
    var hours = $(this).next().val().split(":");
    console.log(hours, hours[0]);
    if ((hours[0] == "0" ) && hours[1] == "15") {
        return;
    }

    if ((hours[0] == "0" || hours[0] == "00" ) && (hours[1] == "15" || hours[1] == "00")) {
        return;
    }
    if (hours[1] == "00") {
        var hoursCurrent = parseInt(hours[0]);
        hoursCurrent--;
        $(this)
            .next()
            .val(hoursCurrent + ":45");
        return;
    }
    var minuteCurrent = hours[1];
    minuteCurrent = parseInt(minuteCurrent) - parseInt("15");
    if (minuteCurrent == 0) {
        minuteCurrent = "00";
    }
    $(this)
        .next()
        .val(hours[0] + ":" + minuteCurrent);
});

$(".changeLinkArtist").unbind("change");
$(".changeLinkArtist").bind("change", function (e) {
    showHideMeusArtistas();
});

function showHideMeusArtistas() {
    if (!$(".changeLinkArtist input")[0] || !$(".changeLinkArtist input")[0].checked) {
        $(".showLinkArtist").hide();
        $(".showLinkArtist").removeClass("displayBlockMobile");
        return;
    }
    $(".showLinkArtist").addClass("displayBlockMobile");
    $(".showLinkArtist").show();
}

$(".btnPresentationPlus").unbind("click");
$(".btnPresentationPlus").bind("click", function (e) {
    var value = $(this).prev().val();
    value = parseInt(value);
    if (value == 24) {
        return;
    }
    value++;
    $(this).prev().val(value);
});

$(".btnPresentationMinus").unbind("click");
$(".btnPresentationMinus").bind("click", function (e) {
    var value = $(this).next().val();
    if (value == "0" || value == 0) {
        return;
    }
    value = parseInt(value);
    value--;
    $(this).next().val(value);
});

$(".changeBlockHoliday").unbind("change");
$(".changeBlockHoliday").bind("change", function (e) {
    showHideFeriados();
});

function showHideFeriados() {
    if (!$(".changeBlockHoliday input")[0].checked) {
        $(".showBlockHoliday").hide();
        return;
    }
    $(".showBlockHoliday").show();
}

$(".changeCountMusic").unbind("change");
$(document.body).on("change", ".changeCountMusic", function (e) {
    var total = 0;
    $(".changeCountMusic").each(function () {
        var valueInput = $(this).val();
        console.log("musica", valueInput);
        if (valueInput.length > 1) {
            total++;
        }
    });
    console.log("total", total);
    $("#totalMusicas").text(total + " Músicas");
});


$(".removeMusic").unbind("click");
$(document.body).on("click", ".removeMusic", function (e) {
    
    var countLinha = $(this).attr("data-count");
    // $("#musica" + countLinha).hide();
    // $("#name_musica_" + countLinha).val("");

    var id_delete = $(this).attr("data-id");
    
    var delete_input = $("#deleteMusic").val();
    if (!delete_input) {
        delete_input = 0;
    }
    $("#deleteMusic").val(delete_input + " | " + id_delete);

    $(this).parent().hide();
    $(this).parent().prev().hide();
    $(this).parent().prev().prev().hide();
    $(this).parent().prev().prev().prev().hide();
    $(this).parent().prev().prev().children().children().val('');
    $(this).parent().prev().children().children().val('');
});

$("#newMusica").click(function () {

    var count_music = $("#count_musica").val();
    count_music++;
    var html = '  <div class= "col-md-12 mb-menos-10-mobile " id="musica' + count_music + '"  style="margin-left:-7px">';
               
        html += '   <label class="col-sm-4 control-label noneMobile"></label>';
        //html += '   <input type="hidden" name="musica_id_' + count_music + '" >';
        
        html += '   <div class="col-md-3 col-sm-12 musicMobileLeft">';
        html += '      <div class="form-group  textCenterMobile mb-10-mobile">';
        html += '         <input type="text" placeholder="Nome da música" ';
        html += '         class="form-control ignore-input  changeCountMusic" id="name_musica_' + count_music + '" ';
        html += '         name="name_musica_' + count_music + '" >';
        html += '     </div>';
        html += '   </div>';

        html += '   <div class="col-md-3 col-sm-12 musicMobileRight">';
        html += '      <div class="form-group  textCenterMobile mb-10-mobile">';
        html += '         <input type="text" placeholder="Artista de referência" class="form-control ignore-input " ';
        html += '                 name="reference_artist_' + count_music + '" >';
        html += '       </div>';
        html += '   </div>';
        html += '   <div class="col-md-3 col-sm-12 musicMobileLeft ml-menos-5-mobile divRemoveMusic mb-35-mobile" >';
        html += '     <button type="button" style="margin-top: -6px;" class=" btnDeleteAdm removeMusic" ';
        html += '             data-id="<?=$music->getId()?>" data-count="' + count_music + '"> Deletar</button>';
        html += '    </div>';
        html += '   </div>';
        html += '<div class="clearfix"></div>';
    
    $("#totalMusicas").text(" ");
    $("#totalMusicas").text(count_music + " músicas ");
    $("#count_musica").val(count_music);
    $("#divNewMusic").append(html);
});

$(document).on("click", ".add15MinuteSong", function (evt) {
    evt.stopImmediatePropagation();
    let input = $(this).parent().find($('input[name^="timeSong"]'));

    var hours = input.val().split(":");
    if (hours[1] == "45") {
        var hoursCurrent = parseInt(hours[0]);
        hoursCurrent++;
        input.val(hoursCurrent + ":00");
        return;
    }
    var minuteCurrent = hours[1];
    minuteCurrent = parseInt(minuteCurrent) + parseInt("15");
    input.val(hours[0] + ":" + minuteCurrent);
});

$(document).on("click", ".remove15minuteSong", function (evt) {
    evt.stopImmediatePropagation();
    let input = $(this).parent().find($('input[name^="timeSong"]'));
    var hours = input.val().split(":");
    if (hours[0] == "1" && hours[1] == "00") {
        return;
    }
    if (hours[1] == "00") {
        var hoursCurrent = parseInt(hours[0]);
        hoursCurrent--;
        input.val(hoursCurrent + ":45");
        return;
    }
    var minuteCurrent = hours[1];
    minuteCurrent = parseInt(minuteCurrent) - parseInt("15");
    if (minuteCurrent == 0) {
        minuteCurrent = "00";
    }
    input.val(hours[0] + ":" + minuteCurrent);
});

$(document).on("click", "#add5Minute", function (evt) {
    evt.stopImmediatePropagation();
    let input = $("#maxPresentationTime");

    var hours = input.val().split(":");
    if (hours[1] == "55") {
        var hoursCurrent = parseInt(hours[0]);
        hoursCurrent++;
        input.val(hoursCurrent + ":00");
        return;
    }
    var minuteCurrent = hours[1];
    minuteCurrent = parseInt(minuteCurrent) + parseInt("5");
    if (minuteCurrent == 5) {
        minuteCurrent = "05";
    }
    input.val(hours[0] + ":" + minuteCurrent);
});

$(document).on("click", "#remove5Minute", function (evt) {
    evt.stopImmediatePropagation();
    let input = $("#maxPresentationTime");
    var hours = input.val().split(":");
    if (hours[0] == "1" && hours[1] == "00") {
        return;
    }
    if (hours[1] == "00") {
        var hoursCurrent = parseInt(hours[0]);
        hoursCurrent--;
        input.val(hoursCurrent + ":55");
        return;
    }
    var minuteCurrent = hours[1];
    minuteCurrent = parseInt(minuteCurrent) - parseInt("5");
    if (minuteCurrent == 0) {
        minuteCurrent = "00";
    }
    if (minuteCurrent == 5) {
        minuteCurrent = "05";
    }
    input.val(hours[0] + ":" + minuteCurrent);
});

$(document).on("change", "#convidados", function (evt) {
    let valor = $("#convidados").is(":checked");
    if (valor) {
        $("#formConvidados").show();
    } else {
        $("#formConvidados").hide();
        clear_form_elements("formConvidados");
    }
});

$(".changeTimeParticipant").unbind("click");
$(".changeTimeParticipant").bind("click", function (e) {
    let valor = $("#limiteConvidados").is(":checked");
    if (valor) {
        $(".showTimeParticipan").show();
    } else {
        $(".showTimeParticipan").hide();
    }
});

// $(document).ready(function(){
//     var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
//     if(w < 692){
//         if($('.placeholder-music-name').length > 0){
//             $(".placeholder-music-name").attr("placeholder", "Nome da música");

//         }if($('.placeholder-reference-artist').length > 0  ){
//             $(".placeholder-reference-artist").attr("placeholder", "Artista de referência");
//         }
//     }else{
//         if($('.placeholder-music-name').length > 0){
//             $(".placeholder-music-name").attr("placeholder", "");

//         }if($('.placeholder-reference-artist').length > 0 ){
//             $(".placeholder-reference-artist").attr("placeholder", "");
//         }
//     }
// });

// $(window).resize(function(){
//     var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
//     if(w < 692){
//         if($('.placeholder-music-name').length > 0){
//             $(".placeholder-music-name").attr("placeholder", "Nome da música");

//         }if($('.placeholder-reference-artist').length > 0 ){
//             $(".placeholder-reference-artist").attr("placeholder", "Artista de referência");
//         }
//     }else{
//         if($('.placeholder-music-name').length > 0){
//             $(".placeholder-music-name").attr("placeholder", "");

//         }if($('.placeholder-reference-artist').length > 0  ){
//             $(".placeholder-reference-artist").attr("placeholder", "");
//         }
//     }
// });

function clear_form_elements(id_name) {
    $("#" + id_name)
        .find(":input")
        .each(function () {
            switch (this.type) {
                case "checkbox":
                    this.checked = false;
                    break;
                case "radio":
                    this.checked = false;
                    break;
                case "text":
                    $(this).val("");
                    break;
            }

            if (
                ($(this).attr("name") != undefined &&
                    $(this).attr("name").includes("timeSong")) ||
                $(this).attr("name") == "maxPresentationTime"
            ) {
                $(this).val("03:00");
            }
        });
}

$(".fineChangeSelect").unbind("change");
$(".fineChangeSelect").bind("change", function (e) {
    var selected = $(this).attr("data-type");

    var cancellation_25_original = $("#fine_cancellation_25").val();
    var cancellation_50_original = $("#fine_cancellation_50").val();
    var cancellation_75_original = $("#fine_cancellation_75").val();

    if (selected == "free") {
        var cancellation_free = $("#fine_cancellation_free").val();
        newOptionSelected(
            cancellation_free,
            "#fine_cancellation_25",
            cancellation_25_original
        );
        setTimeout(function () {
            var cancellation_25 = $("#fine_cancellation_25").val();
            newOptionSelected(
                cancellation_25,
                "#fine_cancellation_50",
                cancellation_50_original
            );
        }, 100);
        setTimeout(function () {
            var cancellation_50 = $("#fine_cancellation_50").val();
            newOptionSelected(
                cancellation_50,
                "#fine_cancellation_75",
                cancellation_75_original
            );
        }, 100);
        return;
    }
    if (selected == "25") {
        setTimeout(function () {
            var cancellation_25 = $("#fine_cancellation_25").val();
            newOptionSelected(
                cancellation_25,
                "#fine_cancellation_50",
                cancellation_50_original
            );
        }, 100);
        setTimeout(function () {
            var cancellation_50 = $("#fine_cancellation_50").val();
            newOptionSelected(
                cancellation_50,
                "#fine_cancellation_75",
                cancellation_75_original
            );
        }, 100);
        return;
    }
    if (selected == "50") {
        setTimeout(function () {
            var cancellation_50 = $("#fine_cancellation_50").val();
            newOptionSelected(
                cancellation_50,
                "#fine_cancellation_75",
                cancellation_75_original
            );
        }, 100);
        return;
    }
});

$(".structureIncludedChange").unbind("change");
$(document).on("change", ".structureIncludedChange", function (evt) {
    var selected_attr = $(this).attr("data-key");
    var selected_id = $(this).val();
    var array_equipment = $("#structure_equipment_id_" + selected_id)
        .val()
        .split(" | ")
        .reverse();

    $("#equipment_" + selected_attr).empty();
    array_equipment.forEach(function (text) {
        $("#equipment_" + selected_attr).append(
            '<option value="' + text + '">' + text + "</option>"
        );
    });
});

function newOptionSelected(selectBase, idSelect, value_original) {
    var array_prazos = $("#term_fine_cancellation")
        .val()
        .split(" | ")
        .reverse();
    var tamanho = array_prazos.length;

    var position = array_prazos.indexOf(selectBase);
    var new_array = array_prazos.splice(
        array_prazos.indexOf(selectBase),
        tamanho - position
    );

    new_array.shift();
    $(idSelect).empty();
    new_array.forEach(function (item) {
        $(idSelect).append(
            '<option value="' + item + '">' + item + "</option>"
        );
    });
    $(idSelect).val(value_original);
}

$(".fineChangeSelect").change();

$(".addNewStructureIncluded").unbind("click");
$(".addNewStructureIncluded").bind("click", function (e) {
    var countEquipmentIncluded = $("#qtyEquipmentIncluded").val();
    countEquipmentIncluded = parseInt(countEquipmentIncluded) + 1;
    $("#qtyEquipmentIncluded").val(countEquipmentIncluded);

    var html = '<div class="col-sm-3"  ></div>';
    html += '<div class="col-sm-3 mt-10-mobile" style="margin-bottom: 13px;">';
    html +=
        '<select name="equipment_included_estructure_' +
        countEquipmentIncluded +
        '" id="estructure_' +
        countEquipmentIncluded +
        '" data-key="' +
        countEquipmentIncluded +
        '" class="form-control  ignore-input structureIncludedChange">';
    html += '<option value="">Selecione uma opção</option>';
    html += "</select>";
    html += "</div>";
    html += '<div class="col-sm-3 mb-10">';
    html +=
        '<select name="equipment_included_equipment_' +
        countEquipmentIncluded +
        '" id="equipment_' +
        countEquipmentIncluded +
        '" data-key="' +
        countEquipmentIncluded +
        '" class="form-control  ignore-input">';
    html += '<option value=""></option>';
    html += "</select>";
    html += "</div>";
    html += '<div class="col-sm-2">';
    html +=
        '<input type="text" placeholder="Detalhes" name="equipment_included_description_' +
        countEquipmentIncluded +
        '" id="description_' +
        countEquipmentIncluded +
        '" data-key="' +
        countEquipmentIncluded +
        '" class="form-control  ignore-input">';
    html += "</div>";
    html += "<div class='col-sm-1'>";
    html += "<button type='button' style='margin-top: 0px;' class='deleteEquipment btnDeleteAdm mt-10-mobile' data-id='0'> Deletar</button>";
    html += "</div>";
    html += '<div class="clearfix"></div>';

    $("#DivEquipementIncluded").append(html);

    setTimeout(function () {
        var array_struture_string = $("#structure_strings")
            .val()
            .split(" | ")
            .reverse();
        var structure_ids = $("#structure_ids").val().split(" | ").reverse();
        array_struture_string.forEach(function (text, item) {
           
            $("#estructure_" + countEquipmentIncluded).append(
                '<option value="' +
                    structure_ids[item] +
                    '">' +
                    text +
                    "</option>"
            );
        });
    }, 100);

    var formatter = new Intl.NumberFormat("ja-JP", {
        style: "currency",
        currency: "BRL",
    }).format(totalLiquido);
    $("#valueRentStructureFinalLiquid").val(formatter.format(totalLiquido));
});

// Tela de Bloqueios Manuais
$(".selectTipoBloqueio").on("change", (event) => {
    const bloqueioSimples = "0";
    if (event.target.value === bloqueioSimples) {
        $(".form-tipo-evento").hide();
        $(".form-bloqueio-localizacao").hide();
        $(".form-cep").removeClass("required");
    } else {
        $(".form-tipo-evento").show();
        $(".form-bloqueio-localizacao").show();
        $(".form-cep").addClass("required");
    }
});

$(".deleteEquipment").unbind("click");
$(document.body).on("click", ".deleteEquipment", function (e) {

    var id_delete = $(this).attr("data-id");

    var delete_input = $("#deleteEquipmentInlcluded").val();
    if (!delete_input) {
        delete_input = 0;
    }
    $("#deleteEquipmentInlcluded").val(delete_input + " | " + id_delete);
   
    $(this).parent().prev().hide();
    $(this).parent().prev().prev().hide();
    $(this).parent().prev().prev().children().empty();
    $(this).parent().prev().prev().prev().hide();
    $(this).parent().hide();
});

$(".deleteEquipmentMandatory").unbind("click");
$(document.body).on("click", ".deleteEquipmentMandatory", function (e) {

    var id_delete = $(this).attr("data-id");

    var delete_input = $("#inputDeleteEquipmentMandatory").val();
    if (!delete_input) {
        delete_input = 0;
    }
    $("#inputDeleteEquipmentMandatory").val(delete_input + " | " + id_delete);
    console.log($("#inputDeleteEquipmentMandatory").val());
    var id_structure = $(this).attr('data-equip');
    // $('.rowStructure_'+id_structure).hide();
    
    $(this).parent().hide();
    $(this).parent().prev().hide();
    $(this).parent().prev().prev().hide();
    $(this).parent().prev().prev().removeClass('displayInlineFlex');
    $(this).parent().prev().prev().prev().removeClass('displayInlineFlex');
    $(this).parent().prev().prev().prev().hide();
    $(this).parent().prev().prev().prev().prev().hide();
    $(this).parent().prev().prev().prev().prev().prev().hide();
    $(this).parent().prev().prev().prev().prev().prev().children().val('');
    $(this).parent().prev().prev().prev().prev().prev().prev().hide();
    $(this).parent().prev().prev().prev().prev().prev().prev().prev().hide();
});


$("#categorie").unbind("change");
$("#categorie").bind("change", function (e) {
    $('#copyValueCategorie').text($('option:selected', this).attr('data-value'));
});


$(".deleteIntegrantes").unbind("click");
$(document.body).on("click", ".deleteIntegrantes", function (e) {

    var id_delete = $(this).attr("data-id");

    var delete_input = $("#inputDeleteIntregrantes").val();
    if (!delete_input) {
        delete_input = 0;
    }
    $("#inputDeleteIntregrantes").val(delete_input + " | " + id_delete);
    $(this).parent().parent().hide();
    $(this).parent().prev().children().children().val('');
    $(this).parent().parent().prev().hide();
    $(this).parent().parent().prev().prev().hide();
    $(this).parent().parent().prev().prev().prev().hide();
    $(this).parent().parent().prev().children().children().val('');
 
});

$(".deleteVideos").unbind("click");
$(document.body).on("click", ".deleteVideos", function (e) {

    var id_delete = $(this).attr("data-id");

    var delete_input = $("#inputDeleteVideos").val();
    if (!delete_input) {
        delete_input = 0;
    }
    $("#inputDeleteVideos").val(delete_input + " | " + id_delete);
    console.log($("#inputDeleteVideos").val());
    $(this).val('');
    $(this).parent().hide();
    $(this).parent().prev().hide();
    $(this).parent().prev().prev().hide();
    $(this).parent().prev().prev().children().val('');
 
});



$(".calcPercentagemWeek").unbind("change");
$(".calcPercentagemWeek").bind("change", function (e) {
    calculoValuesWeek();
});

function calculoValuesWeek(){

    var cash_total   = 0;
    var cash_30_min  = 0;
    var cash_1_hour  = 0;
    var percentagem  = 0;

    if(typeof $('#valor_cache').val() !== "undefined"){
        cash_total   = $('#valor_cache').val().replace("R$", "");
    }
    if(typeof $('#valor_cache_30_min').val() !== "undefined"){
        cash_30_min  = $('#valor_cache_30_min').val().replace("R$", "");
    }
    if(typeof $('#valor_cache_1_hour').val() !== "undefined"){
        cash_1_hour  = $('#valor_cache_1_hour').val().replace("R$", "");
    }
    if(typeof $('#percentual_week').val() !== "undefined"){
        percentagem  = $('#percentual_week').val();
    }
  

    if(cash_total == ""){
        cash_total = 0;
    }

    if(cash_30_min == ""){
        cash_30_min = 0;
    }

    if(cash_1_hour == ""){
        cash_1_hour = 0;
    }

    cash_total = conversor(cash_total);
    cash_30_min = conversor(cash_30_min);
    cash_1_hour = conversor(cash_1_hour);

    var cash_total_porcentagem = calculoPorcentagem(parseFloat(cash_total), parseInt(percentagem));
    var cash_30_min_porcentagem = calculoPorcentagem(parseFloat(cash_30_min), parseInt(percentagem));
    var cash_1_hour_porcentagem = calculoPorcentagem(parseFloat(cash_1_hour), parseInt(percentagem));

    cash_total_porcentagem = cash_total_porcentagem.replace("R$", "");
    cash_30_min_porcentagem = cash_30_min_porcentagem.replace("R$", "");
    cash_1_hour_porcentagem = cash_1_hour_porcentagem.replace("R$", "");

    cash_total_porcentagem = cash_total - cash_total_porcentagem;
    cash_30_min_porcentagem = cash_30_min - cash_30_min_porcentagem;
    cash_1_hour_porcentagem = cash_1_hour - cash_1_hour_porcentagem;
    
    $('.percentualCachePadrao').text(formatInCash(cash_total_porcentagem));
    $('.percentual30Min').text(formatInCash(cash_30_min_porcentagem));
    $('.percentual1Hora').text(formatInCash(cash_1_hour_porcentagem));
}

$(".deleteValoresDatasComemorativas").unbind("click");
$(document.body).on("click", ".deleteValoresDatasComemorativas", function (e) {
    var id_delete = $(this).attr("data-id");

    var delete_input = $("#inputDeleteValoresAdicionaisDatasComemoratidas").val();
    if (!delete_input) {
        delete_input = 0;
    }
    $("#inputDeleteValoresAdicionaisDatasComemoratidas").val(delete_input + " | " + id_delete);
    console.log($("#inputDeleteValoresAdicionaisDatasComemoratidas").val());
    $(this).parent().hide();
    $(this).parent().prev().hide();
    $(this).parent().prev().prev().hide();
    $(this).parent().prev().prev().children().val('');
    $(this).parent().prev().prev().prev().hide();
 
});


$(".boxStructure").unbind("click");
$(".boxStructure").bind("click", function (e) {
    var id = $(this).attr("data-id");
    if(!$('.rowStruc_'+id).is(":visible")){
        $('.allRowsStruc').hide();
        $('.rowStruc_'+id).show();
        return;
    }
    $('.rowStruc_'+id).show();
    return;
    
});



$(".qtdStructure").unbind("change");
$(".qtdStructure").bind("change", function (e) {
    var id = $('option:selected', this).attr('data-id');
   
    var total = 0;
    
   $('.qtdStructureId_' + id + ' :selected').each(function(i, html) {
        if($(this).is(':selected')){
            total += parseInt($(this).val());
        }
    });
    if(total > 1){
        $('.divValueStructureMandatory_' +id).show();
        return;
    }
    $('.divValueStructureMandatory_' +id).hide();
});

function calculoMetroQuadrado(){
    console.log("calculo 11");

    var largura      = $('.calLargura :selected').val();
    var profundidade = $('.calPronfundidade :selected').val();
    var total = largura * profundidade
   
    $('#valueInSquareMeters').text(total + ' m2');
}

$(".calLargura").unbind("change");
$(".calLargura").bind("change", function (e) {
    
    calculoMetroQuadrado();
    var largura             = $('.calLargura :selected').val();
    var id_equipamento      = $('#Largura_Palco').val();
    var qty_palco_exigido   = $('#quantity_equipment_' + id_equipamento).val();

    if(qty_palco_exigido == 0 || qty_palco_exigido == "0"){
        $('#quantity_equipment_' + id_equipamento).val(largura);
    }
});

$(".calPronfundidade").unbind("change");
$(".calPronfundidade").bind("change", function (e) {

    calculoMetroQuadrado();
    var profundidade        = $('.calPronfundidade :selected').val();
    var id_equipamento      = $('#Pronfundidade_Palco').val();
    var qty_palco_exigido   = $('#quantity_equipment_' + id_equipamento).val();

    if(qty_palco_exigido == 0 || qty_palco_exigido == "0"){
        $('#quantity_equipment_' + id_equipamento).val(profundidade);
    }
});

$(".cep").mask("99999-999");


$('#is_cnpj').unbind('change');
$('#is_cnpj').bind('change', function() {
    var value = $('.tituloCpf').text();
    console.log(value);
    if(value == "CNPJ *"){
        $('.tituloCpf').text("CPF *");
        $("#cnpj_cpf").attr({placeholder:"Digite um CPF"});
        $("#cnpj_cpf").unmask().mask("999.999.999-99");
        return;
    }
    $('.tituloCpf').text("CNPJ *");
    $("#cnpj_cpf").attr({placeholder:"Digite um CNPJ"});
    $("#cnpj_cpf").unmask().mask("99.999.999/9999-99");
});

$('#is_video').unbind('change');
$('#is_video').bind('change', function() {
    if ($(".isVideo").is(":visible")) {
        $(".isVideo").hide();
        $(".noVideos").show();
        return;
    } 
    $(".isVideo").show();
    $(".noVideos").hide();
});

$('#buttonSendEmail').unbind('click');
$('#buttonSendEmail').bind('click', function() {
    var email = $('#sendEmail').val();
    if(!validarEmail(email)){
        alert("Email inválido");
        return;
    }


    //TODO - Fazer o Ajax de enviar esse email.
    $('.showMsg').text("Email enviado com sucesso!");
    $('#sendEmail').val('');
    setTimeout(function () {
        $('.showMsg').text('');
       
    }, 4000);

});




$(".masCPF").unmask().mask("999.999.999-99");
$(".masCnpj").unmask().mask("99.999.999/9999-99");

$('#cnpj_cpf').unbind('change');
$('#cnpj_cpf').bind('change', function() {
    var text = $('.tituloCpf').text();
    var value = $('#cnpj_cpf').val();

    if(text == "CPF *"){
        if(!ValidaCPF(value)){
            alert("CPF errado");
            $('#cnpj_cpf').val('');
        }
        return;
    }

    if(text == "CNPJ *"){
        if(!validarCNPJ(value)){
            alert("CNPJ errado");
            $('#cnpj_cpf').val('');
        }
    }
});


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


function validarCNPJ(cnpj) {
    cnpj = cnpj.replace(/[^\d]+/g, "");

    if (cnpj == "") return false;

    if (cnpj.length != 14) return false;

    // Elimina CNPJs invalidos conhecidos
    if (
        cnpj == "00000000000000" ||
        cnpj == "11111111111111" ||
        cnpj == "22222222222222" ||
        cnpj == "33333333333333" ||
        cnpj == "44444444444444" ||
        cnpj == "55555555555555" ||
        cnpj == "66666666666666" ||
        cnpj == "77777777777777" ||
        cnpj == "88888888888888" ||
        cnpj == "99999999999999"
    )
        return false;

    // Valida DVs
    var tamanho = cnpj.length - 2;
    var numeros = cnpj.substring(0, tamanho);
    var digitos = cnpj.substring(tamanho);
    var soma = 0;
    var pos = tamanho - 7;
    for (var i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2) pos = 9;
    }
    var resultado = soma % 11 < 2 ? 0 : 11 - (soma % 11);
    if (resultado != digitos.charAt(0)) return false;

    tamanho = tamanho + 1;
    numeros = cnpj.substring(0, tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (var i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2) pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - (soma % 11);
    if (resultado != digitos.charAt(1)) return false;

    return true;
}


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