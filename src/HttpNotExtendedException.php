<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpNotExtendedException extends AbstractHttpServerErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_NOT_EXTENDED;
  final protected const STATUS_MESSAGE = 'Not extended.';
}
