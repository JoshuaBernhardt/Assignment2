<?php

include ("./DAOs/customerDAO.php");
include("./DAOs/onlineDAO.php");
include("./DAOs/personDAO.php");
include("./DAOs/filmPurchaseDAO.php");



$customerDAO = new customerDAO();
$onlineDAO = new onlineDAO();
$personDAO = new personDAO();
$filmPurchaseDAO = new filmPurchaseDAO();

$onlinePaymentsArray = array ();


$people = $personDAO->getPeople();
$customers = $customerDAO->getCustomers();
$filmPurchases = $filmPurchaseDAO->getFilmPurchases();
$onlinePayments = $onlineDAO->getAllOnlinePayments();

$personID = $personDAO->getPersonID("Iola Vance");
$customerID = $customerDAO->getCustomerID($personID);


//fss_person
foreach ($people as $personRow) {  //get all for Iola (placeholder)
    if ($personRow["personemail"]== "Iola Vance") {
        $personID = $personRow["personid"];
    }
}

//fss_customers
foreach ($customers as $customerRow) {  //customer for each
    if ($customerRow["custid"]== $personID) {
        $customerID = $customerRow["custid"];
    }
}

//online
foreach ($onlinePayments as $onlinePaymentsRow) {
    if ($onlinePaymentsRow["custid"]== $customerID) {
        $onlinePaymentsArray[] = $onlinePaymentsRow['payid'];
    }
}

//fss_filmpurchase
foreach ($filmPurchases as $filmPurchaseRow) {
    foreach($onlinePaymentsArray as $onlinePaymentsRow) {
        if ($filmPurchaseRow["payid"] == $onlinePaymentsRow) {
            $onlinePaymentsArray[] = $onlinePaymentsRow["payid"];
            echo $customers;

        }
    }
}



$customerDAO->closeDB();