<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 23:23
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\Account;

use Weida\OceanengineCore\AbstractApi;

class UpdateAccountBudget extends AbstractApi
{
    protected string $_url='https://api.oceanengine.com/open_api/v1.0/qianchuan/account/budget/update/';
    private string $_version="v1.0";

    /**
     * @var int 广告主id 必填
     */
    protected int $advertiser_id;

    /**
     * @var string 预算类型，可选值,INFINITE 不限,SPECIFIED 日预算; 必填
     */
    protected string $budget_mode;

    /**
     * @var float 账户当日预算，最多支持两位小数，单位元
     */
    protected float $budget;

    public function setAdvertiserId(int $advertiser_id): void
    {
        $this->advertiser_id = $advertiser_id;
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