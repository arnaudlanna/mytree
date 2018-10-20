$(function() {

    $('#btn-for-register').click(function(e) {
		$("#form-signin").delay(100).fadeOut(100);
         $("#register-form").fadeIn(100);
         $("#arrowback").fadeIn(100);
		e.preventDefault();
    });

    $('#arrowback').click(function(e) {
		$("#register-form").delay(100).fadeOut(100);
         $("#form-signin").fadeIn(100);
         $("#arrowback").fadeOut(30);
		e.preventDefault();
    });
});
