<?php



/**
 * This class defines the structure of the 'SUB_APPLICATION' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.classes.model.map
 */
class SubApplicationTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.SubApplicationTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('SUB_APPLICATION');
		$this->setPhpName('SubApplication');
		$this->setClassname('SubApplication');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('APP_UID', 'AppUid', 'VARCHAR', true, 32, '');
		$this->addPrimaryKey('APP_PARENT', 'AppParent', 'VARCHAR', true, 32, '');
		$this->addPrimaryKey('DEL_INDEX_PARENT', 'DelIndexParent', 'INTEGER', true, null, 0);
		$this->addPrimaryKey('DEL_THREAD_PARENT', 'DelThreadParent', 'INTEGER', true, null, 0);
		$this->addColumn('SA_STATUS', 'SaStatus', 'VARCHAR', true, 32, '');
		$this->addColumn('SA_VALUES_OUT', 'SaValuesOut', 'LONGVARCHAR', true, null, null);
		$this->addColumn('SA_VALUES_IN', 'SaValuesIn', 'LONGVARCHAR', false, null, null);
		$this->addColumn('SA_INIT_DATE', 'SaInitDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('SA_FINISH_DATE', 'SaFinishDate', 'TIMESTAMP', false, null, null);
		// validators
		$this->addValidator('SA_STATUS', 'validValues', 'propel.validator.ValidValuesValidator', 'ACTIVE|FINISHED|CANCELLED', 'Please select a valid value for SA_STATUS.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // SubApplicationTableMap
