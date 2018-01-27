<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeName
{
    const TYPE_NAME = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['ZYML1'] => '资源目录1',
        IResourceCatalog::TYPE['ZYML2'] => '资源目录2',
        IResourceCatalog::TYPE['HRBXX'] => '好人榜信息',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => '政府采购代理机构信息',
        IResourceCatalog::TYPE['QYGSZXXX'] => '企业国税注销信息'
    );
}