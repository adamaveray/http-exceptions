<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpInsufficientStorageException extends AbstractHttpServerErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_INSUFFICIENT_STORAGE;
  final protected const STATUS_MESSAGE = 'Insufficient storage.';
}
