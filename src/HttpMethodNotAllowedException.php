<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpMethodNotAllowedException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_METHOD_NOT_ALLOWED;
  final protected const STATUS_MESSAGE = 'Method not allowed.';
}
