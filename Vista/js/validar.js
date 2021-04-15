function validar(){

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
	let rgxText = /^[a-zA-Z Á]{3,30}$/;

	if (number.value.trim() == "" || number.value.length == 0) {
		msgNumber.innerHTML = "El campo esta vacio <br>";
		validacion = false;
	}
	if(!rgxnumber.test(number.value)){
		msgNumber.innerHTML += "No esta con el formato establecido<br>";
		validacion = false;
	}


	if (text.value.trim() == "" || text.value.length == 0) {
		msgText.innerHTML = "El campo esta vacio<br>";
		validacion = false;
	}

	if (!rgxText.test(text.value)) {
		msgText.innerHTML += "No esta con el formato establecido <br>";
		validacion = false;
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

		if (email.value.trim() == "" || email.value.length == 0) {
			msgEmail.innerHTML = "El campo esta vacio<br>";
			validacion = false;
		}

		if(!rgxEmail.test(email.value)){
			msgEmail.innerHTML += "No esta con el formato establecido<br>";
			validacion = false;
		}
	}


	let date = "";

	if (date = document.getElementById("date")) {
		let msgDate = document.getElementById("msgDate");
		let rgxDate = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;

		if(date.value.trim() == "" || date.value.length == 0){
			msgDate.innerHTML = "El campo esta vacio<br>";
			validacion = false;
		}

		if (!rgxDate.test(date.value)){
			msgDate.innerHTML += "No esta con el formato establecido<br>"; 
			validacion = false;
		}
	}

	let select = "";

		if(select = document.getElementById('select')){
			let msgSelect = document.querySelector('#msgSelect');

			if (select.selectedIndex == 0 ) {
				msgSelect.innerHTML = "Seleccionar opci&oacute;n<br>";
				validacion = false;
			}

		}

	

	return validacion;
}
