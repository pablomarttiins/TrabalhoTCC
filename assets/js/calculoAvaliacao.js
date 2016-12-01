function calcular() {

    //Dados vindos do Frontend
    var circunferenciaTricepsDireitoContraidoFront = $('#circunferenciaTricepsDireitoContraidoFront').val();
    var circunferenciaTricepsDireitoAlongadoFront = $('#circunferenciaTricepsDireitoAlongadoFront').val();
    var circunferenciaTricepsEsquerdoContraidoFront = $('#circunferenciaTricepsEsquerdoContraidoFront').val();
    var circunferenciaTricepsEsquerdoAlongadoFront = $('#circunferenciaTricepsEsquerdoAlongadoFront').val();
    var circunferenciaBicepsDireitoContraidoFront = $('#circunferenciaBicepsDireitoContraidoFront').val();
    var circunferenciaBicepsDireitoAlongadoFront = $('#circunferenciaBicepsDireitoAlongadoFront').val();
    var circunferenciaBicepsEsquerdoContraidoFront = $('#circunferenciaBicepsEsquerdoContraidoFront').val();
    var circunferenciaBicepsEsquerdoAlongadoFront = $('#circunferenciaBicepsEsquerdoAlongadoFront').val();
    var circunferenciaCoxaDireitaFront = $('#circunferenciaCoxaDireitaFront').val();
    var circunferenciaCoxaEsquerdaFront = $('#circunferenciaCoxaEsquerdaFront').val();
    var circunferenciaPanturrilhaDireitaFront = $('#circunferenciaPanturrilhaDireitaFront').val();
    var circunferenciaPanturrilhaEsquerdaFront = $('#circunferenciaPanturrilhaEsquerdaFront').val();
    var circunferenciaGluteoFront = $('#circunferenciaGluteoFront').val();
    var alturaFront = $('#alturaFront').val();
    var pesoFront = $('#pesoFront').val();
    var circunferenciaPeitoFront = $('#circunferenciaPeitoFront').val();

    //Dados vindos do VBckend
    var circunferenciaTricepsDireitoContraido = $('#circunferenciaTricepsDireitoContraido').val();
    var circunferenciaTricepsDireitoAlongado = $('#circunferenciaTricepsDireitoAlongado').val();
    var circunferenciaTricepsEsquerdoContraido = $('#circunferenciaTricepsEsquerdoContraido').val();
    var circunferenciaTricepsEsquerdoAlongado = $('#circunferenciaTricepsEsquerdoAlongado').val();
    var circunferenciaBicepsDireitoContraido = $('#circunferenciaBicepsDireitoContraido').val();
    var circunferenciaBicepsDireitoAlongado = $('#circunferenciaBicepsDireitoAlongado').val();
    var circunferenciaBicepsEsquerdoContraido = $('#circunferenciaBicepsEsquerdoContraido').val();
    var circunferenciaBicepsEsquerdoAlongado = $('#circunferenciaBicepsEsquerdoAlongado').val();
    var circunferenciaCoxaDireita = $('#circunferenciaCoxaDireita').val();
    var circunferenciaCoxaEsquerda = $('#circunferenciaCoxaEsquerda').val();
    var circunferenciaPanturrilhaDireita = $('#circunferenciaPanturrilhaDireita').val();
    var circunferenciaPanturrilhaEsquerda = $('#circunferenciaPanturrilhaEsquerda').val();
    var circunferenciaGluteo = $('#circunferenciaGluteo').val();
    var altura = $('#altura').val();
    var peso = $('#peso').val();
    var circunferenciaPeito = $('#circunferenciaPeito').val();

    var novoTricepsDireitoContraido                = circunferenciaTricepsDireitoContraidoFront - circunferenciaTricepsDireitoContraido;
    var novoTricepsDireitoAlongado                 = circunferenciaTricepsDireitoAlongadoFront - circunferenciaTricepsDireitoAlongado;
    var novoTricepsEsquerdoContraido               = circunferenciaTricepsEsquerdoContraidoFront - circunferenciaTricepsEsquerdoContraido;
    var novoTricepsEsquerdoAlongado                = circunferenciaTricepsEsquerdoAlongadoFront - circunferenciaTricepsEsquerdoAlongado;
    var novoBicepsDireitoContraido                 = circunferenciaBicepsDireitoContraidoFront - circunferenciaBicepsDireitoContraido;
    var novoBicepsDireitoAlongado                  = circunferenciaBicepsDireitoAlongadoFront - circunferenciaBicepsDireitoAlongado;
    var novoBicepsEsquerdoContraido                = circunferenciaBicepsEsquerdoContraidoFront - circunferenciaBicepsEsquerdoContraido;
    var novoBicepsEsquerdoAlongado                 = circunferenciaBicepsEsquerdoAlongadoFront - circunferenciaBicepsEsquerdoAlongado;
    var novoCoxaDireita                            = circunferenciaCoxaDireitaFront - circunferenciaCoxaDireita;
    var novoCoxaEsquerda                           = circunferenciaCoxaEsquerdaFront - circunferenciaCoxaEsquerda;
    var novoPanturrilhaDireita                     = circunferenciaPanturrilhaDireitaFront - circunferenciaPanturrilhaDireita;
    var novoPanturrilhaEsquerda                    = circunferenciaPanturrilhaEsquerdaFront - circunferenciaPanturrilhaEsquerda;
    var novoGluteo                                 = circunferenciaGluteoFront - circunferenciaGluteo;
    var novopeso                                   = pesoFront - peso;
    var novocircunferenciaPeito                    = circunferenciaPeitoFront - circunferenciaPeito;

    var regra = /^[0-9]+$/;

    //Calculo
    if(circunferenciaTricepsDireitoContraidoFront.match(regra) && circunferenciaTricepsDireitoAlongadoFront.match(regra) &&                                 circunferenciaTricepsEsquerdoContraidoFront.match(regra)
        && circunferenciaTricepsEsquerdoAlongadoFront.match(regra) && circunferenciaBicepsDireitoContraidoFront.match(regra) && circunferenciaBicepsDireitoAlongadoFront.match(regra) 
        && circunferenciaBicepsEsquerdoContraidoFront.match(regra) && circunferenciaBicepsEsquerdoAlongadoFront.match(regra) && circunferenciaCoxaDireitaFront.match(regra)
        && circunferenciaCoxaEsquerdaFront.match(regra) && circunferenciaPanturrilhaDireitaFront.match(regra) && circunferenciaPanturrilhaEsquerdaFront.match(regra)
        && circunferenciaGluteoFront.match(regra) && pesoFront.match(regra) && circunferenciaPeitoFront.match(regra) ) {

        document.querySelector("[name='circunferenciaTricepsDireitoContraidoFront']").value = ' + ' + novoTricepsDireitoContraido + ' Cm';
        document.querySelector("[name='circunferenciaTricepsDireitoAlongadoFront']").value = ' + ' + novoTricepsDireitoAlongado + ' Cm';
        document.querySelector("[name='circunferenciaTricepsEsquerdoContraidoFront']").value = novoTricepsEsquerdoContraido + ' Cm ';
        document.querySelector("[name='circunferenciaTricepsEsquerdoAlongadoFront']").value = novoTricepsEsquerdoAlongado + ' Cm ';
        document.querySelector("[name='circunferenciaBicepsDireitoContraidoFront']").value = novoBicepsDireitoContraido + ' Cm ';
        document.querySelector("[name='circunferenciaBicepsDireitoAlongadoFront']").value = novoBicepsDireitoAlongado + ' Cm ';
        document.querySelector("[name='circunferenciaBicepsEsquerdoContraidoFront']").value = novoBicepsEsquerdoContraido + ' Cm ';
        document.querySelector("[name='circunferenciaBicepsEsquerdoAlongadoFront']").value = novoBicepsEsquerdoAlongado + ' Cm ';
        document.querySelector("[name='circunferenciaCoxaDireitaFront']").value = novoCoxaDireita + ' Cm ';
        document.querySelector("[name='circunferenciaCoxaEsquerdaFront']").value = novoCoxaEsquerda + ' Cm ';
        document.querySelector("[name='circunferenciaPanturrilhaDireitaFront']").value = novoPanturrilhaDireita + ' Cm ';
        document.querySelector("[name='circunferenciaPanturrilhaEsquerdaFront']").value = novoPanturrilhaEsquerda + ' Cm ';
        document.querySelector("[name='circunferenciaGluteoFront']").value = novoGluteo + ' Cm ';
        document.querySelector("[name='pesoFront']").value = novopeso + ' Cm ';
        document.querySelector("[name='circunferenciaPeitoFront']").value = novocircunferenciaPeito + ' Cm ';

    } else {
        alert("Permitido somente número inteiro positivo!");
    }
    
}
