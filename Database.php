<?php

class Database extends config
{
      public function insert($fname, $lname, $email, $phone) {
            $sql = 'INSERT INTO users (first_name, last_name, email, phone) VALUES (:fname, :lyrics_text, :email, :phone)';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
              'fname' => $fname,
              'lname' => $lname,
              'email' => $email,
              'phone' => $phone
            ]);
            return true;
          }
}