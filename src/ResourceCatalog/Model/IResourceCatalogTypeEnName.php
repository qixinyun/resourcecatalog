<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeEnName
{
    const TYPE_ENNAME = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['JGJCDXZJL'] => 'jgjcdxzjl',
        IResourceCatalog::TYPE['YXQNZYZ'] => 'yxqnzyz',
        IResourceCatalog::TYPE['HRBXX'] => 'hrbxx',
        IResourceCatalog::TYPE['JKQYPJAJYSMD'] => 'jkqypjajysmd',
        IResourceCatalog::TYPE['QXTCHJBHJDXX'] => 'qxtchjbhjdxx',
        IResourceCatalog::TYPE['XSPJXX'] => 'xspjxx',
        IResourceCatalog::TYPE['JYZCXXX'] => 'jyzcxxx',
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => 'yscrjzjjjzgrdxx',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => 'zfcgdljgxx',
        IResourceCatalog::TYPE['SJQYJSZXRDXX'] => 'sjqyjszxrdxx',
        IResourceCatalog::TYPE['QYRYXX'] => 'qyryxx',
        IResourceCatalog::TYPE['JYJGXX'] => 'jyjgxx',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => 'sfjdjgcyryzgxx',
        IResourceCatalog::TYPE['ZYJNZSXX'] => 'zyjnzsxx',
        IResourceCatalog::TYPE['ZLJCQYXX'] => 'zljcqyxx',
        IResourceCatalog::TYPE['PGJGXX'] => 'pgjgxx',
        IResourceCatalog::TYPE['GRYH'] => 'gryh',
        IResourceCatalog::TYPE['SLGCZBXX'] => 'slgczbxx',
        IResourceCatalog::TYPE['QYYH'] => 'qyyh',
        IResourceCatalog::TYPE['QSLHXJJTJL'] => 'qslhxjjtjl',
        IResourceCatalog::TYPE['SLYSXKZXX'] => 'slysxkzxx',
        IResourceCatalog::TYPE['LYQXPDXX'] => 'lyqxpdxx',
        IResourceCatalog::TYPE['SPFYSXK'] => 'spfysxk',
        IResourceCatalog::TYPE['CPTGLSZXCPRZMD'] => 'cptglszxcprzmd',
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => 'escjdpgjghzzs',
        IResourceCatalog::TYPE['SHZZNJXX'] => 'shzznjxx',
        IResourceCatalog::TYPE['GJJLTQYRZXX'] => 'gjjltqyrzxx',
        IResourceCatalog::TYPE['YXZZDWJBGXX'] => 'yxzzdwjbgxx',
        IResourceCatalog::TYPE['CHZZDWXX'] => 'chzzdwxx',
        IResourceCatalog::TYPE['HSZYZGZXX'] => 'hszyzgzxx',
        IResourceCatalog::TYPE['QYGSZXXX'] => 'qygszxxx',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => 'qydsxzcfxx',
        IResourceCatalog::TYPE['AJNSRXX'] => 'ajnsrxx',
        IResourceCatalog::TYPE['QYJBXX'] => 'qyjbxx',
        IResourceCatalog::TYPE['WXHXPQYBHGLQD'] => 'wxhxpqybhglqd',
        IResourceCatalog::TYPE['EYQFDGRXX'] => 'eyqfdgrxx',
        IResourceCatalog::TYPE['WFWGTPXX'] => 'wfwgtpxx',
        IResourceCatalog::TYPE['YHYJRJGCFXX'] => 'yhyjrjgcfxx',
        IResourceCatalog::TYPE['LSTDFWBA'] => 'lstdfwba',
        IResourceCatalog::TYPE['EYQFGRXX'] => 'eyqfgrxx',
        IResourceCatalog::TYPE['XZXKQYXX'] => 'xzxkqyxx',
        IResourceCatalog::TYPE['EYQFQYXX'] => 'eyqfqyxx',
        IResourceCatalog::TYPE['SYDWFRDJXX'] => 'sydwfrdjxx',
        IResourceCatalog::TYPE['PXSTYXHDJXX'] => 'pxstyxhdjxx',
        IResourceCatalog::TYPE['DZDAGZZDWGRBZJL'] => 'dzdagzzdwgrbzjl',
        IResourceCatalog::TYPE['JXSZLJDW'] => 'jxszljdw',
        IResourceCatalog::TYPE['DTJXJGRXX'] => 'dtjxjgrxx',
        IResourceCatalog::TYPE['XZCF'] => 'xzcf',
        IResourceCatalog::TYPE['XZXK'] => 'xzxk',
        IResourceCatalog::TYPE['SXBZXJGXX'] => 'sxbzxjgxx',
        IResourceCatalog::TYPE['SXBZXRMD'] => 'sxbzxrmd',
        IResourceCatalog::TYPE['YLBXXX'] => 'ylbxxx',
        IResourceCatalog::TYPE['TJDCDXML'] => 'tjdcdxml',
        IResourceCatalog::TYPE['JDCWFXX'] => 'jdcwfxx',
        IResourceCatalog::TYPE['GERENYONGHU'] => 'gerenyonghu',
        IResourceCatalog::TYPE['GTGSHXX'] => 'gtgshxx',
        IResourceCatalog::TYPE['CMQYSBXX'] => 'cmqysbxx',
        IResourceCatalog::TYPE['YPLSQYXX'] => 'yplsqyxx',
        IResourceCatalog::TYPE['ZYZXX'] => 'zyzxx',
        IResourceCatalog::TYPE['XJFDPDXX'] => 'xjfdpdxx',
        IResourceCatalog::TYPE['DYZGXX'] => 'dyzgxx',
        IResourceCatalog::TYPE['LXSDJXX'] => 'lxsdjxx',
        IResourceCatalog::TYPE['DWAQSCHMDXX'] => 'dwaqschmdxx',
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => 'yztqsbxxhmd',
        IResourceCatalog::TYPE['JGRYXX'] => 'jgryxx',
        IResourceCatalog::TYPE['SXQYHMD'] => 'sxqyhmd',
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => 'spyptsjbjlgr',
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => 'spyptsjbjldw',
        IResourceCatalog::TYPE['JXMPCPXX'] => 'jxmpcpxx',
        IResourceCatalog::TYPE['JSZGXX'] => 'jszgxx',
        IResourceCatalog::TYPE['SJYXXS'] => 'sjyxxs',
        IResourceCatalog::TYPE['SYBXXX'] => 'sybxxx',
        IResourceCatalog::TYPE['SJJXMXX'] => 'sjjxmxx',
        IResourceCatalog::TYPE['JYJGXINXI'] => 'jyjgxinxi',
        IResourceCatalog::TYPE['GRRYXXJYJ'] => 'grryxxjyj',
        IResourceCatalog::TYPE['GRRYXXJTJ'] => 'grryxxjtj',
        IResourceCatalog::TYPE['GRRYXXLFW'] => 'grryxxlfw',
        IResourceCatalog::TYPE['GRRYXXGDJ'] => 'grryxxgdj',
        IResourceCatalog::TYPE['GRRYXXMZJ'] => 'grryxxmzj',
        IResourceCatalog::TYPE['GRRYXXAJJ'] => 'grryxxajj',
        IResourceCatalog::TYPE['QYYCMLXX'] => 'qyycmlxx',
        IResourceCatalog::TYPE['SBQYXX'] => 'sbqyxx',
        IResourceCatalog::TYPE['SFJDJGDJXX'] => 'sfjdjgdjxx',
        IResourceCatalog::TYPE['GZJGJBXX'] => 'gzjgjbxx',
        IResourceCatalog::TYPE['GZYXX'] => 'gzyxx',
        IResourceCatalog::TYPE['JCFLFWSXX'] => 'jcflfwsxx',
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => 'jcflfwgzzjbxx',
        IResourceCatalog::TYPE['LSSWSXX'] => 'lsswsxx',
        IResourceCatalog::TYPE['LSZYZGZXX'] => 'lszyzgzxx',
        IResourceCatalog::TYPE['QFGRYHXX'] => 'qfgryhxx',
        IResourceCatalog::TYPE['QFQYYHXX'] => 'qfqyyhxx',
        IResourceCatalog::TYPE['FDCKFQYZZXX'] => 'fdckfqyzzxx',
        IResourceCatalog::TYPE['TRQYHJBXX'] => 'trqyhjbxx',
        IResourceCatalog::TYPE['QIYEJBXX'] => 'qiyejbxx',
        IResourceCatalog::TYPE['XBXZCF'] => 'xbxzcf',
        IResourceCatalog::TYPE['XBXZXK'] => 'xbxzxk',
        IResourceCatalog::TYPE['GZRYXX'] => 'grryxx',
        IResourceCatalog::TYPE['SBYHJBXX'] => 'sbyhjbxx',
        IResourceCatalog::TYPE['YSZYZCHBGZC'] => 'yszyzchbgzc',
        IResourceCatalog::TYPE['YSZYZGZXX'] => 'yszyzgzxx',
        IResourceCatalog::TYPE['WSHJHSYWYHJCXX'] => 'wshjhsywyhjcxx',
        IResourceCatalog::TYPE['YLHJSFWJGXX'] => 'ylhjsfwjgxx',
        IResourceCatalog::TYPE['JBYFKZJGXX'] => 'jbyfkzjgxx',
        IResourceCatalog::TYPE['FYCRYJLXX'] => 'fycryjlxx',
        IResourceCatalog::TYPE['WSZYJSZGKSWJXX'] => 'wszyjszgkswjxx',
        IResourceCatalog::TYPE['QSWCXXXJDWBZ'] => 'qswcxxxjdwbz',
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => 'yztqnmggzhmd',
        IResourceCatalog::TYPE['JGRYXXSWGXJ'] => 'jgryxxswgxj',
        IResourceCatalog::TYPE['JGRYXXSAJGJ'] => 'jgryxxsajgj',
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => 'jgryxxsjyj',
        IResourceCatalog::TYPE['JGRYXXSFGJ'] => 'jgryxxsfgj',
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => 'jgryxxssfj',
        IResourceCatalog::TYPE['MBFQYML'] => 'mbfqyml',
        IResourceCatalog::TYPE['SHTTDJXX'] => 'shttdjxx',
        IResourceCatalog::TYPE['QYZXXX'] => 'qyzxxx',
        IResourceCatalog::TYPE['QYDXXX'] => 'qydxxx',
        IResourceCatalog::TYPE['CCJCJGXX'] => 'ccjcjgxx',
        IResourceCatalog::TYPE['JGRYXXSLFW'] => 'jgryxxslfw',
        IResourceCatalog::TYPE['ZDSSWFAJXX'] => 'zdsswfajxx',
        IResourceCatalog::TYPE['GGXYZHPJ'] => 'ggxyzhpj',
        IResourceCatalog::TYPE['DLYHSXHMDJG'] => 'dlyhsxhmdjg',
        IResourceCatalog::TYPE['DLYHSXHMDZRR'] => 'dlyhsxhmdzrr',
        IResourceCatalog::TYPE['ZGDKXX'] => 'zgdkxx',
        IResourceCatalog::TYPE['ZGGJJXX'] => 'zggjjxx',
        IResourceCatalog::TYPE['HGRZSXQYMD'] => 'hgrzsxqymd',
        IResourceCatalog::TYPE['QIYEJBXXNEW'] => 'qiyejbxxnew',
        IResourceCatalog::TYPE['HTLY'] => 'htly',
        IResourceCatalog::TYPE['TEST'] => 'test',
        IResourceCatalog::TYPE['DBHXX'] => 'dbhxx',
        IResourceCatalog::TYPE['CCWLJJLXX'] => 'ccwljjlxx',
        IResourceCatalog::TYPE['CCWLYQXX'] => 'ccwlyqxx',
        IResourceCatalog::TYPE['DFXBMDXXFR'] => 'dfxbmdxxfr',
        IResourceCatalog::TYPE['DFXRMDXXFR'] => 'dfxrmdxxfr',
        IResourceCatalog::TYPE['DFXBMDXXZRR'] => 'dfxbmdxxzrr',
        IResourceCatalog::TYPE['DFXRMDXXZRR'] => 'dfxrmdxxzrr',
        IResourceCatalog::TYPE['DFXYF'] => 'dfxyf',
        IResourceCatalog::TYPE['FRGYSYJFXX'] => 'frgysyjfxx',
        IResourceCatalog::TYPE['FRTQGYSYFXX'] => 'frtqgysyfxx',
        IResourceCatalog::TYPE['GJJGRDKXX'] => 'gjjgrdkxx',
        IResourceCatalog::TYPE['GJJGRJCXX'] => 'gjjgrjcxx',
        IResourceCatalog::TYPE['GJJJCXX'] => 'gjjjcxx',
        IResourceCatalog::TYPE['NSXXFR'] => 'nsxxfr',
        IResourceCatalog::TYPE['NSXXZRR'] => 'nsxxzrr',
        IResourceCatalog::TYPE['QSXXFR'] => 'qsxxfr',
        IResourceCatalog::TYPE['QSXXZRR'] => 'qsxxzrr',
        IResourceCatalog::TYPE['RYBZXX'] => 'rybzxx',
        IResourceCatalog::TYPE['RYJLXX'] => 'ryjlxx',
        IResourceCatalog::TYPE['ZRRGYSYJFXX'] => 'zrrgysyjfxx',
        IResourceCatalog::TYPE['ZRRTQGYSYFXX'] => 'zrrtqgysyfxx',
        IResourceCatalog::TYPE['SHJZSXRYMD'] => 'shjzsxrymd',
        IResourceCatalog::TYPE['FRSBJFXX'] => 'frsbjfxx',
        IResourceCatalog::TYPE['FRZSCQZYXX'] => 'frzscqzyxx',
        IResourceCatalog::TYPE['ZSCQDJXX'] => 'zscqdjxx',
        IResourceCatalog::TYPE['QYMXBDCDJQK'] => 'qymxbdcdjqk',
        IResourceCatalog::TYPE['QYMXFCDYXX'] => 'qymxfcdyxx',
        // IResourceCatalog::TYPE['XZQZXX'] => 'xzqzxx',
        IResourceCatalog::TYPE['DFXX'] => 'dfxx',
        IResourceCatalog::TYPE['FZCNSHXX'] => 'fzcnshxx',
        IResourceCatalog::TYPE['NSXX'] => 'nsxx',
        IResourceCatalog::TYPE['QSXX'] => 'qsxx',
        IResourceCatalog::TYPE['RQFXX'] => 'rqfxx',
        IResourceCatalog::TYPE['SFXX'] => 'sfxx',
        IResourceCatalog::TYPE['XZCJXX'] => 'xzcjxx',
        IResourceCatalog::TYPE['XZJDJCXX'] => 'xzjdjcxx',
        IResourceCatalog::TYPE['XZJLXX'] => 'xzjlxx',
        IResourceCatalog::TYPE['XZQRXX'] => 'xzqrxx',
        IResourceCatalog::TYPE['XZQZ'] => 'xzqz',
        IResourceCatalog::TYPE['HBXYPJQK'] => 'hbxypjqk',
        IResourceCatalog::TYPE['KJYFXX'] => 'kjyfxx',
        IResourceCatalog::TYPE['XXNYJYZTXX'] => 'xxnyjyztxx',
        //@position
    );
}
