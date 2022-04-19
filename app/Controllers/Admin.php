<?php

namespace App\Controllers;


class Admin extends BaseController
{
    public function allteach()
    {
        session_start();
        $db = \Config\Database::connect();
        $db = db_connect();
        $sql = "SELECT * FROM catagory WHERE status ='active' ";
        $query=$db->query($sql);  
        $results = $query->getResult();
        $db->close();

        $db2 = db_connect();
        $sql2 = "SELECT *  FROM teachings  WHERE statu ='active' and catagory='all-teach' ";  
        $query=$db2->query($sql2);  
        $results2 = $query->getResult();

        $data['page'] = 'allteaching';
        $data['user'] = $_SESSION["user"];
        $data['cata'] = $results;
        $data['teach'] = $results2;

        return view('allteaching',$data);
    }
    public function dayteach()
    {
        session_start();
        $db = \Config\Database::connect();
        $db = db_connect();
        $sql = "SELECT * FROM catagory WHERE status ='active' ";
        $query=$db->query($sql);  
        $results = $query->getResult();
        $db->close();

        $db2 = db_connect();
        $sql2 = "SELECT *  FROM teachings  WHERE statu ='active' and catagory='day-teach' ";  
        $query=$db2->query($sql2);  
        $results2 = $query->getResult();

        $data['page'] = 'dayteaching';
        $data['user'] = $_SESSION["user"];
        $data['cata'] = $results;
        $data['teach'] = $results2;

        return view('dayteaching',$data);
    }
    public function reg_teach_day()
    {
        session_start();
        $db = db_connect();
        $postby = $this->request->getVar('postedby');
        $postcata = $this->request->getVar('cata');
        $postcont = $this->request->getVar('postcon');
        $toupload = $this->request->getFile('coverpic');
        $imagename=$toupload->getName();
        //$toupload->move('public/assets/images', $imagename);
        $filepath = 'public/assets/images' . $toupload->store();
        $sql = "INSERT INTO teachings(posted_by,files,teach_catagory,catagory,contents,statu) VALUES (?,?,?,?,?,?)";
        $query=$db->query($sql, [$postby,$imagename,$postcata,'day-teach',$postcont,'active']); 
        if($query){
            $_SESSION["sufor"]="saved successfully";
            return redirect()->to(base_url('dashboard')); 
        }else{
            $_SESSION["errfor"]="Query is not Sucessus full";
            return redirect()->to(base_url('admin/user')); 
        }
    }

    public function reg_teach_all()
    {
        session_start();
        $db = db_connect();
        $postby = $this->request->getVar('postedby');
        $postcata = $this->request->getVar('cata');
        $postcont = $this->request->getVar('postcon');
        $toupload = $this->request->getFile('coverpic');
        $imagename=$toupload->getName();
       // $toupload->move('public/assets/images', $imagename);
        $filepath = 'public/assets/images' . $toupload->store();
        $sql = "INSERT INTO teachings(posted_by,files,teach_catagory,catagory,contents,statu) VALUES (?,?,?,?,?,?)";
        $query=$db->query($sql, [$postby,$imagename,$postcata,'all-teach',$postcont,'active']); 
        if($query){
            $_SESSION["sufor"]="saved successfully";
            return redirect()->to(base_url('dashboard')); 
        }else{
            $_SESSION["errfor"]="Query is not Sucessus full";
            return redirect()->to(base_url('admin/user')); 
        }
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