<?php

namespace App\Controllers;


class Admin extends BaseController
{
    public function allteach()
    {
        session_start();
        return view('allteaching');
    }
    public function dayteach()
    {
        session_start();
        return view('dayteaching');
    }
    public function othermedia()
    {
        session_start();
        return view('medias');
    }
    public function video()
    {
        session_start();
        return view('videos');
    }
    public function logout()
    {
        session_start();
        session_unset();
        return redirect()->to(base_url('/'));
    }
    public function auth()
    {
        session_start();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $hash = openssl_encrypt($password, "AES-128-ECB", "testing1");
        $db = \Config\Database::connect();
        $db = db_connect();
        $sql = "SELECT * FROM user WHERE (username=? AND password=? AND status='active')";
        $query=$db->query($sql, [$username,$password]);  
        $results = $query->getResult();
        
       if(count((array)$results)>0)
       {
        $_SESSION["isuser"]=true;
        $_SESSION["pre"]=$results[0]->priviledge;
        $_SESSION["user"]=$results;
        return redirect()->to(base_url('dashboard')); 
       }
       else
       {
        $_SESSION["isuser"]=false;
        $_SESSION["error"]="User name OR Password incorect";
        return redirect()->to(base_url('/'));
       }
    }
}
