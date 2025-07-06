
function jaCadastrado() {
    if (localStorage.getItem('nomeLocadora')) {
        return true;
    }
    return false;
}
function jaLogado() {
    if (localStorage.getItem('logadoLocadora') == '1') {
        return true;
    }
    return false;
}
function deslogar() {
    localStorage.removeItem('logadoLocadora');
    localStorage.removeItem('nomeLocadora');
}

function pagamentoTaEmDia() {
    if (jaCadastrado()) {
        let nome = localStorage.getItem('nomeLocadora');
        if (usuarios[nome].pagamento_em_dia == 'sim') {
            return true;
        }
    }
    return false;
}
function ehDEV() {
    if (jaCadastrado()) {
        let nome = localStorage.getItem('nomeLocadora');
        if (usuarios[nome].dev == '1') {
            return true;
        }
    }
    return false;
}

function cadastroTaEmDia() {
    if (jaCadastrado()) {
        let nome = localStorage.getItem('nomeLocadora');
        if (usuarios[nome].telefone !== 'null') {
            return true;
        }
    }
    return false;
}


function gerarDeviceKey() {
    return Math.random().toString(36).substring(2, 10) + Date.now();
}


function iniciarTrial() {
    if(!localStorage.getItem('trialInicio')){
        let agora = new Date().toISOString();
        localStorage.setItem('trialInicio',agora)
        console.log('Trial iniciado')
    }
}


function verificarTrial(){
    let Valor_inicio = localStorage.getItem('trialInicio');
    if(!Valor_inicio){
        console.log('Trial nao iniciado')
        return false
    }
    let inicio = new Date(Valor_inicio)
    let agora = new Date()

    let dias_passados = Math.floor((agora-inicio)/(1000*60*60*24))

    if(dias_passados >= 30){
        console.log('Trial expirado')
        return false
    }else{
        console.log('Trial ativo para '+(30-dias_passados)+' dias')
        console.log('Valor_inicio:'+Valor_inicio)
        return true
    }
    
}

