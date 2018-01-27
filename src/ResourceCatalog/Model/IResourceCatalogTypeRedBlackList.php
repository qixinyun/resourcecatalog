<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeRedBlackList
{   
    const TYPE_RED_BLACK_LIST = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['ZYML1'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['ZYML2'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['HRBXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['QYGSZXXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL']
    );
}