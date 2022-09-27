function validateForm() {
    let x = document.forms["myForm"]["uname"].value;
    if (x == "") {
      alert("Name must be filled out");
      document.myForm.uname.focus() ;
      return false;
    }

    if(myForm.r1.checked==false && myForm.r2.checked==false && myForm.r3.checked==false){
      alert("Select your gender");
      return false;
    }

    var emailID = document.myForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
 
    if (atpos < 1 || ( dotpos - atpos < 2 )) {
        alert("Please enter correct email ID")
        document.myForm.email.focus() ;
         return false;
    }

    let y = document.forms["myForm"]["mobile"].value;
    if(y<999999999||y>9999999999){
      alert("Enter a valid mobile number");
      document.myForm.mobile.focus() ;
      return false;
    }

    if(myForm.c1.checked==false && myForm.c2.checked==false && myForm.c3.checked==false && myForm.c4.checked==false && myForm.c5.checked==false){
        alert("Please select atleast one course!!");
        return false;
    }

    if (myForm.id_password.value == "") {
      alert("Password cannot be blank");
      document.myForm.id_password.focus() ;
      return false;
    }

    if (myForm.confirm_pwd.value == "") {
      alert("Please confirm your password");
      document.myForm.id_password.focus() ;
      return false;
    }
    
    if(document.forms["myForm"]["confirm_pwd"].value==document.forms["myForm"]["pwd"].value){
      alert("Please enter correct password")
      document.myForm.confirm_pwd.focus() ;
    }

    
}

function sh_password(){
  let z = document.getElementById("id_password");
      if(z.type==="password"){
        z.type = "text";
      }
      else{
        z.type = "password";
      }
}

function changeText() {
  if (validateForm() != false) {
    document.getElementById("butt").innerHTML = "Registered";
    document.getElementById("butt").style.backgroundColor = "darkgreen";
  }

}

    

