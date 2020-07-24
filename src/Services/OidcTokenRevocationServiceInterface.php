<?php


namespace HalloVerden\Contracts\Oidc\Services;

use HalloVerden\Contracts\Oidc\Exceptions\TokenRequestExceptionInterface;
use HalloVerden\Contracts\Oidc\Requests\OidcTokenRevocationRequestInterface;

/**
 * Interface OidcTokenRevocationServiceInterface
 *
 * @package HalloVerden\Contracts\Oidc\Services
 */
interface OidcTokenRevocationServiceInterface {

  /**
   * @param OidcTokenRevocationRequestInterface $request
   *
   * @throws TokenRequestExceptionInterface
   */
  public function revoke(OidcTokenRevocationRequestInterface $request): void;

}
