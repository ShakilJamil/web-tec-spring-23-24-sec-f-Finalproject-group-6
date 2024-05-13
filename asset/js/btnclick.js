function linkbtn()
    {
let button = document.getElementById("login");

button.addEventListener("click", function() {
    
    window.location.href = "log.php";
});
    }

function linkbtnr()
    {
let button = document.getElementById("registration");

button.addEventListener("click", function() {
    
    window.location.href = "userRegistration.html";
});
    }