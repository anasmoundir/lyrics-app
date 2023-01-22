function toggleModal(modalID){
      document.getElementById(modalID).classList.toggle("hidden");
      // document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
      document.getElementById(modalID).classList.toggle("flex");
      // document.getElementById(modalID + "-backdrop").classList.toggle("flex");
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

    
