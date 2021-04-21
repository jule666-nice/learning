<?php
namespace App\Api;
use Slim\Views\Twig as View;
class ApiLogin 
{
   protected $views;
   protected $pdo;
   public function __construct(View $views)
   {
    	$this->views = $views;
    	$dsn = 'mysql:dbname=famikomyu;host=localhost:3306';
		$servername = 'root';
		$password = 'root';
		$dbname = 'famikomyu';
       	try {
		    $this->pdo = new \PDO($dsn, $servername, $password);
		} catch (\PDOException $e) {
		    echo 'Connection failed: ' . $e->getMessage();
		}
   }
   public function auth($request, $response)
   {
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$sql= "SELECT user_name, nickname, tel, logo FROM user WHERE user_name=? AND user_pass=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$user_name, $password]);
  		$row = $stmt->fetch(\PDO::FETCH_ASSOC);
		// 接続を閉じる
	    $this->pdo = null;
	    $this->stmt = null;
	    return json_encode($row, JSON_UNESCAPED_UNICODE);
   }
}
?>