const submit=()=>{
    console.log( document.getElementsByTagName('div'))//print
   
   const email= document.getElementById("email").value
   const pass = document.getElementById("password").value
   console.log(email,pass)
   if(email!=="achu@g.com"||pass!=="achu")
   {
    document.getElementById("error").style.display="block"
    document.getElementById("error").innerHTML="Invalid username or password"

   }
   else  

{  
    document.getElementsByTagName('body')[0].style.opacity="50%"
        setTimeout(()=> window.location.href = 'www.google.com',3000)
   
}
}