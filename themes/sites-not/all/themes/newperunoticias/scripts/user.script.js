(function($) {

	var sharebarHandler = function() {
	
		var ventana = $(window).width();
		// co es el tamanio de el espacio a cada lado del centro y se le resta 83 por el tamanio del sharebar
		// 83 es el tamanio de Share bar y 960 es el tamanio de #main
		var co = parseInt((ventana-960)/2) - 83;
		// Posicionamos el Sharebar
		$('#sharebar').css('left', co);
	}

	Drupal.behaviors.perunoticias = {
		attach: function(context, settings) {
			sharebarHandler();
			
			var destacados = [];
			var comunes = $('.comun');
			j = 2;
			$('.destacado').each(function(i) {
				destacado = $(this);
				destacados.push(destacado);
				destacado.remove();
				destacados[i].insertAfter($(comunes[j]));
				j = j + 3;
			});
	
	} }
})(jQuery);
