<?php

namespace App\Http\Controllers;

use FatoorahServices;
use Illuminate\Http\Request;

class FatoorahController extends Controller
{
    private $fatoorahServices;

    public function __construct(FatoorahServices $fatoorahServices){
      $this->fatoorahServices=$fatoorahServices;
    }
    public function payOrder(){
        
        $data=[
         "CustomerName"=>'Nehad Ibrahim',
         "NotificationOption"=> 'LNK',
         "InvoiceValue"=>100,
         "CustomerEmail"=>"engnehad2021@gmail.com",
         "CallBackUrl"=>env('success_url'),
         "ErrorUrl"=>env('error_url'),
         "Language"=>'en',
         "DisplayCurrencyIso"=>'SAR'
        ];

      return  $this->fatoorahServices->sendPaymant($data);
    }
}
