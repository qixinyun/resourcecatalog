<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog
{
    const TYPE = array(
        'NULL' => array('id' =>0, 'name' => '0', 'shorthand' => '0'),
        'ZIYUANMULU1' => array('id' =>1, 'name' => '资源目录1', 'shorthand' => 'ZYML1'),
        'ZIYUANMULU2' => array('id' =>2, 'name' => '资源目录2', 'shorthand' => 'ZYML2'),
        'ZIYUANMULU3' => array('id' =>3, 'name' => '资源目录3', 'shorthand' => 'ZYML3')
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        'NULL' => array(),
        '1' => array(self::TYPE['ZIYUANMULU1']['id'], self::TYPE['ZIYUANMULU2']['id']),
        '2' => array(self::TYPE['ZIYUANMULU3']['id']),
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}