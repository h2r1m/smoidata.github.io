<?php

include("simple_html_dom.php");





   /* echo 'EENNDD';





$base = 'https://www.nseindia.com/api/option-chain-indices?symbol=BANKNIFTY';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_URL, $base);
    curl_setopt($curl, CURLOPT_REFERER, $base);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

    // decode response
    curl_setopt($curl, CURLOPT_ENCODING, true);
    
   $str = curl_exec($curl);
    if ($str === false) {
        die('error: ' . curl_errno($curl) ."<br>".curl_error($curl));
    }
curl_close($curl);
    //echo $str; 
        
    $data =  json_decode($str, true);
    echo sizeof($data["filtered"]);
    echo '<br/>jd<br/>';

    $temp = "<table>";
    

    $temp .= "<tr><th>CE</th></tr>";
    

    for($i = 0; $i < sizeof($data["filtered"]); $i++)
    {
        echo sizeof($data["filtered"][$i]);
    $temp .= "<tr>";
    $temp .= "<td>" . $data["filtered"][$i] . "</td>";
    $temp .= "</tr>";
    }
    

    $temp .= "</table>";

    echo $temp;
    echo '<br/>' . $data["filtered"]["CE"]["totOI"] . '<br/>';
    echo '<br/>' . $data["filtered"]["CE"]["totVol"] . '<br/>';
    echo '<br/>' . $data["filtered"]["PE"]["totOI"] . '<br/>';
    echo '<br/>' . $data["filtered"]["PE"]["totVol"] . '<br/>';

    echo '<br/>' . $data["records"]["index"]["last"] . '<br/>';
    foreach ($data["filtered"] as $ab) {
        if(is_array($ab))
        {
            foreach($ab as $bb)
            {
                if(is_array($bb) == false)
                {
                    //echo $bb;
                }
            }
        }
    }

    echo '<br/>jd<br/><br/>';

    print_r($data);

*/



$base = 'https://www.nseindia.com/api/option-chain-indices?symbol=BANKNIFTY';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_URL, $base);
    curl_setopt($curl, CURLOPT_REFERER, $base);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

    // decode response
    curl_setopt($curl, CURLOPT_ENCODING, true);
    
   $str = curl_exec($curl);
 
    if ($str === false) {
        die('error: ' . curl_errno($curl) ."<br>".curl_error($curl));
    }
curl_close($curl);
    
        
    $data =  json_decode($str, true);
    echo sizeof($data["filtered"]);

echo $str; 
//echo $data;


/*$ceTotOI = $data["filtered"]["CE"]["totOI"];
$ceTotVol = $data["filtered"]["CE"]["totVol"];
$peTotOI = $data["filtered"]["PE"]["totOI"];
$peTotVol = $data["filtered"]["PE"]["totVol"];*/

/*echo '<br/>' . $ceTotOI . '<br/>';
echo '<br/>' . $ceTotVol . '<br/>';
echo '<br/>' . $peTotOI . '<br/>';
echo '<br/>' . $peTotVol . '<br/>';*/


/*echo '<td>'.$ceTotOI.'</td>
      <td>'.$ceTotVol.'</td>
      <td>'.$peTotOI.'</td>
      <td>'.$peTotOI.'</td>';*/


/*if(@$_POST['function'] == 'query')
{
function add()
{
   $base = 'https://www.nseindia.com/api/option-chain-indices?symbol=BANKNIFTY';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_URL, $base);
    curl_setopt($curl, CURLOPT_REFERER, $base);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

    // decode response
    curl_setopt($curl, CURLOPT_ENCODING, true);
    sleep(5);
   $str = curl_exec($curl);
   sleep(5);
    if ($str === false) {
        die('error: ' . curl_errno($curl) ."<br>".curl_error($curl));
    }
curl_close($curl);
    //echo $str; 
        
    $data =  json_decode($str, true);
    echo sizeof($data["filtered"]);
}
add();
}*/



/*if(@$_POST['function'] == 'query1')
{
function add()
{
   $base = 'https://www.nseindia.com/api/option-chain-indices?symbol=BANKNIFTY';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_URL, $base);
    curl_setopt($curl, CURLOPT_REFERER, $base);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

    // decode response
    curl_setopt($curl, CURLOPT_ENCODING, true);
   $str = curl_exec($curl);
    if ($str === false) {
        die('error: ' . curl_errno($curl) ."<br>".curl_error($curl));
    }
curl_close($curl);
    //echo $str; 
        
    $data =  json_decode($str, true);
    echo sizeof($data["filtered"]);
}
add();
}
else if(@$_POST['function'] == 'query2')
{
function aadd()
{
   
}
aadd();
}*/



?>

