<?php

  require_once 'common.php';

  /* session開始 */
  session_start();

  /* 変数初期化 */
  $err_flg   = 0;
  $id_msg   = "";
  $name_msg  = "";
  $email_msg  = "";
  $message_msg  = "";

  /* 送信後のリロード防止 */
  $_SESSION['sent'] = "";

  /* 入力項目の取得 */
  $id           = $_POST["id"];
  $name         = $_POST["name"];
  $email        = $_POST["email"];
  $tel          = $_POST["tel"];
  $contact      = $_POST["contact"];
  $address1     = $_POST["adderss1"];
  $address2     = $_POST["adderss2"];
  $message      = $_POST["message"];

  /* 前後半角空白除去 */
  $id = preg_replace('/^[ 　]+/u', '', $id); 
  $id = preg_replace('/[ 　]+$/u', '', $id);
  $id = mb_convert_kana($id, "a", "UTF-8"); 
  $name = mb_convert_kana($name, "s", "UTF-8");
  $name = trim($name);
  $email = mb_convert_kana($email, "s", "UTF-8");
  $email = str_replace( ' ', '', $email ); 
  $tel = preg_replace('/^[ 　]+/u', '', $tel); 
  $tel = preg_replace('/[ 　]+$/u', '', $tel);
  $tel = mb_convert_kana($tel, "a", "UTF-8"); 
  $address1 = mb_convert_kana($address1, "s", "UTF-8");
  $address1 = trim($address1);
  $address2 = mb_convert_kana($address2, "s", "UTF-8");
  $address2 = trim($address2);
  $message = mb_convert_kana($message, "s", "UTF-8");
  $message = trim($message);
  $message = str_replace("\"","'",$message);

  /* お問い合わせID入力値チェック */
  if ($id != ""){
    if (is_numeric($id) == false) {
      $err_flg = 1;
      $id_msg = "※数字を入力してください";
    }
  }
  /* Name入力値チェック */
  if($name == ""){
    $err_flg = 1;
  $name_msg = "※Nameが入力されていません";
  }

  /* Email入力値チェック */
  if($email == ""){
    $err_flg = 1;
  $email_msg = "※Emailが入力されていません";
  }else if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email) && $email != "") {
    $err_flg = 1;
    $email_msg = "※Emailの書式が不当です";
  }

  /* Tel入力値チェック */
  
  /* Contact入力値チェック */

  /* Address入力値チェック */

  /* Message入力値チェック */
  if($message == ""){
    $err_flg = 1;
  $message_msg = "※Messageが入力されていません";
  }

  /* Messageが1000文字以内かチェック */
  if(1000 < mb_strlen($message, "UTF-8")){
  $err_flg = 1;
  $message_msg = "※Messageの文字数が1000文字を超えています";  
  }

  /* 次ページへ遷移 */
  if($err_flg == 0){    // 正常ルート
    if($_SESSION['sent'] != "yes") {
      $to = $email;
      $bcc = "bcc:nakashima@u-ful.co.jp";  // BCC
      $subject = mb_convert_encoding("[REIJ]お問い合わせについて","ISO-2022-JP","auto");
      $body =  mb_convert_encoding("お問い合わせありがうございます\n\n".
      "お問い合わせ物件ID：{$id}\n".
      "Name：{$name}\n".
      "Email：{$email}\n".
      "Tel：{$tel}\n".
      "希望の連絡先：{$contact}\n".
      "Address：{$address1}{$address2}\n".
      "Message：{$message}\n"
      ,"ISO-2022-JP","auto");
      
      
      ini_set("sendmail_from","info@u-ful.co.jp"); // FROM
      ini_set("SMTP","");  // サーバ
      mb_language("Japanese");
      mb_internal_encoding('ISO-2022-JP');
      mb_send_mail($to,$subject,$body );
      
      $_SESSION['sent'] = yes;
    }

#    session_destroy();
    $smarty->display('contact/send.html');
  }else{    // 異常ルート
    // 入力画面へ
    $smarty->display('contact/index.html');
  }
?>