<?php


namespace HalloVerden\Contracts\Oidc\Requests;


use Symfony\Component\Validator\ConstraintViolationListInterface;

/**
 * Interface OidcValidatableAuthenticationRequestInterface
 *
 * @package HalloVerden\Contracts\Oidc\Requests
 */
interface OidcValidatableAuthenticationRequestInterface extends OidcAuthenticationRequestInterface, ValidatableRequestInterface {

  /**
   * @return ConstraintViolationListInterface
   */
  public function getClientIdViolations(): ConstraintViolationListInterface;

  /**
   * @return ConstraintViolationListInterface
   */
  public function getRedirectUriViolations(): ConstraintViolationListInterface;

  /**
   * @return ConstraintViolationListInterface
   */
  public function getResponseTypeViolations(): ConstraintViolationListInterface;

}
