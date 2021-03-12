var btn_agr_cat = document.getElementById('btn-agregar-categoria');
var btn_con_cat = document.getElementById('btn-consulta-categoria');
var btn_agr_pro = document.getElementById('btn-agregar-producto');
var btn_con_pro = document.getElementById('btn-consulta-producto');
var eliminar = document.getElementById('delete');

btn_agr_cat.addEventListener('click', agregarCategoria);
btn_con_cat.addEventListener('click', consultarCategoria);
btn_agr_pro.addEventListener('click', agregarProducto);
btn_con_pro.addEventListener('click', consultarProducto);
eliminar.addEventListener('click', eliminarProducto);

function agregarCategoria(e){
    console.log('agregare categoria');
}

function consultarCategoria(e){
    console.log('consultare categoria')
}

function agregarProducto(e){
    console.log('agregare productos')
}

function consultarProducto(e){
    console.log('consultare productos')
}

function eliminarProducto(e){
    console.log('voy a eliminar')
}