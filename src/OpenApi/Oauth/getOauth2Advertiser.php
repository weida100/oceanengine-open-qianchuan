<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/6 23:43
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Oauth;

use Weida\OceanengineCore\AbstractApi;

class getOauth2Advertiser extends AbstractApi
{
    protected string $_url = 'https://ad.oceanengine.com/open_api/oauth2/advertiser/get/';
    private string $_version="";

    /**
     * @var int 开发者申请的应用APP_ID，可通过“应用管理”界面查看
     */
    protected int $app_id;

    /**
     * @var string 开发者应用的私钥Secret，可通过“应用管理”界面查看（确保填入secret与app_id对应以免报错！）
     */
    protected string $secret;

    /**
     * @var string 授权access_token
     */
    protected string $access_token;


    public function setAppId(int $app_id): void
    {
        $this->app_id = $app_id;
    }

    public function setSecret(string $secret): void
    {
        $this->secret = $secret;
    }

    public function setAccessToken(string $access_token): void
    {
        $this->access_token = $access_token;
    }

}