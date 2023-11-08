<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 20:53
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Advertiser;

use Weida\OceanengineCore\AbstractApi;

class GetAdvertiserType extends AbstractApi
{
    protected string $_url='https://api.oceanengine.com/open_api/v1.0/qianchuan/advertiser/type/get/';

    private string $_version="v1.0";

    /**
     * @var array 千川广告主账户id，一次请求不超过20个
     */
    protected array $advertiser_ids;

    public function setAdvertiserIds(array $advertiser_ids): void
    {
        $this->advertiser_ids = $advertiser_ids;
    }


}