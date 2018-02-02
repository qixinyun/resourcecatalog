<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList
{
    const TYPE = array(
        'NULL' => 0,
        'HRBXX' => 3,
        'ZFCGDLJGXX' => 9,
        'QYGSZXXX' => 31,
        'QYDSXZCFXX' => 32,
        'AJNSRXX' => 33
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        'NULL' => array(self::TYPE['NULL']),
        '3' => array(self::TYPE['HRBXX']),
        '9' => array(self::TYPE['ZFCGDLJGXX']),
        '31' => array(self::TYPE['QYGSZXXX'], self::TYPE['AJNSRXX']),
        '32' => array(self::TYPE['QYDSXZCFXX'])
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}