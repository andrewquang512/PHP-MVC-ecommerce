const  displaycontact = (id) =>{
    var contact_text = "contact" + id;
    var contact = document.getElementById(contact_text);
    if(!contact.style.display){
        contact.style.display = "table-row";
    }
    if(contact.style.display === "table-row"){
        contact.style.display = "none";
    }
    else{
        contact.style.display = "table-row";
    }
}