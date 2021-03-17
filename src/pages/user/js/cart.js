/*var dataCant = document.getElementById('txtCant');
var cantidad = document.getElementById('txtCant').value;
var precio = dataCant.dataset.id;
var id = dataCant.dataset.precio;

cantidad.addEventListener('change', actualizarValor);

actualizarValor(cantidad, precio, id);

function actualizarValor(cantidad, precio, id){
    var mult = parseFloat(cantidad)*parseFloat(precio);
    $(".cant"+id).text("$"+mult);
}*/

var btn_eliminar = document.getElementById('delete');


btn_eliminar.addEventListener('click', eliminarCart);

function eliminarCart(e){
    e.preventDefault();
    var idi = btn_eliminar.dataset.id;
    alert(idi);


    fetch('src/pages/user/php/delete_cart.php',{
        method: 'POST',
        body: idi
    })
     .then( res => res.json())
     
}