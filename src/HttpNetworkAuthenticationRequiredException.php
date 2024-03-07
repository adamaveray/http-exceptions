<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpNetworkAuthenticationRequiredException extends AbstractHttpServerErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_NETWORK_AUTHENTICATION_REQUIRED;
  final protected const STATUS_MESSAGE = 'Network authentication required.';
}
