function cssLayout() {
    document.getElementById("css").href = this.value;
}


function setCookie(){
    var date = new Date("Februari 10, 2013");
    var dateString = date.toGMTString();
    var cookieString = "Css=document.getElementById("css").href" + dateString;
    document.cookie = cookieString;
}

function getCookie(){
    alert(document.cookie);
}