<?php
require_once 'config.php';
class Database extends config
{
      public function insert($name, $lyrics, $nom_artist) {
            $sql = 'INSERT INTO lyrics_application.song ( name, lyrics, nom_artist) VALUES (:name,:lyrics,:nom_artist)';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
              'name' => $name,
              'lyrics' => $lyrics,
              'nom_artist' => $nom_artist
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


        public function update($id,$name, $lyrics, $nom_artist)
        {
          $sql = 'UPDATE lyrics_application.song SET name = :name , lyrics = :lyrics , nom_artist= :nom_artist  WHERE id_song = :id';
          $stmt = $this->conn->prepare($sql);
          $stmt->execute([
            'id' =>$id,
            'name' => $name,
            'lyrics' => $lyrics,
            'nom_artist' => $nom_artist
          ]);
          return true;
        }

        public function delete($id)
        {
          $sql ='DELETE FROM lyrics_application.song WHERE id_song = :id';
          $stmt = $this->conn->prepare($sql);
          $stmt->execute(['id' => $id]);
        }

        public function login($email,$password) {
          try {
              $stmt = $this->conn->prepare("SELECT * FROM lyrics_application.admin WHERE email=:email AND Password=:password");
              $stmt->execute(array(':email' => $email, ':password' => $password));
              $result = $stmt->fetch();
          } catch(PDOException $e) {
              echo "Query failed: " . $e->getMessage();
          }
          if ($result) {
              session_start();
              $_SESSION['logged_in'] = true;
              $_SESSION['email'] = $email;
              echo 'success';
          } else {
              echo 'error';
          }
      }


      public function countingsongs()
      {
        $stm = $this->conn->prepare("SELECT count(*) FROM lyrics_application.song");
        $stm ->execute();
        $result = $stm->fetchColumn();
        $_SESSION['song_numbers'] = $result ;
      }

      public function countingartists()
      {
        $stm = $this->conn->prepare("SELECT count(*) FROM lyrics_application.admin");
        $stm ->execute();
        $result = $stm->fetchColumn();
        $_SESSION['admin_number'] = $result ;
      }

      public function countingadmins()
      {
        $stm = $this->conn->prepare("SELECT count(*) FROM lyrics_application.album");
        $stm ->execute();
        $result = $stm->fetchColumn();
        $_SESSION['album_number'] = $result ;
      }



        
}

