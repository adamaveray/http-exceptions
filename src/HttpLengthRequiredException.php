<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpLengthRequiredException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_LENGTH_REQUIRED;
  final protected const STATUS_MESSAGE = 'Length required.';
}
