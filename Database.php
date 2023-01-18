<?php

require_once 'config.php';

class Database extends config
{
      public function insert($name, $lyrics, $Id_album, $id_artist) {
            $sql = 'INSERT INTO lyrics_application.song ( name, lyrics, Id_album, id_artist) VALUES (:name,:lyrics,:Id_album,:id_artist)';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
              'name' => $name,
              'lyrics' => $lyrics,
              'Id_album' => $Id_album,
              'id_artist' => $id_artist
            ]);
            return true;
          }
}
