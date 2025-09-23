

function estaLogado() {
    return localStorage.getItem('Portal_estaLogado') !== null
}
function deslogar() {
    localStorage.removeItem('Portal_estaLogado')
    localStorage.removeItem('Portal_nomeDefinido')
    localStorage.removeItem('Portal_senha')
}

//--------------------------------------
function nomeDefinido() {
    return localStorage.getItem('Portal_nomeDefinido') !== null
}

function getnomeDefinido() {
    return localStorage.getItem('Portal_nomeDefinido')
}

function setnomeDefinido(nome) {
    localStorage.setItem('Portal_nomeDefinido', nome)
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
function SenhaDefinida() {
    return localStorage.getItem('Portal_senha') !== null
}
function getSenha() {
    return localStorage.getItem('Portal_senha')
}
function setSenha(key) {
    localStorage.setItem('Portal_senha', key)
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

                if (usuarios[nome].telefone !== "null") {

                    console.log('telefone ok')


                    if (usuarios[nome].pagamento_em_dia == "sim") {

                        console.log('Pagamento em dia')
                        console.log('Todos dados em ordem')


                        setnomeDefinido(nome)
                        setSenha(pass)
                        localStorage.setItem('Portal_estaLogado', '1')

                        return true
                    }
                    else {
                        mensagem = 'Seu acesso está temporariamente bloqueado porque há um pagamento pendente.'
                        return false
                    }


                }
                else {
                    mensagem = 'Você precisa cadastrar um número de telefone para prosseguir.'
                    return false
                }

            } else {
                mensagem = 'Este dispositivo ainda não está autorizado, faça a liberação via WhatsApp para continuar.'
                return false
            }
        }
        else {
            mensagem = 'Senha incorreta! Tente novamente'
            return false
        }


    }
    else {
        mensagem = 'Não encontramos esse usuário, verifique se digitou corretamente.'
        return false
    }
}


function obterMeuPlano() {
    //basico
    //premium
    //master
    if (usuarios[getnomeDefinido()]) {
        return usuarios[getnomeDefinido()].plano//plano
    }
}


function redirecionar(link) {
    window.location.href = link;
}
function attPagina() {
    window.location.reload();
}

function addClick(id, func) {
    if (document.getElementById(id)) {
        document.getElementById(id).addEventListener('click', func)
    }
}

function get(id) {
    return document.getElementById(id)
}

function setarValor(id, valor) {
    document.getElementById(id).value = valor;
}

function setarTexto(id, valor) {
    document.getElementById(id).textContent = valor;
}

function inner(id, valor) {
    document.getElementById(id).innerHTML = valor;
}

//------------------------
function addPlayerNaPagina() {
    const div = document.createElement('div')
    div.id = 'player_filme'
    div.style.display = 'none'
    div.style.width = '100%'
    div.style.height = '100%'
    div.style.backgroundColor = 'black'
    div.style.position = 'fixed'
    div.style.left = '0'
    div.style.top = '0'
    div.style.zIndex = '1000000'

    const video = document.createElement('video')
    video.id = 'video'
    video.style.width = '100%'
    video.style.height = '100vh'
    video.src = ' '
    video.controls = true


    const fechar = document.createElement('div')
    fechar.style.fontFamily = 'Calibri'
    fechar.style.backgroundColor = 'rgb(21, 21, 21)'
    fechar.style.color = 'rgb(194, 77, 77)'
    fechar.style.padding = '5px'
    fechar.style.borderRadius = '150%'
    fechar.style.position = 'fixed'
    fechar.style.right = '5%'
    fechar.style.top = '5%'
    fechar.style.fontSize = 'x-large'
    fechar.textContent = '❌'
    fechar.id = 'fechar'

    const addfavorito = document.createElement('div')
    addfavorito.style.fontFamily = 'Calibri'
    addfavorito.style.backgroundColor = 'rgb(21, 21, 21)'
    addfavorito.style.color = 'rgb(194, 77, 77)'
    addfavorito.style.padding = '5px'
    addfavorito.style.borderRadius = '150%'
    addfavorito.style.position = 'fixed'
    addfavorito.style.left = '5%'
    addfavorito.style.top = '5%'
    addfavorito.style.fontSize = 'x-large'
    addfavorito.textContent = '⭐'
    addfavorito.id = 'addfavorito_botao'

    div.appendChild(video)
    div.appendChild(fechar)
    div.appendChild(addfavorito)
    document.body.appendChild(div)

     

    //desabilita o botao de download se nao for conta MASTER
    if(obterMeuPlano() !== 'master'){
        video.setAttribute("controlsList", "nodownload");
    }

}

function playFilme(nome) {
    if (get('player_filme')) {
        if (get('video')) {
            if (get('fechar')) {

                get('player_filme').style.display = 'block'
                get('video').src = nome
                get('video').play()


                addClick('fechar', () => {
                    //get('video').stop()
                    get('video').src = ' '
                    get('player_filme').remove();
                })
                
                addClick('addfavorito_botao', () => {
                    addfilmefavoritos(nome)
                    console.log('Add nos favoritos')
                })
            } 
        }
    }
}
//--------------------------------------------------

function buscar_capa_via_link(array_filmes,link){

    if(link ==''){
        return ''
    }
    var ct=0;
    var capa='';
    array_filmes.forEach(x => {
        if(x==link){
            capa= 'capas/'+array_filmes[ct-1]
        }
        ct++;
    });

    for (let i = 0; i < 10; i++) {
        //.replace('%20',' ')
        capa= capa.replace('%20',' ')
    }
    return capa
}

//--------------------------------------------------

function addfilmefavoritos(link){
    if (localStorage.getItem('Favoritos do Terror')) {
        var favs = JSON.parse(localStorage.getItem('Favoritos do Terror'))
        favs.push(link)
        localStorage.setItem('Favoritos do Terror',JSON.stringify(favs))
      }else{
        var favs = ['']
        localStorage.setItem('Favoritos do Terror',JSON.stringify(favs))
      }
}

function listarfilmefavoritos(){
    var cccc =[]
    if (localStorage.getItem('Favoritos do Terror')) {
        JSON.parse(localStorage.getItem('Favoritos do Terror')).forEach(x => {
            cccc.push(x)
        });
      }
      return cccc;
}

 
function deletarfilmesfavoritos(){
    localStorage.removeItem('Favoritos do Terror')
}


//--------------------------------------------------
console.log('----------------');
console.log('nome do user: ' + getnomeDefinido());
console.log('deviceKey: ' + getDevicekey());
console.log('API.js ok');
console.log('----------------');
