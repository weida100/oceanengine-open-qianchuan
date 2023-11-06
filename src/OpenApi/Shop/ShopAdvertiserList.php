<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/6 23:48
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Shop;

use Weida\OceanengineCore\AbstractApi;

class ShopAdvertiserList extends AbstractApi
{
    protected string $_url="https://ad.oceanengine.com/open_api/v1.0/qianchuan/shop/advertiser/list/";
    private string $_version="v1.0";

    /**
     * @var int 店铺id 必填
     */
    protected int $shop_id;

    /**
     * @var array 查询账号额外权限，允许值：QC_AWEME 千川随心推；传入则返回带随心推权限标记的 Adv 列表
     */
    protected array $permission=[];

    /**
     * @var int 页码.默认值: 1
     */
    protected int $page=1;

    /**
     * @var int 页面数据量.默认值: 10， 最大值：100
     */
    protected int $page_size=10;

    public function setShopId(int $shop_id): void
    {
        $this->shop_id = $shop_id;
    }

    public function setPermission(array $permission): void
    {
        $this->permission = $permission;
    }

    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    public function setPageSize(int $page_size): void
    {
        $this->page_size = $page_size;
    }

}