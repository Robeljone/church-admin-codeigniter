<?php

namespace App\Controllers;


class Media extends BaseController
{
    public function slider()
    {
      session_start();
      $db = db_connect();
      $sql = "SELECT * FROM slider WHERE statu ='active' ";
      $query=$db->query($sql);  
      $results = $query->getResult();
      $data['datas'] = $results;
      $data['page'] = 'slider';
      return view('slider',$data);
    }
    public function blogs()
    {
        $data['page'] = 'blogs';
      return view('blogs',$data);
    }
    public function articles()
    {
        $data['page'] = 'articles';
      return view('articles',$data);
    }
    public function uploadslider()
    {
      session_start();
      $db = db_connect();
      $title= $this->request->getVar('title');
      $file= $this->request->getFile('coverpic');
      $imagename=$file->getName();
      $sql = "INSERT INTO slider(title,images,statu) VALUES (?,?,?)";
        $query=$db->query($sql, [$title,$imagename,'Active']); 
        if($query){
            $_SESSION["sufor"]="saved successfully";
            return redirect()->to(base_url('slider')); 
        }else{
            $_SESSION["errfor"]="Query is not Sucessus full";
            return redirect()->to(base_url('slider')); 
        }
      $data['page'] = 'slider';
      return view('slider',$data);
    }



}