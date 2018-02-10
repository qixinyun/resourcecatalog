<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeName
{
    const TYPE_NAME = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['YXQNZYZ'] => '优秀青年志愿者',
        IResourceCatalog::TYPE['HRBXX'] => '好人榜信息',
        IResourceCatalog::TYPE['JKQYPJAJYSMD'] => '借款企业信用评级A级以上名单',
        IResourceCatalog::TYPE['QXTCHJBHJDXX'] => '气象探测环境保护监督信息',
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => '因私出入境中介机构资格认定信息（境外就业、留学除外）',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => '政府采购代理机构信息',
        IResourceCatalog::TYPE['SJQYJSZXRDXX'] => '省级企业技术中心认定信息',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => '司法鉴定机构从业人员资格信息',
        IResourceCatalog::TYPE['CPTGLSZXCPRZMD'] => '产品通过“绿色之星”产品认证名单',
        IResourceCatalog::TYPE['QYGSZXXX'] => '企业国税注销信息',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => '企业地税行政处罚信息',
        IResourceCatalog::TYPE['AJNSRXX'] => 'A级纳税人信息',
        IResourceCatalog::TYPE['YHYJRJGCFXX'] => '银行业金融机构处罚信息',
        IResourceCatalog::TYPE['PXSTYXHDJXX'] => '萍乡市体育协会登记信息',
        IResourceCatalog::TYPE['DZDAGZZDWGRBZJL'] => '对在档案工作中作出显著成绩的或者向国家捐赠重要、珍贵档案的单位和个人的表彰或者奖励'
    );
}