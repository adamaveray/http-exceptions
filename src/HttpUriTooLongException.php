<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpUriTooLongException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_URI_TOO_LONG;
  final protected const STATUS_MESSAGE = 'Uri too long.';
}
