<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 20:16
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Tools;

use Weida\OceanengineCore\AbstractApi;

class ToolsAwemeAuth extends AbstractApi
{
    protected string $_url='https://api.oceanengine.com/open_api/v1.0/qianchuan/tools/aweme_auth/';

    private string $_version="v1.0";
    /**
     * @var int 广告账户id
     */
    protected int $advertiser_id;

    /**
     * @var string 要授权的抖音号
     */
    protected string $aweme_id;

    /**
     * @var string 达人合作码
     */
    protected string $code;

    /**
     * @var string 授权类型，可选值
     * 合作达人：AWEME_COOPERATOR，支持选取主页视频投放、支持推广该抖音号直播间
     * 自运营：SELF，支持选取主页视频投放、支持推广该抖音号直播间、支持发布视频到主页、支持获取抖音号数据(包括被投放广告数据、粉丝数据)
     */
    protected string $auth_type;

    /**
     * @var string 授权结束时间，格式为yyyy-MM-dd HH:mm:ss
     * 如果想要不限，end_time=2099-12-31 23:59:59
     */
    protected string $end_time;

    public function setAdvertiserId(int $advertiser_id): void
    {
        $this->advertiser_id = $advertiser_id;
    }

    public function setAwemeId(string $aweme_id): void
    {
        $this->aweme_id = $aweme_id;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function setAuthType(string $auth_type): void
    {
        $this->auth_type = $auth_type;
    }

    public function setEndTime(string $end_time): void
    {
        $this->end_time = $end_time;
    }


}