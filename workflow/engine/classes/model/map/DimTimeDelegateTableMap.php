<?php



/**
 * This class defines the structure of the 'DIM_TIME_DELEGATE' table.
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
class DimTimeDelegateTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.DimTimeDelegateTableMap';

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
		$this->setName('DIM_TIME_DELEGATE');
		$this->setPhpName('DimTimeDelegate');
		$this->setClassname('DimTimeDelegate');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('TIME_ID', 'TimeId', 'VARCHAR', true, 10, '');
		$this->addColumn('MONTH_ID', 'MonthId', 'INTEGER', true, null, 0);
		$this->addColumn('QTR_ID', 'QtrId', 'INTEGER', true, null, 0);
		$this->addColumn('YEAR_ID', 'YearId', 'INTEGER', true, null, 0);
		$this->addColumn('MONTH_NAME', 'MonthName', 'VARCHAR', true, 3, '0');
		$this->addColumn('MONTH_DESC', 'MonthDesc', 'VARCHAR', true, 9, '');
		$this->addColumn('QTR_NAME', 'QtrName', 'VARCHAR', true, 4, '');
		$this->addColumn('QTR_DESC', 'QtrDesc', 'VARCHAR', true, 9, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // DimTimeDelegateTableMap
