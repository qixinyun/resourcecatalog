<?php
namespace ResourceCatalog\Model\TemplateModel;

class ResourceCatalogGqtpxswModel
{
    const TEMPLATE = array(
        'HRBXX' => array(
            array('englishName'=>'name', 'name'=>'姓名', 'validationRules'=>array()),
            array('englishName'=>'cardID', 'name'=>'身份证号', 'validationRules'=>array(),'outputRules'=>array('mack'),'inputRules'=>array()),
            array('englishName'=>'goodType', 'name'=>'好人类型', 'validationRules'=>array()),
            array('englishName'=>'evaluationTime', 'name'=>'评定时间', 'validationRules'=>array()),
            array('englishName'=>'goodDeed', 'name'=>'好人事迹', 'validationRules'=>array()),
            array('englishName'=>'evaluationInstitution', 'name'=>'评定机构', 'validationRules'=>array()),
            array('englishName'=>'subjectCategory', 'name'=>'主体类别', 'validationRules'=>array()),
            array('englishName'=>'infoCategory', 'name'=>'信息类别', 'validationRules'=>array()),
            array('englishName'=>'dimension', 'name'=>'数据共享范围', 'validationRules'=>array()),
            array('englishName'=>'expirationDate', 'name'=>'有效期限', 'validationRules'=>array()),
            array('englishName'=>'exchangeFrequency', 'name'=>'交换频率', 'validationRules'=>array()),
        ),
    );
}