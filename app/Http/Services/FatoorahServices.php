<?php

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class FatoorahServices{
    private $base_url,$headers,$request_client;

    public function __construct(Client $request_client){
     $this->request_client=$request_client;
     $this->base_url=env('fatoorah_base_url');
     $this->headers=[
      'content-Type'=> 'application/json',
      'authorization'=> 'Bearer'.env('fatoorah_token'),
     ];
    }

    public function sendPaymant($data){
      return $response =$this->buildRequest('v2/SendPayment','post','$data');
    }

    public function buildRequest($url,$method,$data=[]){
      $request= new Request($method,$this->base_url.$url,$this->headers);
      

      if(!$data){
        // return false;
        // $response=  $this->request_client->send($request,['json'=>$data]);

        // if($response->getStatusCode() != 200){
        //     return false;
        // }
       
        $response =json_decode($request->getBody(),true);
        return $response;

      }

      
    }
}