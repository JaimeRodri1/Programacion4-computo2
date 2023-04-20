<?php


    function getData(){
        
        if(!file_exists('datos.text')){
            file_put_contents('datos.text', '');
        }
        
        $data=file_get_contents('datos.text');
        $data=json_decode($data, true);

        
        if(!is_array($data)){
            $data=array();
        }
        return $data;
    }

    
    function saveData($name, $lastname, $age){
        
        $data=getData();
        $record=array(
            "name"=> $name,
            "lastname"=> $lastname,
            "age"=> $age
        );

       
        $data[]=$record;
        $data = json_encode($data);
        file_put_contents('datos.text', $data);
    }

    function updateData($cod, $name, $lastname, $age){
       
        $data=getData();
        $data[$cod]['name'] = $name;
        $data[$cod]['lastname']=$lastname;
        $data[$cod]['age']= $age;

      
        $data = json_encode($data);
        file_put_contents('datos.text', $data);
    }
    

function deleteData($cod){
    
    $data= getData();
    unset($data[$cod]);

    
    $data = array_values($data);
    $data = json_encode($data);
    file_put_contents('datos.text', $data);
}

?>