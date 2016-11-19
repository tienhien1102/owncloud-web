<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\routes;

use Illuminate\Support\Facades\URL;
use Validator;
use Response;
use File;
include app_path().'/libraries/Functions.php';

class HomeController extends Controller
{   // Method: POST, PUT, GET etc
// Data: array("param" => "value") ==> index.php?param=value

    function groupshow(){
        $list_group = CallAPI('GET','http://45.76.151.128:12351/getlistgroup?username=admin&password=admin');
        $response =array("listgroup" => json_decode($list_group));
        return view('user')->with('results',$response);
    }

    function index(Request $request){
        if(session('current_user')==null){
            return view('login');
        }
        $userdata = CallAPI('GET','http://45.76.151.128:12351/usergetdata?username='.session('current_user'));
        $usersharedata = CallAPI('GET','http://45.76.151.128:12351/usergetsharedata?username='.session('current_user'));
        if(json_decode($userdata)->code !="200"){
            $userdatadecode = [''];
        }else{
            $userdatadecode = json_decode($userdata)->message;
        }
        if(json_decode($usersharedata)->code !="200"){
            $usersharedatacode = [''];
        }else{
            $usersharedatacode = json_decode($usersharedata)->message;
        }
        $response = array("userdata" =>$userdatadecode, "usersharedata" =>$usersharedatacode);
//        dd($response);
        return view('files')->with('datas',$response);
    }

    function shareWithYou(Request $request){
        if(session('current_user')==null){
            return view('login');
        }

        $usersharedata = CallAPI('GET','http://45.76.151.128:12351/usergetsharedata?username='.session('current_user'));

        if(json_decode($usersharedata)->code !="200"){
            $usersharedatacode = [''];
        }else{
            $usersharedatacode = json_decode($usersharedata)->message;
        }
        $response = array("usersharedata" =>$usersharedatacode);
//        dd($response);
        return view('sharewithyou')->with('datas',$response);
    }

    function shareWithOther(Request $request){
        if(session('current_user')==null){
            return view('login');
        }

        $usersharedata = CallAPI('GET','http://45.76.151.128:12351/fromusergetsharedata?username='.session('current_user'));

        if(json_decode($usersharedata)->code !="200"){
            $usersharedatacode = [''];
        }else{
            $usersharedatacode = json_decode($usersharedata)->message;
        }
        $response = array("usersharedata" =>$usersharedatacode);
//        dd($response);
        return view('sharewithother')->with('datas',$response);
    }

    function  adddNewGroup(Request $request){
    $data = $request->input();
    $username = $data['username'];
    $groupname = $data['groupname'];
    //$result = CallAPI('GET','http://45.76.151.128:12351/creategroup?username='+$username+'&groupname='+$groupname);
        print_r('ok');
    //dd($result);

    }

    function  createAccount(Request $request){
        $data = $request->input();
        $email = $data['email'];
        $displayname = $data['displayname'];
        $password = $data['password'];

        $result = CallAPI('GET','http://45.76.151.128:12351/adduser?username='.$email.'&password='.$password.'&displayname='.$displayname);

//        $resultResponse = json_decode($result);
//
//        if($resultResponse->code=='200'){
////            session(['current_user'=>$username]);
////            session(['current_password'=>$username]);
//        }
        return  response()->json($result);
//        print_r($result);
//        return view('login');
    }
    function  login(Request $request){
        $data = $request->input();
        $username = $data['username'];
        $password = $data['password'];
        $result = CallAPI('GET','http://45.76.151.128:12351/loginuser?username='.$username.'&password='.$password);
        $resultResponse = json_decode($result);

        if($resultResponse->code=='200'){
            session(['current_user'=>$username]);
            session(['current_password'=>$password]);
        }
        return  response()->json($result);
//        print_r($result);
//        return view('login');
    }

    function logoutAccount(Request $request){
        session(['current_user'=>null]);
        session(['current_password'=>null]);
        return redirect('/');
    }

    function shareFileToUser(Request $request){
        $data = $request->input();
        $usernameshare = $data['usernameshare'];
        $filepath = $data['pathfile'];
        $query_get = 'http://45.76.151.128:12351/usersharetouserdata?username='.session('current_user').'&password='.session('current_password').'&pathfile='.$filepath.'&usernameforshare='.$usernameshare;
        $result = CallAPI('GET',$query_get);
        return  response()->json($result);

    }

    function personalGetinfo(Request $request){
       return view('personal');
    }

    function setPassword(Request $request){
        $data = $request->input();
        $password = $data['password'];
        $result = CallAPI('GET','http://45.76.151.128:12351/changepassworduser?username='.session('current_user').'&newpass='.$password);
        return  response()->json($result);
    }

    function openFileRead(Request $request){
        $data = $request->input();
        $filepath = 'http://45.76.151.128/owncloud/data/'.session('current_user').'/'.$data['filepath'];

        $list_split = explode(".",$filepath);
        $type = $list_split[count($list_split)-1];

        $imagetype = array("jpg","png","svg","jpeg","gif");

        if (in_array($type,$imagetype)){
            return view('showfile')->with('data', array("filepath"=>$filepath,"type"=>$type));
        }elseif ($type=='pdf'){
            return Response::make(file_get_contents($filepath), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename=pdf-file"'
            ]);
        }elseif ($type=='mp3'){
            return view('showfile')->with('data', array("filepath"=>$filepath,"type"=>$type));
        }

    }

    function downloadFileRead(Request $request){
        $data = $request->input();
        $filepath = 'http://45.76.151.128/owncloud/data/'.session('current_user').'/'.$data['filepath'];

        $list_split = explode("/",$filepath);
        $name_file = $list_split[count($list_split)-1];
        $local_file = "/tmp/".$name_file;//This is the file where we save the information
        $remote_file = $filepath; //Here is the file we are downloading

        echo 'dowloading...';
        $ch = curl_init();
        $fp = fopen ($local_file, 'w+');
        $ch = curl_init($remote_file);
        curl_setopt($ch, CURLOPT_TIMEOUT, 50);
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_ENCODING, "");
        curl_exec($ch);
        curl_close($ch);
        fclose($fp);


    }




}
