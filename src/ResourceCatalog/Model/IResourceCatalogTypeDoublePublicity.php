<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeDoublePublicity
{   
    const TYPE_DOUBLE_PUBLICITY = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['HRBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['QYGSZXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QYDSXZCFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['SANCTION'],
        IResourceCatalog::TYPE['AJNSRXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL']
    );
}