function validate() {
    var $valid = true;
    document.getElementById("user_info").innerHTML = "";
    document.getElementById("password_info").innerHTML = "";

    var userName = document.getElementById("loginEmail").value;
    var password = document.getElementById("loginPassword").value;
    if(userName == "")
    {
        document.getElementById("user_info").innerHTML = "required";
        $valid = false;
    }
    if(password == "")
    {
        document.getElementById("password_info").innerHTML = "required";
        $valid = false;
    }
    return $valid;
}