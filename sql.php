<?php
phpinfo();
// $dns = 'mysql:dbname=testdb;host=172.17.0.2';
// $usr = 'root';
// $pas = 'goma';
//
// //インサートする具を生成
// //変な文字列と変な数列を生成する関数
// function ingredients($kind)
// {
//     $cipher = ""; 
//     $number = "";
//     for ($i=0; $i < 8; $i++) {
//         $cTmp = range('a','z');
//         $cSuffix = array_rand($cTmp);
//         $cipher .= $cTmp[$cSuffix];
//         $nTmp = range('0','9');
//         $nSuffix = array_rand($nTmp);
//         $numbers .= $nTmp[$nSuffix];
//     }
//     if($kind === "cip"){
//         return $cipher;
//     }else if($kind === "num"){
//         return $numbers;
//     }
// }
//
// //SQL達
// $createTableSQL =
//     "CREATE TABLE IF NOT EXISTS testdb.inserttest (
//         id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
//         cipher text COLLATE utf8mb4_general_ci NOT NULL,
//         numbers int NOT NULL
//     ) ENGINE=InnoDB;";
//
// $truncateTableSQL =
//     "TRUNCATE TABLE testdb.inserttest;";
//
// $insertSQL = 
//     "INSERT INTO testdb.inserttest (cipher, numbers) VALUE (:cipher, :numbers);";
//
// $pdo = new PDO($dns, $usr, $pas);
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
//
// //テーブルの整理
// $pdo->query($createTableSQL);
// $pdo->query($truncateTableSQL);
//
// //プリペアードステートメントの準備
// $prepare = $pdo->prepare($insertSQL);
//
// //繰り返しの回数
// $repetition = 100000;
//
// $startTime=microtime(true);//タイマースタート
// //インサートの繰り返し
// for ($i=0; $i < $repetition; $i++) {
//     $prepare->bindValue(':cipher', ingredients("cip"));
//     $prepare->bindValue(':numbers', (int)ingredients("num"), PDO::PARAM_INT);
//     $prepare->execute();
// }
// $endTime=microtime(true);//タイマーストップ
//
// //経過時間の測定
// $prosseingTime = $endTime - $startTime;
// echo "インサートに" . $prosseingTime . "秒かかりました";
//
// $pdo = null;
