
const addform = document.getElementById('artistfrom');
showAlert - document.getElementById('showAlert');

form.addEventListener("submit", async(e)=> {
e.preventDefault();
const formData = new FormData(addform);
formData.append("add",1);
if(form.checkValidity() ==false)
{
      e.preventDefault();
      e.stopPropagation();
      addForm.classList("was-validated");
      return false;
}else
{
      document.getElementById("add-user-btn").value = "please wait";
      const data = await fetch("action.php",{
            method :"POST",
            body :form,
      })
      const response =await data.text();
      showAlert.innerHTML =response;
      document.getElementById('add-user-btn').value ="add user";
      addForm.reset();
      addform


     

}

})