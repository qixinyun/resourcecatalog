<?php
namespace ResourceCatalog\Model\TemplateModel;

class ResourceCatalogSwmbModel
{
    const TEMPLATE = array(
        'YXQNZYZ' => array(
            array('englishName'=>'name', 'name'=>'姓名', 'validationRules'=>array()),
            array('englishName'=>'cardID', 'name'=>'身份证号', 'validationRules'=>array(),'outputRules'=>array('mack'),'inputRules'=>array()),
            array('englishName'=>'honoraryTitle', 'name'=>'荣誉称号', 'validationRules'=>array()),
            array('englishName'=>'commendationYear', 'name'=>'表彰年度', 'validationRules'=>array()),
            array('englishName'=>'commendationOrgan', 'name'=>'表彰机关', 'validationRules'=>array()),
            array('englishName'=>'subjectCategory', 'name'=>'主体类别', 'validationRules'=>array()),
            array('englishName'=>'infoCategory', 'name'=>'信息类别', 'validationRules'=>array()),
            array('englishName'=>'dimension', 'name'=>'数据共享范围', 'validationRules'=>array()),
            array('englishName'=>'expirationDate', 'name'=>'有效期限', 'validationRules'=>array()),
            array('englishName'=>'exchangeFrequency', 'name'=>'交换频率', 'validationRules'=>array()),
        ),
    );
}