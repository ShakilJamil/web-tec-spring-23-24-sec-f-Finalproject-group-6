<?php



require_once("../model/DeliverymanModel.php");

$Deliname = $_POST['dname'];
$Deliemail = $_POST['demail'];
$DeliGender = $_POST['dgender'];
$DeliDateofBirth = $_POST['ddob'];
$DeliPhoneNumber = $_POST['dphone'];
$DeliNID = $_POST['dnid'];
$DeliVehicle = $_POST['vec'];
$DeliAddress = $_POST['daddress'];
$Delipassword = $_POST['dpassword'];
$Deli_repassword = $_POST['drePassword'];

 if(ctype_alpha($Deliname) && strlen($Deliname> 2))
{
    $DelinameCondition =true;
} 
else{
    $DelinameCondition =false;
}

 if(strlen($Delipassword) > 8)
 {
    $DeliPasswordCondition =true;
 }
 else{
    $DeliPasswordCondition =false;
 }
if((strlen($DeliPhoneNumber) == 11 || strlen($DeliPhoneNumber) > 10) && (strlen($DeliPhoneNumber) <12) && is_numeric($DeliPhoneNumber))
{
    $DeliPhoneNumberCondition = true;
} 
else{
    $DeliPhoneNumberCondition = false;
}
if(strlen($DeliNID) == 10 || strlen($DeliNID) > 9 && (strlen($DeliNID) <11))
{
    $DeliNIDCondition = true;
}
else{

    $DeliNIDCondition = false; 
}




if(isset($_POST['submit']))
{
    if($Deliname != "" && $Deliemail != "" && $DeliGender != "" && $DeliDateofBirth != "" && $DeliPhoneNumber != "" && $DeliNID != "" && $DeliVehicle != " "&& $DeliAddress != "" && $Delipassword != "") 
    {
        //if($DelinameCondition && $DeliPasswordCondition && $DeliPhoneNumberCondition && $DeliNIDCondition) // UserName, UserPassword, Phonenumber and NID number validation
        //{
        if($Delipassword == $Deli_repassword ) 
            {
                $result = createDeliveryman($Deliname, $Deliemail, $DeliGender, $DeliDateofBirth, $DeliPhoneNumber, $DeliNID, $DeliVehicle, $DeliAddress, $Delipassword);
                if($result == true)
                {
                    header("location: ../view/userLogin.php");
                }
            }

        else if ($Delipassword != $Deli_repassword)
            {
            echo "Please provide the password properly";
            }
        
        /*}
        
        else
        {
            echo "Please fill the values properly";
        }*/
    
    }
    else
    {
        echo "Please fill all the value";
    }

}

?>