<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeIdentify
{
    const TYPE_IDENTIFY = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['HRBXX'] => 'HRBXX',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => 'ZFCGDLJGXX',
        IResourceCatalog::TYPE['QYGSZXXX'] => 'QYGSZXXX',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => 'QYDSXZCFXX',
        IResourceCatalog::TYPE['AJNSRXX'] => 'AJNSRXX'
    );
}