<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpRangeNotSatisfiableException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_RANGE_NOT_SATISFIABLE;
  final protected const STATUS_MESSAGE = 'Range not satisfiable.';
}
