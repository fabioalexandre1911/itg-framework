<?php
function sierraFrameworkRequire($filepath)
{
    return require_once REQUIRE_PATH . $filepath;
}

function sierraFrameworInclude($filepath)
{
    return include_once INCLUDE_PATH . $filepath;
}
