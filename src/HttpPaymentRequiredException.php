<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpPaymentRequiredException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_PAYMENT_REQUIRED;
  final protected const STATUS_MESSAGE = 'Payment required.';
}
