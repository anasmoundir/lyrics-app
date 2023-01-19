<?php

require_once 'config.php';

class Database extends config
{
      public function insert($name, $lyrics, $id_artist) {
            $sql = 'INSERT INTO lyrics_application.song ( name, lyrics, id_artist) VALUES (:name,:lyrics,:id_artist)';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
              'name' => $name,
              'lyrics' => $lyrics,
              'id_artist' => $id_artist
            ]);
            return true;
          }
        public function read()
        {
          $sql ='SELECT * FROM lyrics_application.song ';
          $stmt = $this->conn->prepare($sql);
          $stmt->execute();
          $result = $stmt->fetchAll();
          return $result;
        }
        
}

