document.getElementById("datas").addEventListener("submit", function(event) {    
    const password = document.getElementById("password").value;
    const uppercase = /[A-Z]/;
    const lowercase = /[a-z]/;
    const numbers = /[0-9]/;

    if (!uppercase.test(password) || !lowercase.test(password) || !numbers.test(password)) {
        event.preventDefault();
        document.getElementById("msg_error").innerHTML = "A senha precisa conter letras minúsculas, maiúsculas e números!";
    } else {
        alert("Perfil alterado com sucesso!");
    }
});