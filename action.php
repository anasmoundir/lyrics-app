<?php
require_once 'Database.php';
require_once 'util.php';

$db = new Database;
$util = new Util;

$song_name = $_POST['song_name'];
$song_lyrics = $_POST['lyrics_text'];
$song_maker = $_POST['artist_name'];
$album_name = $_POST['album_name'];

if (isset($_POST['add']))
 {
    $db->insert($song_name, $song_lyrics, $song_maker);
}


if (isset($_GET['read']))
 {
  echo '<tr>
             <td colspan="6">No Users Found in the Database!</td>
       </tr>';
 }
  $songs = $db->read();
  $output = '';
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
        @habbit
      </td>
      <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>
        <button type='button' class='inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight upp   ercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out'>Delete</button>
        <button   data-bs-toggle='modal' data-bs-target='#myModal' type='button' class='inline-block px-6 py-2.5 bg-yellow-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-yellow-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-700 active:shadow-lg transition duration-150 ease-in-out'>Update</button>
      </td>
    </tr class='bg-white border-b'>";
    
    echo $output;
  // } else {
  //   echo '<tr>
  //           <td colspan="6">No Users Found in the Database!</td>
  //        </tr>';
  // }
  
  }




