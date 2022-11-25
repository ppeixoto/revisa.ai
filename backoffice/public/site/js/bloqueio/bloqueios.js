function applyEventListeners() {
    $('.btnMinusHoraInicioBloqueio').off('click');
    $('.btnPlusHoraInicioBloqueio').off('click');
    $('.btnMinusMinutoInicioBloqueio').off('click');
    $('.btnPlusMinutoInicioBloqueio').off('click');
    $('.btnMinusHoraFimBloqueio').off('click');
    $('.btnPlusHoraFimBloqueio').off('click');
    $('.btnMinusMinutoFimBloqueio').off('click');
    $('.btnPlusMinutoFimBloqueio').off('click');

    $('.btnMinusHoraInicioBloqueio').on('click', () => {
        if ($('.inputHoraInicio').val() !== '00') {
            const value = Number($('.inputHoraInicio').val());
            $('.inputHoraInicio').val((value - 1).toString().padStart(2, '0'));
        }
    });

    $('.btnPlusHoraInicioBloqueio').on('click', () => {
        if ($('.inputHoraInicio').val() !== '23') {
            const value = Number($('.inputHoraInicio').val());
            $('.inputHoraInicio').val((value + 1).toString().padStart(2, '0'));
        }
    });

    $('.btnMinusMinutoInicioBloqueio').on('click', () => {
        if ($('.inputMinutoInicio').val() !== '00') {
            const value = Number($('.inputMinutoInicio').val());
            $('.inputMinutoInicio').val((value - 15).toString().padStart(2, '0'));
        }
    });

    $('.btnPlusMinutoInicioBloqueio').on('click', () => {
        if ($('.inputMinutoInicio').val() !== '45') {
            const value = Number($('.inputMinutoInicio').val());
            $('.inputMinutoInicio').val(value + 15);
        }
    });

    $('.btnMinusHoraFimBloqueio').on('click', () => {
        if ($('.inputHoraFim').val() !== '00') {
            const value = Number($('.inputHoraFim').val());
            $('.inputHoraFim').val((value - 1).toString().padStart(2, '0'));
        }
    });

    $('.btnPlusHoraFimBloqueio').on('click', () => {
        if ($('.inputHoraFim').val() !== '23') {
            const value = Number($('.inputHoraFim').val());
            $('.inputHoraFim').val((value + 1).toString().padStart(2, '0'));
        }
    });

    $('.btnMinusMinutoFimBloqueio').on('click', () => {
        if ($('.inputMinutoFim').val() !== '00') {
            const value = Number($('.inputMinutoFim').val());
            $('.inputMinutoFim').val((value - 15).toString().padStart(2, '0'));
        }
    });

    $('.btnPlusMinutoFimBloqueio').on('click', () => {
        if ($('.inputMinutoFim').val() !== '45') {
            const value = Number($('.inputMinutoFim').val());
            $('.inputMinutoFim').val(value + 15);
        }
    });
};