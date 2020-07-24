<?php


namespace HalloVerden\Contracts\Oidc\Services;

use HalloVerden\Contracts\Oidc\OidcAuthCodeInterface;
use HalloVerden\Contracts\Oidc\OidcClientInterface;
use HalloVerden\Contracts\Oidc\OidcEndUserInterface;
use HalloVerden\Contracts\Oidc\Requests\OidcAuthenticationRequestInterface;
use HalloVerden\Contracts\Oidc\Tokens\OidcRefreshTokenInterface;

/**
 * Interface OidcAuthCodeServiceInterface
 *
 * @package HalloVerden\Contracts\Oidc\Services
 */
interface OidcAuthCodeServiceInterface {

  /**
   * @param OidcEndUserInterface               $endUser
   * @param OidcClientInterface                $client
   * @param OidcAuthenticationRequestInterface $request
   * @param int                                $authTime
   *
   * @return OidcAuthCodeInterface
   */
  public function createAuthCode(OidcEndUserInterface $endUser, OidcClientInterface $client, OidcAuthenticationRequestInterface $request, int $authTime): OidcAuthCodeInterface;

  /**
   * @param string $identifier
   *
   * @return OidcAuthCodeInterface|null
   */
  public function getAuthCode(string $identifier): ?OidcAuthCodeInterface;

  /**
   * @param OidcRefreshTokenInterface $refreshToken
   *
   * @return OidcAuthCodeInterface
   */
  public function getAuthCodeFromRefreshToken(OidcRefreshTokenInterface $refreshToken): OidcAuthCodeInterface;

  /**
   * Revoke all tokens (access+refresh) associated with this authCode
   *
   * @param OidcAuthCodeInterface $authCode
   */
  public function revokeTokens(OidcAuthCodeInterface $authCode): void;

}
