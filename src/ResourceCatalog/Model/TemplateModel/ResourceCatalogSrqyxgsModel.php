<?php
namespace ResourceCatalog\Model\TemplateModel;

class ResourceCatalogSrqyxgsModel
{
    const TEMPLATE = array(
        'GRYH' => array(
            array('englishName'=>'name', 'name'=>'用户名', 'validationRules'=>array()),
            array('englishName'=>'userNumber', 'name'=>'用户编号', 'validationRules'=>array()),
            array('englishName'=>'address', 'name'=>'地址', 'validationRules'=>array()),
            array('englishName'=>'phone', 'name'=>'电话', 'validationRules'=>array()),
            array('englishName'=>'cardID', 'name'=>'身份证号码', 'validationRules'=>array(),'outputRules'=>array('mack'),'inputRules'=>array()),
            array('englishName'=>'accountPeriod', 'name'=>'账期', 'validationRules'=>array()),
            array('englishName'=>'arrearsAmount', 'name'=>'欠费金额', 'validationRules'=>array()),
            array('englishName'=>'creditRating', 'name'=>'信用等级', 'validationRules'=>array()),
            array('englishName'=>'unifiedSocialCreditCode', 'name'=>'统一社会信用代码', 'validationRules'=>array()),
            array('englishName'=>'cognizanceCause', 'name'=>'认定原因', 'validationRules'=>array()),
            array('englishName'=>'cognizanceUnit', 'name'=>'认定单位', 'validationRules'=>array()),
            array('englishName'=>'subjectCategory', 'name'=>'主体类别', 'validationRules'=>array()),
            array('englishName'=>'infoCategory', 'name'=>'信息类别', 'validationRules'=>array()),
            array('englishName'=>'dimension', 'name'=>'数据共享范围', 'validationRules'=>array()),
            array('englishName'=>'expirationDate', 'name'=>'有效期限', 'validationRules'=>array()),
            array('englishName'=>'exchangeFrequency', 'name'=>'交换频率', 'validationRules'=>array()),
        ),
    );
}