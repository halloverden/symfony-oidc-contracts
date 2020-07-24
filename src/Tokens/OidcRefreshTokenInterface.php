<?php


namespace HalloVerden\Contracts\Oidc\Tokens;

/**
 * Interface OidcRefreshTokenInterface
 *
 * @package HalloVerden\Contracts\Oidc\Tokens
 */
interface OidcRefreshTokenInterface extends OidcTokenInterface {

  /**
   * @return int
   */
  public function getExp(): int;

  /**
   * @return string
   */
  public function getJti(): string;

}
