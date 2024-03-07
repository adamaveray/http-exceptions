<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpRequestHeaderFieldsTooLargeException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_REQUEST_HEADER_FIELDS_TOO_LARGE;
  final protected const STATUS_MESSAGE = 'Request header fields too large.';
}
