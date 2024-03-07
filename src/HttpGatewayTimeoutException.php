<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpGatewayTimeoutException extends AbstractHttpServerErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_GATEWAY_TIMEOUT;
  final protected const STATUS_MESSAGE = 'Gateway timeout.';
}
