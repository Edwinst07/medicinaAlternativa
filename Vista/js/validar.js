function validar(Boton){

	let validacion = true;

		let msgs = document.querySelectorAll('small[id^="msg"]');

		for(let m of msgs){
			m.innerHTML = "";
		}

		let number = document.getElementById("number");
		let msgNumber = document.getElementById("msgNumber");
		let rgxnumber = /^[+]?([.]\d+|\d+[.]?\d*)$/;

		let text = document.getElementById("text");
		let msgText = document.getElementById("msgText");
		let rgxText = /^[A-Za-z0-9\s]+$/g;

		if (number.value.trim() == "" || number.value.length == 0) {
			if(Boton =="Consultar")
			{
				if (text.value.trim() != "") {
					validacion = true;
				}
				else{
					msgNumber.innerHTML = "El campo esta vac&iacute;o<br>";
					validacion = false;
				}

			}else{
				msgNumber.innerHTML = "El campo esta vac&iacute;o<br>";
				validacion = false;
			}
		}
		else{
			
			if(Boton=="Consultar")
			{
				if (text.value.trim() != "") {
					msgNumber.innerHTML = "Para la consulta, solamente debe ingresar uno de los campos.<br>";
					validacion = false;
				}
			}
			
		}

		if(Boton !="Consultar")
		{
			if(!rgxnumber.test(number.value)){
				msgNumber.innerHTML += "No esta con el formato establecido<br>";
				validacion = false;
			}
		}	

		

		if (text.value.trim() == "" || text.value.length == 0) {
			
			if(Boton =="Consultar")
			{
				if (number.value.trim() != "") {
					validacion = true;
				}
				else
				{
					msgText.innerHTML = "El campo esta vac&iacute;o<br>";
					validacion = false;
				}
			}
			else
			{
				msgText.innerHTML = "El campo esta vac&iacute;o<br>";
				validacion = false;
			}
		}
		else{
			if(Boton =="Consultar")
			{
				if (number.value.trim() != "") {
					msgText.innerHTML = "Para la consulta, solamente debe ingresar uno de los campos.<br>";
					validacion = false;
				}
			}
			
		}

		if(Boton !="Consultar")
		{
			if (!rgxText.test(text.value)) {
				msgText.innerHTML += "No esta con el formato establecido <br>";
				validacion = false;
			}
		}
		
		let pass = "";

		if (pass = document.getElementById("pass")) {
			let msgPass = document.getElementById("msgPass");
			let rgxPass = /(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{5,10})$/;

			if (pass.value.trim() == "" || pass.value.length == 0) {
				msgPass.innerHTML = "El campo esta vacio<br>";
				validacion = false;
			}

			if (!rgxPass.test(pass.value)) {
				msgPass.innerHTML += "No esta con el formato establecido<br>";
				validacion = false;
			}
		}

		let email = "";

		if (email = document.getElementById("email")) {
			let msgEmail = document.getElementById("msgEmail");
			let rgxEmail = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if(Boton == "Consultar"){

				if (email.value.trim() == "" ) {
					validacion = true;
				}else{

					msgEmail.innerHTML = "El campo esta vacio<br>";
					validacion = false;

				}
			}

			if(Boton != "Consultar"){
				if(!rgxEmail.test(email.value)){
					msgEmail.innerHTML += "No esta con el formato establecido<br>";
					validacion = false;
				}
			}
			// if (email.value.trim() == "" || email.value.length == 0) {

			// }

			// if(!rgxEmail.test(email.value)){
			// 	msgEmail.innerHTML += "No esta con el formato establecido<br>";
			// 	validacion = false;
			// }
		}


		let date;

		if (date = document.getElementById("date")) {
			let msgDate = document.getElementById("msgDate");
			let rgxDate = /^\d{4}[\-\/\s]?((((0[13578])|(1[02]))[\-\/\s]?(([0-2][0-9])|(3[01])))|(((0[469])|(11))[\-\/\s]?(([0-2][0-9])|(30)))|(02[\-\/\s]?[0-2][0-9]))$/;

			if(Boton == "Consultar"){

				if(date.value.trim() == ""){
					validacion = true;
				}else{

					msgDate.innerHTML = "El campo esta vacio<br>";
					validacion = false;
				}
				
			}
			
			if(Boton != "Consultar"){
				let fechaActual = new Date();
				let fechaIngreso = new Date(date.value);
				
				if(fechaIngreso > fechaActual){
					msgDate.innerHTML += "La fecha es Mayor al actual<br>"; 
					validacion = false;
				}

				if(!rgxDate.test(date.value)){
					msgDate.innerHTML += "No esta con el formato establecido<br>"; 
					validacion = false;
				}
			}

			// if(date.value.trim() == "" || date.value.length == 0){

			// }

		}

		let select = "";

		if(select = document.getElementById('select')){
			let msgSelect = document.querySelector('#msgSelect');

			if(Boton == "Consultar"){
				validacion = true;
			}

			if(Boton != "Consultar"){

				if(select.selectedIndex == 0 ) {
					msgSelect.innerHTML = "Seleccionar opci&oacute;n<br>";
					validacion = false;
				}
			}

		}

	

	return validacion;
}

