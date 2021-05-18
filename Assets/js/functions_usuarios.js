function openModalEvento(){
    const divModal = document.getElementById('modalFormNewStream')
    const modal = new bootstrap.Modal(divModal)
    modal.show()
}

document.addEventListener('DOMContentLoaded', () => {
    $.fn.datepicker.dates['es'] = {
        days: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        daysShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        daysMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        months: [
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Septiembre',
            'Octubre',
            'Noviembre',
            'Diciembre',
        ],
        monthsShort: [
            'Ene',
            'Feb',
            'Mar',
            'Abr',
            'May',
            'Jun',
            'Jul',
            'Ago',
            'Sep',
            'Oct',
            'Nov',
            'Dic',
        ],
        today: 'Hoy',
        clear: 'Limpiar',
    };

    $('.datepicker').datepicker({
        todayBtn: 'linked',
        clearBtn: true,
        format: 'yyy-dd-mm HH:MM:ss',
        titleFormat: 'dd/mm/yyyy',
        orientation: 'bottom',
        language: 'es',
        weekStart: 1,
    });
})