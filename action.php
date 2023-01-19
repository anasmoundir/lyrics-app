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
          <button  id ='{$row['id_song']}' type='button' class='inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight upp   ercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out '>Delete</button>
          <a  data-modal-target='authentication-modal' data-modal-toggle='authentication-modal'  type='button'  id ='{$row['id_song']}'  class='focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900 editLink'>Update the song</a>  </td>
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
      $db->update($id, $fname, $lname, $email, $phone);
      var_dump($db);
}




