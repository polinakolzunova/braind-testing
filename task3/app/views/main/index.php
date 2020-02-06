<h1>main index view</h1>
<p><?=$a;?></p>
<p><?=$b;?></p>
<?php foreach($model as $city): ?> 
    <p><?=$city['id'];?> - <?=$city['title'];?></p>
<?php endforeach; ?>