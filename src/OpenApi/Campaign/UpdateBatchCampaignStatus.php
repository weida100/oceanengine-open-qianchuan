<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 23:36
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Campaign;

use Weida\OceanengineCore\AbstractApi;

class UpdateBatchCampaignStatus extends AbstractApi
{
    protected string $_url='https://ad.oceanengine.com/open_api/v1.0/qianchuan/batch_campaign_status/update/';

    private string $_version="v1.0";

    /**
     * @var int 千川广告账户ID 必填
     */
    protected int $advertiser_id;


    /**
     * @var int[] 广告组ID，不超过10个，操作更新的广告组ID需要属于千川账户ID否则会报错； 必填
     */
    protected array $campaign_ids;

    /**
     * @var string 操作类型，允许值: "ENABLE"：启用, "DELETE"：删除, "DISABLE"：暂停；对于删除的广告组不可进行任何操作。
     */
    protected string $opt_status;

    public function setAdvertiserId(int $advertiser_id): void
    {
        $this->advertiser_id = $advertiser_id;
    }

    public function setCampaignIds(array $campaign_ids): void
    {
        $this->campaign_ids = $campaign_ids;
    }

    public function setOptStatus(string $opt_status): void
    {
        $this->opt_status = $opt_status;
    }


}