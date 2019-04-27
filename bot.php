<?php
echo "
 
 TODAY U GET BECAUSE U LEET FOREVER  
                            
";
echo "Apa Kalian Yakin Mau Menjalankan ini, ini tools bisa tykung cewe elu yak asw,  Yakin? (y/n) : ";
$ehbct = fgets(STDIN);
echo "\n\n";
if(trim($ehbct) == "y"){
echo "Spam Count : ";
$ehbctya = fgets(STDIN);
echo "\n";
echo "Jalan Njg....\n";
	$i=1;
while ($i <= $ehbctya)
{

$curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, "https://api.telegram.org/botYOURAPI/sendMessage?chat_id=YOURCHATID&text=YOURMESSAGES"); // Your BOT Telegram API
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 
    $result = curl_exec ($curl);
    if($result){
    	echo "Beres Mhanx ".$i."\n";
    	$i=$i+1;
    }else {
    	echo "Gagal Cok ".$i."\n";
    }

   }
 //   curl_close ($curl);
 //   print $result;
}
?>
