<?php


namespace HalloVerden\Contracts\Oidc\Services;


use HalloVerden\Contracts\Oidc\OidcClientInterface;
use HalloVerden\Contracts\Oidc\OidcEndSessionAttemptInterface;

/**
 * Interface OidcEndSessionAttemptServiceInterface
 *
 * @package HalloVerden\Contracts\Oidc\Services
 */
interface OidcEndSessionAttemptServiceInterface {

  /**
   * @param string|null              $redirectUri
   * @param OidcClientInterface|null $client
   *
   * @return OidcEndSessionAttemptInterface
   */
  public function createOIDCEndSessionAttempt(?string $redirectUri, ?OidcClientInterface $client): OidcEndSessionAttemptInterface;

}
