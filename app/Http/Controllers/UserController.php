<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers()
    {
        return response()->json([
            'users' => [
                [
                    'id' => 1,
                    'name' => 'Kasun Indrajith',
                    'email' => 'test@gmail.com',
                    'role' => 'admin'
                ],
                [
                    'id' => 1,
                    'name' => 'Sewmini Shashikala',
                    'email' => 'test1@gmail.com',
                    'role' => 'admin'
                ],
                [
                     'id' => 1,
                     'name' => 'Shehan Pathiraja',
                     'email' => 'test2@gmail.com',
                     'role' => 'admin'
                ]
            ]
        ]);
    }
}
