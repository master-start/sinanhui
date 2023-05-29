<?php


namespace Kangdev\Sinanhui;



class Service extends Curl
{
    /**
     * 同步增加or减少积分接口
     * @param array $params
     * @return mixed
     */
    public function action_integral(array $params)
    {
        return $this->request('/open/api/action_integral', $params,'json');
    }

    /**
     * 获取单个用户积分
     * @param array $params
     * @return mixed
     */
    public function getIntegralUser(array $params)
    {
        return $this->request('/open/api/getIntegralUser', $params,'json');
    }

    /**
     * 获取单个用户积分明细
     * @param array $params
     * @return mixed
     */
    public function getIntegralDetailed(array $params)
    {
        return $this->request('/open/api/getIntegralDetailed', $params,'json');
    }

    /**
     * 获取中台积分用户核销二维码
     * @param array $params
     * @return mixed
     */
    public function getIntegralCode(array $params)
    {
        return $this->request('/open/api/getIntegralCode', $params,'json');
    }
}