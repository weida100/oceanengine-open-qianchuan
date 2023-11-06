# oceanengine-open-qianchuan
巨量开放平台-千川

```phpregexp

composer require weida/oceanengine-open-qianchuan

```

## demo

```phpregexp

<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/5 13:48
 * Email: sgenmi@gmail.com
 */
require './vendor/autoload.php';

use Weida\OceanengineOpenQianchuan\Application;
use Weida\OceanengineOpenQianchuan\OpenApi\Aweme\GetAwemeAuthorized;

$redis = new Redis();
$redis->connect('127.0.0.1',6379);

$config=[
    'client_id'=>989977686689,
    'client_secret'=>'aaaaaa',
    'cache'=>[
        'redis'=>$redis
    ],
    'app_type'=>'ad', // ad|qianchuan
    'access_token_callback'=>function(
        int $clientId,int $accountId,string $accessToken,int $accessTokenExpiresIn,string $refreshToken,int $refreshTokenExpiresIn
    ){

    }
];
$app = new Application($config);
//$oauth = $app->getOauth2();
//$url = $oauth->redirect();
$client = $app->withRefreshToken(78,"refresh_token")->getClient();
#$client = $app->withAccessToken(78,"access_token")->getClient();
echo $app->getAccessToken(0)->getToken().PHP_EOL;

//$a = $client->post('http://127.0.0.1:5555',[
//    'body'=>[
//        'a'=>1,
//        'b'=>2
//    ]
//]);

//$a = $client->postJson('http://127.0.0.1:5555',[
//    'a'=>1,
//    'b'=>2
//]);

//print_r($a->getBody()->getContents());

$a = $client->get('http://127.0.0.1:5555',[
    'query'=>[
        'a'=>1,
        'b'=>1
    ]
]);
print_r($a->getBody()->getContents());


$b = new GetAwemeAuthorized();
$a = $client->post($b);

print_r($a->getBody()->getContents());


```