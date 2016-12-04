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

    function groupshow()
    {
        $list_group = CallAPI('GET', 'http://45.76.151.128:12351/getlistgroup?username=admin&password=admin');
        $response = array("listgroup" => json_decode($list_group));
        return view('user')->with('results', $response);
    }

    function index(Request $request)
    {
        if (session('current_user') == null) {
            return view('login');
        }

        $userdata = CallAPI('GET', 'http://45.76.151.128:12351/usergetdata?username=' . session('current_user'));
        $usersharedata = CallAPI('GET', 'http://45.76.151.128:12351/usergetsharedata?username=' . session('current_user'));
        if (json_decode($userdata)->code != "200") {
            $userdatadecode = [];
        } else {
            $userdatadecode = json_decode($userdata)->message;
        }
        if (json_decode($usersharedata)->code != "200") {
            $usersharedatacode = [];
        } else {
            $usersharedatacode = json_decode($usersharedata)->message;
        }

        //test start
        session(['current_path' => '']);
        session(['current_folder' => '']);
        $authen = session('current_user') . ':' . session('current_password');
        $ch = curl_init('');
        curl_setopt($ch, CURLOPT_URL, 'http://45.76.151.128/owncloud/remote.php/webdav/');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, $authen);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

        $response = curl_exec($ch);
//        dd($response);
            $DOM = new \DOMDocument();
        $DOM->loadHTML($response);
        //get all H1
        $items = $DOM->getElementsByTagName('a');
        $listfilename = array();
        for ($i = 0; $i < $items->length; $i++) {
            if (!(strpos($items->item($i)->nodeValue, 'http') !== false)) {
                $parent_node = $items->item($i)->parentNode->nextSibling->nextSibling->nodeValue;
                $array = array('nameFile' => $items->item($i)->nodeValue,
                               'pathFile' => str_replace('/owncloud/remote.php/webdav/','',$items->item($i)->getAttribute('href')),
                               'typeFile' =>  $parent_node,
                    );
//                $arrayobject = new ArrayObject($array);
                array_push($listfilename, $array);
            }

        }
//        dd($listfilename);
        $userdatadecode_temp = array();
        for ($i = 0; $i < count($userdatadecode); $i++){
            for ($j=0;$j< count($listfilename);$j++){

                if ($userdatadecode[$i]->nameFile == $listfilename[$j])
                   if( count(explode("/", $userdatadecode[$i]->pathFile))<=2){
                       array_push($userdatadecode_temp,$userdatadecode[$i]);
                   }

            }
        }
        $userdatadecode = $userdatadecode_temp;
//        dd($userdatadecode_temp);


//        if(!$response) {
//            return response()->json($response);
//        }
       //test end
//
        $response = array("userdata" => $listfilename, "usersharedata" => []);
        return view('files')->with('datas', $response);
    }

    function shareWithYou(Request $request)
    {
        if (session('current_user') == null) {
            return view('login');
        }

        $usersharedata = CallAPI('GET', 'http://45.76.151.128:12351/usergetsharedata?username=' . session('current_user'));

        if (json_decode($usersharedata)->code != "200") {
            $usersharedatacode = [];
        } else {
            $usersharedatacode = json_decode($usersharedata)->message;
        }
        $response = array("usersharedata" => $usersharedatacode);
//        dd($response);
        return view('sharewithyou')->with('datas', $response);
    }

    function shareWithOther(Request $request)
    {
        if (session('current_user') == null) {
            return view('login');
        }

        $usersharedata = CallAPI('GET', 'http://45.76.151.128:12351/fromusergetsharedata?username=' . session('current_user'));

        if (json_decode($usersharedata)->code != "200") {
            $usersharedatacode = [];
        } else {
            $usersharedatacode = json_decode($usersharedata)->message;
        }
        $response = array("usersharedata" => $usersharedatacode);
//        dd($response);
        return view('sharewithother')->with('datas', $response);
    }

    function adddNewGroup(Request $request)
    {
        $data = $request->input();
        $username = $data['username'];
        $groupname = $data['groupname'];
        //$result = CallAPI('GET','http://45.76.151.128:12351/creategroup?username='+$username+'&groupname='+$groupname);
        print_r('ok');
        //dd($result);

    }

    function createAccount(Request $request)
    {
        $data = $request->input();
        $email = $data['email'];
        $displayname = $data['displayname'];
        $password = $data['password'];

        $result = CallAPI('GET', 'http://45.76.151.128:12351/adduser?username=' . $email . '&password=' . $password . '&displayname=' . $displayname);

//        $resultResponse = json_decode($result);
//
//        if($resultResponse->code=='200'){
////            session(['current_user'=>$username]);
////            session(['current_password'=>$username]);
//        }
        return response()->json($result);
//        print_r($result);
//        return view('login');
    }

    function login(Request $request)
    {
        $data = $request->input();
        $username = $data['username'];
        $password = $data['password'];
        $result = CallAPI('GET', 'http://45.76.151.128:12351/loginuser?username=' . $username . '&password=' . $password);
        $resultResponse = json_decode($result);

        if ($resultResponse->code == '200') {
            session(['current_user' => $username]);
            session(['current_password' => $password]);
        }
        return response()->json($result);
//        print_r($result);
//        return view('login');
    }

    function logoutAccount(Request $request)
    {
        session(['current_user' => null]);
        session(['current_password' => null]);
        return redirect('/');
    }

    function shareFileToUser(Request $request)
    {
        $data = $request->input();
        $usernameshare = $data['usernameshare'];
        $filepath = $data['pathfile'];
        $query_get = 'http://45.76.151.128:12351/usersharetouserdata?username=' . session('current_user') . '&password=' . session('current_password') . '&pathfile=' .  $filepath . '&usernameforshare=' . $usernameshare;
        $result = CallAPI('GET', $query_get);
        return response()->json($result);

    }

    function personalGetinfo(Request $request)
    {
        return view('personal');
    }

    function setPassword(Request $request)
    {
        $data = $request->input();
        $password = $data['password'];
        $result = CallAPI('GET', 'http://45.76.151.128:12351/changepassworduser?username=' . session('current_user') . '&newpass=' . $password);
        return response()->json($result);
    }

    function openFileRead(Request $request)
    {
        $data = $request->input();
        $filepath = 'http://45.76.151.128/owncloud/data/' . session('current_user') . '/files/' . $data['filepath'];
//        dd($filepath);
        $list_split = explode(".", $filepath);
        $type = $list_split[count($list_split) - 1];

        $imagetype = array("jpg", "png", "svg", "jpeg", "gif");

        if (in_array($type, $imagetype)) {
            return view('showfile')->with('data', array("filepath" => $filepath, "type" => $type));
        } elseif ($type == 'pdf') {
            return Response::make(file_get_contents($filepath), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename=pdf-file"'
            ]);
        } elseif ($type == 'mp3') {
            return view('showfile')->with('data', array("filepath" => $filepath, "type" => $type));
        }

    }
    function getOpenFolder(Request $request)
    {
        if (session('current_user') == null) {
            return view('login');
        }
        $data = $request->input();
        $foldername =  $data['folder'];
        session(['current_path' => $foldername]);
//        dd($foldername);
        $authen = session('current_user') . ':' . session('current_password');
        $ch = curl_init('');
        if(isset(   $foldername)){
            curl_setopt($ch, CURLOPT_URL, 'http://45.76.151.128/owncloud/remote.php/webdav/'.$foldername);
        }else{
            curl_setopt($ch, CURLOPT_URL, 'http://45.76.151.128/owncloud/remote.php/webdav/');
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, $authen);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

        $response = curl_exec($ch);
//        dd($response);
        $DOM = new \DOMDocument();
        $DOM->loadHTML($response);
        //get all H1
        $items = $DOM->getElementsByTagName('a');
        $listfilename = array();
        for ($i = 0; $i < $items->length; $i++) {
            if (!(strpos($items->item($i)->nodeValue, 'http') !== false)) {
                $parent_node = $items->item($i)->parentNode->nextSibling->nextSibling->nodeValue;
                $array = array('nameFile' => $items->item($i)->nodeValue,
                    'pathFile' => str_replace('/owncloud/remote.php/webdav/','',$items->item($i)->getAttribute('href')),
                    'typeFile' =>  $parent_node,
                );
                if($array['nameFile'] != '..'){
                    array_push($listfilename, $array);
                }

            }

        }

        $usersharedatacode =[];
        $response = array("userdata" => $listfilename, "usersharedata" => $usersharedatacode);
        return view('files')->with('datas', $response);




    }
    function downloadFileRead(Request $request)
    {
        $data = $request->input();
        $filepath = 'http://45.76.151.128/owncloud/data/' . session('current_user') . '/' . $data['filepath'];
        $user_agent     =   $_SERVER['HTTP_USER_AGENT'];


        $list_split = explode("/", $filepath);
        $name_file = $list_split[count($list_split) - 1];
        if (strpos($user_agent, 'Linux') !== false) {
            $local_file = "/tmp/" . $name_file;//This is the file where we save the information
        }else{
            $local_file = "C:\\" . $name_file;//This is the file where we save the information
        }

        $remote_file = $filepath; //Here is the file we are downloading

        echo 'dowloading...</br>';
        $ch = curl_init();
        $fp = fopen($local_file, 'w+');
        $ch = curl_init($remote_file);
        curl_setopt($ch, CURLOPT_TIMEOUT, 50);
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_ENCODING, "");
        curl_exec($ch);
        curl_close($ch);
        fclose($fp);
        echo 'done </br>';
        if (strpos($user_agent, 'Linux') !== false) {
            echo 'save in: /tmp/'.$name_file;
        }else{
            echo 'save in: C:\\'.$name_file;
        }




    }

    function getUploadfile(Request $request)
    {
        $data = $request->input();
        $filename = $data['fileName'];
//         $command ='curl -X PUT -u hai213k57@gmail.com:hainv "http://45.76.151.128/owncloud/remote.php/webdav/Documents/" -F myfile=@"'.$filename;
        $list_split = explode("/",$filename);
        $filenameshort = $list_split[count($list_split)-1];
        $data = array($filenameshort => $filename);
//        $filename = str_replace("C:\\fakepath\\","",$filename);
//        $real_path_string = './'.$filenameshort;
//        $real_path  = realpath($real_path_string);
//
//        $authen = session('current_user').':'.session('current_password');
//
//        $ch = curl_init('');
//        if(session('current_path')==''){
//           $url = curl_setopt($ch, CURLOPT_URL, 'http://45.76.151.128/owncloud/remote.php/webdav/'.$filenameshort);
//        }else{
//            $url = curl_setopt($ch, CURLOPT_URL, 'http://45.76.151.128/owncloud/remote.php/webdav/'.session('current_path').'/'.$filenameshort);
//        }
//
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_USERPWD,$authen );
//        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
//        curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
//
//        $response = curl_exec($ch);
//        return response()->json($filenameshort);
        if(session('current_path')==''){
            $url = 'curl -X PUT -u '.session('current_user').':'.session('current_password').' "http://45.76.151.128/owncloud/remote.php/webdav/'.$filenameshort.'"  --data-binary @"/var/www/images/'.$filename.'"';
        }
        else{
            $url = 'curl -X PUT -u '.session('current_user').':'.session('current_password').' "http://45.76.151.128/owncloud/remote.php/webdav/'.session('current_path').'/'.$filenameshort.'" --data-binary @"/var/www/images/'.$filename.'"';
        }

         shell_exec($url);
        return response()->json($url);
        if(!$response) {
            return response()->json($url);
        }


    }

    function getCreatefolder(Request $request){
        $data = $request->input();
        $filename = $data['foldername'];
        $result = shell_exec('curl -X MKCOL "http://45.76.151.128/owncloud/remote.php/webdav/'.session('current_path').'/'.$filename.'" -k -u '.session('current_user').':'.session('current_password'));
        return response()->json($filename);

    }
    function getDeletefilefolder(Request $request){
        $data = $request->input();
        $pathfile = $data['pathfile'];
        $result = shell_exec('curl -X DELETE -u '.session('current_user').':'.session('current_password').'  http://45.76.151.128/owncloud/remote.php/webdav/'.$pathfile);
        return response()->json($result);

    }

    function  getCommentfiledata(Request $request){
        $data = $request->input();
        $filecomment = $data['filecomment'];
//        $list_group = CallAPI('GET', 'http://45.76.151.128:12351/addcommentdata?username='.session('current_user').'&keyfile='.$filecomment.'&comment=');
        $result = CallAPI('GET', 'http://45.76.151.128:12351/getcommentdata?keyfile='.$filecomment);
        return response()->json($result);
    }
    function  getAddcommentdata(Request $request){
        $data = $request->input();
        $filecomment = $data['filecomment'];
        $comment_content = $data['comment_content'];
        str_replace(" ","%20",$comment_content);
        $result = CallAPI('GET', 'http://45.76.151.128:12351/addcommentdata?username='.session('current_user').'&keyfile='.$filecomment.'&comment='.str_replace(" ","%20",$comment_content));

        return response()->json($result);
    }

    function getUploadphpservice(Request $request){
//        $data = $request->input();
//        $data_send  = $data['file'];
//        $result  = CallAPI('POST', 'http://45.76.151.128/service/uploader.php',$data_send);
        return response()->json('1234');

    }
}