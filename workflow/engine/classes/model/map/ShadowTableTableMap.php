<?php



/**
 * This class defines the structure of the 'SHADOW_TABLE' table.
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
class ShadowTableTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.ShadowTableTableMap';

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
		$this->setName('SHADOW_TABLE');
		$this->setPhpName('ShadowTable');
		$this->setClassname('ShadowTable');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('SHD_UID', 'ShdUid', 'VARCHAR', true, 32, '');
		$this->addColumn('ADD_TAB_UID', 'AddTabUid', 'VARCHAR', true, 32, '');
		$this->addColumn('SHD_ACTION', 'ShdAction', 'VARCHAR', true, 10, '');
		$this->addColumn('SHD_DETAILS', 'ShdDetails', 'LONGVARCHAR', true, null, null);
		$this->addColumn('USR_UID', 'UsrUid', 'VARCHAR', true, 32, '');
		$this->addColumn('APP_UID', 'AppUid', 'VARCHAR', true, 32, '');
		$this->addColumn('SHD_DATE', 'ShdDate', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ShadowTableTableMap
