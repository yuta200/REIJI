<?php
/*---- 画像フォルダ削除 ----*/
function remove_img_directory($dir) {
  if (is_dir($dir)) {
    if ($handle = opendir("$dir")) {
      while (false !== ($item = readdir($handle))) {
        if ($item != "." && $item != "..") {
          if (is_dir("$dir/$item")) {
            remove_img_directory("$dir/$item");
          } else {
            unlink("$dir/$item");
          }
        }
      }
      closedir($handle);
      rmdir($dir);
    }
  }
}

/*---- 画像フォルダアップロード ----*/
/*
function uploade_img_directory($dir_name, $new_dir) {
  if (!is_dir($new_dir)) {
    mkdir($new_dir);
  }

  if (is_dir($dir_name)) {
    if ($dh = opendir($dir_name)) {
      while (($file = readdir($dh)) !== false) {
        if ($file == "." || $file == "..") {
          continue;
        }
        if (is_dir($dir_name . "/" . $file)) {
          uploade_img_directory($dir_name . "/" . $file, $new_dir . "/" . $file);
        } else {
          copy($dir_name . "/" . $file, $new_dir . "/" . $file);
        }
      }
      closedir($dh);
    }
  }
}
*/
?>