<?php
$row = 1;
$total_all = array();
if (($handle = fopen("results_log.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        //echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        $tmp = array();
        for ($c=0; $c < $num; $c++) {
            //echo $data[$c] . "<br />\n";
            $tmp[] = $data[$c];
        }
        array_push($total_all, $tmp);
    }
    fclose($handle);
}

unset($total_all[0]);
echo "Total : ".count($total_all)."<br>";
//echo "<pre>"; echo print_r($total_all); echo "</pre>";

$uni_log = array();
$uni_log_agent = array();
$count_android = 0;
$count_iphone = 0;
$other = 0;
foreach ($total_all as $key => $value) {
	if(array_key_exists($value[3], $uni_log)){
		$uni_log[$value[3]] = $uni_log[$value[3]] + 1;
	}else{
		$uni_log[$value[3]] = 1;

		if(strpos($value[7], "Android") > 0){
			$count_android++;
			//echo $value[7]."<br>";
		}else if(strpos($value[7], "iPhone") > 0){
			$count_iphone++;
			//echo $value[7]."<br>";
		}else{
			$other++;
			//echo "kkk<br>";
		}

	}

	if($value[3] == "/herocash/register_tc.html"){
		if(array_key_exists($value[7], $uni_log_agent)){
			$uni_log_agent[$value[7]] = $uni_log_agent[$value[7]] + 1;
		}else{
			$uni_log_agent[$value[7]] = 1;
		}
	}
}
//die;
echo "ตัดตัวซ้ำออกแล้วเหลือ : ".(count($uni_log)). "<br>";
echo "/herocash/register_tc.html : ". $uni_log['/herocash/register_tc.html'] . "<br>";
echo "----------------------------------------------------------------------------------------". "<br>";
echo "/herocash/register_tc.html : (แยกจากเครื่องที่เข้ามา) ".count($uni_log_agent)."<br>";
echo "----------------------------------------------------------------------------------------". "<br>";
echo "count_android : ".$count_android."<br>";
echo "count_iphone : ".$count_iphone."<br>";
echo "count_other : ".$other."<br>";

$arr_number_phone = array();
foreach ($uni_log as $key => $value) {
	$tmp = urldecode($key);
	$tmp = str_replace('/herocash/register_tc.html?auth_url=https://wallet-authorization-service.truemoney.com/oauth/authorize?', '', $tmp);
	$temp2 = explode("&", $tmp);
	foreach ($temp2 as $k => $v) {
		$temp3 = explode('=', $v);
		if($temp3[0] == "mobileNo"){
			$arr_number_phone[] = $temp3[1];
		}
	}
}

echo "----------------------------------------------------------------------------------------<br>";
echo "<br>print_r /herocash/register_tc.html ==> <pre>"; echo print_r($uni_log_agent); echo "</pre>";
echo "รายการเบอร์ทั้งหมด = " . count($arr_number_phone);
echo "<pre>"; echo print_r($arr_number_phone); echo "</pre>";
echo "<pre>"; echo print_r($uni_log); echo "</pre>";