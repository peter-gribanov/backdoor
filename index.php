<?php
function http_post($url, $data) {
  return file_get_contents(
    $url,
    false,
    stream_context_create(array(
      'http' => array(
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($data)
      )
    )
  ));
}
if(!empty($_POST)) {
      echo http_post('http://test1/', $_POST);
}
?>
<form method="post" enctype="application/x-www-form-urlencoded">
<textarea name="!" cols="50" rows="10"><?if(isset($_POST['!'])):?><?=$_POST['!']?><?endif?></textarea>
<input type="submit">
</form>
