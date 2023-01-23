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

    function duplicate() {

      let original = document.getElementById("bunchy");
      var clone = original.cloneNode(true);
      document.body.appendChild(clone);
      var modal = document.getElementById("artistfrom");
      modal.appendChild(clone);
      console.log(i);
      i++;
    }

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






//let it to finish the first crud 
//     let songds = [];
//     function addSongd(songName, lyrics, artistName, albumName){
//       let newSongd = {
//           songName: songName,
//           lyrics:lyrics,
//           artistName:artistName,
//           albumName:albumName
//       }
//       songds.push(newSongd);
//   }
//   let songListContainer = document.getElementById('song-list-container');

// for (let i = 0; i < songds.length; i++) {
//     let songd = songds[i];
//     songListContainer.innerHTML += `
//         <div class="mb-6">
//             <p> ${songd.songName} </p>
//             <p> ${songd.lyrics} </p>
//             <p> ${songd.artistName} </p>
//             <p> ${songd.albumName} </p>
//         </div>
//     `;
// }

// addSongd("song name","lyrics","artist name","album name");

    
