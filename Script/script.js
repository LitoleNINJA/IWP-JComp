function Validate(name, regno, email, phone, pass, conpass) {
    if (name === "") {
        alert("Name cannot be Empty !");
        return;
    }
    if (regno === "") {
        alert("Registration Number cannot be Empty !");
        return;
    }
    if (pass === "") {
        alert("Password cannot be Empty !");
        return;
    }
    if (conpass === "") {
        alert("Confirm Password cannot be Empty !");
        return;
    }
    var reg = /^\d{2}[B|M][A-Z]{2}\d{4}$/;
    if (!regno.match(reg)) {
        alert("Incorrect Registration Number !");
        return;
    }
    var phoneno = /^\d{10}$/;
    if (!phone.match(phoneno)) {
        alert("Incorrect phone number !");
        return;
    }
    if (pass.length < 6) {
        alert("Password must be greater than 6 chars !");
        return;
    }
    if (pass.length > 15) {
        alert("Password must be less than 15 chars !");
        return;
    }
    if (pass !== conpass) {
        alert("Password and Confirm Password do not match !");
        return;
    }
    return true;
}
function handleSuccess(name, regno, email, phone, pass, conpass) {
    const div = document.getElementById("d2");
    const div2 = document.getElementById("d3");
    div.style.display = "none";
    document.write("Name : " + name + "<br><br>");
    document.write("Reg No : " + regno + "<br><br>");
    document.write("Email : " + email + "<br><br>");
    document.write("Phone : " + phone + "<br><br>");
}
function handleSubmit() {
    var name = document.forms["form1"]["name"].value;
    var regno = document.forms["form1"]["regno"].value;
    var email = document.forms["form1"]["email"].value;
    var phone = document.forms["form1"]["phone"].value;
    var pass = document.forms["form1"]["pass"].value;
    var conpass = document.forms["form1"]["conpass"].value;
    if(Validate(name, regno, email, phone, pass, conpass)) {
        handleSuccess(name, regno, email, phone, pass, conpass);
    }
}