<?php
function show($data)
echo"<pre>";
print_r($data);
echo"</pre>";
function loadview($view)
{
    require "../app/views/$view.view.php";
}