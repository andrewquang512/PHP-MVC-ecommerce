const toogleMenu = () => {
  let sidebar = document.getElementById('sidebar')
  let section = document.getElementById('section')
  let navbar = document.getElementById('navbar')
  let homecontent = document.getElementById('homecontent')
  if (window.innerWidth >= '600') {
    if (sidebar.style.width !== '0px') {
      sidebar.style.width = '0'
      section.style.left = '0'
      section.style.width = '100%'
      navbar.style.left = '0'
      navbar.style.width = '100%'
      sidebar.style.display = 'none'
    } else {
      sidebar.style.display = 'block'
      sidebar.style.width = '300px'
      section.style.left = '300px'
      section.style.width = 'calc(100% - 300px)'
      navbar.style.left = '300px'
      navbar.style.width = 'calc(100% - 300px)'
    }
  }
  if (window.innerWidth < '600') {
    if (sidebar.style.width !== '0px') {
      sidebar.style.width = '0'
      sidebar.style.display = 'none'
      homecontent.style.padding = '40px 30px'
    } else {
      sidebar.style.display = 'block'
      sidebar.style.width = '100%'
      homecontent.style.padding = '600px 30px'
    }
  }
}

const FilterFunction = () => {
  var input, filter, table, tr, td, i, txtValue
  input = document.getElementById('FilterInput')
  filter = input.value.toUpperCase()
  table = document.getElementById('FilterTable')
  tr = table.getElementsByTagName('tr')

  for (i = 0; i < tr.length; i++) {
    td_1 = tr[i].getElementsByTagName('td')[1]
    td_2 = tr[i].getElementsByTagName('td')[2]
    td_3 = tr[i].getElementsByTagName('td')[3]
    if (td_1 && td_2 && td_3) {
      Value_td1 = td_1.textContent || td_1.innerText
      Value_td2 = td_2.textContent || td_2.innerText
      Value_td3 = td_3.textContent || td_3.innerText
      if (
        Value_td1.toUpperCase().indexOf(filter) > -1 ||
        Value_td2.toUpperCase().indexOf(filter) > -1 ||
        Value_td3.toUpperCase().indexOf(filter) > -1
      ) {
        tr[i].style.display = ''
      } else {
        tr[i].style.display = 'none'
      }
    }
  }
}
