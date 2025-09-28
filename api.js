

var array_links_de_filmes_validos = []
var array_capas_de_filmes_validos = []
var esconder_botoes_favoritos_video_ai_iniciar_o_filme = true;
var efeitoVHS = true;
var tempoEfeitoVHS = 3000;
var itensPorPagina = 30
var usarBibliotecaVIDEOJS = true



if (!localStorage.getItem('efeitoVHS')) {
    localStorage.setItem('efeitoVHS', '1')
}
if (localStorage.getItem('efeitoVHS') == '1') {
    efeitoVHS = true
} else {
    efeitoVHS = false
}

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
function ehDEV() {
    console.log(getnomeDefinido())
    console.log(usuarios[getnomeDefinido()].dev)
    return usuarios[getnomeDefinido()].dev == '1'
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

if (!localStorage.getItem('contador_de_minutos_assistidos')) {
    localStorage.setItem('contador_de_minutos_assistidos', '0')
}
var contador_de_minutos_assistidos = parseInt(localStorage.getItem('contador_de_minutos_assistidos'));
var looping_contador_de_minutos_assistidos;
//-------------------------------



function addPlayerNaPagina() {

    const div = document.createElement('div')
        div.id = 'player_filme'
        //div.style.display = 'none'
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
        fechar.style.right = '2%'
        fechar.style.top = '2%'
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
        addfavorito.style.left = '2%'
        addfavorito.style.top = '2%'
        addfavorito.style.fontSize = 'x-large'
        addfavorito.textContent = '⭐'
        addfavorito.id = 'addfavorito_botao'







        div.appendChild(video)
        div.appendChild(fechar)
        div.appendChild(addfavorito)


        if (efeitoVHS) {
            const ruido = document.createElement('img')
            ruido.id = 'ruido'
            ruido.style.width = '100vw'
            ruido.style.height = '100vh'
            ruido.style.zIndex = 100000
            ruido.style.position = 'fixed'
            ruido.style.left = '0'
            ruido.style.top = '0'
            ruido.style.backgroundColor = 'transparent'

            var index = Math.floor(Math.random() * 4)
            ruido.src = 'img/ruido' + index + '.gif'

            div.appendChild(ruido)
        }

        document.body.appendChild(div)

        //===================================
        looping_contador_de_minutos_assistidos = setInterval(() => {
            contador_de_minutos_assistidos++
            localStorage.setItem('contador_de_minutos_assistidos', contador_de_minutos_assistidos)
            console.log(contador_de_minutos_assistidos)
        }, 60000);
        //===================================

        //desabilita o botao de download se nao for conta MASTER
        if (obterMeuPlano() !== 'master') {
            video.setAttribute("controlsList", "nodownload");
            video.controls = false
        }

}

function playFilme(nome) {
    if (get('player_filme')) {
        if (get('video')) {
            if (get('fechar')) {

                //get('player_filme').style.display = 'block'
                get('video').src = nome

                get('video').poster = buscar_capa_via_link(posters, nome)



                setTimeout(() => {
                    get('video').play()
                    if (efeitoVHS) {
                        get('ruido').remove()
                    }

                }, tempoEfeitoVHS);

                //---------------------------------------
                if (esconder_botoes_favoritos_video_ai_iniciar_o_filme) {
                    setTimeout(() => {

                        get('fechar').style.display = 'none'
                        get('addfavorito_botao').style.display = 'none'
                    }, 4000);

                    get('video').addEventListener('touchstart', () => {
                        get('fechar').style.display = 'block'
                        get('addfavorito_botao').style.display = 'block'
                        setTimeout(() => {
                            get('fechar').style.display = 'none'
                            get('addfavorito_botao').style.display = 'none'
                        }, 4000);
                    })
                    get('video').addEventListener('mousemove', () => {
                        get('fechar').style.display = 'block'
                        get('addfavorito_botao').style.display = 'block'
                        setTimeout(() => {
                            get('fechar').style.display = 'none'
                            get('addfavorito_botao').style.display = 'none'
                        }, 4000);
                    })
                }



                //-------------------------
                if (verificarSeEstaNosFavoritos(nome)) {
                    get('addfavorito_botao').style.backgroundColor = 'green'
                } else {
                    get('addfavorito_botao').style.backgroundColor = 'black'
                }
                //-------------------------


                addClick('fechar', () => {
                    get('video').src = ' '
                    get('player_filme').remove();

                    clearInterval(looping_contador_de_minutos_assistidos)
                })

                addClick('addfavorito_botao', () => {

                    if (verificarSeEstaNosFavoritos(nome)) {
                        removerFilmeFavoritos(nome)
                        console.log('removido dos favoritos')
                        get('addfavorito_botao').style.backgroundColor = 'black'
                    } else {
                        addfilmefavoritos(nome)
                        console.log('Add nos favoritos')
                        get('addfavorito_botao').style.backgroundColor = 'green'
                    }


                })
            }
        }
    }
}
//--------------------------------------------------

function buscar_capa_via_link(array_filmes, link) {

    if (link == '') {
        return ''
    }
    var ct = 0;
    var capa = '';
    array_filmes.forEach(x => {
        if (x == link) {
            capa = 'capas/' + array_filmes[ct - 1]
        }
        ct++;
    });

    for (let i = 0; i < 10; i++) {
        //.replace('%20',' ')
        capa = capa.replace('%20', ' ')
    }
    return capa
}

//--------------------------------------------------

function addfilmefavoritos(link) {
    if (localStorage.getItem('Favoritos do Terror')) {
        var favs = JSON.parse(localStorage.getItem('Favoritos do Terror'))
        favs.push(link)
        localStorage.setItem('Favoritos do Terror', JSON.stringify(favs))
    } else {
        var favs = [link]
        localStorage.setItem('Favoritos do Terror', JSON.stringify(favs))
    }
}

function listarfilmefavoritos() {
    var cccc = []
    if (localStorage.getItem('Favoritos do Terror')) {
        JSON.parse(localStorage.getItem('Favoritos do Terror')).forEach(x => {
            cccc.push(x)
        });
    }
    return cccc;
}


function deletarfilmesfavoritos() {
    localStorage.removeItem('Favoritos do Terror')
}

function verificarSeEstaNosFavoritos(link) {
    if (localStorage.getItem('Favoritos do Terror')) {
        return localStorage.getItem('Favoritos do Terror').includes(link)
    }
    return false;
}

function removerFilmeFavoritos(link) {
    var cccc = []
    if (localStorage.getItem('Favoritos do Terror')) {
        JSON.parse(localStorage.getItem('Favoritos do Terror')).forEach(x => {
            if (x !== link) {
                cccc.push(x)
            }
        });
        localStorage.setItem('Favoritos do Terror', JSON.stringify(cccc))
    }
}

//-----------------------------------
function sortearFilme() {
    return array_links_de_filmes_validos[Math.floor(Math.random() * array_links_de_filmes_validos.length)]
}


//-----------------------------------
function detectarDispositivo() {
    const userAgent = navigator.userAgent.toLowerCase();

    if (/playstation 5/.test(userAgent)) return 'PlayStation 5';
    if (/playstation 4/.test(userAgent)) return 'PlayStation 4';
    if (/xbox/.test(userAgent)) return 'Xbox';
    if (/smart-tv|smarttv|tizen|webos|appletv|tv safari/.test(userAgent)) return 'Smart TV';
    if (/ipad/.test(userAgent)) return 'Tablet (iPad)';
    if (/android/.test(userAgent) && !/mobile/.test(userAgent)) return 'Tablet (Android)';
    if (/tablet/.test(userAgent)) return 'Tablet';
    if (/android|iphone|ipod|mobile/.test(userAgent)) return 'Celular';
    if (/windows nt|macintosh|x11/.test(userAgent)) return 'Computador';

    return 'Desconhecido';
}

function obterDadosGET(id) {
    const params = new URLSearchParams(window.location.search);
    if (params.get(id)) {
        return params.get(id);
    }
    return ''
}

//--------------------------------------------------

//script neve
document.querySelectorAll('a').forEach(x => {
    x.innerHTML += ' &#127876;'
});

function nevando() {

    var larg = screen.width;
    var alt = screen.height;

    var posX = Math.floor(Math.random() * larg)
    var posY = 0 - Math.floor(Math.random() * 500)

    const div = document.createElement('div')
    div.style.position = 'fixed'
    div.style.width = '3px'
    div.style.height = '3px'
    div.style.backgroundColor = 'white'
    div.style.top = posY + 'px'
    div.style.left = posX + 'px'
    div.style.borderRadius = '150%'
    div.textContent = ' '

    const adicao = Math.floor(Math.random() * 3) + 1

    var vv = setInterval(() => {

        if (posY < (alt + 10)) {
            posY += adicao
            div.style.top = posY + 'px'
            div.style.left = posX + 'px'
        } else {
            //saiu da tela
            div.remove()
            clearInterval(vv)
            nevando()
        }


    }, 50);

    document.body.appendChild(div)
}





//--------------------------------------------------
console.log('----------------');
console.log('nome do user: ' + getnomeDefinido());
console.log('deviceKey: ' + getDevicekey());
console.log('API.js ok');
console.log('----------------');
