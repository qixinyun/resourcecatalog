<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList
{
    const TYPE = array(
        'NULL' => 0,
        'YXQNZYZ'=> 2,
        'HRBXX' => 3,
        'JKQYPJAJYSMD' => 4,        
        'QXTCHJBHJDXX' => 5,          
        'YSCRJZJJJZGRDXX' => 8,       
        'ZFCGDLJGXX' => 9,
        'SJQYJSZXRDXX' => 10,         
        'SFJDJGCYRYZGXX' => 13,       
        'CPTGLSZXCPRZMD' => 24, 
        'QYGSZXXX' => 31,
        'QYDSXZCFXX' => 32,
        'AJNSRXX' => 33,
        'YHYJRJGCFXX' => 38,         
        'PXSTYXHDJXX' => 44,          
        'DZDAGZZDWGRBZJL' => 45
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(self::TYPE['NULL']),
        IUserGroup::ID['GQTPXSW'] => array(self::TYPE['YXQNZYZ']),
        IUserGroup::ID['SWMB'] => array(self::TYPE['HRBXX']),
        IUserGroup::ID['RMYHPXSZXZH'] => array(self::TYPE['JKQYPJAJYSMD']),
        IUserGroup::ID['SQXJ'] => array(self::TYPE['QXTCHJBHJDXX']),
        IUserGroup::ID['SGAJ'] => array(self::TYPE['YSCRJZJJJZGRDXX']),
        IUserGroup::ID['SCZJ'] => array(self::TYPE['ZFCGDLJGXX']),
        IUserGroup::ID['SGYHXXHWYH'] => array(self::TYPE['SJQYJSZXRDXX']),
        IUserGroup::ID['SSFJ'] => array(self::TYPE['SFJDJGCYRYZGXX']),
        IUserGroup::ID['SHJBHJ'] => array(self::TYPE['CPTGLSZXCPRZMD']),
        IUserGroup::ID['SGJSWJ'] => array(self::TYPE['QYGSZXXX'], self::TYPE['AJNSRXX']),
        IUserGroup::ID['SDFSWJ'] => array(self::TYPE['QYDSXZCFXX']),
        IUserGroup::ID['SYJFJ'] => array(self::TYPE['YHYJRJGCFXX']),
        IUserGroup::ID['STYJ'] => array(self::TYPE['PXSTYXHDJXX']),
        IUserGroup::ID['SDAJ'] => array(self::TYPE['DZDAGZZDWGRBZJL'])
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}