<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 21:02
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Advertiser;

use Weida\OceanengineCore\AbstractApi;

class GetAdvertiserFundTransaction extends AbstractApi
{
    protected string $_url='https://api.oceanengine.com/open_api/2/advertiser/fund/transaction/get/';

    private string $_version="v1.0";


    /**
     * @var int 广告主/代理商ID 必填
     */
    protected int $advertiser_id;

    /**
     * @var string 开始时间，格式YYYY-MM-DD 必填
     */
    protected string $start_date;

    /**
     * @var string 结束时间，格式YYYY-MM-DD 必填
     */
    protected string $end_date;

    /**
     * @var string 流水类型，可选值: RECHARGE充值  TRANSFER转账
     */
    protected string $transaction_type;

    /**
     * @var int 页码. 默认值: 1
     */
    protected int $page=1;


    /**
     * @var int 页面数据量. 默认值: 10
     */
    protected int $page_size;

    public function setAdvertiserId(int $advertiser_id): void
    {
        $this->advertiser_id = $advertiser_id;
    }

    public function setStartDate(string $start_date): void
    {
        $this->start_date = $start_date;
    }

    public function setEndDate(string $end_date): void
    {
        $this->end_date = $end_date;
    }

    public function setTransactionType(string $transaction_type): void
    {
        $this->transaction_type = $transaction_type;
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