<?php

declare(strict_types=1);
/**
 * This file is part of KnowYourself.
 *
 * @license  https://github.com/kydever/umeng-sdk/blob/main/LICENSE
 */
namespace KY\UMeng\UMini;

use KY\UMeng\Client\Annotation\Param;
use KY\UMeng\Client\APIParam;

class UMengUminiGetTotalUserResult extends APIParam
{
    /**
     * @var UMengUminiTotalUserDTO
     */
    #[Param]
    public UMengUminiTotalUserDTO $data;

    /**
     * @var int 状态码
     */
    #[Param]
    public int $code;

    /**
     * @var string 消息
     */
    #[Param]
    public string $msg;

    /**
     * @var bool 执行状态
     */
    #[Param]
    public bool $success;
}
