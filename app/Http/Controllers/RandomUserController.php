<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker\Factory;

error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1);

class RandomUserController extends Controller {

    public function __construct() {
    }

    /**
    * Responds to requests to GET /random-user-generator
    */
    public function getIndex() {

        return view('RandomUser.index');
    }

    public function postIndex(Request $request) {

      $faker = Factory::create();

      $name = (isset($request['name'])) ? "Name:  ".$faker->name : null;
      $address = (isset($request['address'])) ? "Address:  ".$faker->address : null;
      $phone = (isset($request['phone'])) ? "Phone Number:  ".$faker->phoneNumber : null;
      $email = (isset($request['email'])) ? "Email:  ".$faker->email : null;
      $user = (isset($request['user'])) ? "User Name:  ".$faker->userName : null;
      $password = (isset($request['password'])) ? "Password:  ".$faker->password : null;

      return view('RandomUser.index')->with('name', $name)
                                     ->with('address', $address)
                                     ->with('phone', $phone)
                                     ->with('email', $email)
                                     ->with('user', $user)
                                     ->with('password', $password)
                                     ->with('img_url', $faker->imageUrl);
    }

}
