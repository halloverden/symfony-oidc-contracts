<?php


namespace HalloVerden\Contracts\Oidc\Services;

use HalloVerden\Contracts\Oidc\Tokens\OidcAccessTokenInterface;
use HalloVerden\Contracts\Oidc\OidcAuthCodeInterface;
use HalloVerden\Contracts\Oidc\OidcClientInterface;
use HalloVerden\Contracts\Oidc\OidcEndUserInterface;

/**
 * Interface OidcAccessTokenServiceInterface
 *
 * @package HalloVerden\Contracts\Oidc\Services
 */
interface OidcAccessTokenServiceInterface {

  /**
   * @param OidcEndUserInterface|null  $endUser
   * @param OidcClientInterface        $client
   * @param string                     $scope
   * @param OidcAuthCodeInterface|null $authCode
   *
   * @return OidcAccessTokenInterface
   */
  public function createAccessToken(?OidcEndUserInterface $endUser, OidcClientInterface $client, string $scope, ?OidcAuthCodeInterface $authCode = null): OidcAccessTokenInterface;

  /**
   * @param string $jwt
   *
   * @return OidcAccessTokenInterface|null
   */
  public function verifyAndGetAccessToken(string $jwt): ?OidcAccessTokenInterface;

  /**
   * @param OidcAccessTokenInterface $accessToken
   */
  public function revokeAccessToken(OidcAccessTokenInterface $accessToken): void;

}
