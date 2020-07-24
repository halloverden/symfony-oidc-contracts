<?php


namespace HalloVerden\Contracts\Oidc;


use HalloVerden\Contracts\Oidc\Requests\OidcTokenRequestInterface;

/**
 * Interface OidcGrantInterface
 *
 * @package HalloVerden\Contracts\Oidc
 */
interface OidcGrantInterface {

  /**
   * @param OidcTokenRequestInterface $request
   *
   * @return bool
   */
  public function supports(OidcTokenRequestInterface $request): bool;

  /**
   * @param OidcTokenRequestInterface $request
   *
   * @return mixed
   */
  public function validate(OidcTokenRequestInterface $request);

  /**
   * @param OidcTokenRequestInterface $request
   *
   * @return OidcAuthenticationResponseInterface
   */
  public function createResponse(OidcTokenRequestInterface $request): OidcAuthenticationResponseInterface;

}
