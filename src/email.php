<?php
$firstName =  trim(urldecode($_POST[firstName]));
$lastName =   trim(urldecode($_POST[lastName]));
$cellPhone =  trim(urldecode($_POST[cellPhone]));
$eveningPhone = trim(urldecode($_POST[eveningPhone]));
$email =    trim(urldecode($_POST[email]));
$numInParty =   trim(urldecode($_POST[numInParty]));
$checkIn =    trim(urldecode($_POST[checkIn]));
$checkOut =   trim(urldecode($_POST[checkOut]));
$comments =   trim(urldecode($_POST[comments]));

if  ( empty($firstName) || empty($lastName) || empty($cellPhone) || empty($email) || empty($numInParty) ||
  empty($checkIn) || empty($checkOut)
  )
{
  echo("One or more of the required fields is not completed. Please try again.");
}
else
{
    // Create request email
  $reqTo = "mbachand@princeton.edu, dude@santacruzescape.com";
  $reqFrom = "From:Santa Cruz Escape <noreply@nothing.com>";
  $reqSubject = "RENTAL REQUEST";
  $reqBody = "First Name: " . $firstName . "\nLast Name: " . $lastName . "\nCell Phone: " . $cellPhone;

  if (!empty($eveningPhone))
  {
    $reqBody = $reqBody . "\nEvening Phone: " . $eveningPhone;
  }

  $reqBody = $reqBody . "\nEmail: " . $email . "\nNumber in Party: " . $numInParty . "\nCheck In Date: " . $checkIn . "\nCheck Out Date: " . $checkOut;

  if (!empty($comments))
  {
    $reqBody = $reqBody . "\nComments: " . $comments;
  }


    // Create confirmation email
  $conTo = $email;
  $conFrom = "From:Santa Cruz Escape <dude@santacruzescape.com>";
  $conSubject = "Santa Cruz Escape Rental Request Confirmation";
  $conBody = $firstName . ",\n\nYour request to rent our Santa Cruz beach house from " . $checkIn . " to " . $checkOut . " has been received!  We will get back to you shortly.\n\nWith any questions, please contact dude@santacruzescape.com.\n\n-Santa Cruz Escape";


  if (!mail($reqTo, $reqSubject, $reqBody, $reqFrom))
  {
    echo("Request Failed... Try again later or email dude@santacruzescape directly.");
  }
  else if (!mail($conTo, $conSubject, $conBody, $conFrom))
  {
    echo("Request Failed... Try again later or email dude@santacruzescape directly.");
  }
  else
  {
    echo("Request Successful! You will receive a confirmation email within the next 24 hours.");
  }
}
?>
