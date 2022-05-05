function Validate(inputText)
{
    if(document.form1.name.value=="") { alert("Name must be filled out"); return false;}
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(!inputText.value.match(mailformat))
{

    alert("You have entered an invalid email address!");
    document.form1.text1.focus();
    return false;

}

var phoneformat = /^\d{10}$/;
  if(!document.form1.phone.value.match(phoneformat))
       {
        alert("You have entered an invalid phone number! Please enter a 10 digit phone number ");
        return false;
       }
        
       alert("You have successfully registered!");
        return true
}