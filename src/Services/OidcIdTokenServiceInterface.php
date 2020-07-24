<?php


namespace HalloVerden\Contracts\Oidc\Services;


use HalloVerden\Contracts\Oidc\OidcClientInterface;
use HalloVerden\Contracts\Oidc\OidcEndUserInterface;
use HalloVerden\Contracts\Oidc\Tokens\OidcIdTokenInterface;

/**
 * Interface OidcIdTokenServiceInterface
 *
 * @package HalloVerden\Contracts\Oidc\Services
 */
interface OidcIdTokenServiceInterface {

  /**
   * @param OidcEndUserInterface $user
   * @param OidcClientInterface  $client
   * @param int                  $authTime
   * @param string|null          $nonce
   * @param string|null          $accessTokenJWT used to create at_hash
   * @param string|null          $code used to create c_hash
   * @param string|null          $scope
   *
   * @return OidcIdTokenInterface
   */
  public function createIdToken(OidcEndUserInterface $user, OidcClientInterface $client, int $authTime, ?string $nonce, ?string $accessTokenJWT = null, ?string $code = null, ?string $scope = null): OidcIdTokenInterface;

  /**
   * Get claims for a specific end user based on the scope.
   *
   * @param OidcEndUserInterface $endUser
   * @param string               $scopes
   *
   * @return array
   */
  public function getEndUserClaims(OidcEndUserInterface $endUser, string $scopes): array;

}
