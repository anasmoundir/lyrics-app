<?php
class config
{
    private const DBHOST = 'localhost';
    private const DBUSER ='root';
    private const DBPASS ='';
    private const DBNAME ='lyrics_application';



    private $dsn =  'mysql:host=' . self::DBHOST . ';dbname' . self::DBNAME . '';
    
    protected $conn = null;

    public function __construct()
    {
        try{
            $this->connection = new PDO( $this ->dsn,self::DBUSER,self::DBPASS);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
          echo 'success';
            }catch(PDOException $e){
              die("Failed to connect to DB: ". $e->getMessage());
            } 
    }
}
