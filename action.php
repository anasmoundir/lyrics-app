<?php
require_once 'Database.php';
require_once 'util.php';

$db = new Database;
$util = new Util;
$id =0;

if (isset($_POST['add']))
 {
      $song_name = $_POST['song_name'];
      $song_lyrics = $_POST['lyrics_text'];
      $song_maker = $_POST['artist_name'];
      // $album_name = $_POST['album_name'];
      $db->insert($song_name, $song_lyrics, $song_maker);
}

if (isset($_GET['read']))
 {
      $songs = $db->read();
  $output = '';
  if($songs)
  {
      foreach ($songs as $row) 
      {
            $str=substr($row['lyrics'],0,10);
        $output .= " <tr id='my-tr' class='bg-white border-b'>
        <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>{$row['id_song']}</td>
        <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>
        {$row['name']}
        </td>
        <td title='{$row['lyrics']}' class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>
         {$str}....<a class='bg-danger'>More</a>
        </td>
        <td  class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>
        {$row['nom_artist']}
        </td>
      
        <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>
          <a  id ='{$row['id_song']}' class='deleteLink bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2'  id ='{$row['id_song']}' >Delete</a>
          <a   id ='{$row['id_song']}'  class='editLink text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2' onclick='toggleModal(".'"modal-id1"'.")'>Update the song</a>  </td>
       </tr class='bg-white border-b'>";
      }
      echo $output;
      } else {
                  echo '<tr>
                        <td colspan="6">No Users Found in the Database!</td>
                   </tr>';
            }
}

if(isset($_GET['edit']))
{
      $id =$_GET['id'];
      $song = $db -> readOne($id);
      echo json_encode($song);
}


if(isset($_POST['update']))

{
      $song_name =$_POST['song_name1'];
      $song_lyrics =$_POST['lyrics_text1'];
      $nom_artist =$_POST['artist_name1'];
      $id = $_POST['id'];
      $db->update($id,$song_name, $song_lyrics, $nom_artist);
}

if(isset($_GET['delete']))
{
      $id =$_GET['id'];
      $db->delete($id);
}


if(isset($_POST['login'])) 
{
            $email = $_POST['exampleFormControlInput1'];
            $password = $_POST['exampleFormControlInput2'];
            $db ->login($email,$password);
            $db -> countingsongs();
            $db -> countingartists();
            $db -> countingadmins();
}






