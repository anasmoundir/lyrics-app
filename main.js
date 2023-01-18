
const addform = document.getElementById('artistfrom');
showAlert = document.getElementById('showAlert');
addmodal =document.getElementById('modal-id-backdrop');

addform.addEventListener("submit", async(e)=> {
e.preventDefault();
const formData = new FormData(addform);
formData.append("add",1);
if(addform.checkValidity() ==false)
{
      e.preventDefault();
      e.stopPropagation();
      addform.classList("was-validated");
      return false;
}else
{
      document.getElementById("add-user-btn").value = "please wait";
      const data = await fetch("action.php",{
            method :"POST",
            body :formData,
      })
      const response =await data.text();
      showAlert.innerHTML =response;
      document.getElementById('add-user-btn').value ="add user";
      addform.reset();
      addform.classList.remove("was-validated");
      addmodal.hide();
      }


     

}

)