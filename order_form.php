<?php
$igra = $_POST['igra']; 
$igraci = $_POST['igraci']; 
$period = $_POST['period']; 
$drzava = $_POST['drzava']; 
$uplatapreko = $_POST['uplatapreko']; 
$lokacija = $_POST['lokacija'];

$name = $_POST['name'];
$email = $_POST['email'];

$to = "support@might-cloud.com";
$subject = "[MH] Nova poruka - Narudzbina";
$message = "$name je poslao poruku za Narudzbinu servera:

---------------------------------------------------------
Informacije korisnika koji je Narucio server:
---------------------------------------------------------

Naziv poruke: Narudzbina Servera

Ime i Prezime: $name
E-mail: $email
Drzava: $drzava

Igra: $igra
Broj slotova/RAM: $igraci
Lokacija servera: $lokacija
Uplata za: $period mesec/a/i

Nacin uplate: $uplatapreko

----------------> Kraj poruke <----------------";

$from = $email;
$headers = "From: $from";
$mail = mail($to,$subject,$message,$headers);

if ($_POST['name'] == ""){echo "<title>Greska!</title><b>Morate uneti vase Ime i Prezime.</b>";}
else if($_POST['email'] == ""){echo "<title>Greska!</title><b>Morate uneti vas E-mail.</b>";}

else if ($mail) {
echo "<title>Might Hosting | Naruceno</title><br><br><br>Pozdrav <b>$name</b>, uspesno ste poslali E-mail!<br>
	 Bice vam odgovoreno na vas E-meil <b>$email</b> u najkracem mogucem roku.<br><br>
	   Redirect za <b>5</b> sekundi..";

$na = "$email";
$naziv = "Might Hosting - Automatski odgovor na narudzbinu";
$msg = "Postovani,\n
obavestavamo Vas da je Vasa narudzbina uspesno primljena i da ce Vam uskoro biti odgovoreno.
Hvala sto ste izabrali nas Hosting.

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
},2000); // 5000 = 5 sec - 10000 = 10 sec
</script>
