function chatBot() {
	
	// current user input
	this.input;
	
	/**
	 * respondTo
	 * 
	 * return nothing to skip response
	 * return string for one response
	 * return array of strings for multiple responses
	 * 
	 * @param input - input chat string
	 * @return reply of chat-bot
	 */
	this.respondTo = function(input) {
	
		this.input = input.toLowerCase();
		
		if(this.match('(hi|hello|hey|hola|howdy)(\\s|!|\\.|$)'))
			return "hola, Preguntame lo que desees de Fight Anime";
		
		if(this.match('(registro|registrar|registrarme)'))
			return "Estas Buscando Registro de Usuarios antes de darte el url debes saber que para registrarte debes ser mayor de edad,sin registro No podras acceder al juego. URL http://localhost/Proyecto%20juego/nuevo_usuario.html aca podras dirigirte";
		
		if(this.match('(login|logeo|logearme)'))
			return ["Puedes ingresar al URL: http://localhost/Proyecto%20juego/Login.html"];

        if(this.match('(pagina,personajes)'))
			return ["Que pagina estas buscando?"];

		if(this.match('(comunidad)'))
			return "Fight Anime tiene una comunidad activa para desarrollar mas niveles y nuevos personajes, ademas de que sus usuarios pueden crear publicacion";

		if(this.match('(informacion|contacto|contactos)'))
			return " Puedes dirigirte al URL :http://localhost/Proyecto%20juego/contactos.php para resolver tus dudas";

		if(this.match('(juego|jugar|instrucciones|movimiento|golpear)'))
			return ["Fight Anime es un juego de lucha, en el cual el personaje se mueve con : W= (Vuela), S= (Baja), A= (Ir izquierda), D= (Ir derecha) y pelea con:  K= (Puñetazo), L= (Patada)"];
		
		if(this.match('(imagenes|fondo)'))
			return ["Para un mejor diseño se usaron imagenes sacadas de google pero con su respectivos enlaces,dentro del Proyecto"];
		
		if(this.match('(gracias|ok)'))
			return ["Con todo gusto , tienes alguna otra pregunta"];
		
		if(this.input == 'noop')
			return;
		
		return " No tengo informacion de "+input+" pero se puede comunicar con los administradores a los correos que aparecen en este URL: http://localhost/Proyecto%20juego/contactos.php";
	}
	
	/**
	 * match
	 * 
	 * @param regex - regex string to match
	 * @return boolean - whether or not the input string matches the regex
	 */
	this.match = function(regex) {
	
		return new RegExp(regex).test(this.input);
	}
}
