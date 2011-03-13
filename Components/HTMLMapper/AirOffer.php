<?php
    namespace HTMLParser;

    class AirOffer extends DataObject{
        const WAY_THERE=0;
        const WAY_BACK=1;

        /** @string **/
        private $routeFrom;

        /** @string **/
        private $routeTo;

        /** @string **/
        private $price;

        // RUB, EUR
        private $moneyType;

        // WAY_THERE, WAY_BACK
        private $routeType;

        /** @date **/
        private $departionDate;

        /** @date **/
        private $returnDate;
    }
?>
