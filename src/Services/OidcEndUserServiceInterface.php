<?php


namespace HalloVerden\Contracts\Oidc\Services;


use HalloVerden\Contracts\Oidc\OidcClientInterface;
use HalloVerden\Contracts\Oidc\OidcEndUserInterface;

/**
 * Interface OidcEndUserServiceInterface
 *
 * @package HalloVerden\Contracts\Oidc\Services
 */
interface OidcEndUserServiceInterface {

  /**
   * Check if the user is authenticated
   *
   * @return bool
   */
  public function isAuthenticated(): bool;

  /**
   * Check that the user have given consent for the given client and scope
   *
   * @param OidcClientInterface $client
   * @param string              $scopes
   *
   * @return bool
   */
  public function gotConsent(OidcClientInterface $client, string $scopes): bool;

  /**
   * @return OidcEndUserInterface
   */
  public function getEndUser(): OidcEndUserInterface;

  /**
   * The timestamp the user authenticated
   *
   * @return int
   */
  public function getEndUserAuthTime(): int;

}
