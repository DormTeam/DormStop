var delete_cookie = function(name) {
    document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
};

function myFunction() {
    delete_cookie('username_admin');
    window.location='admin.php';
}

document.getElementById("log_out_admin").onclick = function(){myFunction()};