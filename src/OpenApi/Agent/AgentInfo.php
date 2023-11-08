<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 20:35
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Agent;

use Weida\OceanengineCore\AbstractApi;

class AgentInfo extends AbstractApi
{
    protected string $_url='https://ad.oceanengine.com/open_api/2/agent/info/';

    private string $_version="2";

    /**
     * @var array 代理商ids
     */
    protected array $advertiser_ids=[];

    /**
     * @var array 查询字段集合, 如果指定, 则返回结果数组中, 每个元素是包含所查询字段的字典，默认全部指定.
     * 允许值: "agent_id", "agent_name", "customer_id", "customer_name","company_id", "company_name", "create_time", "role"
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