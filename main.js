
const addform = document.getElementById('artistfrom');
const updatform = document.getElementById('updateforme');
showAlert = document.getElementById('showAlert');
addmodal =document.getElementById('modal-id-backdrop');
const tbody = document.querySelector("tbody");

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
      fetchallsongs();
      addform.classList.remove("was-validated");
      }
});

      const fetchallsongs = async () => {
      const data = await fetch("action.php?read=1", {
        method: "GET",
      });
      const response = await data.text();
      tbody.innerHTML = response;
    };
    fetchallsongs();


      tbody.addEventListener("click",(e) => {
      if (e.target.classList.contains("editLink")) {
      e.preventDefault();
      let id = e.target.getAttribute("id");
      editSong(id);
      }});


      const editSong =  async (id) =>    
      {
        const data = await fetch(`action.php?edit=1&id=${id}`, {
        method: "GET",

      });
      const response = await data.json();
      document.getElementById('song_name1').value = response.name;
      document.getElementById('lyrics1').value = response.lyrics;
      document.getElementById('artist1').value = response.id_artist;

      }

      updatform.addEventListener("submit",async (e) =>
      {
            e.preventDefault(e);
            const formData = new FormData(updatform);
            formData.append("update", 1);
          
            if (updatform.checkValidity() === false) {
              e.preventDefault();
              e.stopPropagation();
              updatform.classList.add("was-validated");
              return false;
            } else {
              document.getElementById("edit-user-btn").value = "Please Wait...";
          
              const data = await fetch("action.php", {
                method: "POST",
                body: formData,
              });
              const response = await data.text();
              console.log('im here');
              showAlert.innerHTML = response;
              document.getElementById("edit-song-btn").value = "update song";
              updatform.reset();
              updatform.classList.remove("was-validated");
              editModal.hide();
              fetchallsongs();
            }
          });

          //it is working
          tbody.addEventListener("click", (e) => {
            if (e.target.classList.contains("deleteLink")) {
              e.preventDefault();
              let id = e.target.getAttribute("id");
             deletesong(id);
            }
          });
          const deletesong = async (id) => {
            const data = await fetch(`action.php?delete=1&id=${id}`, {
              method: "GET",
            });
            const response = await data.text();
            showAlert.innerHTML = response;
            fetchallsongs();
          };
    


    



