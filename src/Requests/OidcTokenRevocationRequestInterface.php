<?php


namespace HalloVerden\Contracts\Oidc\Requests;

/**
 * Interface OidcTokenRevocationRequestInterface
 *
 * @package HalloVerden\Contracts\Oidc\Requests
 */
interface OidcTokenRevocationRequestInterface {

  /**
   * @return string
   */
  public function getTokenParam(): string;

  /**
   * @return string|null
   */
  public function getTokenTypeHintParam(): ?string;

  /**
   * @return string|null
   */
  public function getClientId(): ?string;

  /**
   * @return string|null
   */
  public function getClientSecret(): ?string;

}
