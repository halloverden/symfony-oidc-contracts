<?php


namespace HalloVerden\Contracts\Oidc;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Interface OidcAuthenticationResponseInterface
 *
 * @package HalloVerden\Contracts\Oidc
 */
interface OidcAuthenticationResponseInterface {

  /**
   * @return RedirectResponse
   */
  public function getRedirectResponse(): RedirectResponse;

  /**
   * @return JsonResponse
   */
  public function getJsonResponse(): JsonResponse;

  /**
   * @return Response
   */
  public function getFormPostResponse(): Response;

  /**
   * @return string
   */
  public function getResponseMode(): string;

}
