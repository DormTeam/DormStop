var delete_cookie = function(name) {
    document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
};

function myFunction() {
    delete_cookie('username');
    window.location='index.php';
}

document.getElementById("log_out").onclick = function(){myFunction()};