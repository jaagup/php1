<?php
  if(isSet($_REQUEST["eesnimi"])){
     echo "Tere, $_REQUEST[eesnimi]";
  } else {
     echo "Void aadressireale panna eesnime parameetri alla enese oma";
  }
