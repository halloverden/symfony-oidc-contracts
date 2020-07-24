<?php


namespace HalloVerden\Contracts\Oidc;

/**
 * Interface OidcEndUserInterface
 *
 * @package HalloVerden\Contracts\Oidc
 */
interface OidcEndUserInterface {

  /**
   * @return string
   */
  public function getIdentifier(): string;

}
