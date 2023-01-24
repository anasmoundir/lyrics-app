

const addform = document.getElementById('artistfrom');
const updatform = document.getElementById('updateforme');
showAlert = document.getElementById('showAlert');
addmodal =document.getElementById('modal-id-backdrop');
const tbody = document.querySelector("tbody");
const originalForm = document.getElementById("artistfrom");
const clonedForms = [];

var i;

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
    document.getElementById('artist1').value = response.nom_artist;
    document.getElementById('id').value =response.id_song;
    }



    updatform.addEventListener("submit",async (e) =>
    {
          e.preventDefault();
          const formData = new FormData(updatform);
          formData.append("update", 1);
        
          if (updatform.checkValidity() === false) {
            e.preventDefault();
            e.stopPropagation();
            updatform.classList.add("was-validated");
            return false;
          } else {
         document.getElementById("edit-song-btn").value = "Please Wait...";
            const data = await fetch("action.php", {
              method: "POST",
              body: formData,
            });
            const response = await data.text();
            console.log(response);
            showAlert.innerHTML = response;
            document.getElementById("edit-song-btn").value = "Please Wait...";
            updatform.reset();
            fetchallsongs();
            updatform.classList.remove("was-validated");
          }
        });

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

  document.getElementById("bunchy").style.display = 'none';
  function duplicate() {
  document.getElementById("bunchy").style.display = 'block';
  let original = document.getElementById("bunchy");
  let clone = original.cloneNode(true);
  document.getElementById("bunchy").style.display = 'none';
  clone.style.display ='block';
  createAndAdd("form-" + i, clone);
}

function removeLastAdded() {
  if (i > 1) {
    addform.removeChild(formToRemove);
    i--;
  }
}


function createAndAdd(id, clone) {
  let form = document.createElement("form");
  form.id = id;
  form.appendChild(clone); 
  form.addEventListener("submit", async(e) => {
    e.preventDefault();
    let formData = new FormData(form);
    formData.append("add", 1);
    if (form.checkValidity() == false) {
      e.preventDefault();
      e.stopPropagation();
      form.classList("was-validated");
      return false;
    } else {
      document.getElementById("add-user-btn").value = "please wait";
      const data = await fetch("action.php", {
        method: "POST",
        body: formData,
      });
      const response = await data.text();
      showAlert.innerHTML = response;
      document.getElementById("add-user-btn").value = "add user";
      form.reset();
      fetchallsongs();
      form.classList.remove("was-validated");
    }
  });
  clonedForms.push(form);
  addform.appendChild(form); 
  i++;
}



addform.addEventListener("submit", async (e) => {
  e.preventDefault();
  for (let i = 0; i < clonedForms.length; i++) {
    let form = clonedForms[i];
    if (form.checkValidity() == false) {
      e.preventDefault();
      e.stopPropagation();
      return false;
    } else {
      document.getElementById("add-user-btn").value = "please wait";
      let formData = new FormData(form);
      formData.append("add", 1);
      const data = await fetch("action.php", {
        method: "POST",
        body: formData,
      });
      const response = await data.text();
      showAlert.innerHTML = response;
      document.getElementById("add-user-btn").value ="add user";
      addform.reset();
      form.innerHTML="";
      fetchallsongs();
      addform.classList.remove("was-validated");
    }}});


      const fetchallsongs = async () => {
      const data = await fetch("action.php?read=1", {
        method: "GET",
      });
      const response = await data.text();
      tbody.innerHTML = response;
  
    };
    fetchallsongs();

    const fetchsortedbyname = async () => {
      const data = await fetch("action.php?sortedread=1", {
        method: "GET",
      });
      const response = await data.text();
      tbody.innerHTML = response;
    };





   


         





