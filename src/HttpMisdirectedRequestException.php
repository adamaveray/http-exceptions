<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpMisdirectedRequestException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_MISDIRECTED_REQUEST;
  final protected const STATUS_MESSAGE = 'Misdirected request.';
}
