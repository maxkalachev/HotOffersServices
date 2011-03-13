<?php
    require_once __DIR__.'/components/CompManager/autoload.php';

    $config['CompManager']=include __DIR__.'/components/CompManager/config.php';
    $config['HTMLMapper']=include __DIR__.'/components/HTMLMapper/config.php';

    use Components\CompManager\CompManager;
    use Components\HTMLMapper\HTMLMapper;

    CompManager::create();

    HTMLMapper::create('AirOffer','DataObject',array());
    HTMLMapper::find();

    echo $airOffer['routeFrom'].' -> '.$airOffer['routeTo'].', '.$airOffer['price'];
?>
