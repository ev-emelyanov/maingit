<?php
echo 'Hello, Git!';

phpinfo();

echo 'New text';
echo 'New text2';

?>

<p>Пора сделать наш hello world более выразительным.
   Так как это может занять некоторое время, лучше переместить эти изменения в отдельную ветку,
   чтобы изолировать их от изменений в ветке master.

	Изменения в мастер
</p>

<?php

function zoom($a, $b = 'string'){
    count($a);
    echo $b;
    echo $a;
    return 'zoom';
}

function fix(){
    zoom(['a', 'z', 'y', 'b']);
    return 'fix';
}
?>