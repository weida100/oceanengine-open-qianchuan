<?php
declare(strict_types=1);
/**
 * Author: Weida
 * Date: 2023/11/8 20:46
 * Email: sgenmi@gmail.com
 */

namespace Weida\OceanengineOpenQianchuan\OpenApi\User;

use Weida\OceanengineCore\AbstractApi;

class UserInfo extends AbstractApi
{
    protected string $_url='https://ad.oceanengine.com/open_api/2/user/info/';

    private string $_version="v1.0";


}