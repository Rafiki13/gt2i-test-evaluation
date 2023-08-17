<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQC/sR4JSLcgR1EB'."\n".'vCVe3MVh/Z1CqVlOQsLemNIemHnpbiRgZ6au0YBO12xtcBoww1cqazYmcOncj6Xr'."\n".'IXgVdh0lXiMJDdOw0cB9CfGuilIOwlFzEsgQxQC4h+zzlmkXeNdHqy3bhuPuhJ+R'."\n".'kiUBmCdO99zfhYMikM4CuCm3ifqgabXgqaaMd3YgUCTcriylEwTUGluIXQfg62BE'."\n".'P1Jrvw/9Aay+a6oGw6bwUjwO00P79737rFv98hVjYD7EmfFwpX0cXO/vj/4KLAw1'."\n".'AbYD+k7GFuat4r7nUbzMCnEwNKk9VC3E6nSk8VQuU7+SuIjGz3xBslLALqrgVkp9'."\n".'l40lfynNAgMBAAECggEBAKG3kchxURTpNX0KNljOVbLym85WQmJUzkOul216Yzc8'."\n".'VXIDX8qSMfXRpca50U6cLZg6tIc/sPwDMA2qwb0RVUtmHJaR1KqSehrC3eLLDKko'."\n".'5D/5c1E6cf47pfpmRSipKK1sy5YtOXPK7TeJHLE4pMjpMKxd3aC2myYOKhuOSyMy'."\n".'Md/xmAXM2myPFb8oaaqdi9zqns49nFz0TeRje9MFjc7dsRhI/6yrEuNBIFHCRPvL'."\n".'fMnzmxP2mL/AR4pgfWN5fZwcCn8Mq/F3kRCQD320y9sKul4E35elALlMOn8lUbKq'."\n".'p/MtiuHc7VOpkUsxohwqnI+6zzdZgK1RKwQGhi4mWCECgYEA/xKowh43xu6RSwQb'."\n".'Sxpy0YwhvT1VeWBQ1PXL4H0O8AaNg7tFBsTapyDZClgCkphnj8wD6Z7xWwhIWQ+d'."\n".'5K7G+XOqJpTZqIKXe7uLH67oH5MDmstaVt0mm653QmDEW5aLgXF6BOHL1hY+g/kV'."\n".'cAiHM6rL2xj5PBIOB2sXnD+ZJ6UCgYEAwGN7sx32HlJ88DyRMRo1MZ3jIEvaDX9P'."\n".'C2l8LAl0GXp8ll5tClPeBxed4tDWw6swwhsK3dJnOUcXNx30v8L4xGjmd1kh74s4'."\n".'0ZybIh6eTSYD9ZHQLALeVeTa4fhbVESlErzhfgV/kpDvywgMr/QDPmDU3kIMj9Hv'."\n".'rNgRjkMWoQkCgYAbdVfDZdtdR+tOJwgFIri/hBVRuNuNsGejNT6YUP4dqqbrSmqY'."\n".'2vIq0adrrKPCQjPL0AuPx7N1uEOJitvVdVcoHWJwus9fi4dhI4RLidmlJH9b145H'."\n".'EZGJatOdyqr4rREhgyS+h8wYpNZgAJ1lLRXY4wcE9ABIji0CcW3ePR5wnQKBgFm/'."\n".'zxwfFQrONmSoDJ+Yd0o/Oo59dCqpwkkzm267tkKQhoBranjP6Rrr5IbEH/xF50gV'."\n".'73rNxcPNq0HWIrA2l3Cg8yqoFRG3o/j9Es3W9MhOvLgZnsB5UhlF2uphvtFP+KYG'."\n".'ITd1/y5zmLnhdnG65qx55bQNoeiR6jp6za3NFEhpAoGBAJyPZdjCBeBgC/RAEMU3'."\n".'/ThRqFfPvAwK8tr9WzJrJgHCvfMPuzCk6tmb9EeBPDn+JtxXKCdUIcYWsCRh1zuK'."\n".'FspsSw4Es8v9CGYU01KFUQaRyRU53qCsqKTJlgI09aMFIHGqw+j26W5E8A6k073X'."\n".'hCsmnWMi5rC60ovxtWqdZUk1'."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000dcd8c1aa7fc30286d87e4fa27204e3bf67464f3adc705c273aff37dc3c7e8bb5f161e1cc8fa810b16090ec2783c2c7a1f60cd13813bf84cf03d2809258b87aa1');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);
