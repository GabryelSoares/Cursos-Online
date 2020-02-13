var BTN_Nova_Pendencia=document.getElementById("BTN_Nova_Pendencia");
BTN_Nova_Pendencia.addEventListener('click',Nova_Pendencia)
function Nova_Pendencia(){   
        jQuery("#Modal_Pendencia").modal({
                 show: true
               });            
           setTimeout(Modal_Pendencia, 1000);
}


var BTN_Nova_Tarefa=document.getElementById("BTN_Nova_Tarefa");
BTN_Nova_Tarefa.addEventListener('click',Nova_Tarefa)
function Nova_Tarefa(){   
  jQuery("#Modal_Tarefa").modal({
           show: true
         });            
     setTimeout(Modal_Tarefa, 1000);
}


var BTN_Nova_Proposta=document.getElementById("BTN_Nova_Proposta");
BTN_Nova_Proposta.addEventListener('click',Nova_Proposta)
function Nova_Proposta(){   
  jQuery("#Modal_Proposta").modal({
           show: true
         });            
     setTimeout(Modal_Proposta, 1000);
}

