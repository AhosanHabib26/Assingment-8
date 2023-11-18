<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index($id)
    {
       
        $name = "Donald Trump";
        $age = "75";

       
        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age,
        ];

        // Set your cookie variables stated in the question
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Set the cookie
        $response = new Response(json_encode($data), 200);
        $response->withCookie(cookie(
            $cookieName,
            $cookieValue,
            $minutes,
            $path,
            $domain,
            $secure,
            $httpOnly
        ));

      
        return $response;
    }
}
