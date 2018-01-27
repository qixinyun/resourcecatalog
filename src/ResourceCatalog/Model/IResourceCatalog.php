<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog
{
    const TYPE = array(
        'NULL' => 0,
        'ZIYUANMULU1' => 1,
        'ZIYUANMULU2' => 2,
        'ZIYUANMULU3' => 3
    );

    const TYPE_NAME = array(
        self::TYPE['NULL'] => 0,
        self::TYPE['ZIYUANMULU1'] => '资源目录1',
        self::TYPE['ZIYUANMULU2'] => '资源目录2',
        self::TYPE['ZIYUANMULU3'] => '资源目录3'
    );

    const TYPE_IDENTFY = array(
        self::TYPE['NULL'] => 0,
        self::TYPE['ZIYUANMULU1'] => 'ZYML1',
        self::TYPE['ZIYUANMULU2'] => 'ZYML2',
        self::TYPE['ZIYUANMULU3'] => 'ZYML3'
    );

    const TYPE_ENNAME = array(
        self::TYPE['NULL'] => 0,
        self::TYPE['ZIYUANMULU1'] => 'zyml1',
        self::TYPE['ZIYUANMULU2'] => 'zyml2',
        self::TYPE['ZIYUANMULU3'] => 'zyml3'
    );
    
    const TYPE_DOUBLE_PUBLICITY = array(
        self::TYPE['NULL'] => 0,
        self::TYPE['ZIYUANMULU1'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        self::TYPE['ZIYUANMULU2'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['SANCTION'],
        self::TYPE['ZIYUANMULU3'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL']
    );

    const TYPE_RED_BLACK_LIST = array(
        self::TYPE['NULL'] => 0,
        self::TYPE['ZIYUANMULU1'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        self::TYPE['ZIYUANMULU2'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        self::TYPE['ZIYUANMULU3'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL']
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        'NULL' => array(self::TYPE['NULL']),
        '1' => array(self::TYPE['ZIYUANMULU1'], self::TYPE['ZIYUANMULU2']),
        '2' => array(self::TYPE['ZIYUANMULU3'])
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}