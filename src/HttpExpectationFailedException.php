<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpExpectationFailedException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_EXPECTATION_FAILED;
  final protected const STATUS_MESSAGE = 'Expectation failed.';
}
