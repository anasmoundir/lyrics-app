<?php
require_once 'config.php';

class Database extends config
{
      public function read() 
      {

      }

      public function insert($songname, $lyrics, $artist_name, $album_name)
      {
            $sql ="INSERT INTO `song`(`id_song`, `name`, `lyrics`, `Id_album`, `id_artist`) VALUES (':song_name',':','[value-3]','[value-4]','[value-5]')";

      }

}