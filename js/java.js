"use strict"
console.log("Bienvenido");

const API = "api/corredores";

let btn_comentar = document.querySelector("#btnComentar");
if(btn_comentar){
    btn_comentar.addEventListener("click", postearComentario);
}

let btnFiltrar = document.querySelector("#filtrarPorPuntaje");
if(btnFiltrar){
    btnFiltrar.addEventListener("click", function(e){
        e.preventDefault();
        let puntaje = document.querySelector("#puntajeFiltro");
        armarUrl(undefined,undefined,puntaje);
    })
}

let btnOrden = document.querySelectorAll(".btnOrden");
for(let i=0; i<btnOrden.length; i++){
    btnOrden[i].addEventListener("click", function(e){
        let criterio = this.dataset.criterio;
        let orden = this.dataset.orden;
        armarUrl(criterio,orden,null);
    });
}


function armarUrl(criterio,orden,puntaje){
    let contenedor = document.querySelector("#tabla-comentarios");
    let id = contenedor.dataset.id;
    let rol = contenedor.dataset.rol;
    
    if(criterio && orden){
        let url = `${API}/${id}/comentarios?sortBy=${criterio}&orden=${orden}`;
        mostrarComentarios(url,contenedor,rol);
    }else if(puntaje){
        let url = `${API}/${id}/comentarios?filterByPuntaje=${puntaje.value}`;
        mostrarComentarios(url,contenedor,rol);
    }else {
        let url = `${API}/${id}/comentarios`;
        mostrarComentarios(url,contenedor,rol);
    }
}

async function mostrarComentarios(url,contenedor,rol){
    try{   
        let response = await fetch(url);
        if(response.ok){
            contenedor.innerHTML = "";
            let comentarios = await response.json();
            let clase = "hidden";
            if(rol == "admin"){
                clase = ""
            }
            for(let comentario of comentarios){
                contenedor.innerHTML+=` <div data-id="${comentario.id}">
                                                <tr>
                                                    <td> Usuario: ${comentario.nombre}</td>
                                                    <td>${comentario.texto}</td>
                                                    <td> Puntaje: ${comentario.puntaje}</td>
                                                </tr>
                                                <button class="eliminarComentario" ${clase}>Borrar </button>
                                        </div>
                                        `
            }
            asignarFuncionEliminar();
        }else{
            contenedor.innerHTML="Failed url";
        }

    }catch(e){
        console.log(e);
    }
}

function asignarFuncionEliminar(){
    let botones = document.querySelectorAll(".eliminarComentario");
    for(let i=0; i<botones.length; i++){
        botones[i].addEventListener("click",async function(e){
            let id = this.parentElement.dataset.id;
        try{
            let response = await fetch(`${API}/${id}/comentarios`,{
                method:'DELETE'
            })
            if(response.status === 200){
                console.log("eliminado");
            }else{
                console.log("fallo eliminado");
            }

        }catch(error){
            console.log(error);
        }
        armarUrl(undefined,undefined,null);
        });
    }
}

async function postearComentario(e){
    e.preventDefault();
    let comentario = document.querySelector('#comentario');
    let puntaje = document.querySelector('#puntaje');
    let id_piloto = document.querySelector('#id_Piloto');
    let id_usuario = document.querySelector('#userId');
    if(puntaje > 5){
        puntaje = 5;
    }
    
   

    let coment = {
        comentario: comentario.value,
        puntaje: puntaje.value,
        id_usuario: id_usuario.value,
        id_piloto: id_piloto.value,
    }

    try{
        let response = await fetch (`${API}/comentarios`,{
        method:'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(coment)
        });
        if(response.status == 200){
            console.log("comentaste!");
        }else{
            console.log("No se pudo comentar");
        }
    }
    catch(e){
        console.log(e);
    }

    comentario.value="";
    puntaje.value="";
   
    armarUrl(undefined,undefined,null);

}


armarUrl(undefined,undefined,null);