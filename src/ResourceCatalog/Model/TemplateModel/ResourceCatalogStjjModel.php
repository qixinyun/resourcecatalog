<?php
namespace ResourceCatalog\Model\TemplateModel;

class ResourceCatalogStjjModel
{
    const TEMPLATE = array(
        'DTJXJGRXX' => array(
            array('englishName'=>'name', 'name'=>'姓名', 'validationRules'=>array()),
            array('englishName'=>'cardID', 'name'=>'身份证号', 'validationRules'=>array(),'outputRules'=>array('mack'),'inputRules'=>array()),
            array('englishName'=>'honorName', 'name'=>'荣誉名称', 'validationRules'=>array()),
            array('englishName'=>'documentNumber', 'name'=>'文号', 'validationRules'=>array()),
            array('englishName'=>'honorContent', 'name'=>'荣誉事项内容', 'validationRules'=>array()),
            array('englishName'=>'evaluationDate', 'name'=>'评定日期/认定日期', 'validationRules'=>array()),
            array('englishName'=>'evaluationUnit', 'name'=>'评定单位/认定单位', 'validationRules'=>array()),
            array('englishName'=>'subjectCategory', 'name'=>'主体类别', 'validationRules'=>array()),
            array('englishName'=>'infoCategory', 'name'=>'信息类别', 'validationRules'=>array()),
            array('englishName'=>'dimension', 'name'=>'数据共享范围', 'validationRules'=>array()),
            array('englishName'=>'expirationDate', 'name'=>'有效期限', 'validationRules'=>array()),
            array('englishName'=>'exchangeFrequency', 'name'=>'交换频率', 'validationRules'=>array()),
        ),
    );
}