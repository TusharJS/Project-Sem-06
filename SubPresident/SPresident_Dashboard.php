<?php
    session_start();

    if($_SESSION['mid'] == "")
    {
        header("location:../HOme.php"); 
    }
    // $path    = 'C:\xampp\htdocs\Sem-6\Project\Image\user';
    // $files = $files = array_diff(scandir($path), array('.', '..'));

    // foreach($files as $id => $name)
    // {
    //     echo $name."<br>";
    // }   
    
    // $rndno = rand(100,999);
    // echo $rndno;

    // $pate = explode(".", "abc.txt");
    // echo $pate[1];

    // echo date('H:i:s');
    // sleep(15);
    // // flush();
    // echo "<br>";
    // echo date('H:i:s');

?>