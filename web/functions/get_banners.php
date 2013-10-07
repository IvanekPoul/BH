<?php

  //skoci do adresare banners

  chdir('./images/banners');

  //nacte vsechny jpg soubory z adresare do pole

  $banner = glob('*.jpg');

  //nahodne poradi

  shuffle($banner);

  

  foreach($banner as $picture){

  $soubory =  $soubory . "[\"./images/banners/".$picture."\"],"; 

  }

  

  strlen($soubory);

  $soubory = substr($soubory, 0, strlen($soubory)-1  );

  echo $soubory;

?>