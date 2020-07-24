<?php


namespace HalloVerden\Contracts\Oidc\Services;


use HalloVerden\Contracts\Oidc\OidcEndSessionResponseInterface;
use HalloVerden\Contracts\Oidc\Requests\OidcEndSessionRequestInterface;

/**
 * Interface OidcEndSessionServiceInterface
 *
 * @package HalloVerden\Contracts\Oidc\Services
 */
interface OidcEndSessionServiceInterface {

  /**
   * @param OidcEndSessionRequestInterface $endSessionRequest
   *
   * @return OidcEndSessionResponseInterface
   */
  public function handleOIDCEndSession(OidcEndSessionRequestInterface $endSessionRequest): OidcEndSessionResponseInterface;

}
