<?php
$firstNumber=rand(0,9);
$secondNumber=rand(0,9);
$answerNumber=$firstNumber+$secondNumber;
$questionString="$firstNumber + $secondNumber=";
if (isset($_REQUEST['email']))
{

$headers="From:thebusyigitcan@gmail.com\r\nContent-type:text/html\r\n";
mail('thebusyigitcan@gmail.com', 'Feedback from iYigit Repo', '', $headers);

}
?>


<SCRIPT LANGUAGE='JavaScript'>
function validateEmail(email)
{ var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(".+"))@(([[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
return re.test(email);
}

function validateForm()
{

//FORMREDIRECTURLFORMREDIRECTURLEND
//FORMSUBMITSubmitFORMSUBMITEND
//FORMEMAILVERIFICATION(null)FORMEMAILVERIFICATIONEND
//FORMBOTCHECKERMSG(null)FORMBOTCHECKERMSGEND
var showRequiredAlert=0;
var x;
var showEmailAlert=0;
var emailX;
var validateFlag=true;

var showBotCheckerAlert=0;
var botCheckerValue;
if (showRequiredAlert==1)
{
alert('(null)');
//FORMMISSINGMSG(null)FORMMISSINGMSGEND
return false;
}
if (showEmailAlert==1)
{
alert('(null)');
return false;
}
if (showBotCheckerAlert==1)
{
alert('(null)');
return false;
}
else{
alert('Thanks! Have a nice day!');
//FORMRESPONSEMSGThanks! Have a nice day!FORMRESPONSEMSGEND
return true;
}
}
</SCRIPT>

<?

//FORMRESPONSEIPSTART==0==FORMRESPONSEIPEND
//FORMDISPLAYOPTIONSTART==0==FORMDISPLAYOPTIONEND
//FORMRESPONSEEMAILSTART==thebusyigitcan@gmail.com==FORMRESPONSEEMAILEND
//FORMRESPONSEEMAILCCSTART====FORMRESPONSEEMAILCCEND
?>

