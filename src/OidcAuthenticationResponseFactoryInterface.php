<?php


namespace HalloVerden\Contracts\Oidc;


use HalloVerden\Contracts\Oidc\Requests\OidcAuthenticationRequestInterface;

/**
 * Interface OidcAuthenticationResponseFactoryInterface
 *
 * @package HalloVerden\Contracts\Oidc
 */
interface OidcAuthenticationResponseFactoryInterface {

  /**
   * @param OidcAuthenticationRequestInterface $request
   * @param OidcFlowInterface                  $flow
   * @param array                              $validResponseParameters
   * @param string|null                        $accessTokenJWT
   * @param string|null                        $code
   * @param string|null                        $idTokenJWT
   * @param int|null                           $expiresIn
   *
   * @return OidcAuthenticationResponseInterface
   */
  public function create(OidcAuthenticationRequestInterface $request, OidcFlowInterface $flow, array $validResponseParameters, ?string $accessTokenJWT, ?string $code, ?string $idTokenJWT, ?int $expiresIn): OidcAuthenticationResponseInterface;

}
