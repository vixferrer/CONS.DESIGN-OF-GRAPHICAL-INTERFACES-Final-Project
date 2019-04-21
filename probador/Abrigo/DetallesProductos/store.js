if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('eliminar')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }
}

function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.remove()
    updateCartTotal()
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    console.log(cartItemContainer)
    var cartRows = cartItemContainer.getElementsByClassName('producto')
    console.log(cartRows)
    var total = 0
    for (var i = 0; i < cartRows.length; i++){
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('precio')[0]
        var price = parseFloat(priceElement.innerText.replace('€', ''))
        total = total + price
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('total')[0].innerText = total + '€'
}