<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpTooManyRequestsException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_TOO_MANY_REQUESTS;
  final protected const STATUS_MESSAGE = 'Too many requests.';
}
