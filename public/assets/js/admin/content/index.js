const displaycontent = (id) => {
  var content_text = 'content' + id
  var content = document.getElementById(content_text)
  if (!content.style.display) {
    content.style.display = 'table-row'
  }
  if (content.style.display === 'table-row') {
    content.style.display = 'none'
  } else {
    content.style.display = 'table-row'
  }
}
