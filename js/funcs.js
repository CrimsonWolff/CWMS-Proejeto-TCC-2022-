
// Validação de campos
function validar_entrar(){
    var user = LogForm.txt_user;
    var key = LogForm.txt_keyword;


    if (user.value == ""){
        alert("Campo vazio");
        user.focus();
        return;
    }
    if (key.value == ""){
        alert("Campo vazio");
        key.focus();
        return;
    }
    if (user.value == "user1", key.value == "123")
    {
        window.location.href = "home.html";
    }

    LogForm.submit();
}

// Navbar grudante
window.onscroll = function() {stick()};

var navbar = document.getElementById("myNav");
var sticky = navbar.offsetTop;
var carrou = document.getElementById("myCarrou")

function stick(){
if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky"),
    carrou.classList.add("caro-hide");
} else {
    navbar.classList.remove("sticky"),
    carrou.classList.remove("caro-hide");
}
}

// Sidemenu
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}