<?php
    echo "<body style='background-color:gray'>";
    $author_name = "INDILV";
    $weekday_names_et = ["Esmaspäev", "Teisipäev", "Kolmapäev", "Neljapäev", "Reede", "Laupäev", "Pühapäev"];
    $full_time_now = date("d/m/Y H:i:s");
    $hour_now = date("H");
    $weekday_now = date("N");
    //echo $weekday_now;
    $day_category = "Ebamäärane";
     if($weekday_now <= 5)  {$day_category = "KOOLIPÄEV";} else {$day_category = "PUHKEPÄEV";}
     //echo $day_category;
     // . on + 
     $photo_dir = "photos/";
    $allowed_photo_types = ["image/jpeg", "image/gif", "image/png"];
     $all_files = array_slice(scandir($photo_dir), 2);
  //loeme fotode kataloogi sisu
    // echo $all_files; - jama!
    // var_dump ($all_files);
    //$only_fans = array_slice($all_files, 2);
    //var_dump($only_fans);
    // sõelun välja ainult lubatud pildifailid
    $photo_files = [];
        foreach($all_files as $file){$file_info = getimagesize($photo_dir .$file); if(isset($file_info["mime"])){
            if(in_array($file_info["mime"], $allowed_photo_types)){
                array_push($photo_files, $file);

            }
        }
  }   

    var_dump($photo_files);
    $limit = count($photo_files);
    //echo $limit;
    //
  
    $pic_num = mt_rand(0,   $limit-1    );
    $pic_num2 = mt_rand(0,  $limit-1 );
    $pic_file = $photo_files[$pic_num];
    $pic_file2 = $photo_files[$pic_num2];
    //<img_src="pilt.jpg" alt="TLÜ">
    $pic_html = '<img src ="' .$photo_dir . $pic_file .'"alt="TLÜ">';
    $pic_html2 = '<img src ="' .$photo_dir . $pic_file2 .'"alt="TLÜ">';


    //loeme fotode kataloogi sisu

?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="utf-8">
    <title><?php echo $author_name; ?></title>
</head>  
<body>
    <h1><?php echo $author_name; ?>, DT2021</h1>
    <p>SEE LEHT ON VALMINUD ÕPPETÖÖRAAMES</p>
    <p>TALLINNA ÜLIKOOL <a href="https://www.tlu.ee/en/dt">DT INSTITUUT</a> 2021</p>
    <?php echo $pic_html2; ?> 

    <p> Lehe avamise hetk: <span><?php echo $weekday_names_et [$weekday_now -1].", ".$full_time_now .", on " . $day_category; ?></span>.</p>

    <h2>LEVEL 2</h2>
    <ul>
        <li>HTML lang</li>
        <li>PHP lang</li>
        <li>SQL lang</li>
        <li>Kõike head ja paremat</li>
        <?php echo $pic_html; ?>
    </ul>












</body>  
</html>
//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