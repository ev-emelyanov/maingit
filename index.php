﻿<?php
echo 'Hello, Git!';

phpinfo();

echo 'New text';

?>

<p>Пора сделать наш hello world более выразительным.
   Так как это может занять некоторое время, лучше переместить эти изменения в отдельную ветку,
   чтобы изолировать их от изменений в ветке master.</p>

<?php

function zoom($a, $b = 'string'){
    count($a);
    echo $b;
    return 'zoom';
}

function fix(){
    zoom(['a', 'z', 'y', 'b']);
    return 'fix';
}
?>