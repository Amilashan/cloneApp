function validate() {
    var stdName = document.forms["form"]["stdName"].value;
    var stdRegNum = document.forms["form"]["stdRegNum"].value;
    if (stdName == "" || stdRegNum == "") {
        return false;
    }
    return true;     
}