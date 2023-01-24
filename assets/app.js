function toggleModal(modalID){
      document.getElementById(modalID).classList.toggle("hidden");
      // document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
      document.getElementById(modalID).classList.toggle("flex");
      const backdrop = document.getElementById(modalID + "-backdrop");
      if(backdrop) {
       backdrop.classList.toggle("flex");
      } 
    };
  



    



    function myFunction(myInput) {

      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById(myInput);
      filter = input.value.toUpperCase();
      table = document.getElementById("mytable");
      tr = table.getElementsByTagName('tr');

    
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



