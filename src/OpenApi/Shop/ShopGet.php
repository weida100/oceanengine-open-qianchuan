<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 20:32
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Shop;

use Weida\OceanengineCore\AbstractApi;

class ShopGet extends AbstractApi
{
    protected string $_url='https://ad.oceanengine.com/open_api/v1.0/qianchuan/shop/get/';

    private string $_version="v1.0";

    /**
     * @var array 店铺id列表，一次最多查询10个shop_id信息
     */
    protected array $shop_ids=[];

    public function setShopIds(array $shop_ids): void
    {
        $this->shop_ids = $shop_ids;
    }

}