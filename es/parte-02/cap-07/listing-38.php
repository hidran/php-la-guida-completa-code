<?php

function getList()
{
    $content = <<<EOD
        <ul>
            <li>uno</li>
            <li>dos</li>
        </ul>
        EOD;

    return $content;
}

echo getList();
