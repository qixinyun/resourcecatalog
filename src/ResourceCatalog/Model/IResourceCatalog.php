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
        'SFJDJGCYRYZGXX' => 13, 
        'ZYJNZSXX' => 14, 
        'ZLJCQYXX' => 15,
        'PGJGXX' => 16,               
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
        'DTJXJGRXX' => 47,
        'XZCF' => 48,
        'XZXK' => 49,
        'SXBZXJGXX' => 50,
        'SXBZXRMD' => 51,
        'YLBXXX' => 52,
        'TJDCDXML' => 53,
        'JDCWFXX' => 54,
        'GERENYONGHU' => 55,
        'GTGSHXX' => 56,
        'CMQYSBXX' => 57,
        'YPLSQYXX' => 58,
        'ZYZXX' => 59,
        'XJFDPDXX' => 60,
        'DYZGXX' => 61,
        'LXSDJXX' => 62,
        'DWAQSCHMDXX' => 63,
        'YZTQSBXXHMD' => 64,
        'JGRYXX' => 65,
        'SXQYHMD' => 66,
        'SPYPTSJBJLGR' => 67,
        'SPYPTSJBJLDW' => 68,
        'JXMPCPXX' => 69,
        'JSZGXX' => 70,
        'SJYXXS' => 71,
        'SYBXXX' => 72,
        'SJJXMXX' => 73,
        'JYJGXINXI' => 74,
        'GRRYXXJYJ' => 75,
        'GRRYXXJTJ' => 76,
        'GRRYXXLFW' => 77,
        'GRRYXXGDJ' => 78,
        'GRRYXXMZJ' => 79,
        'GRRYXXAJJ' => 80,
        'QYYCMLXX' => 81,
        'SBQYXX' => 82,
        'SFJDJGDJXX' => 83,
        'GZJGJBXX' => 84,
        'GZYXX' => 85,
        'JCFLFWSXX' => 86,
        'JCFLFWGZZJBXX' => 87,
        'LSSWSXX' => 88,
        'LSZYZGZXX' => 89,
        'QFGRYHXX' => 90,
        'QFQYYHXX' => 91,
        'FDCKFQYZZXX' => 92,
        'TRQYHJBXX' => 93,
        'TEST' => 500          
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(self::TYPE['NULL'], self::TYPE['XZCF'], self::TYPE['XZXK']),
        IUserGroup::ID['SFZHGGWYH'] => array(self::TYPE['JGJCDXZJL'], self::TYPE['TEST'], self::TYPE['SJJXMXX']),
        IUserGroup::ID['GQTPXSW'] => array(self::TYPE['YXQNZYZ']),
        IUserGroup::ID['SWMB'] => array(self::TYPE['HRBXX'], self::TYPE['ZYZXX']),
        IUserGroup::ID['RMYHPXSZXZH'] => array(self::TYPE['JKQYPJAJYSMD']),
        IUserGroup::ID['SQXJ'] => array(self::TYPE['QXTCHJBHJDXX']),
        IUserGroup::ID['SZJRMFY'] => array(self::TYPE['XSPJXX'], self::TYPE['SXBZXJGXX'], self::TYPE['SXBZXRMD']),
        IUserGroup::ID['SLSJ'] => array(self::TYPE['JYZCXXX']),
        IUserGroup::ID['SGAJ'] => array(self::TYPE['YSCRJZJJJZGRDXX'], self::TYPE['JDCWFXX']),
        IUserGroup::ID['SCZJ'] => array(self::TYPE['ZFCGDLJGXX']),
        IUserGroup::ID['SGYHXXHWYH'] => array(self::TYPE['SJQYJSZXRDXX']),
        IUserGroup::ID['SGYZCJDGLWYH'] => array(self::TYPE['QYRYXX']),
        IUserGroup::ID['SJYJ'] => array(
            self::TYPE['JSZGXX'], 
            self::TYPE['SJYXXS'], 
            self::TYPE['JYJGXINXI'], 
            self::TYPE['GRRYXXJYJ']
        ),
        IUserGroup::ID['SSFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['SFJDJGDJXX'],
            self::TYPE['GZJGJBXX'],
            self::TYPE['GZYXX'],
            self::TYPE['JCFLFWSXX'],
            self::TYPE['JCFLFWGZZJBXX'],
            self::TYPE['LSSWSXX'],
            self::TYPE['LSZYZGZXX']
        ),
        IUserGroup::ID['SRLZYHSHBZJ'] => array(
            self::TYPE['ZYJNZSXX'], 
            self::TYPE['YLBXXX'], 
            self::TYPE['YZTQSBXXHMD'], 
            self::TYPE['SYBXXX'], 
            self::TYPE['SBQYXX']
        ),
        IUserGroup::ID['SJSJ'] => array(self::TYPE['ZLJCQYXX']),
        IUserGroup::ID['SGHJ'] => array(self::TYPE['PGJGXX']),
        IUserGroup::ID['SRQYXGS'] => array(
            self::TYPE['GERENYONGHU'],
            self::TYPE['TRQYHJBXX']
        ),
        IUserGroup::ID['SSLJ'] => array(self::TYPE['SLGCZBXX']),
        IUserGroup::ID['SGDGS'] => array(
            self::TYPE['QYYH'],
            self::TYPE['QFGRYHXX'],
            self::TYPE['QFQYYHXX']
        ),
        IUserGroup::ID['SLYJ'] => array(self::TYPE['QSLHXJJTJL']),
        IUserGroup::ID['SJTYSJ'] => array(self::TYPE['SLYSXKZXX'], self::TYPE['GRRYXXJTJ']),
        IUserGroup::ID['SLYFZWYH'] => array(
            self::TYPE['LYQXPDXX'], 
            self::TYPE['XJFDPDXX'], 
            self::TYPE['DYZGXX'], 
            self::TYPE['LXSDJXX'], 
            self::TYPE['GRRYXXLFW']
        ),
        IUserGroup::ID['SFDCGLJ'] => array(
            self::TYPE['SPFYSXK'],
            self::TYPE['FDCKFQYZZXX']
        ),
        IUserGroup::ID['SHJBHJ'] => array(self::TYPE['CPTGLSZXCPRZMD']),
        IUserGroup::ID['SSWJ'] => array(self::TYPE['ESCJDPGJGHZZS']),
        IUserGroup::ID['SMZJ'] => array(self::TYPE['SHZZNJXX'], self::TYPE['GRRYXXMZJ']),
        IUserGroup::ID['SNYJ'] => array(self::TYPE['GJJLTQYRZXX']),
        IUserGroup::ID['SWHGDXWCBS'] => array(self::TYPE['YXZZDWJBGXX'], self::TYPE['GRRYXXGDJ']),
        IUserGroup::ID['SGTZYJ'] => array(self::TYPE['CHZZDWXX']),
        IUserGroup::ID['SWSHJHSYWYH'] => array(self::TYPE['HSZYZGZXX']),
        IUserGroup::ID['SGJSWJ'] => array(self::TYPE['QYGSZXXX'], self::TYPE['AJNSRXX']),
        IUserGroup::ID['SDFSWJ'] => array(self::TYPE['QYDSXZCFXX']),
        IUserGroup::ID['STJJ'] => array(self::TYPE['DTJXJGRXX'], self::TYPE['TJDCDXML']),
        IUserGroup::ID['SSCHZLJGGLJ'] => array(
            self::TYPE['QYJBXX'],
            self::TYPE['GTGSHXX'],
            self::TYPE['CMQYSBXX'],
            self::TYPE['YPLSQYXX'],
            self::TYPE['JGRYXX'],
            self::TYPE['SXQYHMD'],
            self::TYPE['SPYPTSJBJLGR'],
            self::TYPE['SPYPTSJBJLDW'],
            self::TYPE['JXMPCPXX'],
            self::TYPE['QYYCMLXX']
        ),
        IUserGroup::ID['SAQSCJDGLJ'] => array(
            self::TYPE['WXHXPQYBHGLQD'], 
            self::TYPE['DWAQSCHMDXX'], 
            self::TYPE['GRRYXXAJJ']
        ),
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