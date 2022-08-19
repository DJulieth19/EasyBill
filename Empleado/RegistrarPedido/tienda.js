const addToShoppingCartButtons = document.querySelectorAll('.addToCart');
addToShoppingCartButtons.forEach((addToCartButton) => {
  addToCartButton.addEventListener('click', addToCartClicked);
});

const comprarButton = document.querySelector('.comprarButton');
comprarButton.addEventListener('click', comprarButtonClicked);

const shoppingCartItemsContainer = document.querySelector(
  '.shoppingCartItemsContainer'
);

function addToCartClicked(event) {
  const button = event.target;
  const item = button.closest('.item');
  const itemTitle = item.querySelector('.item-title').textContent;
  const itemPrice = item.querySelector('.item-price').textContent;
  const itemImage = item.querySelector('.item-image').src;
  const itemCod = item.querySelector('.item-cod').textContent;
  addItemToShoppingCart(itemTitle, itemPrice, itemImage,itemCod);
}

function add(id_usuario,medioPago,nombreCliente,identificacion,nombre_usuario,tipo_usuario){
  //alert(id_usuario+medioPago+nombreCliente+identificacion+nombre_usuario+tipo_usuario)
  $.ajax({
    url:'datos.php',
    type: 'post',
    dataType: 'json',
    data:{
        id_usuario: id_usuario,
        medioPago: medioPago,
        nombreCliente: nombreCliente,
        identificacion: identificacion,
        nombre_usuario: nombre_usuario,
        tipo_usuario:  tipo_usuario

    }
}).done(
    function(data){
        $('#salida').append(data);
    }
);
  //window.location.href = window.location.href + "?w1=" + itemTitle;
}

function add2(itemTitle, cantidad,precio,id_usuario,medioPago,nombreCliente,identificacion,nombre_usuario,tipo_usuario){
  $.ajax({
    url:'datos2.php',
    type: 'post',
    dataType: 'json',
    data:{
        nombre: itemTitle,
        cantidad: cantidad,
        id_usuario: id_usuario,
        precio: precio,
        medioPago: medioPago,
        nombreCliente: nombreCliente,
        identificacion: identificacion,
        nombre_usuario: nombre_usuario,
        tipo_usuario:  tipo_usuario

    }
}).done(
    function(data){
        $('#salida').append(data);
    }
);
  //window.location.href = window.location.href + "?w1=" + itemTitle;
}

function addItemToShoppingCart(itemTitle, itemPrice, itemImage,itemCod) {
  const elementsTitle = shoppingCartItemsContainer.getElementsByClassName(
    'shoppingCartItemTitle'
  );
  for (let i = 0; i < elementsTitle.length; i++) {
    if (elementsTitle[i].innerText === itemTitle) {
      let elementQuantity = elementsTitle[
        i
      ].parentElement.parentElement.parentElement.querySelector(
        '.shoppingCartItemQuantity'
      );
      elementQuantity.value++;
      $('.toast').toast('show');
      updateShoppingCartTotal();
      return;
    }
  }

  const shoppingCartRow = document.createElement('div');
  const shoppingCartContent = `
  <div class="row shoppingCartItem">
        <div class="col-6">
            <div class="shopping-cart-item d-flex align-items-center h-100 border-bottom pb-2 pt-3">
                <img src=${itemImage} class="shopping-cart-image">
                <h6 class="shopping-cart-item-title shoppingCartItemTitle text-truncate ml-3 mb-0">${itemTitle}</h6>
            </div>
        </div>
        <div hidden class="col-2">
          <div class="shopping-cart-cod d-flex align-items-center h-100 border-bottom pb-2 pt-3">
              <p class="item-cod mb-0 shoppingCartItemCod">${itemCod}</p>
          </div>
        </div>
        <div class="col-2">
            <div class="shopping-cart-price d-flex align-items-center h-100 border-bottom pb-2 pt-3">
                <p class="item-price mb-0 shoppingCartItemPrice">${itemPrice}</p>
            </div>
        </div>
        <div class="col-4">
            <div
                class="shopping-cart-quantity d-flex justify-content-between align-items-center h-100 border-bottom pb-2 pt-3">
                <input class="shopping-cart-quantity-input shoppingCartItemQuantity" type="number"
                    value="1">
                <button class="btn btn-danger buttonDelete" type="button">X</button>
            </div>
        </div>
    </div>`;
  shoppingCartRow.innerHTML = shoppingCartContent;
  shoppingCartItemsContainer.append(shoppingCartRow);

  shoppingCartRow
    .querySelector('.buttonDelete')
    .addEventListener('click', removeShoppingCartItem);

  shoppingCartRow
    .querySelector('.shoppingCartItemQuantity')
    .addEventListener('change', quantityChanged);
  updateShoppingCartTotal();

}

function updateShoppingCartTotal() {
  let total = 0;
  const shoppingCartTotal = document.querySelector('.shoppingCartTotal');

  const shoppingCartItems = document.querySelectorAll('.shoppingCartItem');

  shoppingCartItems.forEach((shoppingCartItem) => {
    const shoppingCartItemPriceElement = shoppingCartItem.querySelector(
      '.shoppingCartItemPrice'
    );
    const shoppingCartItemPrice = Number(
      shoppingCartItemPriceElement.textContent.replace('$', '')
    );
    const shoppingCartItemQuantityElement = shoppingCartItem.querySelector(
      '.shoppingCartItemQuantity'
    );
    const shoppingCartItemQuantity = Number(
      shoppingCartItemQuantityElement.value);
    total = total + shoppingCartItemPrice * shoppingCartItemQuantity;
  });
  shoppingCartTotal.innerHTML = `$${total.toFixed(0)}`;
}

function removeShoppingCartItem(event) {
  const buttonClicked = event.target;
  buttonClicked.closest('.shoppingCartItem').remove();
  updateShoppingCartTotal();
}

function quantityChanged(event) {
  const input = event.target;
  input.value <= 0 ? (input.value = 1) : null;
  updateShoppingCartTotal();
}

function comprarButtonClicked() {
  var contador=0;
  const shoppingCartItems = document.querySelectorAll('.shoppingCartItem');
  const elementsPrecio = shoppingCartItemsContainer.getElementsByClassName(
    'shoppingCartItemPrice'
  );
  const elementsCod = shoppingCartItemsContainer.getElementsByClassName(
    'shoppingCartItemCod'
  );
      let params = new URLSearchParams(location.search);
      var nombre_usuario = params.get('nombre');
      var tipo_usuario = params.get('tipoUsuario');
      var id_usuario = params.get('id_usuario');
      var miCheckbox = document.getElementById('miElementoCheckbox');
      //aquí tengo el valor de efectivo si es true seleccionó efectivo
      var nombreCliente= document.getElementById('nombrecliente').textContent;
      var identificacion = document.getElementById('idcliente').textContent;
      //determinar medio de pago
      var medioPago="nada";
      if(miCheckbox.checked){
        medioPago="efectivo";
      }else medioPago="transferencia";
      //alert(id_usuario+medioPago+nombreCliente+identificacion+nombre_usuario+tipo_usuario)
    add(id_usuario,medioPago,nombreCliente,identificacion,nombre_usuario,tipo_usuario);
      
  shoppingCartItems.forEach((shoppingCartItem) => {

    const shoppingCartItemQuantityElement = shoppingCartItem.querySelector(
      '.shoppingCartItemQuantity'
    );
    var shoppingCartItemQuantity = Number(
      shoppingCartItemQuantityElement.value);

      var shoppingCartItemPrice = Number(
        elementsPrecio[contador].textContent.replace('$','')
      );
      var itemCod=elementsCod[contador].outerText;
      let params = new URLSearchParams(location.search);
      var nombre_usuario = params.get('nombre');
      var tipo_usuario = params.get('tipoUsuario');
      var id_usuario = params.get('id_usuario');
      var miCheckbox = document.getElementById('miElementoCheckbox');
      //aquí tengo el valor de efectivo si es true seleccionó efectivo
      var nombreCliente= document.getElementById('nombrecliente').textContent;
      var identificacion = document.getElementById('idcliente').textContent;
      //determinar medio de pago
      var medioPago="nada";
      if(miCheckbox.checked){
        medioPago="efectivo";
      }else medioPago="transferencia";
    
    add2(itemCod, shoppingCartItemQuantity,shoppingCartItemPrice,
      id_usuario,medioPago,nombreCliente,identificacion,nombre_usuario,tipo_usuario);
      contador=contador+1;
  })
window.location.href = "./factura.php";
}
