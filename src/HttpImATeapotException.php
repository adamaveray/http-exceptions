<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpImATeapotException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_IM_A_TEAPOT;
  final protected const STATUS_MESSAGE = 'Im a teapot.';
}
