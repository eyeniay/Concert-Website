<?php
require_once("./LogicLayer/OrganizationManager.php");
$id=$_GET["id"];
?>


<?php
$JSON["concert"]=array();

$gecici["id"]=array();
$gecici["name"]=array();
$gecici["city"]=array();
$gecici["photo link"]=array();
$gecici["price"]=array();
$gecici["number of sold tickets"]=array();
$gecici["quota"]=array();
$gecici["description"]=array();
$gecici["date"]=array();

$allEventsbyOid=OrganizationManager::getOrganizationbyID($id);

array_push($gecici["id"],$id);
array_push($gecici["name"],$allEventsbyOid[0]->getOname());
array_push($gecici["city"],$allEventsbyOid[0]->getLname());
array_push($gecici["photo link"],"no");
array_push($gecici["price"],$allEventsbyOid[0]->getTprice());
array_push($gecici["number of sold tickets"],"20");
array_push($gecici["quota"],"100");
array_push($gecici["description"],$allEventsbyOid[0]->getOperformer_name());
array_push($gecici["date"],$allEventsbyOid[0]->getDday());


array_push($JSON["concert"],$gecici);



echo json_encode($JSON);
?>