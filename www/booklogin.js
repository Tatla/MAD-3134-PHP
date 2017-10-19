function check(form)/*function to check userid & password*/
{
 /*the following code checkes whether the entered userid and password are matching*/
 if(form.userid.value == "admin" && form.pswrd.value == "admin123")
  {
    window.open('bookimg.html')
  }
 else
 {
   alert("Error Password or Username")
  }
}