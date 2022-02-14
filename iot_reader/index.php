<?php
  session_start();
    
    $_POST['date']=htmlspecialchars($_POST['date']);
    $_POST['heure']=htmlspecialchars($_POST['heure']);
    $_POST['lieu']=htmlspecialchars($_POST['lieu']);
    $_POST['temperature']=htmlspecialchars($_POST['temperature']);
    $_POST['humidite']=htmlspecialchars($_POST['humidite']);
    $_POST['luminosite']=htmlspecialchars($_POST['luminosite']);
    $_POST['vent']=htmlspecialchars($_POST['vent']);

    if($_POST['date'] != NULL && $_POST['heure'] != NULL  && $_POST['lieu'] != NULL){ 
      echo "start writing<br>";

      //prepare data
      $filename = '../dataset.csv';
      $newdata = [$_POST['date'], $_POST['heure'], $_POST['lieu'], $_POST['temperature'], $_POST['humidite'], $_POST['luminosite'], $_POST['vent']];
        echo var_dump($newdata);
      //open csv fil for writing
      $dataset = fopen($filename, 'a');

      //check if file is opened
      if($dataset === false) {
        die('Oops ! an error accur while opening the file ' . $filename);
      }

      //support unicode
      fputs($dataset, (chr(0xEF) . chr(0xBB) . chr(0xBF))); 

      //let write now
      fputcsv($dataset, $newdata);

      //then close file 
      fclose($dataset);

      echo "end writing";
      exit();
    }
    header('Location: ../');
?>