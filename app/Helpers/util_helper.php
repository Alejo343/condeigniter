<?php

/**
 * Genera un token unico.
 *
 * @return string The generated token.
 *
 * @throws Exception If the uniqid() function fails to generate a unique identifier.
 */
function generateToken()
{
    return md5(uniqid(mt_rand(), true));
}
