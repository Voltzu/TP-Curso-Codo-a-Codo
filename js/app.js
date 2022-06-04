const email = document.getElementById("email")
const user = document.getElementById("user")
const pass = document.getElementById("password")
const form = document.getElementById("form")
const parrafo = document.getElementById("warnings")
console.log(form)

form.addEventListener("submit", e=>{
    e.preventDefault()
    let warnings = ""
    let entrar = false
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
    parrafo.innerHTML = ""
    
    if(!regexEmail.test(email.value)){
        warnings += `El email no es v&aacute;lido <br>`
        entrar = true
    }
    if(user.value.length <6){
        warnings += `El usuario no es v&aacute;lido <br>`
        entrar = true
    }
    if(pass.value.length < 8){
        warnings += `La contrase&ntildea no es v&aacute;lida <br>`
        entrar = true
    }

    if(entrar){
        parrafo.innerHTML = warnings
    }else{
        parrafo.innerHTML = "Enviado"
    }
})