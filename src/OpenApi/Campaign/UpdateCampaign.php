<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 23:32
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Campaign;

use Weida\OceanengineCore\AbstractApi;

class UpdateCampaign extends AbstractApi
{
    protected string $_url = 'https://ad.oceanengine.com/open_api/v1.0/qianchuan/campaign/update/';

    private string $_version="v1.0";

    /**
     * @var int 千川广告账户ID 必填
     */
    protected int $advertiser_id;

    /**
     * @var int 千川广告ID 必填
     */
    protected int $campaign_id;

    /**
     * @var string 预算类型（创建后不可修改），详见【附录-预算类型】，允许值：BUDGET_MODE_DAY 日预算,BUDGET_MODE_INFINITE 预算不限  必填
     */
    protected string $budget_mode;

    /**
     * @var float 条件必填; 广告组预算，最多支持两位小数，当budget_mode为BUDGET_MODE_DAY时必填，且日预算不少于300元
     */
    protected float $budget;

    /**
     * @var string 广告组名称，长度为1-100个字符，其中1个中文字符算2位
     * 需要注意：广告组名称不修改的话，可不填。填入的话，需与原广告组名称不同，否则报错
     */
    protected string $campaign_name;

    public function setAdvertiserId(int $advertiser_id): void
    {
        $this->advertiser_id = $advertiser_id;
    }

    public function setCampaignId(int $campaign_id): void
    {
        $this->campaign_id = $campaign_id;
    }

    public function setBudgetMode(string $budget_mode): void
    {
        $this->budget_mode = $budget_mode;
    }

    public function setBudget(float $budget): void
    {
        $this->budget = $budget;
    }

    public function setCampaignName(string $campaign_name): void
    {
        $this->campaign_name = $campaign_name;
    }


}