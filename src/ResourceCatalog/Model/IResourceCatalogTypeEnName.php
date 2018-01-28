<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeEnName
{
    const TYPE_ENNAME = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['HRBXX'] => 'hrbxx',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => 'zfcgdljgxx',
        IResourceCatalog::TYPE['QYGSZXXX'] => 'qygszxxx',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => 'qydsxzcfxx'
    );
}