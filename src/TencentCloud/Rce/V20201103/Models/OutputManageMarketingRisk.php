<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 全栈式风控引擎出参
 *
 * @method integer getCode() 获取错误码，0 表示成功，非0表示失败错误码。
0：成功
1：错误
1002：参数错误
4300：未开通服务
4301：后端未创建对应产品
 * @method void setCode(integer $Code) 设置错误码，0 表示成功，非0表示失败错误码。
0：成功
1：错误
1002：参数错误
4300：未开通服务
4301：后端未创建对应产品
 * @method string getMessage() 获取UTF-8编码，出错消息。
 * @method void setMessage(string $Message) 设置UTF-8编码，出错消息。
 * @method OutputManageMarketingRiskValue getValue() 获取业务详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(OutputManageMarketingRiskValue $Value) 设置业务详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUUid() 获取控制台显示的req_id。
 * @method void setUUid(string $UUid) 设置控制台显示的req_id。
 */
class OutputManageMarketingRisk extends AbstractModel
{
    /**
     * @var integer 错误码，0 表示成功，非0表示失败错误码。
0：成功
1：错误
1002：参数错误
4300：未开通服务
4301：后端未创建对应产品
     */
    public $Code;

    /**
     * @var string UTF-8编码，出错消息。
     */
    public $Message;

    /**
     * @var OutputManageMarketingRiskValue 业务详情。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string 控制台显示的req_id。
     */
    public $UUid;

    /**
     * @param integer $Code 错误码，0 表示成功，非0表示失败错误码。
0：成功
1：错误
1002：参数错误
4300：未开通服务
4301：后端未创建对应产品
     * @param string $Message UTF-8编码，出错消息。
     * @param OutputManageMarketingRiskValue $Value 业务详情。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UUid 控制台显示的req_id。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new OutputManageMarketingRiskValue();
            $this->Value->deserialize($param["Value"]);
        }

        if (array_key_exists("UUid",$param) and $param["UUid"] !== null) {
            $this->UUid = $param["UUid"];
        }
    }
}
