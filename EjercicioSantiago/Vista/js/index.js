function toggleForm(){
	var contenedor = document.querySelector('.container');
	contenedor.classList.toggle('active');
}
$("input[type='text'],input[type='password'],input[type='email']").on("keyup",function(e){
	var formulario = $(this).parents("form");
	validar(formulario);
});
function validar(formulario){
	formulario.find("input").each(function(){
		if ($(this).val()!="" && $(this).val() != null) {
			$("#registrar").removeAttr("disabled");
			$(this).css("border","1px solid green");
		}else{
			$("#registrar").attr("disabled","disabled");
			$(this).css("border","1px solid red");
		}
	});
}