<?php 

$server_key = "SB-Mid-server-7_n_TLYkELFYzGo224UowxFd";

$is_production = false;

$api_url = $is_production ? 
        'https://app.midtrans.com/snap/v1/transactions' :
        'https://app.sandbox.midtrans.com/snap/v1/trasactions';


        if (!strpos($_SERVER['REQUEST_URL'], '/change')){
    http_response_code(404);
    echo "wrong path ,make it sure it's'/change";exit();
}
if($_SERVER['REQUEST_METHOD']!== 'POST'){
    hhtp_response_code(404);
    echo"Page not found";exit();

}
$request_body= file_get_contents('php://input');
header('Content-Type : application/json');

$charge_result = chargeAPI($api_url, $server_key)
