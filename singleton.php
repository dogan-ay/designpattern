<?php 

class Connection
{
    private static $instance = null; //Instance varsayılan olarak null yapıldı.
    private $conn;
    private $host = 'localhost';
    private $user = 'db user-name';
    private $pass = 'db password';
    private $name = 'db name';

    private function __construct() //Yapıcı metod sınıftan doğruca nesne oluşturulmasın diye private yapıldı.
    {
        //Sunucuya bağlanma işlemleri burada aşıdaki gibi yapılır.

        /*$this->conn = new PDO("mysql:host={$this->host};
        dbname={$this->name}", $this->user,$this->pass,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));*/

        $this->conn = 'test';
    }

    public static function getInstance() //Çağrıldığında sınıfın bir örneğini oluşturan fonksiyon.
    {
        if (self::$instance == null)
        {
            self::$instance = new Connection();
        }

        return self::$instance;
    }

    public function getConnection()  //Bağlantı geri döndürülür.
    {
        return $this->conn;
    }
}

$baglanti = Connection::getInstance();
$conn = $baglanti->getConnection();
var_dump($conn);

?>