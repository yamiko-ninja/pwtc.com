<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Core/Managed.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:1eadd6ffdb011ed6d4ff672f1e629719)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Core_DAO_Managed constructor.
 */
class CRM_Core_DAO_Managed extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_managed';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = false;
  /**
   * Surrogate Key
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Name of the module which declared this object
   *
   * @var string
   */
  public $module;
  /**
   * Symbolic name used by the module to identify the object
   *
   * @var string
   */
  public $name;
  /**
   * API entity type
   *
   * @var string
   */
  public $entity_type;
  /**
   * Foreign key to the referenced item.
   *
   * @var int unsigned
   */
  public $entity_id;
  /**
   * Policy on when to cleanup entity (always, never, unused)
   *
   * @var string
   */
  public $cleanup;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_managed';
    parent::__construct();
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Managed ID') ,
          'description' => 'Surrogate Key',
          'required' => true,
          'table_name' => 'civicrm_managed',
          'entity' => 'Managed',
          'bao' => 'CRM_Core_DAO_Managed',
        ) ,
        'module' => array(
          'name' => 'module',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Module') ,
          'description' => 'Name of the module which declared this object',
          'required' => true,
          'maxlength' => 127,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_managed',
          'entity' => 'Managed',
          'bao' => 'CRM_Core_DAO_Managed',
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Name') ,
          'description' => 'Symbolic name used by the module to identify the object',
          'maxlength' => 127,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_managed',
          'entity' => 'Managed',
          'bao' => 'CRM_Core_DAO_Managed',
        ) ,
        'entity_type' => array(
          'name' => 'entity_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Type') ,
          'description' => 'API entity type',
          'required' => true,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_managed',
          'entity' => 'Managed',
          'bao' => 'CRM_Core_DAO_Managed',
        ) ,
        'entity_id' => array(
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Entity ID') ,
          'description' => 'Foreign key to the referenced item.',
          'required' => true,
          'table_name' => 'civicrm_managed',
          'entity' => 'Managed',
          'bao' => 'CRM_Core_DAO_Managed',
        ) ,
        'cleanup' => array(
          'name' => 'cleanup',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Cleanup Setting') ,
          'description' => 'Policy on when to cleanup entity (always, never, unused)',
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'table_name' => 'civicrm_managed',
          'entity' => 'Managed',
          'bao' => 'CRM_Core_DAO_Managed',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'callback' => 'CRM_Core_ManagedEntities::getCleanupOptions',
          )
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'managed', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'managed', $prefix, array());
    return $r;
  }
}
