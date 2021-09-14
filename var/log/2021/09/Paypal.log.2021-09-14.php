<?php die(); ?>
[14:50:23.000000] PaypalCommercePlatform Onboarding AccessToken:Retrieve access token
Runtime id: 77c47e783c56acd2e117db19ea480737
SAPI: apache2handler; IP: 127.0.0.1
URI: //admin.php?target=onboarding_wizard
Method: GET

[14:50:34.000000] array (
  'message' => 'PaypalCommercePlatform Onboarding AccessToken:Access token recieved',
  'data' => 
  array (
    'scope' => 'https://uri.paypal.com/services/customer/partner-referrals/readwrite https://uri.paypal.com/services/payments/realtimepayment https://uri.paypal.com/services/disputes/update-seller https://uri.paypal.com/services/payments/payment/authcapture openid https://uri.paypal.com/services/disputes/read-seller https://uri.paypal.com/services/payments/refund https://uri.paypal.com/services/customer/onboarding/user https://uri.paypal.com/services/risk/raas/transaction-context https://uri.paypal.com/services/partners/merchant-accounts/readwrite https://uri.paypal.com/services/identity/grantdelegation https://api.paypal.com/v1/payments/.* https://uri.paypal.com/services/payments/referenced-payouts-items/readwrite https://uri.paypal.com/services/reporting/search/read https://uri.paypal.com/services/payments/initiatepayment https://uri.paypal.com/services/customer/onboarding/account https://uri.paypal.com/services/customer/partner https://uri.paypal.com/services/customer/onboarding/sessions https://uri.paypal.com/services/customer/merchant-integrations/read https://uri.paypal.com/services/applications/webhooks',
    'access_token' => 'A21AANbXm3mmAN5FZyYZkl4DYKV7_LF2WcZhVjclRXgJginxGo0WtUwPRAaUQEs61uWVFKrhszmPXn99eC3zr40I1rFf9GXsg',
    'token_type' => 'Bearer',
    'app_id' => 'APP-14G02482RW819934D',
    'expires_in' => 32400,
    'nonce' => '2021-09-14T12:47:53ZGqn0uzOce7QBhnGBFoO7eTyjL9D0weW6kvgtRqqedr0',
    'expiration' => 1631656013,
    'partner_id' => '5BPT2FEWWYATY',
  ),
)
Runtime id: 77c47e783c56acd2e117db19ea480737
SAPI: apache2handler; IP: 127.0.0.1
URI: //admin.php?target=onboarding_wizard
Method: GET

[14:50:34.000000] array (
  'message' => 'PaypalCommercePlatform Onboarding:Generate SignUp link',
  'data' => 
  array (
    'operations' => 
    array (
      0 => 
      array (
        'operation' => 'API_INTEGRATION',
        'api_integration_preference' => 
        array (
          'rest_api_integration' => 
          array (
            'integration_method' => 'PAYPAL',
            'integration_type' => 'FIRST_PARTY',
            'first_party_details' => 
            array (
              'features' => 
              array (
                0 => 'PAYMENT',
                1 => 'REFUND',
                2 => 'ACCESS_MERCHANT_INFORMATION',
              ),
              'seller_nonce' => '8a3e263803f92c56d9b3530edb09d5129dbb5804f8acb1be731a3d5f7f4d1ed1a7a7f04de0b0536afaeb0c3c6a0afe5bafe8b44b35fcd818a1babe210564f66a',
            ),
          ),
        ),
      ),
    ),
    'products' => 
    array (
      0 => 'PPCP',
    ),
    'legal_consents' => 
    array (
      0 => 
      array (
        'type' => 'SHARE_DATA_CONSENT',
        'granted' => true,
      ),
    ),
    'partner_config_override' => 
    array (
      'return_url' => 'http://x-cart/admin.php?target=paypal_commerce_platform_settings&action=onboarding_return&return=onboarding_wizard',
    ),
  ),
)
Runtime id: 77c47e783c56acd2e117db19ea480737
SAPI: apache2handler; IP: 127.0.0.1
URI: //admin.php?target=onboarding_wizard
Method: GET

[14:50:36.000000] array (
  'message' => 'PaypalCommercePlatform Onboarding:SignUp link',
  'data' => 
  array (
    'links' => 
    array (
      0 => 
      array (
        'href' => 'https://api.paypal.com/v2/customer/partner-referrals/NmI5M2NiY2EtZDBhOS00MWRlLTkwYWEtN2FkNDA5YmVkMDhkWU1NREZZa3p4WUZLZmVDM0JobkpET05mMXZ5dlVZRTZmaVZLbGxqRFBzZz12Mg==',
        'rel' => 'self',
        'method' => 'GET',
        'description' => 'Read Referral Data shared by the Caller.',
      ),
      1 => 
      array (
        'href' => 'https://www.paypal.com/bizsignup/partner/entry?referralToken=NmI5M2NiY2EtZDBhOS00MWRlLTkwYWEtN2FkNDA5YmVkMDhkWU1NREZZa3p4WUZLZmVDM0JobkpET05mMXZ5dlVZRTZmaVZLbGxqRFBzZz12Mg==',
        'rel' => 'action_url',
        'method' => 'GET',
        'description' => 'Target WEB REDIRECT URL for the next action. Customer should be redirected to this URL in the browser.',
      ),
    ),
  ),
)
Runtime id: 77c47e783c56acd2e117db19ea480737
SAPI: apache2handler; IP: 127.0.0.1
URI: //admin.php?target=onboarding_wizard
Method: GET

