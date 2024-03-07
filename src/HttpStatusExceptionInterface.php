<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

interface HttpStatusExceptionInterface extends \Throwable
{
  public function getStatusCode(): int;
}
