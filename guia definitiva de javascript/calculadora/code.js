document.addEventListener("DOMContentLoaded",()=>{
    //Definimos los elementos del DOM con constantes
    //Los querySelector son como los getElementById
    //Los querySelectorAll es para seleccionar todos los elementos de una misma clase
    const clear=document.querySelector("#clear");
    const display=document.querySelector("#display");
    const numeros=document.querySelectorAll(".numero")
    const retroceso=document.querySelector("#delete");
    const signo=document.querySelector("#signo");
    const operacion=document.querySelectorAll(".operacion");
    const punto=document.querySelector("#punto");
    
    //Definimos las variables
    let operando=0;
    let memoria=0;
    let operador="";
    let nuevo=true;
    let ponerPunto=false;

    //Con textContent podemos acceder al texto de un elemento
    function displayAct(operando){
        display.textContent=operando;
    }

    function calcular(operador){
        let numero;
        switch(operador){
            case "+":
                numero=memoria+operando;
                break;
            case "-":
                numero=memoria-operando;
                break;
            case "*":
                numero=memoria*operando;
                break;
            case "/":
                numero=memoria/operando;
                break;

        }
        return numero;
    }

    //Definimos que ocurrirá cuando clickemos el boton clear
    clear.addEventListener("click",()=>{
        operando=0;
        memoria=0;
        operador="";
        nuevo=true;
        displayAct(operando);
    })

    //Definimos que ocurrirá cuando clickemos cada uno de los números
    numeros.forEach((boton)=>{
        boton.addEventListener("click",()=>{
            //Guardamos en la variable el texto del display
            let textoDisplay=display.textContent.toString();
            if (ponerPunto){
                textoDisplay=textoDisplay+"."
                ponerPunto=false;
            }
            if (nuevo){
                let numero=boton.textContent
                operando=parseFloat(numero);
                displayAct(operando);
                nuevo=false;
            }else{
                if(textoDisplay.length<10){
                    let numero=boton.textContent;
                    numero=textoDisplay+numero;
                    operando=parseFloat(numero);;
                    displayAct(operando);
                }
            }
        })
    })
    
    retroceso.addEventListener("click",()=>{
        let numero=operando.toString().slice(0,-1)
        if ((numero.length==0)||(numero=="-")){
            numero=0;
        }
        operando=parseFloat(numero)
        displayAct(operando);
    })

    signo.addEventListener("click",()=>{
        if ((operando.toString().length<10) || ((operando<0)&&(operando.toString().length<11))){
            operando=operando*(-1)
            displayAct(operando)
        }

    })

    punto.addEventListener("click",()=>{
        textoDisplay=display.textContent.toString()
        if (!textoDisplay.includes(".")){
            ponerPunto=true;
        }
    })

    //Con forEach podemos recorrer un querySelectorAll
    operacion.forEach((boton)=>{
        boton.addEventListener("click",()=>{
            let reiniciar=false;
            if (operador==""){
                memoria=operando;
                operador=boton.textContent;
                nuevo=true;
            }else{
                memoria=calcular(operador);
                operador=boton.textContent
                if (memoria.toString().length<11){
                    displayAct(memoria);
                }else{
                    cadenas=memoria.toString().split(".");
                    if (cadenas[0].length<11){
                        memoria=parseFloat(memoria.toFixed(10-1-cadenas[0].length));
                        displayAct(memoria)
                    }else{
                        displayAct("Err");                   
                        reiniciar=true;
                    }
                    
                }
                nuevo=true;
            }
            if ((boton.textContent=="=")|| reiniciar){
                operador="";
                memoria=0;
                operando=0;
                nuevo=true;

            }
        })
    })

})