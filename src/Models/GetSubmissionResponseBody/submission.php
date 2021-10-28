<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\GetSubmissionResponseBody;

use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetSubmissionResponseBody\submission\runStats;
use AlibabaCloud\Tea\Model;

class submission extends Model
{
    /**
     * @description 提交时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 结束时间
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 实体类型
     *
     * @var string
     */
    public $entityType;

    /**
     * @var runStats
     */
    public $runStats;

    /**
     * @description 开始时间
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 任务状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 提交ID
     *
     * @var string
     */
    public $submissionId;

    /**
     * @description 提交ID
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'endTime'      => 'EndTime',
        'entityType'   => 'EntityType',
        'runStats'     => 'RunStats',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
        'submissionId' => 'SubmissionId',
        'workspace'    => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->runStats) {
            $res['RunStats'] = null !== $this->runStats ? $this->runStats->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submissionId) {
            $res['SubmissionId'] = $this->submissionId;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return submission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['RunStats'])) {
            $model->runStats = runStats::fromMap($map['RunStats']);
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmissionId'])) {
            $model->submissionId = $map['SubmissionId'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
