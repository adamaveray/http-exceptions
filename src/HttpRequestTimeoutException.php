<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpRequestTimeoutException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_REQUEST_TIMEOUT;
  final protected const STATUS_MESSAGE = 'Request timeout.';
}
