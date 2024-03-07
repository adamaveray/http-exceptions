<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

abstract class AbstractHttpClientErrorException extends AbstractHttpStatusException implements
  HttpClientErrorExceptionInterface
{
}
