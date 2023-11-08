<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 23:21
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Account;

use Weida\OceanengineCore\AbstractApi;

class GetAccountBudget extends AbstractApi
{
    protected string $_url='https://api.oceanengine.com/open_api/v1.0/qianchuan/account/budget/get/';
    private string $_version="v1.0";

    /**
     * @var int 广告主id
     */
    protected int $advertiser_id;

    public function setAdvertiserId(int $advertiser_id): void
    {
        $this->advertiser_id = $advertiser_id;
    }


}