<script type="text/javascript">

	$(document).ready(function(){
		var btnclone=$("#adicionar_card");

		$(btnclone).click(function(){
			var clone = $(".card_exp_profissional:last").clone();

			clone.insertAfter('.card_exp_profissional:last');

		});
	});

	$(document).ready(function(){
		var btnclone =$("#adicionar_card1");

		$(btnclone).click(function(){
			var clone = $(".card_escolaridade:last").clone();

			clone.insertAfter('.card_escolaridade:last');

		});
	});

</script>