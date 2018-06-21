<?php
namespace ResourceCatalog\Model\TemplateModel;

class ResourceCatalogSsfjModel
{
    const TEMPLATE = array(
        'SFJDJGCYRYZGXX' => array(
            array('englishName'=>'name', 'name'=>'姓名', 'validationRules'=>array()),
            array('englishName'=>'gender', 'name'=>'性别', 'validationRules'=>array()),
            array('englishName'=>'cardID', 'name'=>'身份证号', 'validationRules'=>array(),'outputRules'=>array('mack'),'inputRules'=>array()),
            array('englishName'=>'institution', 'name'=>'所在机构', 'validationRules'=>array()),
            array('englishName'=>'certificateCategory', 'name'=>'执业证类别', 'validationRules'=>array()),
            array('englishName'=>'certificateNumber', 'name'=>'执业证编号', 'validationRules'=>array()),
            array('englishName'=>'subjectCategory', 'name'=>'主体类别', 'validationRules'=>array()),
            array('englishName'=>'infoCategory', 'name'=>'信息类别', 'validationRules'=>array()),
            array('englishName'=>'dimension', 'name'=>'数据共享范围', 'validationRules'=>array()),
            array('englishName'=>'expirationDate', 'name'=>'有效期限', 'validationRules'=>array()),
            array('englishName'=>'exchangeFrequency', 'name'=>'交换频率', 'validationRules'=>array()),
        ),
    );
}