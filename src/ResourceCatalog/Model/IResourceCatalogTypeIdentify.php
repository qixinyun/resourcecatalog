<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeIdentify
{
    const TYPE_IDENTIFY = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['JGJCDXZJL'] => 'JGJCDXZJL',
        IResourceCatalog::TYPE['YXQNZYZ'] => 'YXQNZYZ',
        IResourceCatalog::TYPE['HRBXX'] => 'HRBXX',
        IResourceCatalog::TYPE['JKQYPJAJYSMD'] => 'JKQYPJAJYSMD',
        IResourceCatalog::TYPE['QXTCHJBHJDXX'] => 'QXTCHJBHJDXX',
        IResourceCatalog::TYPE['XSPJXX'] => 'XSPJXX',
        IResourceCatalog::TYPE['JYZCXXX'] => 'JYZCXXX',
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => 'YSCRJZJJJZGRDXX',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => 'ZFCGDLJGXX',
        IResourceCatalog::TYPE['SJQYJSZXRDXX'] => 'SJQYJSZXRDXX',
        IResourceCatalog::TYPE['QYRYXX'] => 'QYRYXX',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => 'SFJDJGCYRYZGXX',
        IResourceCatalog::TYPE['ZYJNZSXX'] => 'ZYJNZSXX',
        IResourceCatalog::TYPE['ZLJCQYXX'] => 'ZLJCQYXX',
        IResourceCatalog::TYPE['PGJGXX'] => 'PGJGXX',
        IResourceCatalog::TYPE['SLGCZBXX'] => 'SLGCZBXX',
        IResourceCatalog::TYPE['QYYH'] => 'QYYH',
        IResourceCatalog::TYPE['QSLHXJJTJL'] => 'QSLHXJJTJL',
        IResourceCatalog::TYPE['SLYSXKZXX'] => 'SLYSXKZXX',
        IResourceCatalog::TYPE['LYQXPDXX'] => 'LYQXPDXX',
        IResourceCatalog::TYPE['SPFYSXK'] => 'SPFYSXK',
        IResourceCatalog::TYPE['CPTGLSZXCPRZMD'] => 'CPTGLSZXCPRZMD',
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => 'ESCJDPGJGHZZS',
        IResourceCatalog::TYPE['SHZZNJXX'] => 'SHZZNJXX',
        IResourceCatalog::TYPE['GJJLTQYRZXX'] => 'GJJLTQYRZXX',
        IResourceCatalog::TYPE['YXZZDWJBGXX'] => 'YXZZDWJBGXX',
        IResourceCatalog::TYPE['CHZZDWXX'] => 'CHZZDWXX',
        IResourceCatalog::TYPE['HSZYZGZXX'] => 'HSZYZGZXX',
        IResourceCatalog::TYPE['QYGSZXXX'] => 'QYGSZXXX',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => 'QYDSXZCFXX',
        IResourceCatalog::TYPE['AJNSRXX'] => 'AJNSRXX',
        IResourceCatalog::TYPE['WXHXPQYBHGLQD'] => 'WXHXPQYBHGLQD',
        IResourceCatalog::TYPE['EYQFDGRXX'] => 'EYQFDGRXX',
        IResourceCatalog::TYPE['WFWGTPXX'] => 'WFWGTPXX',
        IResourceCatalog::TYPE['YHYJRJGCFXX'] => 'YHYJRJGCFXX',
        IResourceCatalog::TYPE['LSTDFWBA'] => 'LSTDFWBA',
        IResourceCatalog::TYPE['EYQFGRXX'] => 'EYQFGRXX',
        IResourceCatalog::TYPE['XZXKQYXX'] => 'XZXKQYXX',
        IResourceCatalog::TYPE['EYQFQYXX'] => 'EYQFQYXX',
        IResourceCatalog::TYPE['SYDWFRDJXX'] => 'SYDWFRDJXX',
        IResourceCatalog::TYPE['PXSTYXHDJXX'] => 'PXSTYXHDJXX',
        IResourceCatalog::TYPE['DZDAGZZDWGRBZJL'] => 'DZDAGZZDWGRBZJL',
        IResourceCatalog::TYPE['JXSZLJDW'] => 'JXSZLJDW',
        IResourceCatalog::TYPE['DTJXJGRXX'] => 'DTJXJGRXX',
        IResourceCatalog::TYPE['XZCF'] => 'XZCF',
        IResourceCatalog::TYPE['XZXK'] => 'XZXK',
        IResourceCatalog::TYPE['SXBZXJGXX'] => 'SXBZXJGXX',
        IResourceCatalog::TYPE['SXBZXRMD'] => 'SXBZXRMD',
        IResourceCatalog::TYPE['YLBXXX'] => 'YLBXXX',
        IResourceCatalog::TYPE['TJDCDXML'] => 'TJDCDXML',
        IResourceCatalog::TYPE['JDCWFXX'] => 'JDCWFXX',
        IResourceCatalog::TYPE['GERENYONGHU'] => 'GERENYONGHU',
        IResourceCatalog::TYPE['GTGSHXX'] => 'GTGSHXX',
        IResourceCatalog::TYPE['CMQYSBXX'] => 'CMQYSBXX',
        IResourceCatalog::TYPE['YPLSQYXX'] => 'YPLSQYXX',
        IResourceCatalog::TYPE['ZYZXX'] => 'ZYZXX',
        IResourceCatalog::TYPE['XJFDPDXX'] => 'XJFDPDXX',
        IResourceCatalog::TYPE['DYZGXX'] => 'DYZGXX',
        IResourceCatalog::TYPE['LXSDJXX'] => 'LXSDJXX',
        IResourceCatalog::TYPE['DWAQSCHMDXX'] => 'DWAQSCHMDXX',
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => 'YZTQSBXXHMD',
        IResourceCatalog::TYPE['JGRYXX'] => 'JGRYXX',
        IResourceCatalog::TYPE['SXQYHMD'] => 'SXQYHMD',
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => 'SPYPTSJBJLGR',
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => 'SPYPTSJBJLDW',
        IResourceCatalog::TYPE['JXMPCPXX'] => 'JXMPCPXX',
        IResourceCatalog::TYPE['JSZGXX'] => 'JSZGXX',
        IResourceCatalog::TYPE['SJYXXS'] => 'SJYXXS',
        IResourceCatalog::TYPE['SYBXXX'] => 'SYBXXX',
        IResourceCatalog::TYPE['SJJXMXX'] => 'SJJXMXX',
        IResourceCatalog::TYPE['JYJGXINXI'] => 'JYJGXINXI',
        IResourceCatalog::TYPE['GRRYXXJYJ'] => 'GRRYXXJYJ',
        IResourceCatalog::TYPE['GRRYXXJTJ'] => 'GRRYXXJTJ',
        IResourceCatalog::TYPE['GRRYXXLFW'] => 'GRRYXXLFW',
        IResourceCatalog::TYPE['GRRYXXGDJ'] => 'GRRYXXGDJ',
        IResourceCatalog::TYPE['GRRYXXMZJ'] => 'GRRYXXMZJ',
        IResourceCatalog::TYPE['GRRYXXAJJ'] => 'GRRYXXAJJ',
        IResourceCatalog::TYPE['QYYCMLXX'] => 'QYYCMLXX',
        IResourceCatalog::TYPE['SBQYXX'] => 'SBQYXX',
        IResourceCatalog::TYPE['SFJDJGDJXX'] => 'SFJDJGDJXX',
        IResourceCatalog::TYPE['GZJGJBXX'] => 'GZJGJBXX',
        IResourceCatalog::TYPE['GZYXX'] => 'GZYXX',
        IResourceCatalog::TYPE['JCFLFWSXX'] => 'JCFLFWSXX',
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => 'JCFLFWGZZJBXX',
        IResourceCatalog::TYPE['LSSWSXX'] => 'LSSWSXX',
        IResourceCatalog::TYPE['LSZYZGZXX'] => 'LSZYZGZXX',
        IResourceCatalog::TYPE['QFGRYHXX'] => 'QFGRYHXX',
        IResourceCatalog::TYPE['QFQYYHXX'] => 'QFQYYHXX',
        IResourceCatalog::TYPE['FDCKFQYZZXX'] => 'FDCKFQYZZXX',
        IResourceCatalog::TYPE['TRQYHJBXX'] => 'TRQYHJBXX',
        IResourceCatalog::TYPE['QIYEJBXX'] => 'QIYEJBXX',
        IResourceCatalog::TYPE['XBXZCF'] => 'XBXZCF',
        IResourceCatalog::TYPE['XBXZXK'] => 'XBXZXK',
        IResourceCatalog::TYPE['GZRYXX'] => 'GZRYXX',
        IResourceCatalog::TYPE['SBYHJBXX'] => 'SBYHJBXX',
        IResourceCatalog::TYPE['YSZYZCHBGZC'] => 'YSZYZCHBGZC',
        IResourceCatalog::TYPE['YSZYZGZXX'] => 'YSZYZGZXX',
        IResourceCatalog::TYPE['WSHJHSYWYHJCXX'] => 'WSHJHSYWYHJCXX',
        IResourceCatalog::TYPE['YLHJSFWJGXX'] => 'YLHJSFWJGXX',
        IResourceCatalog::TYPE['JBYFKZJGXX'] => 'JBYFKZJGXX',
        IResourceCatalog::TYPE['FYCRYJLXX'] => 'FYCRYJLXX',
        IResourceCatalog::TYPE['WSZYJSZGKSWJXX'] => 'WSZYJSZGKSWJXX',
        IResourceCatalog::TYPE['QSWCXXXJDWBZ'] => 'QSWCXXXJDWBZ',
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => 'YZTQNMGGZHMD',
        IResourceCatalog::TYPE['JGRYXXSWGXJ'] => 'JGRYXXSWGXJ',
        IResourceCatalog::TYPE['JGRYXXSAJGJ'] => 'JGRYXXSAJGJ',
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => 'JGRYXXSJYJ',
        IResourceCatalog::TYPE['JGRYXXSFGJ'] => 'JGRYXXSFGJ',
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => 'JGRYXXSSFJ',
        IResourceCatalog::TYPE['TEST'] => 'TEST'
    );
}
