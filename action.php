<?php
require_once 'Database.php';
require_once 'util.php';

$db = new Database;
$util = new Util;

if (isset($_POST['add']))
 {
      $song_name = $_POST['song_name'];
      $song_lyrics = $_POST['lyrics_text'];
      $song_maker = $_POST['artist_name'];
      $album_name = $_POST['album_name'];
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
        $output .= " <tr class='bg-white border-b'>
        <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>{$row['id_song']}</td>
        <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>
        {$row['name']}
        </td>
        <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>
        {$row['lyrics']}
        </td>
        <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>
        {$row['id_artist']}
        </td>
        <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>
        {$row['id_artist']}
        </td>
        <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>
          <a   class='deleteLink bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2'  id ='{$row['id_song']}' >Delete</a>
          <a   id ='{$row['id_song']}'  class='editLink text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900' onclick='toggleModal(".'"modal-id1"'.")'>Update the song</a>  </td>
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
      $song_maker =$_POST['artist_name1'];
      $db->update($song_name, $song_lyrics, $song_maker);
      echo('poa');
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
           
      
}






