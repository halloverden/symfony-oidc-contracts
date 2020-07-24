<?php


namespace HalloVerden\Contracts\Oidc\Services;

use HalloVerden\Contracts\Oidc\Exceptions\TokenRequestExceptionInterface;
use HalloVerden\Contracts\Oidc\OidcClientInterface;
use HalloVerden\Contracts\Oidc\Requests\OidcTokenRevocationRequestInterface;
use HalloVerden\Contracts\Oidc\Tokens\OidcTokenInterface;

/**
 * Interface OidcTokenServiceInterface
 *
 * @package HalloVerden\Contracts\Oidc\Services
 */
interface OidcTokenServiceInterface {

  /**
   * @param string $jwt
   *
   * @return OidcTokenInterface|null
   */
  public function verifyAndGetToken(string $jwt): ?OidcTokenInterface;

  /**
   * @param OidcTokenInterface $token
   *
   * @return OidcClientInterface
   */
  public function getClient(OidcTokenInterface $token): OidcClientInterface;

  /**
   * @param                             $token
   * @param OidcTokenRevocationRequestInterface $request
   *
   * @throws TokenRequestExceptionInterface if unable to revoke token
   */
  public function revokeToken($token, OidcTokenRevocationRequestInterface $request): void;

}
