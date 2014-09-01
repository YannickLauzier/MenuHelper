# MenuHelper pour CakePHP 3

L'idée principale de ce helper est de s'implifier la création d'un menu tout en ajoutant l'état ```active``` au bouton selon l'url de la page. Par exemple si vous êtes sur la page ```/contact``` et que votre beaucoup indique l'url ```/contact```, une classe CSS sera ajouté à l'élément HTML.

### Configuration

Dans votre AppController, vous devez ajouter le helper Menu.
```php
public $helpers = 
[
	/* ... */
	'Menu' => [ 'activeClass' => 'votreClassActive' ] 
];
```

```activeClass``` est, par défaut, à ```active```.

### Utilisation

Dans votre vue/layout, vous pouvez appeler la méthode ```MenuHelper::item(/* ... */)``` de la même façon que vous utilisez la méthode ```HtmlHelper::link(/* ... */)```.
```php
<nav>
	<?= $this->Menu->item(
		'Item1', 
		[ 'controller' => 'Pages', 'action' => 'index' ]
	); ?>
	<?= $this->Menu->item(
		'Item2', 
		[ 'controller' => 'Pages', 'action' => 'action1' ]
	); ?>
	<?= $this->Menu->item(
		'Item2', 
		[ 'controller' => 'Pages', 'action' => 'action2' ]
	); ?>
	<?= $this->Menu->item(
		'Item2', 
		[ 'controller' => 'Pages', 'action' => 'action3' ]
	); ?>
</nav>
```

Amicalement,
Yannick Lauzier.
