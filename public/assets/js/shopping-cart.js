function increaseValue(product_id) {
  var value = parseInt(
    document.getElementById('number-' + product_id).value,
    10
  )
  value = isNaN(value) ? 0 : value
  value++
  document.getElementById('number-' + product_id).value = value
}

function decreaseValue(product_id) {
  var value = parseInt(
    document.getElementById('number-' + product_id).value,
    10
  )
  value = isNaN(value) ? 0 : value
  value < 1 ? (value = 1) : ''
  value--
  document.getElementById('number-' + product_id).value = value
}
