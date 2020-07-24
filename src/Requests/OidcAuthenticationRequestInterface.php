<?php


namespace HalloVerden\Contracts\Oidc\Requests;

/**
 * Interface OidcAuthenticationRequestInterface
 *
 * @package HalloVerden\Contracts\Oidc\Requests
 */
interface OidcAuthenticationRequestInterface {

  /**
   * @return string
   */
  public function getClientIdParam(): string;

  /**
   * @return string
   */
  public function getScopeParam(): string;

  /**
   * @return string
   */
  public function getResponseTypeParam(): string;

  /**
   * @return string|null
   */
  public function getStateParam(): ?string;

  /**
   * @return string
   */
  public function getRedirectUriParam(): string;

  /**
   * @return string|null
   */
  public function getResponseModeParam(): ?string;

  /**
   * @return string|null
   */
  public function getNonceParam(): ?string;

  /**
   * @return string|null
   */
  public function getDisplayParam(): ?string;

  /**
   * @return string|null
   */
  public function getPromptParam(): ?string;

  /**
   * @return int|null
   */
  public function getMaxAgeParam(): ?int;

  /**
   * @return string|null
   */
  public function getUiLocalesParam(): ?string;

  /**
   * @return string|null
   */
  public function getIdTokenHintParam(): ?string;

  /**
   * @return string|null
   */
  public function getLoginHintParam(): ?string;

  /**
   * @return string|null
   */
  public function getAcrValuesParam(): ?string;

  /**
   * @return string|null
   */
  public function getRequestParam(): ?string;

  /**
   * @return string|null
   */
  public function getRequestUriParam(): ?string;

  /**
   * @return string|null
   */
  public function getRegistrationParam(): ?string;

  /**
   * @return string|null
   */
  public function getCodeChallengeParam(): ?string;

  /**
   * @return string|null
   */
  public function getCodeChallengeMethodParam(): ?string;

  /**
   * The request needs to hold the response mode even if it's not defined and the default value is defined by the flow, so wee need to be able to set it.
   *
   * @param string|null $response_mode
   *
   * @return OidcAuthenticationRequestInterface
   */
  public function setResponseMode(?string $response_mode): OidcAuthenticationRequestInterface;

  /**
   * The URL that was sent to create this request
   *
   * @return string
   */
  public function getRequestUrl(): string;
}
