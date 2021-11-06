function increaseValue(product_id) {
  var value = parseInt(
    document.getElementById('number-' + product_id).value,
    10
  )
  value = isNaN(value) ? 1 : value
  value++
  document.getElementById('number-' + product_id).value = value
}

function decreaseValue(product_id) {
  var value = parseInt(
    document.getElementById('number-' + product_id).value,
    10
  )
  value = isNaN(value) ? 2 : value
  value < 2 ? (value = 2) : ''
  value--
  document.getElementById('number-' + product_id).value = value
}

function intoMoney(index) {
  const price = document.getElementById('price-' + index)
  const number = document.getElementById('number-' + index)
  const money = document.getElementById('money-' + index)

  var _value = parseFloat(number.value, 10)
  var _price = parseFloat(price.innerHTML, 10)
  _value = isNaN(_value) ? 0 : _value
  var result = _value * _price
  money.innerHTML = result.toFixed(6)
}

function tempTotalMoney() {
  const temptotal = document.getElementById('tempTotalMoney')
  const totalmoney = document.getElementById('totalMoney')
  const gift = document.getElementById('gift')

  var total = 0
  var checkboxList = document.getElementsByName('foo')
  var number_of_checkbox = checkboxList.length
  for (var i = 1; i < number_of_checkbox; i++) {
    if (checkboxList[i].checked == true) {
      total += parseFloat(document.getElementById('money-' + i).innerHTML, 10)
    }
  }
  if (total === 0) temptotal.innerHTML = 0
  else temptotal.innerHTML = total.toFixed(6)

  var _gift = parseFloat(gift.innerHTML, 10) / 1000000
  var _total = (total - _gift).toFixed(6)
  if (total <= 0) totalmoney.innerHTML = 0
  else totalmoney.innerHTML = _total
}

function toggle(source) {
  var checkboxes = document.getElementsByName('foo')
  for (var i = 0; i < checkboxes.length; i++) {
    checkboxes[i].checked = source.checked
  }
}

function Remove(index) {
  const product = document.getElementById('product-' + index)
  product.style.display = 'None'
}

function RemoveAll() {
  const RemoveList = document.getElementsByName('product')
  for (var i = 0; i < RemoveList.length; i++) {
    RemoveList[i].style.display = 'None'
  }
}
