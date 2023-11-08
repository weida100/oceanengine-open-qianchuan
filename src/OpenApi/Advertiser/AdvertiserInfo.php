<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 20:50
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Advertiser;

use Weida\OceanengineCore\AbstractApi;

class AdvertiserInfo extends AbstractApi
{
    protected string $_url='https://ad.oceanengine.com/open_api/2/advertiser/info/';

    private string $_version="2";

    /**
     * @var array 广告主ID集合(如果包含没有访问权限的ID,将返回no permission error) 取值范围: 1-100
     */
    protected array $advertiser_ids=[];

    /**
     * @var array 查询字段集合, 默认:查询所有。字段详见下方response字段定义 .
     * 允许值: "id", "name", "role", "status", "address", "reason", "license_url", "license_no", "license_province",
     * "license_city", "company", "brand", "promotion_area", "promotion_center_province", "promotion_center_city",
     * "industry", "create_time"
     */
    protected array $fields=[];

    public function setAdvertiserIds(array $advertiser_ids): void
    {
        $this->advertiser_ids = $advertiser_ids;
    }

    public function setFields(array $fields): void
    {
        $this->fields = $fields;
    }

}