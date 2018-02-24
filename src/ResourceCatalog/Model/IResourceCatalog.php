<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList
{
    const TYPE = array(
        'NULL' => 0,
        'JGJCDXZJL' => 1,
        'YXQNZYZ'=> 2,
        'HRBXX' => 3,
        'JKQYPJAJYSMD' => 4,        
        'QXTCHJBHJDXX' => 5, 
        'JYZCXXX' => 7,         
        'YSCRJZJJJZGRDXX' => 8,       
        'ZFCGDLJGXX' => 9,
        'SJQYJSZXRDXX' => 10,  
        'JYJGXX' => 12,       
        'SFJDJGCYRYZGXX' => 13, 
        'ZLJCQYXX' => 15,
        'SLGCZBXX' => 18,
        'QSLHXJJTJL' => 20,
        'SPFYSXK' => 23,      
        'CPTGLSZXCPRZMD' => 24, 
        'ESCJDPGJGHZZS' => 25,
        'GJJLTQYRZXX' => 27,
        'HSZYZGZXX' => 30,
        'QYGSZXXX' => 31,
        'QYDSXZCFXX' => 32,
        'AJNSRXX' => 33,
        'YHYJRJGCFXX' => 38,         
        'PXSTYXHDJXX' => 44,          
        'DZDAGZZDWGRBZJL' => 45,
        'JXSZLJDW' => 46
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(self::TYPE['NULL']),
        IUserGroup::ID['SFZHGGWYH'] => array(self::TYPE['JGJCDXZJL']),
        IUserGroup::ID['GQTPXSW'] => array(self::TYPE['YXQNZYZ']),
        IUserGroup::ID['SWMB'] => array(self::TYPE['HRBXX']),
        IUserGroup::ID['RMYHPXSZXZH'] => array(self::TYPE['JKQYPJAJYSMD']),
        IUserGroup::ID['SQXJ'] => array(self::TYPE['QXTCHJBHJDXX']),
        IUserGroup::ID['SLSJ'] => array(self::TYPE['JYZCXXX']),
        IUserGroup::ID['SGAJ'] => array(self::TYPE['YSCRJZJJJZGRDXX']),
        IUserGroup::ID['SCZJ'] => array(self::TYPE['ZFCGDLJGXX']),
        IUserGroup::ID['SGYHXXHWYH'] => array(self::TYPE['SJQYJSZXRDXX']),
        IUserGroup::ID['SJYJ'] => array(self::TYPE['JYJGXX']),
        IUserGroup::ID['SSFJ'] => array(self::TYPE['SFJDJGCYRYZGXX']),
        IUserGroup::ID['SJSJ'] => array(self::TYPE['ZLJCQYXX']),
        IUserGroup::ID['SSLJ'] => array(self::TYPE['SLGCZBXX']),
        IUserGroup::ID['SLYJ'] => array(self::TYPE['QSLHXJJTJL']),
        IUserGroup::ID['SFDCGLJ'] => array(self::TYPE['SPFYSXK']),
        IUserGroup::ID['SHJBHJ'] => array(self::TYPE['CPTGLSZXCPRZMD']),
        IUserGroup::ID['SSWJ'] => array(self::TYPE['ESCJDPGJGHZZS']),
        IUserGroup::ID['SNYJ'] => array(self::TYPE['GJJLTQYRZXX']),
        IUserGroup::ID['SWSHJHSYWYH'] => array(self::TYPE['HSZYZGZXX']),
        IUserGroup::ID['SGJSWJ'] => array(self::TYPE['QYGSZXXX'], self::TYPE['AJNSRXX']),
        IUserGroup::ID['SDFSWJ'] => array(self::TYPE['QYDSXZCFXX']),
        IUserGroup::ID['SYJFJ'] => array(self::TYPE['YHYJRJGCFXX']),
        IUserGroup::ID['STYJ'] => array(self::TYPE['PXSTYXHDJXX']),
        IUserGroup::ID['SDAJ'] => array(self::TYPE['DZDAGZZDWGRBZJL']),
        IUserGroup::ID['SKXJSJ'] => array(self::TYPE['JXSZLJDW'])
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}