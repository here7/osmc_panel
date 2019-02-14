<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(){
        return view('contact.create');
    }

    public function store(){
        print_r($_REQUEST);
        $url = "http://192.168.11.82:8080/video/name/scarface";

        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
//        curl_setopt($ch, CURLOPT_URL, $url);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        $output = curl_exec($ch);
//
//        curl_close($ch);
//
//        if(!empty($output)) {
//            $output = json_decode($output);
//            foreach ($output as $item) {
//                echo "\n <a href='$url/video/id/$item->id' target='_blank'>$item->name</a>";
//            }
//        }
    }
}
