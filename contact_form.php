<?php

$name = $_POST['name'];
$email = $_POST['email']; 

$sub = $_POST['sub']; 
$message = $_POST['message']; 

$to = "support@might-cloud.com";
$subject = "[MH] Nova poruka - Kontakt";
$message = "$name je poslao kontakt poruku:

---------------------------------------------------------

- Naziv poruke: #sub

- Ime i Prezime: $name
- E-mail: $email

---------------------------------------------------------
- Poruka: #message

---------------------> Kraj poruke <---------------------

- Poslato putem kontakt forme sa might-cloud.com";

$from = $email;
$headers = "From: $from";
$mail = mail($to,$subject,$message,$headers);

if ($_POST['name'] == ""){echo "<title>Greska!</title><b>Morate uneti vase Ime i Prezime.</b>";}
else if($_POST['email'] == ""){echo "<title>Greska!</title><b>Morate uneti vas E-mail.</b>";}

else if ($mail) {
echo "<title>Kontakt | Might Hosting</title><br><br><br>Pozdrav <b>$name</b>, uspesno ste poslali E-mail!<br>
	   Odgovoreno ce te dobiti na vas E-mail (<b>$email</b>) u najkracem mogucem roku.<br><br>
	   Loading..";

$na = "$email";
$naziv = "Might Hosting - Automatski odgovor na poruku";
$msg = "Poštovani,\n
obaveštavamo Vas da je Vaša poruka uspešno primljena i da ce Vam uskoro odgovoriti neko iz našeg tima.
Hvala što ste izabrali naš Hosting.

- - - - - - - - - - - - - - - - - - - - - - - - -

Facebook: https://www.facebook.com/mightcloud
Web: https://might-cloud.com/

- - - - - - - - - - - - - - - - - - - - - - - - - ";
$od = "Od: $to" . "\r\n";
mail($na,$naziv,$msg,$od);
}

?>
<script type="text/javascript">
	setTimeout(function () {    
    window.location.href = 'https://might-cloud.com/'; 
},1000); // 5000 = 5 sec - 10000 = 10 sec
</script>
