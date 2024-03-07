<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

abstract class AbstractHttpServerErrorException extends AbstractHttpStatusException implements
  HttpServerErrorExceptionInterface
{
}
