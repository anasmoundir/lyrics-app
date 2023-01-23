function toggleModal(modalID){
      document.getElementById(modalID).classList.toggle("hidden");
      // document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
      document.getElementById(modalID).classList.toggle("flex");
      const backdrop = document.getElementById(modalID + "-backdrop");
      if(backdrop) {
       backdrop.classList.toggle("flex");
      } 
    }

    function duplicate() {
      let original = document.getElementById("bunchy");
      var clone = original.cloneNode(true);
      document.body.appendChild(clone);
      var modal = document.getElementById("artistfrom");
      document.getElementById('addone').style.display ='none';
      
      modal.appendChild(clone);
    }

    function removethelastadded()
    {
      var original = document.getElementById("bunchy");
      original.parentNode.removeChild(original)
    }


    document.getElementById("search-navbar").addEventListener("keyup", search);
    function search() {

      var input = document.getElementById("search-navbar").value;
      for(var i = 0; i < songs.length; i++) {
        if(songs[i].name.toLowerCase().indexOf(input) > -1 || songs[i].lyrics.toLowerCase().indexOf(input) > -1) {
          document.getElementById(songs[i].id_song).style.display = "block";
        } else {
          document.getElementById(songs[i].id_song).style.display = "none";
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

    
