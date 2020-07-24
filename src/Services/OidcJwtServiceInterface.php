<?php


namespace HalloVerden\Contracts\Oidc\Services;


use HalloVerden\Contracts\Oidc\Tokens\OidcTokenInterface;

/**
 * Interface OidcJwtServiceInterface
 *
 * @package HalloVerden\Contracts\Oidc\Services
 */
interface OidcJwtServiceInterface {

  /**
   * @param OidcTokenInterface $token
   *
   * @return string
   */
  public function createJWT(OidcTokenInterface $token): string;

  /**
   * @return string
   */
  public function getSignatureAlgorithm(): string;

}
