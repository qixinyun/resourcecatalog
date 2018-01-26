<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog
{
    const TYPE = array(
        'NULL' => 0,
        'ZIYUANMULU1' => 1,
        'ZIYUANMULU2' => 2,
        'ZIYUANMULU3' => 3
    );

    const TYPE_DETAIL = array(
        self::TYPE['NULL'] => array('name' => '0', 'identify' => '0', 'enName' => '0'),
        self::TYPE['ZIYUANMULU1'] => array('name' => '资源目录1', 'identify' => 'ZYML1', 'enName' => 'zyml1'),
        self::TYPE['ZIYUANMULU2'] => array('name' => '资源目录2', 'identify' => 'ZYML2', 'enName' => 'zyml2'),
        self::TYPE['ZIYUANMULU3'] => array('name' => '资源目录3', 'identify' => 'ZYML3', 'enName' => 'zyml3')
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        'NULL' => array(self::TYPE['NULL']),
        '1' => array(self::TYPE['ZIYUANMULU1'], self::TYPE['ZIYUANMULU2']),
        '2' => array(self::TYPE['ZIYUANMULU3'])
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}