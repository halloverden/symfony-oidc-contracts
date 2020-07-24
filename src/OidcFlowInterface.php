<?php


namespace HalloVerden\Contracts\Oidc;

use HalloVerden\Contracts\Oidc\Exceptions\AuthenticationErrorExceptionInterface;
use HalloVerden\Contracts\Oidc\Requests\OidcAuthenticationRequestInterface;

/**
 * Interface OidcFlowInterface
 *
 * @package HalloVerden\Contracts\Oidc
 */
interface OidcFlowInterface {
  const RESPONSE_TYPE_CODE = 'code';
  const RESPONSE_TYPE_ID_TOKEN = 'id_token';
  const RESPONSE_TYPE_TOKEN = 'token';

  /**
   * Return true if the flow supports this request
   *
   * @param OidcAuthenticationRequestInterface $request
   *
   * @return bool
   */
  public function supports(OidcAuthenticationRequestInterface $request): bool;

  /**
   * @param OidcAuthenticationRequestInterface $request
   * @param OidcClientInterface                $client
   *
   * @throws AuthenticationErrorExceptionInterface
   */
  public function validateAuthenticationRequest(OidcAuthenticationRequestInterface $request, OidcClientInterface $client): void;

  /**
   * @param OidcAuthenticationRequestInterface $request
   * @param OidcClientInterface                $client
   *
   * @throws AuthenticationErrorExceptionInterface
   */
  public function authenticateEndUser(OidcAuthenticationRequestInterface $request, OidcClientInterface $client): void;

  /**
   * @param OidcAuthenticationRequestInterface $request
   *
   * @return array
   */
  public function getValidResponseParameters(OidcAuthenticationRequestInterface $request): array;

  /**
   * @return string
   */
  public function getDefaultResponseMode(): string;

}
