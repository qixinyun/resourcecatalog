<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeName
{
    const TYPE_NAME = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['HRBXX'] => '好人榜信息',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => '政府采购代理机构信息',
        IResourceCatalog::TYPE['QYGSZXXX'] => '企业国税注销信息',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => '企业地税行政处罚信息',
        IResourceCatalog::TYPE['AJNSRXX'] => 'A级纳税人信息'
    );
}