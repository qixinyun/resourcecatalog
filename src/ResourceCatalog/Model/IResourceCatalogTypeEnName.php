<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeEnName
{
    const TYPE_ENNAME = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['ZYML1'] => 'zyml1',
        IResourceCatalog::TYPE['ZYML2'] => 'zyml2',
        IResourceCatalog::TYPE['HRBXX'] => 'hrbxx',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => 'zfcgdljgxx',
        IResourceCatalog::TYPE['QYGSZXXX'] => 'qygszxxx'
    );
}