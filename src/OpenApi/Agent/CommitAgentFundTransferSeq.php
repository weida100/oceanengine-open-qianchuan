<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 21:10
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Agent;

use Weida\OceanengineCore\AbstractApi;

class CommitAgentFundTransferSeq extends AbstractApi
{
    protected string $_url='https://api.oceanengine.com/open_api/2/agent/fund/transfer_seq/commit/';

    private string $_version="2";

    /**
     * @var int 转账流水号，第一步请求会返回  必填
     */
    protected int $transfer_seq;

    /**
     * @var int 代理商ID 必填
     */
    protected int $agent_id;

    public function setTransferSeq(int $transfer_seq): void
    {
        $this->transfer_seq = $transfer_seq;
    }

    public function setAgentId(int $agent_id): void
    {
        $this->agent_id = $agent_id;
    }


}