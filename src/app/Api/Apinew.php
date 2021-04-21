<?php
namespace App\Api;
class ApiStudent 
{
    private $stu_id;
    private $stu_name;
    private $stu_sex;
    private $stu_birthday;
    

    public function init($request, $response)
    {
        $result ='';
        $stu_id ='';
        $stu_name ='';
        $stu_sex='';
        $stu_birthday='';
         
        return json_encode($result, JSON_UNESCAPED_UNICODE);
    }
}
?>