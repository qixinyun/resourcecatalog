<?php
namespace ResourceCatalog\Model;

use ResourceCatalog\Model\TemplateModel\NullTemplateModel;

class TemplateModelFactory
{
    const MAPS = array(
        'XZCF'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogCommonModel',
        'XZXK'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogCommonModel',
        'JGJCDXZJL'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSfzhggwyhModel',
        'TEST'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSfzhggwyhModel',
        'YXQNZYZ'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogGqtpxswModel',
        'HRBXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSwmbModel',
        'JKQYPJAJYSMD'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogRmyhpxszxzhModel',
        'QXTCHJBHJDXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSqxjModel',
        'XSPJXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSzjrmfyModel',
        'SXBZXJGXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSzjrmfyModel',
        'SXBZXRMD'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSzjrmfyModel',
        'JYZCXXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSlsjModel',
        'YSCRJZJJJZGRDXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSgajModel',
        'ZFCGDLJGXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSczjModel',
        'SJQYJSZXRDXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSgyhxxhwyhModel',
        'QYRYXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSgyzcjdglwyhModel',
        'JYJGXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSjyjModel',
        'SFJDJGCYRYZGXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSsfjModel',
        'ZYJNZSXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSrlzyhshbzjModel',
        'ZLJCQYXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSjsjModel',
        'PGJGXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSghjModel',
        'GRYH'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSrqyxgsModel',
        'SLGCZBXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSsljModel',
        'QYYH'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSgdgsModel',
        'QSLHXJJTJL'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSlyjModel',
        'SLYSXKZXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSjtysjModel',
        'LYQXPDXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSlyfzwyhModel',
        'SPFYSXK'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSfdcgljModel',
        'CPTGLSZXCPRZMD'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogShjbhjModel',
        'ESCJDPGJGHZZS'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSswjModel',
        'SHZZNJXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSmzjModel',
        'GJJLTQYRZXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSnyjModel',
        'YXZZDWJBGXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSwhgdxwcbsModel',
        'CHZZDWXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSgtzyjModel',
        'HSZYZGZXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSwshjhsywyhModel',
        'QYGSZXXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSgjswjModel',
        'AJNSRXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSgjswjModel',
        'QYDSXZCFXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSdfswjModel',
        'DTJXJGRXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogStjjModel',
        'QYJBXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSschzljggljModel',
        'WXHXPQYBHGLQD'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSaqscjdgljModel',
        'EYQFDGRXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogZgydpxfgsModel',
        'WFWGTPXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogPxhczpxbzModel',
        'YHYJRJGCFXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSyjfjModel',
        'LSTDFWBA'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSggzwgljModel',
        'EYQFGRXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogZgdxpxfgsModel',
        'XZXKQYXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogScsglxzzfjModel',
        'EYQFQYXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogZgltpxfgsModel',
        'SYDWFRDJXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSjgbzwyhbgsModel',
        'PXSTYXHDJXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogStyjModel',
        'DZDAGZZDWGRBZJL'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSdajModel',
        'JXSZLJDW'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSkxjsjModel',
        'GTGSHXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSschzljggljModel',
        'CMQYSBXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSschzljggljModel',
        'YPLSQYXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSschzljggljModel',
        'JGRYXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSschzljggljModel',
        'SXQYHMD'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSschzljggljModel',
        'SPYPTSJBJLGR'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSschzljggljModel',
        'SPYPTSJBJLDW'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSschzljggljModel',
        'JXMPCPXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSschzljggljModel',
        'QYYCMLXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSschzljggljModel',
        'ZYZXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSwmbModel',
        'XJFDPDXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSlyfzwyhModel',
        'DYZGXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSlyfzwyhModel',
        'LXSDJXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSlyfzwyhModel',
        'GRRYXXLFW'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSlyfzwyhModel',
        'DWAQSCHMDXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSaqscjdgljModel',
        'GRRYXXAJJ'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSaqscjdgljModel',
        'YZTQSBXXHMD'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSrlzyhshbzjModel',
        'SYBXXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSrlzyhshbzjModel',
        'JSZGXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSjyjModel',
        'SJYXXS'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSjyjModel',
        'JYJGINFO'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSjyjModel',
        'GRRYXXJYJ'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSjyjModel',
        'SJJXMXX'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSfzhggwyhModel',
        'GRRYXXJTJ'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSjtysjModel',
        'GRRYXXGDJ'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSwhgdxwcbsModel',
        'GRRYXXMZJ'=>
            'ResourceCatalog\Model\TemplateModel\ResourceCatalogSmzjModel',
    );

    public function getTemplateModel(string $typeName)
    {
        $templateModel = isset(self::MAPS[$typeName]) ? self::MAPS[$typeName] : '';

        return class_exists($templateModel) ? new $templateModel : new NullTemplateModel();
    }
}
