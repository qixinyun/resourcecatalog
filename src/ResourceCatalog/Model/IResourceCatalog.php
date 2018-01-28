<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList
{
    const TYPE = array(
        'NULL' => 0,
        'ZYML1' => 1,
        'ZYML2' => 2,
        'HRBXX' => 3,
        'ZFCGDLJGXX' => 9,
        'QYGSZXXX' => 31,
        'QYDSXZCFXX' => 32
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        'NULL' => array(self::TYPE['NULL']),
        '1' => array(self::TYPE['ZYML1'], self::TYPE['ZYML2']),
        '3' => array(self::TYPE['HRBXX']),
        '9' => array(self::TYPE['ZFCGDLJGXX']),
        '31' => array(self::TYPE['QYGSZXXX']),
        '32' => array(self::TYPE['QYDSXZCFXX'])
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}