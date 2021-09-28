const toogleMenu = () => {
  let sidebar = document.getElementById('sidebar');
  let section = document.getElementById('section');
  let navbar = document.getElementById('navbar');

  if(sidebar.style.width !== "0px"){
    sidebar.style.width = "0";
    section.style.left = "0";
    section.style.width = "100%";
    navbar.style.left = "0";
    navbar.style.width = "100%";
    sidebar.style.display ="none";
  }
  else{
    sidebar.style.display ="block";
    sidebar.style.width = "300px";
    section.style.left = "300px";
    section.style.width = "calc(100% - 300px)";
    navbar.style.left = "300px";
    navbar.style.width = "calc(100% - 300px)";
  }
}

