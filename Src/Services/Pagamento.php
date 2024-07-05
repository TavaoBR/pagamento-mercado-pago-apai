<?php 

namespace Src\Services;

use MercadoPago\Client\Common\RequestOptions;
use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\Exceptions\MPApiException;
use MercadoPago\MercadoPagoConfig;

class Pagamento {

    public function __construct()
    {
        $token = $_ENV['TOKEN_ACCESS'];
        MercadoPagoConfig::getAccessToken("$token");
    }

    public function createPayment()
    {
        
    }




}