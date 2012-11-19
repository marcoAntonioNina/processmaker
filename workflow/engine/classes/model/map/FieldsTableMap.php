<?php



/**
 * This class defines the structure of the 'FIELDS' table.
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
class FieldsTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.FieldsTableMap';

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
		$this->setName('FIELDS');
		$this->setPhpName('Fields');
		$this->setClassname('Fields');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('FLD_UID', 'FldUid', 'VARCHAR', true, 32, '');
		$this->addColumn('ADD_TAB_UID', 'AddTabUid', 'VARCHAR', true, 32, '');
		$this->addColumn('FLD_INDEX', 'FldIndex', 'INTEGER', true, null, 1);
		$this->addColumn('FLD_NAME', 'FldName', 'VARCHAR', true, 60, '');
		$this->addColumn('FLD_DESCRIPTION', 'FldDescription', 'LONGVARCHAR', true, null, null);
		$this->addColumn('FLD_TYPE', 'FldType', 'VARCHAR', true, 20, '');
		$this->addColumn('FLD_SIZE', 'FldSize', 'INTEGER', false, null, 0);
		$this->addColumn('FLD_NULL', 'FldNull', 'TINYINT', true, null, 1);
		$this->addColumn('FLD_AUTO_INCREMENT', 'FldAutoIncrement', 'TINYINT', true, null, 0);
		$this->addColumn('FLD_KEY', 'FldKey', 'TINYINT', true, null, 0);
		$this->addColumn('FLD_FOREIGN_KEY', 'FldForeignKey', 'TINYINT', true, null, 0);
		$this->addColumn('FLD_FOREIGN_KEY_TABLE', 'FldForeignKeyTable', 'VARCHAR', true, 32, '');
		$this->addColumn('FLD_DYN_NAME', 'FldDynName', 'VARCHAR', false, 128, '');
		$this->addColumn('FLD_DYN_UID', 'FldDynUid', 'VARCHAR', false, 128, '');
		$this->addColumn('FLD_FILTER', 'FldFilter', 'TINYINT', false, null, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // FieldsTableMap
