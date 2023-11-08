<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 20:24
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Tools;

use Weida\OceanengineCore\AbstractApi;

class ToolsShopAuth extends AbstractApi
{
    protected string $_url='https://api.oceanengine.com/open_api/v1.0/qianchuan/tools/shop_auth/';

    private string $_version="v1.0";

    /**
     * @var int 广告账户id
     */
    protected int $advertiser_id;

    /**
     * @var int 要授权的店铺id
     */
    protected int $shop_id;

    /**
     * @var string 授权时间类型，默认不限，允许值
     * NONE 不限
     * CUSTOM 自定义
     */
    protected string $shop_auth_time_type;


    /**
     * @var string 授权结束时间，当shop_auth_time_type=CUSTOM时必填
     * 格式为yyyy-MM-dd HH:mm:ss
     */
    protected string $end_time;

    public function setAdvertiserId(int $advertiser_id): void
    {
        $this->advertiser_id = $advertiser_id;
    }

    public function setShopId(int $shop_id): void
    {
        $this->shop_id = $shop_id;
    }

    public function setShopAuthTimeType(string $shop_auth_time_type): void
    {
        $this->shop_auth_time_type = $shop_auth_time_type;
    }

    public function setEndTime(string $end_time): void
    {
        $this->end_time = $end_time;
    }


}