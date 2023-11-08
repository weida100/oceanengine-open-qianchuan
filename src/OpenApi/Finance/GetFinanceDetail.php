<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 20:57
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Finance;

use Weida\OceanengineCore\AbstractApi;

class GetFinanceDetail extends AbstractApi
{
    protected string $_url='https://ad.oceanengine.com/open_api/v1.0/qianchuan/finance/detail/get/';
    private string $_version="v1.0";

    /**
     * @var int 千川广告主/代理商账户id
     */
    protected int $advertiser_id;

    /**
     * @var string 开始时间，格式 2021-04-05，默认值为end_date-14
     */
    protected string $start_date;

    /**
     * @var string 结束时间，格式 2021-04-05，默认值为当天
     */
    protected string $end_date;

    /**
     * @var string 资金池类型，允许值：ALL 全部（默认值）,DEFAULT 通用,BRAND 品牌
     *
     */
    protected string $type='ALL';

    /**
     * @var int 页码，默认值: 1  注意：page*page_size不可大于10000
     */
    protected int $page=1;

    /**
     * @var int 页面数据量，默认值: 10 ，上限：200
     */
    protected int $page_size=10;

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

    public function setType(string $type): void
    {
        $this->type = $type;
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