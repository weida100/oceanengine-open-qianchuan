<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 20:48
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Advertiser;

use Weida\OceanengineCore\AbstractApi;

class AdvertiserPublicInfo extends AbstractApi
{
    protected string $_url='https://ad.oceanengine.com/open_api/2/advertiser/public_info/';

    private string $_version="2";

    /**
     * @var array 广告主ID集合(如果包含没有访问权限的ID,将返回PERMISSION_ERROR).取值范围: 1-100
     */
    protected array $advertiser_ids;

    public function setAdvertiserIds(array $advertiser_ids): void
    {
        $this->advertiser_ids = $advertiser_ids;
    }

}