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
        IUserGroup::ID['NULL'] => array(self::TYPE['NULL']),
        IUserGroup::ID['SWMB'] => array(self::TYPE['HRBXX']),
        IUserGroup::ID['SCZJ'] => array(self::TYPE['ZFCGDLJGXX']),
        IUserGroup::ID['SGJSWJ'] => array(self::TYPE['QYGSZXXX'], self::TYPE['AJNSRXX']),
        IUserGroup::ID['SDFSWJ'] => array(self::TYPE['QYDSXZCFXX'])
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}