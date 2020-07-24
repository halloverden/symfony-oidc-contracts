<?php


namespace HalloVerden\Contracts\Oidc;

/**
 * Interface OidcAuthCodeInterface
 *
 * @package HalloVerden\Contracts\Oidc
 */
interface OidcAuthCodeInterface {
  const CHALLENGE_METHOD_PLAIN = 'plain';
  const CHALLENGE_METHOD_S256 = 'S256';
  const VALID_CHALLENGE_METHODS = [
    self::CHALLENGE_METHOD_PLAIN,
    self::CHALLENGE_METHOD_S256,
  ];

  /**
   * @return OidcClientInterface
   */
  public function getOIDCClient(): OidcClientInterface;

  /**
   * @return OidcEndUserInterface
   */
  public function getEndUser(): OidcEndUserInterface;

  /**
   * @return string|null
   */
  public function getNonce(): ?string;

  /**
   * @return string|null
   */
  public function getCodeChallenge(): ?string;

  /**
   * @return string|null
   */
  public function getCodeChallengeMethod(): ?string;

  /**
   * @return string
   */
  public function getScope(): string;

  /**
   * @return string
   */
  public function getRedirectUrl(): string;

  /**
   * @return int
   */
  public function getEndUserAuthTime(): int;

  /**
   * @return string
   */
  public function getIdentifier(): string;

  /**
   * @return bool
   */
  public function isExpired(): bool;

  /**
   * @return bool
   */
  public function isUsed(): bool;

}
