<?php
echo 'Hello, Git!';

phpinfo();

echo 'New text';


echo 'conflict?';

?>

<p>Пора сделать наш hello world более выразительным.
   Так как это может занять некоторое время, лучше переместить эти изменения в отдельную ветку,
   чтобы изолировать их от изменений в ветке master.</p>

<?php

function zoom($a){
    count($a);
    return 'zoom';
}

function fix(){
    zoom(['a', 'z', 'y']);
    return 'fix';
}
?>