
const login = document.getElementById("loginform");
btn = document.getElementById("submit-btn");


login.addEventListener("submit" ,async(e)=>
{
      e.preventDefault();
      const formlogin = new FormData(login);
      formlogin.append("login",1);
      if(login.checkValidity() == false)
      {
            e.preventDefault();
            e.stopPropagation();
            return false;

      }else 
      {
          
            btn.value ="wait please";
            const data = await fetch("action.php",{
                  method :"POST",
                  body :formlogin,
            })
           
            const response = await data.text();
            console.log(response);
           
            if (response === "success") {
                  
                window.location.href = "dashboard.php";
            } else {
      
                console.log("Invalid email or password");
            }

      }

});
