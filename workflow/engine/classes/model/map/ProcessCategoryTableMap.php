<?php



/**
 * This class defines the structure of the 'PROCESS_CATEGORY' table.
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
class ProcessCategoryTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.ProcessCategoryTableMap';

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
		$this->setName('PROCESS_CATEGORY');
		$this->setPhpName('ProcessCategory');
		$this->setClassname('ProcessCategory');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('CATEGORY_UID', 'CategoryUid', 'VARCHAR', true, 32, '');
		$this->addColumn('CATEGORY_PARENT', 'CategoryParent', 'VARCHAR', true, 32, '0');
		$this->addColumn('CATEGORY_NAME', 'CategoryName', 'VARCHAR', true, 100, '');
		$this->addColumn('CATEGORY_ICON', 'CategoryIcon', 'VARCHAR', false, 100, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ProcessCategoryTableMap
