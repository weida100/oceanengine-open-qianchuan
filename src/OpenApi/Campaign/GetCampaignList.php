<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 23:39
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Campaign;

use Weida\OceanengineCore\AbstractApi;

class GetCampaignList extends AbstractApi
{
    protected string $_url='https://ad.oceanengine.com/open_api/v1.0/qianchuan/campaign_list/get/';

    private string $_version="v1.0";

    /**
     * @var int 千川广告账户ID  必填
     */
    protected int $advertiser_id;

    /**
     * @var array  过滤器，无过滤条件情况下返回“所有不包含已删除”的广告组列表 必填
     */
    protected array $filter=[];

    /**
     * @var int 页码，默认值：1
     */
    protected int $page=1;

    /**
     * @var int 页面大小，默认值: 10， 允许值：10、20、50、100、500、1000
     */
    protected int $page_size=10;

    public function setAdvertiserId(int $advertiser_id): void
    {
        $this->advertiser_id = $advertiser_id;
    }

    public function setFilter(array $filter): void
    {
        $this->filter = $filter;
    }

    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    public function setPageSize(int $page_size): void
    {
        $this->page_size = $page_size;
    }

    /**
     * 广告组ID列表，目前只支持一个。
     * @param array $ids
     * @return void
     * @author Weida
     */
    public function setIds(array $ids): void
    {
        $this->filter['ids']=$ids[0];
    }

    /**
     * 广告组名称关键字，长度为1-30个字符，其中1个中文字符算2位
     * @param string $name
     * @return void
     * @author Weida
     */
    public function setName(string $name):void {
        $this->filter['name']=$name;
    }

    /**
     * 必填
     * 广告组营销目标，允许值：VIDEO_PROM_GOODS：推商品; LIVE_PROM_GOODS：推直播间
     * @param string $marketing_goal
     * @return void
     * @author Weida
     */
    public function setMarketingGoal(string $marketing_goal):void {
        $this->filter['marketing_goal']=$marketing_goal;
    }

    /**
     * 广告类型，默认为 FEED，允许值：FEED 通投广告 SEARCH 搜索广告
     *
     * SHOPPING_MALL商城广告
     * @param string $marketing_scene
     * @return void
     * @author Weida
     */
    public function setMarketingScene(string $marketing_scene):void {
        $this->filter['marketing_scene']=$marketing_scene;
    }

    /**
     * 广告组状态，允许值： ALL：所有包含已删除; ENABLE：启用; DISABLE：暂停; DELETE：已删除
     * 不传入即默认返回“所有不包含已删除”
     * @param string $status
     * @return void
     * @author Weida
     */
    public function setStatus(string $status):void {
        $this->filter['status']=$status;
    }


}