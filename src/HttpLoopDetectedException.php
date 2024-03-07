<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpLoopDetectedException extends AbstractHttpServerErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_LOOP_DETECTED;
  final protected const STATUS_MESSAGE = 'Loop detected.';
}
