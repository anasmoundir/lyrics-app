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
      if ($db->insert($song_name, $song_lyrics, $song_maker,$album_name)) {
        echo $util->showMessage('success', 'User inserted successfully!');
      } else {
        echo $util->showMessage('danger', 'Something went wrong!');
      }
}