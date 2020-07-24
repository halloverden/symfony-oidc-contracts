<?php


namespace HalloVerden\Contracts\Oidc\Tokens;

/**
 * Interface OidcAccessTokenInterface
 *
 * @package HalloVerden\Contracts\Oidc\Tokens
 */
interface OidcAccessTokenInterface extends OidcTokenInterface {

  /**
   * @return int
   */
  public function getExp(): int;

  /**
   * @return string
   */
  public function getJti(): string;

  /**
   * @return string
   */
  public function getScope(): string;

  /**
   * @return int
   */
  public function getSubUpdatedAt(): int;

}
