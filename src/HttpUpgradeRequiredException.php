<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpUpgradeRequiredException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_UPGRADE_REQUIRED;
  final protected const STATUS_MESSAGE = 'Upgrade required.';
}
