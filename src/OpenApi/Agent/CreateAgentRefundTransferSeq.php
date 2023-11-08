<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 21:13
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Agent;

use Weida\OceanengineCore\AbstractApi;

class CreateAgentRefundTransferSeq extends AbstractApi
{
    protected string $_url='https://api.oceanengine.com/open_api/2/agent/refund/transfer_seq/create/';

    private string $_version="2";

    /**
     * @var int 代理商账户ID  必填
     */
    protected int $agent_id;

    /**
     * @var int 广告主账户ID 必填
     */
    protected int $account_id;

    /**
     * @var string 转账类型 可选值: PREPAY_BRAND 预付-品牌专用; PREPAY_GENERAL 预付-通用; 必填
     */
    protected string $transfer_type;

    /**
     * @var float 转账金额，单位元，支持两位小数 必填
     */
    protected float $amount;

    public function setAgentId(int $agent_id): void
    {
        $this->agent_id = $agent_id;
    }

    public function setAccountId(int $account_id): void
    {
        $this->account_id = $account_id;
    }

    public function setTransferType(string $transfer_type): void
    {
        $this->transfer_type = $transfer_type;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }


}