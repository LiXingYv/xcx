<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/1/26
 * Time: 22:55
 */
return [
    'app_id' => 'wx0660940abcfd7f77',
    'app_secret' => '2f5214193549752f6a9b23b643b44de6',
    'login_url' => 'https://api.weixin.qq.com/sns/jscode2session?'.'appid=%s&secret=%s&js_code=%s&grant_type=authorization_code',

    //微信获取access_token的url地址
    'access_token_url' => "https://api.weixin.qq.com/cgi-bin/token?".
        "grant_type=client_credential&appid=%s&secret=%s",
];