<?php

function getList()
{
    $content = <<<EOD
        <ul>
            <li>one</li>
            <li>two</li>
        </ul>
        EOD;

    return $content;
}

echo getList();
