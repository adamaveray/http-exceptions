<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpVariantAlsoNegotiatesException extends AbstractHttpServerErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_VARIANT_ALSO_NEGOTIATES;
  final protected const STATUS_MESSAGE = 'Variant also negotiates.';
}
