<?php

function user()
{
    return $_SESSION['user'] ?? null;
}
