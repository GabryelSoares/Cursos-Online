function contar(){
    let ini = document.getElementById('txti')
    let fim = document.getElementById('txtf')
    let passo = document.getElementById('txtp')
    let res = document.getElementById('res')
    if(ini.value.length == 0 || fim.value.length == 0){
        res.innerHTML=`[Erro]Impossível contar!`        
    }else{
        res.innerHTML = 'Contando: <br>'
        let i = Number(ini.value)
        let f = Number(fim.value)
        let p = Number(passo.value)
        if(p<=0){
            window.alert(`Passo "${p}" inválido! Considerando PASSO 1`)
            p=1
        }
        if(i<f){
            // contagem crescente
            for ( var c = i ; c <= f ; c += p ){
                res.innerHTML+=`<br>\u{1F449} ${c}`
            }
        } else {
            // contagem decrescente
            for (let c = 1 ; c >= f ; c -= p){
                res.innerHTML+=`<br>\u{1F449} ${c}`
            }
        }
        res.innerHTML+=`<br>\u{1F3C1}`        
    }
}