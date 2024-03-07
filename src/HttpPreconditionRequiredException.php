<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpPreconditionRequiredException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_PRECONDITION_REQUIRED;
  final protected const STATUS_MESSAGE = 'Precondition required.';
}
