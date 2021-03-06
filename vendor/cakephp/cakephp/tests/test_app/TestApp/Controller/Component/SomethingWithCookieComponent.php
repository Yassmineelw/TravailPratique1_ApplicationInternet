<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         3.0.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace TestApp\Controller\Component;

use Cake\Controller\Component;

/**
 * SomethingWithCookieComponent class
 *
 * @property \Cake\Controller\Component\CookieComponent $Cookie
 */
class SomethingWithCookieComponent extends Component
{
    /**
     * components property
     *
     * @var array
     */
    public $components = ['Cookie'];
}
