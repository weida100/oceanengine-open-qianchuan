<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 20:55
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Finance;

use Weida\OceanengineCore\AbstractApi;

class GetFinanceWallet extends AbstractApi
{
    protected string $_url='https://ad.oceanengine.com/open_api/v1.0/qianchuan/finance/wallet/get/';

    private string $_version="v1.0";

    /**
     * @var int 千川广告主/代理商账户id
     */
    protected int $advertiser_id;

    public function setAdvertiserId(int $advertiser_id): void
    {
        $this->advertiser_id = $advertiser_id;
    }


}