function acesso(form){
/*Aceitar letras Maiúsculas e minúsculas */
form.nome.value = form.nome.value.toLowerCase()
form.senha.value = form.senha.value.toLowerCase()

if (form.nome.value == "matias" && form.senha.value == "123" || 
form.nome.value == "joao" && form.senha.value == "456"|| 
form.nome.value == "maria" && form.senha.value == "654"|| 
form.nome.value == "mariana" && form.senha.value == "lima")
{
	location = "index5_1.html"
}
else{
	alert("Dados incorretos")
}
}