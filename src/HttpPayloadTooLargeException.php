<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpPayloadTooLargeException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_PAYLOAD_TOO_LARGE;
  final protected const STATUS_MESSAGE = 'Payload too large.';
}
