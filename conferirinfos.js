

$("#senha2").keyup(function(){


	var senha = $("#senha").val();
	var senha2 = $("#senha2").val();

	if (senha != senha2) {
		$('#senha2').removeClass("is-valid");
		$('#senha2').addClass("is-invalid");

		$('#senha').removeClass("is-valid");
		$('#senha').addClass("is-invalid");
	} else {
		$('#senha2').removeClass("is-invalid");
		$('#senha2').addClass("is-valid");

		$('#senha').removeClass("is-invalid");
		$('#senha').addClass("is-valid");
	}
});
