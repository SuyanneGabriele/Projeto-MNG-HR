<script type="text/javascript">

	$(document).ready(function(){
		var btnclone=$("#adicionar_card");

		$(document).on('click', "#adicionar_card", function(){
			var clone = $(".card_exp_profissional:first").clone();

			clone.show();

			clone.insertAfter('.card_exp_profissional:first');

		});
	});

		$(document).ready(function(){
		var btnclone=$("#adicionar_card_escolaridade");

		$(document).on('click', "#adicionar_card_escolaridade", function(){

			var clone = $(".card_escolaridade:first").clone();

			clone.show();

			clone.insertAfter('.card_escolaridade:first');

		});
	});

	$(document).ready(function(){
		var btnRemover=$(".remover_card");

		$(document).on('click', ".remover_card", function(){
			
			$(this).parent().parent().parent().parent().parent().remove();

		});
	});

</script>