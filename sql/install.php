<?php
/**
* 2007-2017 Pablo
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author Pablo <pfernandez@webimpacto.es>
*  @copyright  2007-2017 Pablo
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of Pablo
*/

  $sql = array();

  $sql[] = 'CREATE TABLE IF NOT EXISTS `' ._DB_PREFIX_. 'objectlogguer` (
      `id_objectlogguer` int(11) NOT NULL AUTO_INCREMENT,
      `affected_object` int(11) NOT NULL,
      `action_type` VARCHAR(255) NOT NULL,
      `object_type` VARCHAR(255) NOT NULL,
      `message` text NOT NULL,
      `date_add` datetime NOT NULL,
      PRIMARY KEY (`id_objectlogguer`)
    ) ENGINE=' ._MYSQL_ENGINE_. ' DEFAULT CHARSET=utf8;';
  

foreach ($sql as $query) {
  if (Db::getInstance()->execute($query) == false) {
      return false;
  }
}