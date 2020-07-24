<?php


namespace HalloVerden\Contracts\Oidc;


use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Interface OidcEndSessionResponseInterface
 *
 * @package HalloVerden\Contracts\Oidc
 */
interface OidcEndSessionResponseInterface {

  /**
   * @return RedirectResponse
   */
  public function getRedirectResponse(): RedirectResponse;

}
