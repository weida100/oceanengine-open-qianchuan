<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 23:26
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Campaign;

use Weida\OceanengineCore\AbstractApi;

class CreateCampaign extends AbstractApi
{
    protected string $_url='https://ad.oceanengine.com/open_api/v1.0/qianchuan/campaign/create/';

    private string $_version="v1.0";

    /**
     * @var int 千川广告账户ID 必填
     */
    protected int $advertiser_id;

    /**
     * @var string 广告组名称，长度为1-100个字符，其中1个中文字符算2位 必填
     */
    protected string $campaign_name;

    /**
     * @var string 营销目标，允许值： 必填
     * VIDEO_PROM_GOODS 推商品、LIVE_PROM_GOODS 推直播间
     */
    protected string $marketing_goal;

    /**
     * @var string 广告类型，允许值：FEED 通投广告, SEARCH 搜索广告, SHOPPING_MALL 商城广告  必填
     */
    protected string $marketing_scene;

    /**
     * @var string 预算类型（创建后不可修改），详见【附录-预算类型】，允许值：BUDGET_MODE_DAY 日预算,BUDGET_MODE_INFINITE 预算不限  必填
     */
    protected string $budget_mode;

    /**
     * @var float 条件必填; 广告组预算，最多支持两位小数，当budget_mode为BUDGET_MODE_DAY时必填，且日预算不少于300元
     */
    protected float $budget;

    public function setAdvertiserId(int $advertiser_id): void
    {
        $this->advertiser_id = $advertiser_id;
    }

    public function setCampaignName(string $campaign_name): void
    {
        $this->campaign_name = $campaign_name;
    }

    public function setMarketingGoal(string $marketing_goal): void
    {
        $this->marketing_goal = $marketing_goal;
    }

    public function setMarketingScene(string $marketing_scene): void
    {
        $this->marketing_scene = $marketing_scene;
    }

    public function setBudgetMode(string $budget_mode): void
    {
        $this->budget_mode = $budget_mode;
    }

    public function setBudget(float $budget): void
    {
        $this->budget = $budget;
    }



}