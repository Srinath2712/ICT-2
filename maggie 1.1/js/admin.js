// JavaScript Document
function check(form)
{
 if(form.userid.value == "admin" && form.pswrd.value == "password")
  {
    window.open('layout.html')
  }
 else
 {
   alert("Error Password or Username")
  }
}