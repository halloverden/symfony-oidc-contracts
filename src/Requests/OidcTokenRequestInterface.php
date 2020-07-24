<?php


namespace HalloVerden\Contracts\Oidc\Requests;

/**
 * Interface OidcTokenRequestInterface
 *
 * @package HalloVerden\Contracts\Oidc\Requests
 */
interface OidcTokenRequestInterface {
  const GRANT_AUTHORIZATION_CODE = 'authorization_code';
  const GRANT_REFRESH_TOKEN = 'refresh_token';
  const GRANT_CLIENT_CREDENTIALS = 'client_credentials';

  /**
   * @return string
   */
  public function getGrantTypeParam(): string;

  /**
   * @return string|null
   */
  public function getCodeParam(): ?string;

  /**
   * @return string|null
   */
  public function getCodeVerifierParam(): ?string;

  /**
   * @return string|null
   */
  public function getRedirectUriParam(): ?string;

  /**
   * @return string|null
   */
  public function getRefreshTokenParam(): ?string;

  /**
   * @return string|null
   */
  public function getScopeParam(): ?string;

  /**
   * @return string|null
   */
  public function getClientId(): ?string;

  /**
   * @return string|null
   */
  public function getClientSecret(): ?string;

}
