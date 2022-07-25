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
        'QIYEJBXX' => 94,
        'XBXZCF' => 95,
        'XBXZXK' => 96,
        'GZRYXX' =>97,
        'SBYHJBXX' => 98,
        'YSZYZCHBGZC' => 99,
        'YSZYZGZXX' => 100,
        'WSHJHSYWYHJCXX' => 101,
        'YLHJSFWJGXX' => 102,
        'JBYFKZJGXX' => 103,
        'FYCRYJLXX' => 104,
        'WSZYJSZGKSWJXX' => 105,
        'QSWCXXXJDWBZ' => 106,
        'YZTQNMGGZHMD' => 107,
        'JGRYXXSWGXJ' => 108,
        'JGRYXXSAJGJ' => 109,
        'JGRYXXSJYJ' => 110,
        'JGRYXXSFGJ' => 111,
        'JGRYXXSSFJ' => 112,
        'MBFQYML' => 113,
        'SHTTDJXX' => 114,
        'QYZXXX' => 115,
        'QYDXXX' => 116,
        'CCJCJGXX' => 117,
        'JGRYXXSLFW' => 118,
        'ZDSSWFAJXX' => 119,
        'GGXYZHPJ' => 120,
        'DLYHSXHMDJG' => 121,
        'DLYHSXHMDZRR' => 122,
        'ZGDKXX' => 123,
        'ZGGJJXX' => 124,
        'HGRZSXQYMD' => 125,
        'QIYEJBXXNEW' => 126,
        'HTLY'=>127,
        'DBHXX'=>128,
        'CCWLJJLXX'=>129,
        'CCWLYQXX'=>130,
        'DFXBMDXXFR'=>131,
        'DFXRMDXXFR'=>132,
        'DFXBMDXXZRR'=>133,
        'DFXRMDXXZRR'=>134,
        'DFXYF'=>135,
        'FRGYSYJFXX'=>136,
        'FRTQGYSYFXX'=>137,
        'GJJGRDKXX'=>138,
        'GJJGRJCXX'=>139,
        'GJJJCXX'=>140,
        'NSXXFR'=>141,
        'NSXXZRR'=>142,
        'QSXXFR'=>143,
        'QSXXZRR'=>144,
        'RYBZXX'=>145,
        'RYJLXX'=>146,
        'ZRRGYSYJFXX'=>147,
        'ZRRTQGYSYFXX'=>148,
        'SHJZSXRYMD'=>149,
        'FRSBJFXX'=>150,
        'FRZSCQZYXX'=>151,
        'ZSCQDJXX'=>152,
        'QYMXBDCDJQK'=>153,
        'QYMXFCDYXX'=>154,
        'XZQZXX'=>155,
        'DFXX'=>156,
        'FZCNSHXX'=>157,
        'NSXX'=>158,
        'QSXX'=>159,
        'RQFXX'=>160,
        'SFXX'=>161,
        //@position_type_162
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
        ),
        IUserGroup::ID['SFZHGGWYH'] => array(
            self::TYPE['RYJLXX'],
            self::TYPE['RYBZXX'],
            self::TYPE['DFXYF'],
            self::TYPE['DFXRMDXXZRR'],
            self::TYPE['DFXBMDXXZRR'],
            self::TYPE['DFXRMDXXFR'],
            self::TYPE['DFXBMDXXFR'],
            self::TYPE['JGJCDXZJL'], 
            self::TYPE['TEST'], 
            self::TYPE['SJJXMXX'], 
            self::TYPE['GGXYZHPJ'],
            self::TYPE['XZQZXX']
        ),

        IUserGroup::ID['GQTPXSW'] => array(self::TYPE['YXQNZYZ']),
        IUserGroup::ID['SWMB'] => array(
            self::TYPE['HRBXX'], 
            self::TYPE['ZYZXX']
        ),
        IUserGroup::ID['RMYHPXSZXZH'] => array(
            self::TYPE['JKQYPJAJYSMD']
        ),
        IUserGroup::ID['SQXJ'] => array(
            self::TYPE['QXTCHJBHJDXX']
        ),
        IUserGroup::ID['SZJRMFY'] => array(
            self::TYPE['XSPJXX'], 
            self::TYPE['SXBZXJGXX'], 
            self::TYPE['SXBZXRMD']
        ),
        IUserGroup::ID['SLSJ'] => array(
            self::TYPE['JYZCXXX']
        ),
        IUserGroup::ID['SGAJ'] => array(
            self::TYPE['YSCRJZJJJZGRDXX'], 
            self::TYPE['JDCWFXX'],
            self::TYPE['XZQZXX']
        ),
        IUserGroup::ID['SCZJ'] => array(
            self::TYPE['ZFCGDLJGXX']
        ),

        IUserGroup::ID['SGYHXXHWYH'] => array(
            self::TYPE['SJQYJSZXRDXX'],
            self::TYPE['XZQZXX'],
        ),

        IUserGroup::ID['SGYZCJDGLWYH'] => array(
            self::TYPE['QYRYXX']
        ),
        IUserGroup::ID['SJYJ'] => array(
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['GRRYXXJYJ'],
            self::TYPE['JGRYXXSJYJ'],
        ),
        IUserGroup::ID['SSFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['SFJDJGDJXX'],
            self::TYPE['GZJGJBXX'],
            self::TYPE['GZYXX'],
            self::TYPE['JCFLFWSXX'],
            self::TYPE['JCFLFWGZZJBXX'],
            self::TYPE['LSSWSXX'],
            self::TYPE['LSZYZGZXX'],
            self::TYPE['JGRYXXSSFJ'],
        ),
        IUserGroup::ID['SRLZYHSHBZJ'] => array(
            self::TYPE['FRSBJFXX'],
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YLBXXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['SYBXXX'],
            self::TYPE['SBQYXX'],
            self::TYPE['GZRYXX'],
            self::TYPE['YZTQNMGGZHMD'],
            self::TYPE['XZQZXX']
        ),
        IUserGroup::ID['SJSJ'] => array(
            self::TYPE['ZLJCQYXX']
        ),
        IUserGroup::ID['SGHJ'] => array(
            self::TYPE['PGJGXX']
        ),
        IUserGroup::ID['SRQYXGS'] => array(
            self::TYPE['RQFXX'],
            self::TYPE['GERENYONGHU'],
            self::TYPE['TRQYHJBXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
        ),
        IUserGroup::ID['SSLJ'] => array(
            self::TYPE['SLGCZBXX'],
            self::TYPE['XZQZXX']
        ),
        IUserGroup::ID['SGDGS'] => array(
            self::TYPE['DFXX'],
            self::TYPE['QYYH'],
            self::TYPE['QFGRYHXX'],
            self::TYPE['QFQYYHXX'],
            self::TYPE['DLYHSXHMDJG'],
            self::TYPE['DLYHSXHMDZRR'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
        ),
        IUserGroup::ID['SLYJ'] => array(
            self::TYPE['QSLHXJJTJL'],
            self::TYPE['XZQZXX']
        ),

        IUserGroup::ID['SJTYSJ'] => array(
            self::TYPE['SLYSXKZXX'], 
            self::TYPE['GRRYXXJTJ'],
            self::TYPE['XZQZXX']
        ),

        IUserGroup::ID['SLYFZWYH'] => array(
            self::TYPE['LYQXPDXX'],
            self::TYPE['XJFDPDXX'],
            self::TYPE['DYZGXX'],
            self::TYPE['LXSDJXX'],
            self::TYPE['GRRYXXLFW'],
            self::TYPE['JGRYXXSLFW'],
        ),
        IUserGroup::ID['SFDCGLJ'] => array(
            self::TYPE['SPFYSXK'],
            self::TYPE['FDCKFQYZZXX'],
            self::TYPE['JGRYXXSFGJ'],
        ),
        IUserGroup::ID['SHJBHJ'] => array(
            self::TYPE['CPTGLSZXCPRZMD'],
            self::TYPE['XZQZXX']
        ),
        IUserGroup::ID['SSWJ'] => array(
            self::TYPE['ESCJDPGJGHZZS']
        ),
        IUserGroup::ID['SMZJ'] => array(
            self::TYPE['SHJZSXRYMD'],
            self::TYPE['DBHXX'],
            self::TYPE['SHZZNJXX'],
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX'],
            self::TYPE['XZQZXX'],
        ),
        IUserGroup::ID['SNYJ'] => array(
            self::TYPE['GJJLTQYRZXX'],
            self::TYPE['XZQZXX']
        ),
        IUserGroup::ID['SWHGDXWCBS'] => array(
            self::TYPE['YXZZDWJBGXX'],
            self::TYPE['GRRYXXGDJ'],
            self::TYPE['JGRYXXSWGXJ'],
            self::TYPE['XZQZXX']
        ),
        IUserGroup::ID['SGTZYJ'] => array(
            self::TYPE['CHZZDWXX'],
            self::TYPE['QYMXBDCDJQK'],
            self::TYPE['QYMXFCDYXX'],
            self::TYPE['XZQZXX'],
        ),
        IUserGroup::ID['SWSHJHSYWYH'] => array(
            self::TYPE['HSZYZGZXX'],
            self::TYPE['YSZYZCHBGZC'],
            self::TYPE['YSZYZGZXX'],
            self::TYPE['WSHJHSYWYHJCXX'],
            self::TYPE['YLHJSFWJGXX'],
            self::TYPE['JBYFKZJGXX'],
            self::TYPE['FYCRYJLXX'],
            self::TYPE['WSZYJSZGKSWJXX'],
            self::TYPE['QSWCXXXJDWBZ'],
            self::TYPE['XZQZXX']
        ),
        IUserGroup::ID['SGJSWJ'] => array(
            self::TYPE['QSXX'],
            self::TYPE['NSXX'],
            self::TYPE['FZCNSHXX'],
            self::TYPE['QSXXZRR'],
            self::TYPE['QSXXFR'],
            self::TYPE['NSXXZRR'],
            self::TYPE['NSXXFR'],
            self::TYPE['QYGSZXXX'],
            self::TYPE['AJNSRXX'],
            self::TYPE['ZDSSWFAJXX'],
        ),
        IUserGroup::ID['SDFSWJ'] => array(
            self::TYPE['QYDSXZCFXX']
        ),
        IUserGroup::ID['STJJ'] => array(
            self::TYPE['DTJXJGRXX'], 
            self::TYPE['TJDCDXML']
        ),

        IUserGroup::ID['SSCHZLJGGLJ'] => array(
            self::TYPE['ZSCQDJXX'],
            self::TYPE['FRZSCQZYXX'],
            self::TYPE['QIYEJBXXNEW'],
            self::TYPE['GTGSHXX'],
            self::TYPE['CMQYSBXX'],
            self::TYPE['YPLSQYXX'],
            self::TYPE['JGRYXX'],
            self::TYPE['SXQYHMD'],
            self::TYPE['SPYPTSJBJLGR'],
            self::TYPE['SPYPTSJBJLDW'],
            self::TYPE['JXMPCPXX'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['QYZXXX'],
            self::TYPE['QYDXXX'],
            self::TYPE['CCJCJGXX'],
            self::TYPE['XZQZXX']
        ),
        IUserGroup::ID['SAQSCJDGLJ'] => array(
            self::TYPE['WXHXPQYBHGLQD'],
            self::TYPE['DWAQSCHMDXX'],
            self::TYPE['GRRYXXAJJ'],
            self::TYPE['JGRYXXSAJGJ'],
            self::TYPE['XZQZXX'],
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
        IUserGroup::ID['SKXJSJ'] => array(self::TYPE['JXSZLJDW']),
        IUserGroup::ID['SWGS'] => array(
            self::TYPE['SFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['SBYHJBXX'],
        ),
        IUserGroup::ID['PXSGJJGLZX'] => array(
            self::TYPE['GJJJCXX'],
            self::TYPE['GJJGRJCXX'],
            self::TYPE['GJJGRDKXX'],
            self::TYPE['ZGDKXX'],
            self::TYPE['ZGGJJXX'],
        ),
        IUserGroup::ID['PXHG'] => array(
            self::TYPE['HGRZSXQYMD']
        ),
        IUserGroup::ID['SYZGLJ'] => array(
            self::TYPE['CCWLYQXX'],
            self::TYPE['CCWLJJLXX']
        ),
        IUserGroup::ID['SRFB'] => array()
        //@position_usergroup
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
