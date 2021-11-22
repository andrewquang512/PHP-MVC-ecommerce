// + button
function increaseValue(product_id) {
    var value = parseInt(
        document.getElementById('number-' + product_id).value,
        10
    )
    value = isNaN(value) ? 1 : value
    value++
    document.getElementById('number-' + product_id).value = value
}

// - button
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

// money each product
function intoMoney(index, defaultGift, defaultPrice) {
    const number = document.getElementById('number-' + index)
    const money = document.getElementById('money-' + index)
    const gift = document.getElementById('gift-' + index)

    var _value = parseInt(number.value, 10)
    _value = isNaN(_value) ? 0 : _value

    var formater = new Intl.NumberFormat('vi-VN')

    money.innerHTML = formater.format(_value * defaultPrice)
    gift.innerHTML = formater.format(_value * defaultGift)
}

// total
function Calculate() {
    const temptotal = document.getElementById('tempTotalMoney')
    const gift = document.getElementById('gift')
    const totalmoney = document.getElementById('totalMoney')

    var total = 0
    var totalGift = 0
    var checkboxList = document.getElementsByName('foo')

    for (var i = 1; i < checkboxList.length; i++) {
        if (checkboxList[i].checked == true) {
            total +=
                parseFloat(document.getElementById('money-' + i).innerHTML, 10) *
                10 ** 6
            _gift = parseFloat(document.getElementById('gift-' + i).innerHTML, 10)
            if (_gift < 100) _gift *= 10 ** 6
            else _gift *= 10 ** 3
            totalGift += _gift
        }
    }

    var formater = new Intl.NumberFormat('vi-VN', {
        style: 'currency',
        currency: 'VND',
    })

    temptotal.innerHTML = formater.format(total)
    gift.innerHTML = formater.format(totalGift)
    totalmoney.innerHTML = formater.format(total - totalGift)
}

// select all
function toggle(source) {
    var checkboxes = document.getElementsByName('foo')
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = source.checked
    }
}

// alert buy success
function Buy() {
    alert('Mua hàng thành công')
}