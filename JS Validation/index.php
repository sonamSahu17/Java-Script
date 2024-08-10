<!DOCTYPE html>
<html>

<head>
     <title> new crf </title>
     <style>

          
          body {
               background-image: url('book_bg.jpg');
               background-repeat: no-repeat;
               background-attachment: fixed;
               background-size: 100% 100%;

          }

          .htag{
               margin-top: 10px;
               margin-bottom: 0px;
               margin-right: 0px;
               margin-left: 500px;
               
}
          .formerror {
               color: red;
          }

          .but {
               border-radius: 9px;
               width: 100px;
               height: 40px;
               font-size: 25px;
               margin: 22px 10px;
          }

          .setmargin {
               margin-top: 10px;
               margin-bottom: 0px;
               margin-right: 0px;
               margin-left: 600px;
          }
     </style>

</head>

<body>

     </body><h1 class="htag">Student Registration Form</h1> </html></br>

     <form action="" name="myform" onsubmit="return validateform()" method="post" class="setmargin">


          <div class="formdesign">
               Name:
               &nbsp;<input type="text" name="fname" value="">&nbsp;
               <span class="formerror" id="name"></span></br></br>
          </div>



          <div class="fodesign">
               Father's name:
               &nbsp;<input type="text" name="faname">&nbsp;
               <span class="formerror" id="father"></span></br></br>
          </div>



          <div class="formdesign">

               Phone number:
               &nbsp; <input type="text" name="fphn">&nbsp;
               <span class="formerror" id="phn"> &nbsp;</span></br></br>
          </div>



          <div class="formdesign" id="email">

               Email Id:
               &nbsp;<input type="text" name="iemail">&nbsp;
               <span class="formerror" id="semail"> </span></br></br>
          </div>



          <div class="formdesign">

               Password:
               &nbsp;<input type="password" name="ipsw">
               <span class="formerror" id="spsw"> </span></br></br>
          </div>



          <div class="formdesign">
               Confirm Password:
               &nbsp;<input type="password" name="icpsw">
               <span class="formerror" id="scpsw"> &nbsp;</span></br></br>
          </div>



          <div class="formdesign">
               City:
               &nbsp;<select name="icity">
                    <option value="0">-- Select City --</option>
                    <option value="1">Jodhpur</option>
                    <option value="2">Jaipur</option>
                    <option value="3">Ajmer</option>
                    <option value="4">Badmer</option>
               </select>&nbsp;
               <span class="formerror" id="scity"> &nbsp;</span></br></br>
          </div>


          <div class="formdesign">
               Address:
               <textarea name="iadd" rows="2" cols="30"></textarea>
               &nbsp;<span class="formerror" id="sadd"> &nbsp;</span></br></br>
          </div>


          <div class="formdesign">

               Gender:
               &nbsp;<input type="radio"  name="gender" id="rbtn1"> Male</input>
               &nbsp;<input type="radio"  name="gender" id="rbtn2"> Female</input>
          
               &nbsp;<span  class="formerror" id="sgen"> &nbsp; </span></br></br>
          
          </div>
         

          <div class="formdesign">

               Hobbies:
               <input type="checkbox" id="hb1" name="hobbies1" value="Entertainment">Entertainment</input>
         &nbsp;<input type="checkbox" id="hb2" name="hobbies2" value="Sports">Sports</input>
         &nbsp;<input type="checkbox" id="hb3" name="hobbies3" value="Politics">Politics</input>
               &nbsp;<span class="formerror" id="shb"> &nbsp;</span>
          
          </div>

          &nbsp;</br>

          <input type="submit" value="Submit" class="but"> </input>
     </form>
     <script>

//<input type="radio" name="gender" id="rbtn3"> Other</input> 
function clearerror(){
     errors = document.getElementsByClassName('formerror');
     
     for(let item of errors)
     {
          item.innerHTML ="";
     }
} 
          function seterror(id, error) {
               element = document.getElementById(id);
               element.innerHTML = error;
          }

          function validateform() {
clearerror();

               var correct_way =  /^[A-Za-z]/;

               var numstartwith = /(0|91)?[6-9][0-9]{9}/;

               var name = document.forms["myform"]["fname"];
//name.value.trim()
                
               if (name.value.length == 0) {
                    name.style.outline ="1px solid red";
                    seterror("name", "*This field is required");
                    name.focus();
                    return false;
               }

              
               if (name.value.length < 2) {
                    name.style.outline ="1px solid red";
                    seterror("name", " *It's too short");
                    name.focus();
                    return false;
               }

               if (name.value.length > 20) {
                    name.style.outline ="1px solid red";
                    seterror("name", " *It's too long");
                    name.focus();
                    return false;
               }
   
          
                 if (name.value.match(correct_way)) 
                 true;
               else{
                    name.style.outline ="1px solid red";
                    seterror("name", "*Use characters only");
                    name.focus();
                    return false;
          
               }
               name.style.outline ="";


               var father = document.forms["myform"]["faname"];
                 father.style.outline ="";

               if (father.value.length == 0) {
                    father.style.outline ="1px solid red";
                    seterror("father", "*This field is required");
                    father.focus();
                    return false;
               }

               if (father.value.length < 3) {
                    father.style.outline ="1px solid red";
                    seterror("father", "*It's too short");
                    father.focus();
                    return false;
               }

               if (father.value.length > 10) {
                    father.style.outline ="1px solid red";
                    seterror("father", "*It's too long");
                    father.focus();
                    return false;
               }

             

               if (father.value.match(correct_way)) 
                 true;
               else{
                    father.style.outline ="1px solid red";
                    seterror("father", " *Use characters only");
                    father.focus();
                    return false;
          
               }

               var phone = document.forms["myform"]["fphn"];
               phone.style.outline ="";
               if (phone.value.length == 0) {
                    phone.style.outline ="1px solid red";
                    seterror("phn", "* This field is required");
                    phone.focus();
                    return false;
               }

               if (isNaN(phone.value)) {
                    phone.style.outline ="1px solid red";
                    seterror("phn", " *Invalid number");
                    phone.focus();
                    return false;
               } 
               
               var phone = document.forms["myform"]["fphn"];
               if (phone.value.length != 10) {
                    phone.style.outline ="1px solid red";
                    seterror("phn", "*Put 10 digit mobile number");
                    phone.focus();
                    return false;
               } 

               if (phone.value.match(numstartwith)) 
                 true;

               else{
                    phone.style.outline ="1px solid red";
                    seterror("phn", " *Must be start with 7,8,9");
                    phone.focus();
                    return false;
          
               }

               var email = document.forms["myform"]["iemail"];
               email.style.outline ="";

               if (email.value.length == 0) {
                    email.style.outline ="1px solid red";
                    seterror("semail", "*This field is required");
                    email.focus();
                    return false;
               }

               if (email.value.indexOf('@') <=0) {
                    email.style.outline ="1px solid red";
                    seterror("semail", "*@ Invalid position");
                    email.focus();
                    return false;
               }

               if ((email.value.charAt(email.value.length-4)!='.') && (email.value.charAt(email.value.length-3)!='.'))
               {
                    email.style.outline ="1px solid red";
                   seterror("semail", "*Dot(.) Invalid position");
                   email.focus();
                   return false;
                     }   


               var pass = document.forms["myform"]["ipsw"];
               pass.style.outline ="";
               if (pass.value.length == 0) {
                    pass.style.outline ="1px solid red";
                    seterror("spsw", "*This field is reqiured");
                    pass.focus();
                    return false;

               }

               if (pass.value.length < 6) {
                    pass.style.outline ="1px solid red";
                    seterror("spsw", "*Must be at least 6 characters");
                    pass.focus();
                    return false;
               }

               if (pass.value.length >20 ) {
                    pass.style.outline ="1px solid red";
                    seterror("spsw", "* Must be less than 20 characters ");
                    pass.focus();
                    return false;
               }

               var cpass = document.forms["myform"]["icpsw"];
               cpass.style.outline ="";
               if (cpass.value.length == 0) {
                    cpass.style.outline ="1px solid red";
                    seterror("scpsw", "*This field is required");
                    cpass.focus();
                    return false;
               }


               if (pass.value!=cpass.value) {
                    cpass.style.outline ="1px solid red";
                    seterror("scpsw", "*password are not match");
                    cpass.focus();
                    return false;
               }

               var city = document.forms["myform"]["icity"];
               city.style.outline ="";
               if (city.value.length == 0) {
                    city.style.outline ="1px solid red";
                    seterror("scity", "*This field required");
                    city.focus();
                    return false;
               }

               if (city.value == 0) {
                    city.style.outline ="1px solid red";
                    seterror("scity", "*Select your city");
                    city.focus();
                    return false;
               }
              

               var add = document.forms["myform"]["iadd"];
               add.style.outline ="";
               if (add.value.length == 0) {
                    add.style.outline ="1px solid red";
                    seterror("sadd", "* This field is required");
                    add.focus();
                    return false;
               }

               var add = document.forms["myform"]["iadd"];
               if (add.value.length < 1) {
                    add.style.outline ="1px solid red";
                    seterror("sadd", "*It's too short ");
                    add.focus();
                    return false;
               }

               var add = document.forms["myform"]["iadd"];
               if (add.value.length > 200) {
                    add.style.outline ="1px solid red";
                    seterror("sadd", "*It's too long ");
                    add.focus();
                    return false;
               }

               var s=document.getElementById("rbtn1");
       var n=document.getElementById("rbtn2");
                if((!s.checked) && (!n.checked)){
                    seterror("sgen", "*selecte anyone");
                    return false;
               }

               var c1=document.getElementById("hb1");
       var c2=document.getElementById("hb2");
       var c3=document.getElementById("hb3");
                if((!c1.checked) && (!c2.checked) && (!c3.checked)){
                    seterror("shb","*Select at least one");
                    return false;
               }           

               else

                    return true;

          }
     </script>
</body>

</html>