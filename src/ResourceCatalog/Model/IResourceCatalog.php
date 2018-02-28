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
        'XSPJXX' => 6,            
        'JYZCXXX' => 7,         
        'YSCRJZJJJZGRDXX' => 8,       
        'ZFCGDLJGXX' => 9,
        'SJQYJSZXRDXX' => 10,  
        'QYRYXX' => 11,           
        'JYJGXX' => 12,       
        'SFJDJGCYRYZGXX' => 13, 
        'ZYJNZSXX' => 14, 
        'ZLJCQYXX' => 15,
        'PGJGXX' => 16,               
        'GRYH' => 17,                 
        'SLGCZBXX' => 18,
        'QYYH' => 19,             
        'QSLHXJJTJL' => 20,
        'SLYSXKZXX' => 21,            
        'LYQXPDXX' => 22,             
        'SPFYSXK' => 23,      
        'CPTGLSZXCPRZMD' => 24, 
        'ESCJDPGJGHZZS' => 25,
        'SHZZNJXX' => 26,         
        'GJJLTQYRZXX' => 27,
        'YXZZDWJBGXX' => 28,          
        'CHZZDWXX' => 29,             
        'HSZYZGZXX' => 30,
        'QYGSZXXX' => 31,
        'QYDSXZCFXX' => 32,
        'AJNSRXX' => 33,
        'QYJBXX' => 34,           
        'WXHXPQYBHGLQD' => 35,        
        'EYQFDGRXX' => 36,   
        'WFWGTPXX' => 37,                  
        'YHYJRJGCFXX' => 38,     
        'LSTDFWBA' => 39,    
        'EYQFGRXX' => 40,                  
        'XZXKQYXX' => 41, 
        'EYQFQYXX' => 42,         
        'SYDWFRDJXX' => 43,                 
        'PXSTYXHDJXX' => 44,          
        'DZDAGZZDWGRBZJL' => 45,
        'JXSZLJDW' => 46,
        'DTJXJGRXX' => 47          
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(self::TYPE['NULL']),
        IUserGroup::ID['SFZHGGWYH'] => array(self::TYPE['JGJCDXZJL']),
        IUserGroup::ID['GQTPXSW'] => array(self::TYPE['YXQNZYZ']),
        IUserGroup::ID['SWMB'] => array(self::TYPE['HRBXX']),
        IUserGroup::ID['RMYHPXSZXZH'] => array(self::TYPE['JKQYPJAJYSMD']),
        IUserGroup::ID['SQXJ'] => array(self::TYPE['QXTCHJBHJDXX']),
        IUserGroup::ID['SZJRMFY'] => array(self::TYPE['XSPJXX']),
        IUserGroup::ID['SLSJ'] => array(self::TYPE['JYZCXXX']),
        IUserGroup::ID['SGAJ'] => array(self::TYPE['YSCRJZJJJZGRDXX']),
        IUserGroup::ID['SCZJ'] => array(self::TYPE['ZFCGDLJGXX']),
        IUserGroup::ID['SGYHXXHWYH'] => array(self::TYPE['SJQYJSZXRDXX']),
        IUserGroup::ID['SGYZCJDGLWYH'] => array(self::TYPE['QYRYXX']),
        IUserGroup::ID['SJYJ'] => array(self::TYPE['JYJGXX']),
        IUserGroup::ID['SSFJ'] => array(self::TYPE['SFJDJGCYRYZGXX']),
        IUserGroup::ID['SRLZYHSHBZJ'] => array(self::TYPE['ZYJNZSXX']),
        IUserGroup::ID['SJSJ'] => array(self::TYPE['ZLJCQYXX']),
        IUserGroup::ID['SGHJ'] => array(self::TYPE['PGJGXX']),
        IUserGroup::ID['SRQYXGS'] => array(self::TYPE['GRYH']),
        IUserGroup::ID['SSLJ'] => array(self::TYPE['SLGCZBXX']),
        IUserGroup::ID['SGDGS'] => array(self::TYPE['QYYH']),
        IUserGroup::ID['SLYJ'] => array(self::TYPE['QSLHXJJTJL']),
        IUserGroup::ID['SJTYSJ'] => array(self::TYPE['SLYSXKZXX']),
        IUserGroup::ID['SLYFZWYH'] => array(self::TYPE['LYQXPDXX']),
        IUserGroup::ID['SFDCGLJ'] => array(self::TYPE['SPFYSXK']),
        IUserGroup::ID['SHJBHJ'] => array(self::TYPE['CPTGLSZXCPRZMD']),
        IUserGroup::ID['SSWJ'] => array(self::TYPE['ESCJDPGJGHZZS']),
        IUserGroup::ID['SMZJ'] => array(self::TYPE['SHZZNJXX']),
        IUserGroup::ID['SNYJ'] => array(self::TYPE['GJJLTQYRZXX']),
        IUserGroup::ID['SWHGDXWCBS'] => array(self::TYPE['YXZZDWJBGXX']),
        IUserGroup::ID['SGTZYJ'] => array(self::TYPE['CHZZDWXX']),
        IUserGroup::ID['SWSHJHSYWYH'] => array(self::TYPE['HSZYZGZXX']),
        IUserGroup::ID['SGJSWJ'] => array(self::TYPE['QYGSZXXX'], self::TYPE['AJNSRXX']),
        IUserGroup::ID['SDFSWJ'] => array(self::TYPE['QYDSXZCFXX']),
        IUserGroup::ID['STJJ'] => array(self::TYPE['DTJXJGRXX']),
        IUserGroup::ID['SSCHZLJGGLJ'] => array(self::TYPE['QYJBXX']),
        IUserGroup::ID['SAQSCJDGLJ'] => array(self::TYPE['WXHXPQYBHGLQD']),
        IUserGroup::ID['ZGYDPXFGS'] => array(self::TYPE['EYQFDGRXX']),
        IUserGroup::ID['PXHCZPXBZ'] => array(self::TYPE['WFWGTPXX']),
        IUserGroup::ID['SYJFJ'] => array(self::TYPE['YHYJRJGCFXX']),
        IUserGroup::ID['SGGZWGLJ'] => array(self::TYPE['LSTDFWBA']),
        IUserGroup::ID['ZGDXPXFGS'] => array(self::TYPE['EYQFGRXX']),
        IUserGroup::ID['SCSGLXZZFJ'] => array(self::TYPE['XZXKQYXX']),
        IUserGroup::ID['ZGLTPXFGS'] => array(self::TYPE['EYQFQYXX']),
        IUserGroup::ID['SJGBZWYHBGS'] => array(self::TYPE['SYDWFRDJXX']),
        IUserGroup::ID['STYJ'] => array(self::TYPE['PXSTYXHDJXX']),
        IUserGroup::ID['SDAJ'] => array(self::TYPE['DZDAGZZDWGRBZJL']),
        IUserGroup::ID['SKXJSJ'] => array(self::TYPE['JXSZLJDW'])
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}