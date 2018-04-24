<?php
namespace ResourceCatalog\Model\TemplateModel;

class ResourceCatalogSrlzyhshbzjModel
{
    const TEMPLATE = array(
        'ZYJNZSXX' => array(
            array('englishName'=>'name', 'name'=>'姓名', 'validationRules'=>array()),
            array('englishName'=>'cardID', 'name'=>'身份证号', 'validationRules'=>array(),'outputRules'=>array('mack'),'inputRules'=>array()),
            array('englishName'=>'certificateNumber', 'name'=>'证书编号', 'validationRules'=>array()),
            array('englishName'=>'occupationRank', 'name'=>'职业（工种）及等级', 'validationRules'=>array()),
            array('englishName'=>'evaluationResults', 'name'=>'评定成绩', 'validationRules'=>array()),
            array('englishName'=>'issuingDate', 'name'=>'发证日期', 'validationRules'=>array()),
            array('englishName'=>'subjectCategory', 'name'=>'主体类别', 'validationRules'=>array()),
            array('englishName'=>'infoCategory', 'name'=>'信息类别', 'validationRules'=>array()),
            array('englishName'=>'dimension', 'name'=>'数据共享范围', 'validationRules'=>array()),
            array('englishName'=>'expirationDate', 'name'=>'有效期限', 'validationRules'=>array()),
            array('englishName'=>'exchangeFrequency', 'name'=>'交换频率', 'validationRules'=>array()),
        ),
    );
}