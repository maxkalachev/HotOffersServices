<?php
    use Components\RESTManager\RESTServer;
    require_once 'autoload.php';

    $data=RESTServer::processRequest();

    function airoffers(){
        $offers=array(array("AER","MOW","1","2000","RUB"),array("AER","MOW","2","4000","RUB"),array("ASF","MOW","1","2000","RUB"),array("ASF","MOW","2","4000"),array("GOJ","MOW","1","1500","RUB"));
        return $offers;
    }

    $map=array('airoffers'=>'airoffers');

    switch ($data->getMethod()){
        case 'get':
            $res=call_user_func($map[$data->getAction()],$data->getData());

            if ($data->getOutputFormat()=='json'){
                RESTServer::sendResponse(200,\json_encode($res),'application/json');
            }

            break;
        case 'post':
            break;
    }
?>
