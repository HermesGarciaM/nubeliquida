(function ($) {

    let wow = new WOW( {
        animateClass: 'animated',
        offset:       100
    });
    wow.init();

    let countdown = $('#countdown');
    if (countdown.length) {
        countdown.countdown({
            render: function(data) {
                let days;
                if (data.years >= 1) {
                    days = (data.years*365)+data.days;
                } else {
                    days = data.days;
                }
                $(this.el).html(
                    '<div class="day">' + this.leadingZeros(days) + ' <span>Días</span></div>'+
                    '<div class="hour">' + this.leadingZeros(data.hours, 2) + ' <span>Horas</span></div>'+
                    '<div class="min">' + this.leadingZeros(data.min, 2) + ' <span>Minutos</span></div>'+
                    '<div class="sec">' + this.leadingZeros(data.sec, 2) + ' <span class="seconds">Segundos</span></div>'
                );
            }
        });
    }
    
})(jQuery);