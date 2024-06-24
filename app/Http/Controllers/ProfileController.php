<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare the variables
        $name = "Donal Trump";
        $age = "75";

        // Create the data array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Set the cookie
        $cookie = Cookie::make('access_token', '123-XYZ', 1, '/', $_SERVER['SERVER_NAME'], false, true);

        // Return the response with the data and cookie
        return response()->json($data, 200)->cookie($cookie);
    }
}
