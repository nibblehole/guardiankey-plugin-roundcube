<?php

// You need register in https://panel.guardiankey.io for get infos below

$rcmail_config['GKconfig'] =  array(
    'email' => "",   /* Admin e-mail */
    'agentid' => "",  /* ID for the agent (your system) */
    'key' => "",     /* Key in B64 to communicate with GuardianKey */
    'iv' => "",      /* IV in B64 for the key */
    'service' => "",      /* Your service name*/
    'orgid' => "",   /* Your Org identification in GuardianKey */
    'authgroupid' => "", /* A Authentication Group identification, generated by GuardianKey */
    'reverse' => "True", /* If you will locally perform a reverse DNS resolution */
	'api_url' => "https://api.guardiankey.io",
);

/* The option below indicates if username is an e-mail.
   If not, you need implement a webhook for receive notification:
     https://guardiankey.io/documentation/api/#receiving-via-webhook */

$rcmail_config['username_is_email'] = 'yes'; // 'yes' or 'no'
