<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\ListTemplatesResponseBody;

use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListTemplatesResponseBody\templates\inputsExpression;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListTemplatesResponseBody\templates\outputsExpression;
use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @description 应用名称
     *
     * @var string
     */
    public $appName;

    /**
     * @description 应用版本
     *
     * @var string
     */
    public $appRevision;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 模板描述信息
     *
     * @var string
     */
    public $description;

    /**
     * @description 应用输入
     *
     * @var inputsExpression[]
     */
    public $inputsExpression;

    /**
     * @description 标签
     *
     * @var string[]
     */
    public $labels;

    /**
     * @description 最后修改时间
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @description 应用的输出参数
     *
     * @var outputsExpression[]
     */
    public $outputsExpression;

    /**
     * @description 实体类型
     *
     * @var string
     */
    public $rootEntity;

    /**
     * @description 应用模板名称
     *
     * @var string
     */
    public $templateName;

    /**
     * @description 工作空间
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'appName'           => 'AppName',
        'appRevision'       => 'AppRevision',
        'createTime'        => 'CreateTime',
        'description'       => 'Description',
        'inputsExpression'  => 'InputsExpression',
        'labels'            => 'Labels',
        'lastModifiedTime'  => 'LastModifiedTime',
        'outputsExpression' => 'OutputsExpression',
        'rootEntity'        => 'RootEntity',
        'templateName'      => 'TemplateName',
        'workspace'         => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appRevision) {
            $res['AppRevision'] = $this->appRevision;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->inputsExpression) {
            $res['InputsExpression'] = [];
            if (null !== $this->inputsExpression && \is_array($this->inputsExpression)) {
                $n = 0;
                foreach ($this->inputsExpression as $item) {
                    $res['InputsExpression'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->outputsExpression) {
            $res['OutputsExpression'] = [];
            if (null !== $this->outputsExpression && \is_array($this->outputsExpression)) {
                $n = 0;
                foreach ($this->outputsExpression as $item) {
                    $res['OutputsExpression'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rootEntity) {
            $res['RootEntity'] = $this->rootEntity;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppRevision'])) {
            $model->appRevision = $map['AppRevision'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InputsExpression'])) {
            if (!empty($map['InputsExpression'])) {
                $model->inputsExpression = [];
                $n                       = 0;
                foreach ($map['InputsExpression'] as $item) {
                    $model->inputsExpression[$n++] = null !== $item ? inputsExpression::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['OutputsExpression'])) {
            if (!empty($map['OutputsExpression'])) {
                $model->outputsExpression = [];
                $n                        = 0;
                foreach ($map['OutputsExpression'] as $item) {
                    $model->outputsExpression[$n++] = null !== $item ? outputsExpression::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RootEntity'])) {
            $model->rootEntity = $map['RootEntity'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
