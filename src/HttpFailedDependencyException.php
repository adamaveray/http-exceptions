<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpFailedDependencyException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_FAILED_DEPENDENCY;
  final protected const STATUS_MESSAGE = 'Failed dependency.';
}
