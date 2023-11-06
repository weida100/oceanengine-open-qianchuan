<?php
declare(strict_types=1);

namespace Weida\OceanengineOpenQianchuan\OpenApi\Aweme;
use Weida\OceanengineCore\AbstractApi;

/**
 * Author: Weida
 * Date: 2023/11/6 23:25
 * Email: sgenmi@gmail.com
 */
class GetAwemeAuthorized extends AbstractApi
{

    protected string $_url = "https://ad.oceanengine.com/open_api/v1.0/qianchuan/aweme/authorized/get/";

    private string $_version="v1.0";
    /**
     * @var int 广告主id
     */
    protected int $advertiser_id;

    public function setAdvertiserId(int $advertiser_id): void
    {
        $this->advertiser_id = $advertiser_id;
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
     * @var int 页码
     */
    protected int $page=1;
    /**
     * @var int 页面大小 默认值：10，最大值：100
     */
    protected int $page_size=10;

}