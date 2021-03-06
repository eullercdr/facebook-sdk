<?php
/**
 * Created by PhpStorm.
 * User: Euller Cristian
 * Date: 20/05/2018
 * Time: 17:00
 */

namespace CodeBot;


class WebHook
{
    public function check(string $token)
    {
        $hubMode = filter_input(INPUT_GET, 'hub_mode');
        $hubVerifyToken = filter_input(INPUT_GET, 'hub_verify_token');

        if ($hubMode === 'subscribe' and $hubVerifyToken === $token) {
            return filter_input(INPUT_GET, 'hub_challenge');
        }

        return false;
    }
}