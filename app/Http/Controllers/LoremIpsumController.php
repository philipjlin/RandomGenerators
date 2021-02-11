<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Badcow\LoremIpsum\Generator;

error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1);

class LoremIpsumController extends Controller {

    public function __construct() {
    }

    /**
    * Responds to requests to GET /lorenipsum
    */
    public function getIndex() {

      return view('LoremIpsum.index');
    }


    public function postIndex(Request $request){

      $generator = new Generator();

      $this->validate($request, ['number' => 'required|min:1|max:20']);
      $number = $request->input('number');

      if($request['structure'] == 'words')
        $result = $generator->getRandomWords($number);
      elseif($request['structure'] == 'sentences')
        $result = $generator->getSentences($number);

      if( isset($request['capitalize']) ){

        foreach ($result as &$value) {
          $value = strtoupper($value);
        }
      }

      return view('LoremIpsum.index')->with('result', $result);
    }

}
