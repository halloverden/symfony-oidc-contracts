<?php


namespace HalloVerden\Contracts\Oidc\Services;

use HalloVerden\Contracts\Oidc\Exceptions\AuthenticationErrorExceptionInterface;
use HalloVerden\Contracts\Oidc\OidcAuthenticationResponseInterface;
use HalloVerden\Contracts\Oidc\Requests\OidcAuthenticationRequestInterface;

/**
 * Interface OidcAuthenticationServiceInterface
 *
 * @package HalloVerden\Contracts\Oidc\Services
 */
interface OidcAuthenticationServiceInterface {

  /**
   * @param OidcAuthenticationRequestInterface $request
   *
   * @return OidcAuthenticationResponseInterface
   * @throws AuthenticationErrorExceptionInterface
   */
  public function handleAuthenticationRequest(OidcAuthenticationRequestInterface $request): OidcAuthenticationResponseInterface;

}
