<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpPreconditionFailedException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_PRECONDITION_FAILED;
  final protected const STATUS_MESSAGE = 'Precondition failed.';
}
