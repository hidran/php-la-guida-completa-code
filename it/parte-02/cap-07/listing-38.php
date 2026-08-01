<?php

function getList()
{
    $content = <<<EOD
        <ul>
            <li>uno</li>
            <li>due</li>
        </ul>
        EOD;

    return $content;
}

echo getList();
