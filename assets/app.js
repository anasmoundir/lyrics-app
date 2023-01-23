function toggleModal(modalID){
      document.getElementById(modalID).classList.toggle("hidden");
      // document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
      document.getElementById(modalID).classList.toggle("flex");
      const backdrop = document.getElementById(modalID + "-backdrop");
      if(backdrop) {
       backdrop.classList.toggle("flex");
      } 
    };
    var i = 1

    
    const originalForm = document.getElementById("artistfrom");
    const clonedForms = [];
    function duplicate() {
      let original = document.getElementById("bunchy");
      var clone = original.cloneNode(true);
      clonedForms.push(clone);
      document.body.appendChild(clone);
      var modal = document.getElementById("artistfrom");
      modal.appendChild(clone);
      console.log(i);
      i++;
    }

//     // A function to handle form submission
// function submitForm(formData) {
//   // Add your logic for submitting the form data here
//   // ...
// }

// // A function to submit all the cloned forms
// function submitClonedForms() {
//   // Iterate through the array of cloned forms
//   clonedForms.forEach((form) => {
//     // Get the form data from the current form
//     const formData = new FormData(form);

//     // Submit the form
//     submitForm(formData);
//   });
// }








    function removethelastadded()
    {
      if(i>1)
      {
        var original = document.getElementById("bunchy");
        original.parentNode.removeChild(original)
        i--;
      }
    }





    function myFunction() {

      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById('myInput');
      filter = input.value.toUpperCase();
      table = document.getElementById("mytable");
      tr = table.getElementsByTagName('tr');

      // Loop through all list items, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if(td){
          txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
        }
      }
    }

export{clonedForms};

