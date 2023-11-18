const abrirModal = document.querySelector("#abrir-modal");
const cerrarModal = document.querySelector("#cerrar-modal");
const modal = document.querySelector("#modal");

abrirModal.addEventListener("click", ()=>{
    modal.showModal();
})

cerrarModal.addEventListener("click", ()=>
{
    modal.close();
})



/*const btnAbrirModal = document.querySelector("#btn-abrir-modal");
const btnCerrarModal = document.querySelector("#btn-cerrar-modal");
const modal = document.querySelector("#modal");

btnAbrirModal.addEventListener("click",()=>{
    modal.showModal();
})

btnCerrarModal.addEventListener("click",()=>
{
    modal.close();
})*/