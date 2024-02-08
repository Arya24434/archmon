<?php
if (!isset($_SESSION["mikhmon"])) {
    header("Location:../admin.php?id=login");
  } else {
        $_SESSION["v"] = "3.20 01-01-2024 Update by Arya Novafelix";
    
    }
