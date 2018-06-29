<?php 
	$appId="wxadfd8159e6da1d4f";
$appsecret ="f9a5bc0b5fc9820e8e7a9fa84547d0dc";
if(!isset($_GET['code'])){
		$url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxadfd8159e6da1d4f&redirect_uri=http://h5.sc.ministudy.com/weixin.php&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect ";
	    echo "<script>location.href='$url'</script>";die;	
}else{
  $code = $_GET['code'];
  $token_url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appId."&secret=".$appsecret."&code=".$code."&grant_type=authorization_code";
    $token = json_decode(file_get_contents($token_url));
	$opendid= $token->openid;
	$access_token = $token->access_token;
	$info_url = "https://api.weixin.qq.com/sns/userinfo?access_token=".$access_token."&openid=".$opendid."⟨=zh_CN";
	$info = json_decode(file_get_contents($info_url));
	$data['name'] = $info->nickname;
	$data['image'] = $info->headimgurl;
	print_r($info);
}

?>