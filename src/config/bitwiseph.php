<?php
return [
    'instagram'=>[
        'app_secret'=>env('INSTAGRAM_APP_SECRET'),
        'app_id'=>env('INSTAGRAM_APP_ID'),
        'app_redirect'=>env('INSTAGRAM_APP_REDIRECT_URI'),
        'api_base_url'=>env('INSTAGRAM_API_URL','https://api.instagram.com/'),
        'graph_base_url'=>env('INSTAGRAM_GRAPH_URL','https://graph.instagram.com/'),
        'access_token'=>env('INSTAGRAM_ACCESS_TOKEN'),
        'user_id'=>env('INSTAGRAM_USER_ID'),
    ]
];
