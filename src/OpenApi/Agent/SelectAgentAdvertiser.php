<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 20:38
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Agent;

use Weida\OceanengineCore\AbstractApi;

class SelectAgentAdvertiser extends AbstractApi
{
    protected string $_url='https://ad.oceanengine.com/open_api/2/agent/advertiser/select/';

    private string $_version="2";

    /**
     * @var int 代理商ID
     */
    protected int $advertiser_id;

    /**
     * @var int[] 客户id列表，可用来过滤某个客户的adv
     */
    protected array $company_ids;

    /**
     * @var array  查询账号额外权限，允许值：QC_AWEME 千川随心推；传入则返回带随心推权限标记的 Adv 列表
     */
    protected array $permission;

    /**
     * @var int 页码.默认值: 1注：page+page_size与cursor+count为两种分页方式
     * page+page_size适用于获取数据记录数<10000的场景
     */
    protected int $page;

    /**
     * @var int 页面数据量.默认值: 100注：page+page_size与cursor+count为两种分页方式
     * page+page_size适用于获取数据记录数<10000的场景，page_size最大值为：1000
     */
    protected int $page_size;

    /**
     * @var string 页码游标值，第一次拉取，无需入参 注：page+page_size与cursor+count为两种分页方式
     * cursor+count适用于获取数据记录数≥10000的场景
     */
    protected string $cursor;

    /**
     * @var int 页面数据量，页面数据量 注：page+page_size与cursor+count为两种分页方式
     * cursor+count适用于获取数据记录数≥10000的场景
     */
    protected int $count;



    public function setAdvertiserId(int $advertiser_id): void
    {
        $this->advertiser_id = $advertiser_id;
    }

    public function setCompanyIds(array $company_ids): void
    {
        $this->company_ids = $company_ids;
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

    public function setCursor(string $cursor): void
    {
        $this->cursor = $cursor;
    }

    public function setCount(int $count): void
    {
        $this->count = $count;
    }

}