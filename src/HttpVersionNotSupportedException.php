<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpVersionNotSupportedException extends AbstractHttpServerErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_VERSION_NOT_SUPPORTED;
  final protected const STATUS_MESSAGE = 'Version not supported.';
}
