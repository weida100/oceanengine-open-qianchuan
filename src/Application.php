<?php
declare(strict_types=1);

namespace Weida\OceanengineOpenQianchuan;

use Weida\OceanengineCore\AbstractApplication;
use Weida\OceanengineCore\Contract\WithAccessTokenClientInterface;
use Weida\OceanengineCore\WithAccessTokenClient;

/**
 * Author: Weida
 * Date: 2023/11/5 12:41
 * Email: sgenmi@gmail.com
 */
class Application extends AbstractApplication
{
    protected string $cacheNamespace="weida:oceanengine:qianchuan";
    private WithAccessTokenClientInterface $client;

    /**
     * @param int $uid
     * @param string $refreshToken
     * @return $this
     * @author Weida
     */
    public function withRefreshToken(int $uid,string $refreshToken):static{
        $this->client = new WithAccessTokenClient(
            $this->getHttpClient(),
            $this->getAccessToken($uid,$refreshToken)
        );
        return $this;
    }

    /**
     * @param int $uid
     * @param string $accessToken
     * @return $this
     * @author Weida
     */
    public function withAccessToken(int $uid,string $accessToken):static {
        $_at =  $this->getAccessToken($uid,'');
        $_at->setToken($accessToken);
        $this->client = new WithAccessTokenClient(
            $this->getHttpClient(),
            $_at
        );
        return $this;
    }

    /**
     * @return WithAccessTokenClientInterface
     * @author Weida
     */
    public function getClient():WithAccessTokenClientInterface{
        return $this->client;
    }


}