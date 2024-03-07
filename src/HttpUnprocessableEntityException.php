<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;

class HttpUnprocessableEntityException extends AbstractHttpClientErrorException
{
  final protected const STATUS_CODE = StatusCodeInterface::STATUS_UNPROCESSABLE_ENTITY;
  final protected const STATUS_MESSAGE = 'Unprocessable entity.';
}
