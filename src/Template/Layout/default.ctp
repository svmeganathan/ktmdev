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

$cakeDescription = 'KTM';
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
    <nav class="top-bar expanded" data-topbar role="navigation">
    <div class="top-bar-section">
        <ul class=" large-6 medium-4 columns">
            <?php if ($auth->user()) { ?>
                <li class="name" >
                    <?= $this->Html->link(__('Dashboard'), ['controller' => 'users', 'action' => 'dashboard']) ?>
                </li>
                <li class="name" >
                    <?= $this->Html->link(__('Purchase'), ['controller' => 'users', 'action' => 'dashboard']) ?>
                </li>
                <li class="name" >
                    <?= $this->Html->link(__('Sales'), ['controller' => 'users', 'action' => 'dashboard']) ?>
                </li>
                <li class="name" >
                    <?= $this->Html->link(__('Stocks'), ['controller' => 'users', 'action' => 'dashboard']) ?>
                </li>
                <li class="name" >
                    <?= $this->Html->link(__('Credit Management'), ['controller' => 'users', 'action' => 'dashboard']) ?>
                </li>
                <li class="name" >
                    <?= $this->Html->link(__('Day Book'), ['controller' => 'users', 'action' => 'dashboard']) ?>
                </li>
                <li class="name" >
                    <?= $this->Html->link(__('Reports'), ['controller' => 'users', 'action' => 'dashboard']) ?>
                </li>
                <li class="name" >
                    <?= $this->Html->link(__('Users'), ['controller' => 'users', 'action' => 'index']) ?>
                </li>
                <li class="name" >
                    <?= $this->Html->link(__('Roles'), ['controller' => 'roles', 'action' => 'index']) ?>
                </li>
            <?php } ?>
            
        </ul>
        </div>
        <div class="top-bar-section">
            <ul class="right">
                <!-- <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li> -->
                <?php if ($auth->user()) { ?>
                <li class="name"><?= $this->Html->link(__('Logout'), ['controller' => 'users', 'action' => 'logout']) ?></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
