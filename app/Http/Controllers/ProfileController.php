<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index($id){
    $name ="Donal Trump";
    $age ="75";
    $data = ['id'=>$id,'name'=>$name,'age'=>$age];
      
    return response($data);


    $name = "access_token";

$value = "123-XYZ";


$minutes = 1;


$path = "/";



$domain = "127.0.0.1";


$secure = "ip";


$httpOnly = true;
return response()->cookie(['name'=>'jannat'],status:401);


    }


}