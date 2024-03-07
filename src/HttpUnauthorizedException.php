<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpUnauthorizedException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_UNAUTHORIZED;
  final protected const STATUS_MESSAGE = 'Unauthorized.';
}
