<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpProxyAuthenticationRequiredException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_PROXY_AUTHENTICATION_REQUIRED;
  final protected const STATUS_MESSAGE = 'Proxy authentication required.';
}
