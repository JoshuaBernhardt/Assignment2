<?php

include ("DAOs/customerDAO.php");

$dao = new customerDAO();

$row = $dao->pastPurchases("Iola Vance");