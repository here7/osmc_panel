<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    //
    public function formSearchByName()
    {
        $url_ext = "http://localhost:8080";
        $url_local = "http://localhost:8000";
        if(!empty($_REQUEST['name'])){

            $_REQUEST['name'] = trim($_REQUEST['name']);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_URL, $url_ext.'/video/name/'.$_REQUEST['name']);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);

//            echo '<pre>'.print_r($output, 1).'</pre>';

            curl_close($ch);

            if(!empty($output)) {
                $output = json_decode($output);

                if(count($output) > 0){
                    echo '<pre>'.print_r($output, 1).'</pre>';

                    foreach ($output as $item) {
                        echo "\n <a href='http://localhost:8080/video/id/$item->id' target='_blank'>$item->name</a>";
                    }
                } else{
                    echo "\n".$_REQUEST['name']." not exists";
                }
            } else{
                echo "\n".$_REQUEST['name']." not exists";
            }
        } else{
            echo "\n No data from form";
        }
        echo "<p> <a href='$url_local/manage'>[__Back__]</a></p>";
    }


    public function formSearchByType()
    {
        $url_ext = "http://localhost:8080";
        $url_local = "http://localhost:8000";

        if(!empty($_REQUEST['video_type'])){

            $_REQUEST['video_type'] = trim($_REQUEST['video_type']);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_URL, $url_ext.'/video/type/'.$_REQUEST['video_type']);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);

//            echo '<pre>'.print_r($output, 1).'</pre>';

            curl_close($ch);

            if(!empty($output)) {
                $output = json_decode($output);

                if(count($output) > 0){
                    echo '<pre>'.print_r($output, 1).'</pre>';

                    foreach ($output as $item) {
                        echo "\n <a href='http://localhost:8080/video/id/$item->id' target='_blank'>$item->name</a>";
                    }
                } else{
                    echo "\n".$_REQUEST['video_type']." not exists";
                }
            } else{
                echo "\n".$_REQUEST['video_type']." not exists";
            }
        } else{
            echo "\n No data from form";
        }
        echo "<p> <a href='$url_local/manage'>[__Back__]</a></p>";
    }
}
