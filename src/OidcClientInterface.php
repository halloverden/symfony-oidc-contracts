<?php


namespace HalloVerden\Contracts\Oidc;

/**
 * Interface OidcClientInterface
 *
 * @package HalloVerden\Contracts\Oidc
 */
interface OidcClientInterface {

  /**
   * false=Confidential, true=Public
   *
   * @return bool
   */
  public function isPublic(): bool;

  /**
   * Validate that this url is available for this client
   *
   * @param string $redirectUri
   *
   * @return bool
   */
  public function isValidRedirectUri(string $redirectUri): bool;

  /**
   * @param string $postLogoutRedirectUri
   *
   * @return bool
   */
  public function isValidPostLogoutRedirectUri(string $postLogoutRedirectUri): bool;

  /**
   * Validate that this scope is available for this client
   *
   * @param string $scope
   *
   * @return bool
   */
  public function isValidScope(string $scope): bool;

  /**
   * Unique identifier for this client
   *
   * @return string
   */
  public function getIdentifier(): string;

  /**
   * @return string
   */
  public function getSecret(): ?string;
}
