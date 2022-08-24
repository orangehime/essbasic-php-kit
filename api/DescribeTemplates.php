<?php
require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/./Common.php');
require_once(__DIR__ . '/../config.php');

use TencentCloud\Essbasic\V20210526\Models\DescribeTemplatesRequest;


function DescribeTemplates($templateId)  {
    // 构造客户端调用实例
    $client = GetClientInstance(Config::secretId, Config::secretKey, Config::endPoint);

    // 实例化一个请求对象,每个接口都会对应一个request对象
    $req = new DescribeTemplatesRequest();

    $agent = GetAgent();
    $req->setAgent($agent);

    $req->setTemplateId($templateId);

    $resp = $client->DescribeTemplates($req);

    return $resp;

}