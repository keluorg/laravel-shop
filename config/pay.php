<?php

return [
    'alipay' => [
        'app_id'         => '2016092600599157',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtrkUTT9wM7WPjTTznLEHEVYzThtdYjgXd+dFEo3uwmRAhAcd5A5tLyoQ5eFrlVtnm1I+d8EFjd8VtTTjJ4cgVSbCZqm4Sc6oCNlafEPWZcn9S+F+1DpZl6u0xRRjkX8eJdg2O7llQFX/e7vicdtanrUq8WqJWpYercZgP32poLSJPVEnnjx9/TsG0vLEx988vveLhpMjjnWqlpEMn/sBdlvwRsz8QGL3ZWNbgqdd3ua7p5NCADj2RvbXtfcW3VzilXvIPifc5UxL+yq1ybsMfalHQoR5ZXyMEdaufXr5xasKy0Y0u7En7yOaX7OTJ0X7Gr7KBVVcOsHntce3/JTgmQIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEA04XWIaH2jpRJ9NKLcn6fRrk/u2Z2X7vM/5V9KiGCjZFoTTgVXPRbY+WKSlZg16Sz9sFyJx6O87zywyY9kefGtcT7yGlkaNkx6Uo5E0mK7iMTmXT5kUQ7hC2wD913Lyj6sLjVGfe8lv/w3PXZRigKMKST7Xvkckhf3jBHvE9KIB4dTorrDWyOX6KLnyVUrON54y7lh7nKQR5HxDgOFrV1rk8QqLrohYAEPJca8VPbjPzUjsWaqbnIaulK77mzWpmEgA/8hFtHzt5/ZA3H1QYAyhSdeywv9uvE6OdOyJ6GHvCAYfSHdfXFLo6TUzcc7F2fed+Ij2grf4hnjmxPQwDW+QIDAQABAoIBAFmBhL7unjpvHWxvu3pTgmqW8RUHooeYHIL6auBtFaV6JjymwsN200VOWFpkes5Fb7G24esTz0Hsbn2NrPgUr80y8ag4kLidT7V8JvK2aAek6CJDkWebC+Q+wQW1nT1jhdFKJUK7xh3PZ8jYb3x0bPtwaPhROLXzUj3fCDvzAVbdIcZCrhDVTyOEpBModSxfx4UvUCDdACSg1zjEhLeYAvV7rKhc9DDV5hkaErx++/AndwF9Js62uc0Q3Iezz5Nml1JIWTKis5VH0psVuC8UM/rNlDVb50NzbHso9c86t+Io0s8whJYrM4KiVxbDYVMUvGuHm119IRmNT7IMBPCrUAECgYEA/K8xhH5putbaSbMApOTT5k4iqgGZ4yvVCZxgHIyMBaurW8F+vU3WcJyKTZzsh8QNG/LnEyRYpzm86/rTKGLQ3YcLqAQZ4RQzHYRuHcAL2ukL7Ifblmn56UHvGkLCfAj2vCrbptjNFbzTuklhbJ0/fVSC78+RFrFq+FUABtEoT4ECgYEA1kxf+GEehSwQ5HetapOeZx2kwcfzgnwc3Eo5FD9+Ovjw3B36zoUALN9f4m1P4EFHrxLNgRjqvmuG5VufUkuoNQO6aUyPxbM3VBxTPJemjwzZb8A/KmA0Nm00rdswIB8zSVRGJjq4H3USrRZwsswW3SGFch2pYZ76AxPMl6Rkw3kCgYAers9efVMtYuWCyX+shjTM5HQFHMio8yudTSXGkbJ3Bc97BtXy+r6tUfThU8rM+Zt151rz0hgJxlMQfJajcsxV+g4KSuUxlZhXXztX1XgbDu1pvV2GuDumfWEhWTXwhc4gLzwY2H6ewx0ao8p2u+l3uIllwVim3shUe03ThhZVAQKBgDVceT1A+beRfHdXcaArN/NXR1JVdsZUH1+fP81R7h3DJT66XFyWc6+4w4h/Tbd6qd3nYbK2wKU/4ywzf12fpzfkQMO9o8NH2AwirXtWC8xtF6ujBFeJ8xZmZQqxnK8y9bNZv8n/Lx/uKANfphpvhXX0xeTfi/DaBElF4dkUv16JAoGAcQwN5xJJYc62rrtuTwBjzHVv/rFqBAXrN/6je/MXMjjHMPonlIHfVcTAdqFcsSehzPdX98r3cF7QTs1GbZvB6RU3Y6DlTXF/jIOTpuSuelxrrJnq5AMUAgKRScQkq/MTAdTChzARLR/NeF63yYmLVSmSC7OMyApWRpy2JFeYe8k=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
