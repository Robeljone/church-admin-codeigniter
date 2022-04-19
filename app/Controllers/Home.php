<?php

namespace App\Controllers;


class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function home()
    {
        return view('dashboard');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function card($co)
    {
        $db = \Config\Database::connect();
        $db = db_connect();
        $sql = "SELECT * FROM card WHERE id = ? and stat='act'";
        $query=$db->query($sql, [$co]);  
        $results = $query->getResult();
        if(count($results)>0){
            $data['card']=$results[0];
            $com_id=$results[0]->com_id;
            $sql1 = "SELECT * FROM company WHERE id = ?";
            $query1=$db->query($sql1, [$com_id]);  
            $results1 = $query1->getResult();
            
            $data['links']=explode ("}", $results1[0]->other); 
            
            $data['comp']=$results1[0];



            $com_id=$results[0]->com_id;
            $sql2 = "SELECT * FROM porfo WHERE com_id = ? and stat='act' ORDER BY id DESC LIMIT 3";
            $query2=$db->query($sql2, [$com_id]);  
            $results2 = $query2->getResult();

            $data['porfos']=$results2;
            $data['caid']=$co;
            $data['caid']=$co;
            
            
            return view('index',$data);
         
        
        }else{
            return view('page_404');
        }
        
        
    }
    
    
    public function down($id)
    {

    
        $db = \Config\Database::connect();
        $db = db_connect();
        $sql = "SELECT * FROM card WHERE id = ?";
        $query=$db->query($sql, [$id]);  
        $results = $query->getResult();
        
         // define vcard
        
        $card=$results[0];
        $db->reconnect();
        $sql2 = "SELECT * FROM company WHERE id = ?";
        $query2=$db->query($sql2, [$card->com_id]);  
        $results2 = $query2->getResult();

        $comp=$results2[0];
        $vcard = new VCard();

        // define variables
        $firstname = $card->fullName;
        $lastname = '';
        $additional = '';
        $prefix = '';
        $suffix = '';

        // add personal data
        $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);

        // add work data
        $vcard->addCompany($comp->name);
        $vcard->addJobtitle($card->title);
        $vcard->addEmail($card->email);
        $vcard->addPhoneNumber($card->phone, 'PREF;CELL');
        $vcard->addPhoneNumber($card->phone2, 'CELL');
        $vcard->addPhoneNumber($comp->phone1, 'WORK');
        
       $vcard->addAddress($comp->add1);
       $vcard->addAddress(null, null, $comp->add1, "Addis Ababa", null, null, 'Addis Ababa');
       
        $vcard->addURL($comp->website,'WORK');
        //$vcard->addLabel('street, worktown, workpostcode Belgium', 'work');


        //$vcard->addPhoto('https://raw.githubusercontent.com/jeroendesloovere/vcard/master/tests/image.jpg');

        // return vcard as a string
        //return $vcard->getOutput();

        // return vcard as a download
        return $vcard->download();

        // echo message
        echo 'A personal vCard is saved in this folder: ' . __DIR__;

        // or

        // save the card in file in the current folder
        // return $vcard->save();

        // echo message
        // echo 'A personal vCard is saved in this folder: ' . __DIR__;

                
        
    }
    
    
}
