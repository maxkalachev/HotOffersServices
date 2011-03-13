<?php
    namespace Components\RESTManager;

 class RESTRequest
 {
       private $request_vars;
       private $data;
       private $http_accept;
       private $method;
       private $outputFormat;
       private $action;

       public function __construct()
       {
           $this->request_vars      = array();
           $this->data              = '';
           $this->http_accept       = (strpos($_SERVER['HTTP_ACCEPT'], 'json')!==false) ? 'json' : 'xml';
           $this->method            = 'get';
           $this->outputFormat      = 'json';
       }

       public function setData($data)
       {
           $this->data = $data;
       }

       public function setMethod($method)
      {
           $this->method = $method;
       }

       public function setRequestVars($request_vars)
     {
         $this->request_vars = $request_vars;
      }

      public function getData()
      {
          return $this->data;
      }

      public function getMethod()
      {
          return $this->method;
      }

      public function getHttpAccept()
      {
          return $this->http_accept;
      }

      public function getRequestVars()
      {
          return $this->request_vars;
      }

      public function setOutputFormat($outputFormat){
          $this->outputFormat=$outputFormat;
      }

      public function setAction($action){
          $this->action=$action;
      }

      public function getOutputFormat(){
          return $this->outputFormat;
      }

      public function getAction(){
          return $this->action;
      }
 }
?>
