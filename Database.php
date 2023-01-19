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


        public function readOne($id)
        {
          $sql = 'SELECT * FROM lyrics_application.song where id_song = :id';
          $stmt = $this->conn->prepare($sql);
          $stmt->execute([
            'id' => $id]);
          $result = $stmt->fetch();
          return $result;
        }


        public function update($id,$name, $lyrics, $id_artist)
        {
          $sql = 'UPDATE song SET name = :name , lyrics = :lyrics , id_artist = :id_artist  WHERE id_song = :id';
          $stmt = $this->conn->prepare($sql);
          $stmt->execute([
            'name' => $name,
            'lyrics' => $lyrics,
            'id_artist' => $id_artist,
            'id' =>$id
          ]);
          return true;
        }





        
}

