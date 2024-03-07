<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpServiceUnavailableException extends AbstractHttpServerErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_SERVICE_UNAVAILABLE;
  final protected const STATUS_MESSAGE = 'Service unavailable.';
}
