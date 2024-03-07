<?php
declare(strict_types=1);

namespace Averay\HttpExceptions;

abstract class AbstractHttpStatusException extends \RuntimeException implements HttpStatusExceptionInterface
{
  /** @var int */
  protected const STATUS_CODE = 0;
  /** @var string */
  protected const STATUS_MESSAGE = 'HTTP status error.';

  public function __construct(?string $message = null, ?\Throwable $previous = null)
  {
    $message ??= self::STATUS_MESSAGE;
    parent::__construct($message, static::STATUS_CODE, $previous);
  }

  final public function getStatusCode(): int
  {
    return static::STATUS_CODE;
  }
}
