let valores = [8,3,5,2,9]
valores.push(1)
valores.sort()
/*
for (let pos=0;pos<valores.length;pos++){
    console.log(`A posição ${pos} tem o valor ${valores[pos]}`)
}
*/
for(let pos in valores){    
    console.log(`A posição ${pos} tem o valor ${valores[pos]}`)
}
let posição = valores.indexOf(8)
if(posição==-1){
    console.log("O valor 8 não foi encontrado!")
}else{
    console.log(`O valor 8 está na posição ${posição} `)
}
