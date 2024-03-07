<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpNotImplementedException extends AbstractHttpServerErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_NOT_IMPLEMENTED;
  final protected const STATUS_MESSAGE = 'Not implemented.';
}
