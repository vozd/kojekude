@extends('layouts.master')

@section('content')

	<link href="css/emails.css" rel="stylesheet" type="text/css" />
<div class="container">
  <div id="leave-us-a-message" >
        <h2>LEAVE US A MESSAGE...</h2><br>
        <p>
           how we can help?<br/>
           we will try our best to get back to you as soon as possible.
        </p> 
  </div>
</div>
       
       <div class="container">
     <section id="contentForm" class="container">

            <!-- kontakt forma-->
            <?php
                 $error    = ''; // error message
                 $name     = ''; // sender's name
                 $email    = ''; // sender's email address
                 $subject  = ''; // subject
                 $message  = ''; // the message itself
               	 $spamcheck = ''; // Spam check

            if(isset($_POST['send']))
            {
                 $name     = $_POST['name'];
                 $email    = $_POST['email'];
                 $subject  = $_POST['subject'];
                 $message  = $_POST['message'];
               	 $spamcheck = $_POST['spamcheck'];

                if(trim($name) == '')
                {
                    $error = '<div class="errormsg">Please enter your name!</div>';
                }
            	    else if(trim($email) == '')
                {
                    $error = '<div class="errormsg">Please enter your email address!</div>';
                }
                else if(!isEmail($email))
                {
                    $error = '<div class="errormsg">You have enter an invalid e-mail address. Please, try again!</div>';
                }
            	    if(trim($subject) == '')
                {
                    $error = '<div class="errormsg">Please enter a subject!</div>';
                }
            	else if(trim($message) == '')
                {
                    $error = '<div class="errormsg">Please enter your message!</div>';
                }
	          	else if(trim($spamcheck) == '')
	            {
	            	$error = '<div class="errormsg">Please enter the number for Spam Check!</div>';
	            }
	          	else if(trim($spamcheck) != '5')
	            {
	            	$error = '<div class="errormsg">Spam Check: The number you entered is not correct! 2 + 3 = ???</div>';
	            }
                if($error == '')
                {
                    if(get_magic_quotes_gpc())
                    {
                        $message = stripslashes($message);
                    }

                    // the email will be sent here
                    // make sure to change this to be your e-mail
                    $to      = "office@kojekude.com";

                    // the email subject
                    // '[Contact Form] :' will appear automatically in the subject.
                    // You can change it as you want

                    $subject = '[Contact Form] : ' . $subject;

                    // the mail message ( add any additional information if you want )
                    $msg     = "From : $name \r\ne-Mail : $email \r\nSubject : $subject \r\n\n" . "Message : \r\n$message";

                    mail($to, $subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n");
            ?>

                  <!-- kada se posalje poruka-->
                  <div style="text-align:center;">
                    <h1>Congratulations!!</h1>
                       <p>Thank you <b><?=$name;?></b>, your message is sent!</p>
                  </div>
                  <!--kraj poruke-->


            <?php
                }
            }

            if(!isset($_POST['send']) || $error != '')
            {
            ?>

            <!--Error Message-->
            <?=$error;?>

            <form  method="post" name="contFrm" id="contFrm" action="contact/">


                      <label><span class="required">*</span> full name</label>
            			<input name="name" type="text" class="box" id="name" size="30" value="<?=$name;?>" />

            			<label><span class="required">*</span> email </label>
            			<input name="email" type="text" class="box" id="email" size="30" value="<?=$email;?>" />

            			<label><span class="required">*</span> subject </label>
            			<input name="subject" type="text" class="box" id="subject" size="30" value="<?=$subject;?>" />

                 		<label><span class="required">*</span> message </label>
                 		<textarea name="message" cols="40" rows="3" class="textbox" id="message"><?=$message;?></textarea>
                        <div class="spamchk">
                        <div class="">
            			<label><span class="required">*</span> spam check 2 + 3 = </label></div>
                        <div class="">
			             <input name="spamcheck" type="text" class="box" id="spamcheck" size="4" value="<?=$spamcheck;?>" /><br /><br />
                        </div>
                        </div><br><br><br>
            			<!-- Submit Button-->
                 		<input name="send" type="submit" class="button" id="send" value="send" />

            </form>

            <!-- e-mail verifikacija -->
            <?php
            }

            function isEmail($email)
            {
                return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i"
                        ,$email));
            }
            ?>
                  
     </section> 
 </div>
    <!-- kraj kontakt forme -->  
    
    <div id="big2" class="big23"></div>
    <div class="container">
    <div id="contact" >
            <h2>...OR CONTACT US</h2><br>
        <p>
           office@kojekude.com
        </p>
        
        <p>
           +381 64 2017 553
        </p>
        <p>
             Belgrade, Serbia
        </p>
    </div>
</div>
<div id="big3" class="big"></div>
   


<div class="container-default">
<img src="images/beograd.png" class="img-responsive">
</div> 

@stop