<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'TAFE WayFinder';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
	    <?= $this->Flash->render() ?>

	<nav class="large-3 medium-4 columns" id="actions-sidebar">
		<ul class="side-nav">
		<?php if ($auth) { ?>

                        <li>
                        <?php echo $this->Html->link($auth['User']['username'], ['controller'=>'users', 'action'=>'view', $auth['User']['id']]); ?>
                        </a></li>
                        <li>
                            <?php echo $this->Html->link('Log out', ['controller'=>'users', 'action'=>'logout']); ?>
                        </li>
                        <?php } else { ?>
                            <li>
                                <?php echo $this->Html->link('Log in', ['controller'=>'users', 'action'=>'login']); ?>
                            </li>
                        <?php } ?>

        <li class="heading"><?= __('Events') ?></li>
		<li><?= $this->Html->link('Add New Event', ['controller'=>'events', 'action'=>'add']); ?></li>
        <li><?= $this->Html->link('View All Events', ['controller'=>'events']); ?> </li>
		<!-- entries within these comments probably need figuring out to get specific views -->
		<li><?= $this->Html->link('View Events by Campus', ['controller'=>'events']); ?></li>
		<li><?= $this->Html->link('View Unapproved Events', ['controller'=>'events']); ?></li>
		<!-- entries end here -->



		<li class="heading"><?= __('Room Maps') ?></li>
		<li><?= $this->Html->link('View Maps', ['controller'=>'maps']); ?></li>

		<li class="heading"><?= __('Admin') ?></li>
		<li><?= $this->Html->link('Add New User', ['controller'=>'users', 'action'=>'add']); ?> </li>
		<li><?= $this->Html->link('View Users', ['controller'=>'users']); ?> </li>
    </ul>
	</nav>



    <h3>Welcome to Admin Portal</h3>


    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
