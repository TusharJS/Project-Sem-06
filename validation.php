<?php

function name($name)
{
    if(empty($name) || !preg_match("/^[A-Za-z ]*$/",$name))
    {
        return true;
    }
    else
    {
      return false;
    }
}

function sel_email($email)
{
  include_once 'Connection.php';
  global $conn;
  
  $select_email="select count(*),mail from tbl_member where email='$email'";
  $row_email=mysqli_query($conn,$select_email);
  $num_email=mysqli_num_rows($row_email);
  // echo "<script>alert('ab".$num_email."abc');</script>";
  if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL) || $num_email >= 1)
  {
      return true;
  }   
  else
    {
      return false;
    }
}

function email($emails)
{ 
  
    if(empty($emails) || !filter_var($emails,FILTER_VALIDATE_EMAIL))
    {
        return true;
    }   
  else
    {
      return false;
    }
}

function images($image)
{
  $ext = pathinfo($image, PATHINFO_EXTENSION);
  $extensions= array("jpeg","jpg","png"); 
  if(!empty($image) && in_array($ext,$extensions)==false)
  {
    return true;   
  }
  else{
    return false;
  }
}

function pass($pass)
{
    if(empty($pass) || !preg_match("/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,20}$/",$pass))
    {
        return true;
    }
    else
    {
      return false;
    }
}

// function c_pass($c_pass)
// {
//     if(empty($c_pass))
//     {
//         return true;
//     }
//     else
//     {
//       return false;
//     }
// }

function state($state)
{
    if(empty($state) || !preg_match("/^[A-Za-z]*$/",$state))
    {
        return true;
    }
    else
    {
      return false;
    }
}

function city($city)
{
    if(empty($city) || !preg_match("/^[A-Za-z]*$/",$city))
    {
        return true;
    }
    else
    {
      return false;
    }
}

// function contact($contact)
// {
//   global $con;
//   $select_contact="select * from customers where customer_contact='$contact'";
//   $row_contact=mysqli_query($con,$select_contact);
//   $num_contact=mysqli_num_rows($row_contact);
//     if(empty($contact) || !preg_match("/^[9876][0-9]{9}$/",$contact) || $num_contact!=0)
//     {
//         return true;
//     }
//     else
//     {
//       return false;
//     }
// }

function contact($contact)
{
    if(empty($contact) || !preg_match("/^[9876][0-9]{9}$/",$contact))
    {
        return true;
    }
    else
    {
      return false;
    }
}

function address($address)
{
    if(empty($address))
    {
        return true;
    }
    else
    {
      return false;
    }
}

function pincode($pincode)
{
    if(empty($pincode) || !preg_match("/^[1-9][0-9]{5}$/",$pincode))
    {
        return true;
    }
    else
    {
      return false;
    }
}

?>