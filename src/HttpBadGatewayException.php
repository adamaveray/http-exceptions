<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpBadGatewayException extends AbstractHttpServerErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_BAD_GATEWAY;
  final protected const STATUS_MESSAGE = 'Bad gateway.';
}
