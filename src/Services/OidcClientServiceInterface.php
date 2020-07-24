<?php


namespace HalloVerden\Contracts\Oidc\Services;

use HalloVerden\Contracts\Oidc\Exceptions\ClientNotFoundExceptionInterface;
use HalloVerden\Contracts\Oidc\OidcClientInterface;

/**
 * Interface OidcClientServiceInterface
 *
 * @package HalloVerden\Contracts\Oidc\Services
 */
interface OidcClientServiceInterface {

  /**
   * This should throw a ClientNotFoundException if the client is not found.
   *
   * @param string $clientId
   *
   * @return OidcClientInterface
   * @throws ClientNotFoundExceptionInterface
   */
  public function getOIDCClient(string $clientId): OidcClientInterface;

  /**
   * This should throw a ClientNotFoundException if the client is not found.
   *
   * @param string $secret
   *
   * @return OidcClientInterface
   * @throws ClientNotFoundExceptionInterface
   */
  public function getOIDCClientBySecret(string $secret): OidcClientInterface;

}
