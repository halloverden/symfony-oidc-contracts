<?php


namespace HalloVerden\Contracts\Oidc\Tokens;

/**
 * Interface OidcTokenInterface
 *
 * @package HalloVerden\Contracts\Oidc\Tokens
 */
interface OidcTokenInterface {
  const TYPE_ACCESS = 'accesstoken';
  const TYPE_ACCESS_CLIENT_CREDENTIALS = 'access_token_client_credentials';
  const TYPE_ID = 'idtoken';
  const TYPE_REFRESH = 'refreshtoken';

  /**
   * @return string
   */
  public function getIss(): string;

  /**
   * @return string
   */
  public function getSub(): string;

  /**
   * @return string
   */
  public function getAud(): string;

  /**
   * @return int
   */
  public function getIat(): int;

  /**
   * @return string
   */
  public function getType(): string;

  /**
   * @return array
   */
  public function getPayload(): array;

}
