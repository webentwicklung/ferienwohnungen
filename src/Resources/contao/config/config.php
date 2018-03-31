<?php
/*
 * Copyright Tino Kupke
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$GLOBALS['TL_HOOKS']['generatePage'][] = array('Wtk\\Fewo\\Columns', 'generatePageHook');
