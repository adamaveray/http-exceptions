<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpNotAcceptableException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_NOT_ACCEPTABLE;
  final protected const STATUS_MESSAGE = 'Not acceptable.';
}
