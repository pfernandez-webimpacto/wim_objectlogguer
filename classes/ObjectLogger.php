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

 class ObjectLogger extends ObjectModel
  {

    public static $definition = array(
        'table' => 'objectlogguer',
        'primary' => 'id_objectlogguer',
        'fields' => array(
            'affected_object' =>                array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'copy_post' => false),
            'action_type' =>                    array('type' => self::TYPE_STRING, 'validate' => 'isName', 'size' => 255),
            'object_type' =>                    array('type' => self::TYPE_STRING, 'validate' => 'isName', 'size' => 255),
            'message' =>                        array('type' => self::TYPE_STRING, 'validate' => 'isGenericName'),
            'date_add' =>                       array('type' => self::TYPE_DATE, 'validate' => 'isDate', 'copy_post' => false),
            
        ),
    );


}