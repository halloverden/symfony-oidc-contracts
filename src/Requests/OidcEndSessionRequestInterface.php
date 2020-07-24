<?php


namespace HalloVerden\Contracts\Oidc\Requests;

/**
 * Interface OidcEndSessionRequestInterface
 *
 * @package HalloVerden\Contracts\Oidc\Requests
 */
interface OidcEndSessionRequestInterface {

  /**
   * @return string|null
   */
  public function getIdTokenHint(): ?string;

  /**
   * @return string|null
   */
  public function getPostLogoutRedirectUri(): ?string;

  /**
   * @return string|null
   */
  public function getState(): ?string;

}
