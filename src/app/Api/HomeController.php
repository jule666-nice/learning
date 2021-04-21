<?php
namespace App\Api;
use Slim\Views\Twig as View;
class HomeController 
{
   protected $views;
   public function __construct(View $views)
   {
       return $this->views = $views;
   }
   public function auth($request, $response)
   {
      return $this->views->render($response, 'abc.twig');
   }
}
?>