<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpInternalServerErrorException extends AbstractHttpServerErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_INTERNAL_SERVER_ERROR;
  final protected const STATUS_MESSAGE = 'Internal server error.';
}
