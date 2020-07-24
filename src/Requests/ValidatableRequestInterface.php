<?php


namespace HalloVerden\Contracts\Oidc\Requests;


use Symfony\Component\Validator\ConstraintViolationListInterface;

/**
 * Interface ValidatableRequestInterface
 *
 * @package HalloVerden\Contracts\Oidc\Requests
 */
interface ValidatableRequestInterface {

  /**
   * @return ConstraintViolationListInterface
   */
  public function getViolations(): ConstraintViolationListInterface;

  /**
   * @return bool
   */
  public function hasViolations(): bool;

}
