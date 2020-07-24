<?php


namespace HalloVerden\Contracts\Oidc\Services;


use HalloVerden\Contracts\Oidc\OidcAuthCodeInterface;
use HalloVerden\Contracts\Oidc\Tokens\OidcRefreshTokenInterface;

/**
 * Interface OidcRefreshTokenServiceInterface
 *
 * @package HalloVerden\Contracts\Oidc\Services
 */
interface OidcRefreshTokenServiceInterface {

  /**
   * @param OidcAuthCodeInterface $authCode
   *
   * @return OidcRefreshTokenInterface
   */
  public function createRefreshToken(OidcAuthCodeInterface $authCode): OidcRefreshTokenInterface;

  /**
   * @param string $jwt
   *
   * @return OidcRefreshTokenInterface|null
   */
  public function verifyAndGetRefreshToken(string $jwt): ?OidcRefreshTokenInterface;

  /**
   * @param OidcRefreshTokenInterface $refreshToken
   */
  public function revokeRefreshToken(OidcRefreshTokenInterface $refreshToken): void;

}
