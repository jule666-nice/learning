<?php
namespace App\Api;
use Slim\Views\Twig as View;
class ApiBase 
{
   protected $views;
   public function __construct(View $views)
   {
       return $this->views = $views;
   }
   public function auth($request, $response)
   {
      return "success";
   }
}
?>