<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\GetGlobalAppResponseBody;

use AlibabaCloud\Tea\Model;

class appDescriptorFiles extends Model
{
    /**
     * @var string
     */
    public $checksum;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'checksum' => 'Checksum',
        'content'  => 'Content',
        'fileType' => 'FileType',
        'path'     => 'Path',
        'url'      => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checksum) {
            $res['Checksum'] = $this->checksum;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appDescriptorFiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Checksum'])) {
            $model->checksum = $map['Checksum'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
