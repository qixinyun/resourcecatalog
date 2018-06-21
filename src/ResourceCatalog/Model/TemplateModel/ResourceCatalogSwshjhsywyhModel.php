<?php
namespace ResourceCatalog\Model\TemplateModel;

class ResourceCatalogSwshjhsywyhModel
{
    const TEMPLATE = array(
        'HSZYZGZXX' => array(
            array('englishName'=>'name', 'name'=>'姓名', 'validationRules'=>array()),
            array('englishName'=>'cardID', 'name'=>'身份证号码', 'validationRules'=>array(),'outputRules'=>array('mack'),'inputRules'=>array()),
            array('englishName'=>'certificateNumber', 'name'=>'证书编号', 'validationRules'=>array()),
            array('englishName'=>'qualificationType', 'name'=>'执业资格种类', 'validationRules'=>array()),
            array('englishName'=>'issuingUnit', 'name'=>'发证单位', 'validationRules'=>array()),
            array('englishName'=>'issuingDate', 'name'=>'发证日期', 'validationRules'=>array()),
            array('englishName'=>'subjectCategory', 'name'=>'主体类别', 'validationRules'=>array()),
            array('englishName'=>'infoCategory', 'name'=>'信息类别', 'validationRules'=>array()),
            array('englishName'=>'dimension', 'name'=>'数据共享范围', 'validationRules'=>array()),
            array('englishName'=>'expirationDate', 'name'=>'有效期限', 'validationRules'=>array()),
            array('englishName'=>'exchangeFrequency', 'name'=>'交换频率', 'validationRules'=>array()),
        ),
    );
}