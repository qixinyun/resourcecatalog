<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeDoublePublicity
{   
    const TYPE_DOUBLE_PUBLICITY = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['YXQNZYZ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['HRBXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JKQYPJAJYSMD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QXTCHJBHJDXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['SJQYJSZXRDXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['CPTGLSZXCPRZMD'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['QYGSZXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QYDSXZCFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['SANCTION'],
        IResourceCatalog::TYPE['AJNSRXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['YHYJRJGCFXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['SANCTION'],
        IResourceCatalog::TYPE['PXSTYXHDJXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['DZDAGZZDWGRBZJL'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL']
    );
}