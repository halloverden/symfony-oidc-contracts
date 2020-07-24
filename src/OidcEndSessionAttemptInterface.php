<?php


namespace HalloVerden\Contracts\Oidc;

/**
 * Interface OidcEndSessionAttemptInterface
 *
 * @package HalloVerden\Contracts\Oidc
 */
interface OidcEndSessionAttemptInterface {

  /**
   * @return string
   */
  public function getIdentifier(): string;

}
