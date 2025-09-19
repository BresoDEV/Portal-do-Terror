

function estaLogado() {
    return localStorage.getItem('Portal_estaLogado') !== null
}
function deslogar() {
    localStorage.removeItem('Portal_estaLogado')
    localStorage.removeItem('Portal_nomeDefinido')
}

//--------------------------------------
function nomeDefinido() {
    return localStorage.getItem('Portal_nomeDefinido') !== null
}

function getnomeDefinido() {
    return localStorage.getItem('Portal_nomeDefinido')
}

function setnomeDefinido(nome) {
    localStorage.setItem('Portal_nomeDefinido',nome)
}

//--------------------------------------
function devicekeyDefinido() {
    return localStorage.getItem('Portal_devicekeyDefinido') !== null
}
function getDevicekey() {
    return localStorage.getItem('Portal_devicekeyDefinido')
}
function setDevicekey(key) {
    localStorage.setItem('Portal_devicekeyDefinido', key)
}
function gerarDeviceKey() {
    return (Math.random().toString(36).substring(2, 10) + Date.now()).toUpperCase();
}
//--------------------------------------

var mensagem = ''

function logar(nome, pass) {

    if (usuarios[nome]) {

        console.log('Nome existe')

        if (usuarios[nome].senha == pass) {

            console.log('Senha bateu')

            if (usuarios[nome].deviceKey == getDevicekey() ||
                usuarios[nome].deviceKey2 == getDevicekey() ||
                usuarios[nome].deviceKey3 == getDevicekey() ||
                usuarios[nome].deviceKey4 == getDevicekey()) {
                console.log('deviceKey bateu')

                if (usuarios[nome].telefone !== "null"){

                    console.log('telefone ok')


                    if (usuarios[nome].pagamento_em_dia == "sim"){

                        console.log('Pagamento em dia')
                        console.log('Todos dados em ordem')


                        setnomeDefinido(nome)
                        localStorage.setItem('Portal_estaLogado','1')

                        return true
                    }
                    else {
                        mensagem='Pagamento não esta em dia'
                        return false
                    }


                }
                else {
                    mensagem='sem telefone'
                    return false
                }

            } else {
                mensagem='deviceKey nao bateu'
                return false
            }
        }
        else {
            mensagem='Senha nao bateu'
            return false
        }


    }
    else {
        mensagem='User nao existe'
        return false
    }
}





function redirecionar(link){
    window.location.href=link;
}
function attPagina(){
    window.location.reload();
}

function addClick(id,func){
    document.getElementById(id).addEventListener('click',func)
}

function get(id){
    return document.getElementById(id)
}

function setarValor(id,valor){
    document.getElementById(id).value=valor;
}

function setarTexto(id,valor){
    document.getElementById(id).textContent=valor;
}
function inner(id,valor){
    document.getElementById(id).innerHTML=valor;
}


console.log(' ');
console.log('nome do user: ' + getnomeDefinido());
console.log('deviceKey: ' + getDevicekey());
console.log('API.js ok');
console.log(' ');
