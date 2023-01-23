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
    var songs = [];

    
    document.addEventListener('DOMContentLoaded', function(){
      var tbody = document.querySelector("table tbody");
      tbody.addEventListener("click", function(event){
          var target = event.target;
          if(target.tagName === "td"){
              var id_song = target.getAttribute("data-song-id");
              var name = target.getAttribute("data-song-name");
              var lyrics = target.getAttribute("data-song-lyrics");
              var album = target.getAttribute("data-song-album");
              var artist = target.getAttribute("data-song-artist");
  
              songs.push({
                  id_song: id_song,
                  name: name,
                  lyrics: lyrics,
                  album: album,
                  artist: artist
              });
          }
      });
  });

    function search() {
     console.log(songs)
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

    
