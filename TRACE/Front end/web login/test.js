const login=()=>{
    console.log( document.getElementsByTagName('div'))//print
   
   const email= document.getElementById("email").value
   const pass = document.getElementById("password").value
   console.log(email,pass)
   if(email==""||pass=="")
   {
    document.getElementById("error").style.display="block"
    document.getElementById("error").innerHTML="Username or Password Cannot Be Empty"

   }
   else  

{  
    document.getElementsByTagName('body')[0].style.opacity="75%"
        setTimeout(()=> window.location.href = '../../Back end/web login/login_process.php?email='+email+'password='+pass,2000)
   
}
}