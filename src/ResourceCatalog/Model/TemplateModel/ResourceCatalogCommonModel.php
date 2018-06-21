<?php
namespace ResourceCatalog\Model\TemplateModel;

class ResourceCatalogCommonModel
{
    const TEMPLATE = array(
        'XZCF' => array(
            array('englishName'=>'referenceNumber', 'name'=>'行政处罚决定书文号', 'validationRules'=>array()),
            array('englishName'=>'punishmentName', 'name'=>'处罚名称', 'validationRules'=>array()),
            array('englishName'=>'punishmentCategoryOne', 'name'=>'处罚类别1', 'validationRules'=>array()),
            array('englishName'=>'punishmentCategoryTwo', 'name'=>'处罚类别2', 'validationRules'=>array()),
            array('englishName'=>'punishmentCause', 'name'=>'处罚事由', 'validationRules'=>array()),
            array('englishName'=>'punishmentBasis', 'name'=>'处罚依据', 'validationRules'=>array()),
            array('englishName'=>'name', 'name'=>'行政相对人名称', 'validationRules'=>array()),
            array('englishName'=>'unifiedSocialCreditCode', 'name'=>'行政相对人代码_1 (统一社会信用代码)', 'validationRules'=>array()),
            array('englishName'=>'organizationCode', 'name'=>'行政相对人代码_2 (组织机构代码)', 'validationRules'=>array()),
            array('englishName'=>'businessRegistrationCode', 'name'=>'行政相对人代码_3 (工商登记码)', 'validationRules'=>array()),
            array('englishName'=>'taxRegistrationNumber', 'name'=>'行政相对人代码_4 (税务登记号)', 'validationRules'=>array()),
            array('englishName'=>'cardID', 'name'=>'行政相对人代码_5 (居民身份证号)', 'validationRules'=>array(),'outputRules'=>array('mack'),'inputRules'=>array()),
            array('englishName'=>'principal', 'name'=>'法定代表人姓名', 'validationRules'=>array()),
            array('englishName'=>'punishmentResult', 'name'=>'处罚结果', 'validationRules'=>array()),
            array('englishName'=>'punishmentDecisionDate', 'name'=>'处罚决定日期', 'validationRules'=>array()),
            array('englishName'=>'publicityTerm', 'name'=>'公示期限', 'validationRules'=>array()),
            array('englishName'=>'punishmentOrgan', 'name'=>'处罚机关', 'validationRules'=>array()),
            array('englishName'=>'currentState', 'name'=>'当前状态', 'validationRules'=>array()),
            array('englishName'=>'localCode', 'name'=>'地方编码', 'validationRules'=>array()),
            array('englishName'=>'dataUpdateTimestamp', 'name'=>'数据更新时间戳', 'validationRules'=>array()),
            array('englishName'=>'remarks', 'name'=>'备注', 'validationRules'=>array()),
            array('englishName'=>'subjectCategory', 'name'=>'主体类别', 'validationRules'=>array()),
            array('englishName'=>'infoCategory', 'name'=>'信息类别', 'validationRules'=>array()),
            array('englishName'=>'dimension', 'name'=>'数据共享范围', 'validationRules'=>array()),
            array('englishName'=>'expirationDate', 'name'=>'有效期限', 'validationRules'=>array()),
            array('englishName'=>'exchangeFrequency', 'name'=>'交换频率', 'validationRules'=>array()),
        ),
        'XZXK' => array(
            array('englishName'=>'referenceNumber', 'name'=>'行政许可决定书文号', 'validationRules'=>array()),
            array('englishName'=>'entryName', 'name'=>'项目名称', 'validationRules'=>array()),
            array('englishName'=>'approvalCategory', 'name'=>'审批类别', 'validationRules'=>array()),
            array('englishName'=>'content', 'name'=>'许可内容', 'validationRules'=>array()),
            array('englishName'=>'name', 'name'=>'行政相对人名称', 'validationRules'=>array()),
            array('englishName'=>'unifiedSocialCreditCode', 'name'=>'行政相对人代码_1 (统一社会信用代码)', 'validationRules'=>array()),
            array('englishName'=>'organizationCode', 'name'=>'行政相对人代码_2 (组织机构代码)', 'validationRules'=>array()),
            array('englishName'=>'businessRegistrationCode', 'name'=>'行政相对人代码_3 (工商登记码)', 'validationRules'=>array()),
            array('englishName'=>'taxRegistrationNumber', 'name'=>'行政相对人代码_4 (税务登记号)', 'validationRules'=>array()),
            array('englishName'=>'cardID', 'name'=>'行政相对人代码_5 (居民身份证号)', 'validationRules'=>array(),'outputRules'=>array('mack'),'inputRules'=>array()),
            array('englishName'=>'principal', 'name'=>'法定代表人姓名', 'validationRules'=>array()),
            array('englishName'=>'licenseDecisionDate', 'name'=>'许可决定日期', 'validationRules'=>array()),
            array('englishName'=>'licenseDeadline', 'name'=>'许可截止期', 'validationRules'=>array()),
            array('englishName'=>'licenseOrgan', 'name'=>'许可机关', 'validationRules'=>array()),
            array('englishName'=>'currentState', 'name'=>'当前状态', 'validationRules'=>array()),
            array('englishName'=>'localCode', 'name'=>'地方编码', 'validationRules'=>array()),
            array('englishName'=>'dataUpdateTimestamp', 'name'=>'数据更新时间戳', 'validationRules'=>array()),
            array('englishName'=>'remarks', 'name'=>'备注', 'validationRules'=>array()),
            array('englishName'=>'subjectCategory', 'name'=>'主体类别', 'validationRules'=>array()),
            array('englishName'=>'infoCategory', 'name'=>'信息类别', 'validationRules'=>array()),
            array('englishName'=>'dimension', 'name'=>'数据共享范围', 'validationRules'=>array()),
            array('englishName'=>'expirationDate', 'name'=>'有效期限', 'validationRules'=>array()),
            array('englishName'=>'exchangeFrequency', 'name'=>'交换频率', 'validationRules'=>array()),
        ),
    );
}