<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpUnsupportedMediaTypeException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_UNSUPPORTED_MEDIA_TYPE;
  final protected const STATUS_MESSAGE = 'Unsupported media type.';
}
