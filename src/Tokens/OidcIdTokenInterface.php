<?php


namespace HalloVerden\Contracts\Oidc\Tokens;

/**
 * Interface OidcIdTokenInterface
 *
 * @package HalloVerden\Contracts\Oidc\Tokens
 */
interface OidcIdTokenInterface extends OidcTokenInterface {

  /**
   * @return int
   */
  public function getExp(): int;

  /**
   * @return string
   */
  public function getAuthTime(): string;

  /**
   * @return string|null
   */
  public function getNonce(): ?string;

  /**
   * @return string|null
   */
  public function getAtHash(): ?string;

  /**
   * @return string|null
   */
  public function getCHash(): ?string;

  /**
   * @return array|null
   */
  public function getUserClaims(): ?array;

}
