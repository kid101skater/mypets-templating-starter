<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
    </head>
    <body>
      <h1><?= $title ?></h1>
      <p>User logged in as <?= $username ?> using <?= $password ?></p>
 
        <h3>Tempature</h3>
        <p>Fahrenheit: <?= $temp ?> degrees</p>
        <p>Celsius: <?= $temp - 32 * (5.0/9.0) ?> degrees</p>
        
        <p>I like <?= $color ?></p>
        <p>Radius circumference: <?= 2 * 3.14 * $radius ?></p>
        
        <h3>Bookmarks</h3>
        <p>First bookmark is <?= $bookmarks[0] ?></p>
        <ul>
            <?php foreach (($bookmarks?:[]) as $bookmark): ?>
                <li><a href="<?= $bookmark ?>"> <?= str_replace('http://', '', $bookmark); ?></a></li>
            <?php endforeach; ?>
        </ul>
        
        <h3>Addresses</h3>
        <p> <?= $addresses['primary'] ?></p>
        <p> <?= $addresses['secondary'] ?></p>
        
        <?php foreach (($addresses?:[]) as $key=>$value): ?>
            <p><?= $key ?> - <?= $value ?></p>
        <?php endforeach; ?>
        
        <?php foreach (($desserts?:[]) as $key_dessert=>$value_dessert): ?>
            <input type="checkbox" name="<?= $key_dessert ?>" value="<?= $key_dessert ?>"> <?= $value_dessert.PHP_EOL ?>
        <?php endforeach; ?>
        
        <h3>Message</h3>
        <?php if ($preferredCustomer): ?>
            <strong>Thank you for being a preferred customer!</strong>
        <?php endif; ?>
        
        <?php if ($lastLogin > strtotime('-1 month')): ?>
            Welcome Back!
            <?php else: ?>Its been a while!
        <?php endif; ?>
        
        <h3>My Pet</h3>
        <p> <?= $myPet->getName() ?></p>
        <p> <?= $myPet->getColor() ?></p>
        
        <h3>Pet Check</h3>
        <?php if ($myPet2->getColor() == $color): ?>
            pet image here
            <?php else: ?>pet was not same color
        <?php endif; ?>
        
    </body>
</html>