<?php


namespace HalloVerden\Contracts\Oidc\Services;

use HalloVerden\Contracts\Oidc\Exceptions\TokenRequestExceptionInterface;
use HalloVerden\Contracts\Oidc\Requests\OidcTokenRequestInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Interface OidcTokenRequestServiceInterface
 *
 * @package HalloVerden\Contracts\Oidc\Services
 */
interface OidcTokenRequestServiceInterface {
  /**
   * @param OidcTokenRequestInterface $request
   *
   * @return JsonResponse
   * @throws TokenRequestExceptionInterface
   */
  public function handleTokenRequest(OidcTokenRequestInterface $request): JsonResponse;

}
