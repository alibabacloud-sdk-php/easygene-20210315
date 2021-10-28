<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class GetPublicDatasetRequest extends Model
{
    /**
     * @description 查询的字段名:DatasetNo, DatasetDescription, About, AccessRequirements, Copyright, Tags, UpdateFrequency, Locations, LastModified, RegionIds
     *
     * @var string[]
     */
    public $attributes;

    /**
     * @description 数据集名称
     *
     * @var string
     */
    public $datasetName;
    protected $_name = [
        'attributes'  => 'Attributes',
        'datasetName' => 'DatasetName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPublicDatasetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = $map['Attributes'];
            }
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        return $model;
    }
}
