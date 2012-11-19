<?php



/**
 * This class defines the structure of the 'DASHLET' table.
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
class DashletTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.DashletTableMap';

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
		$this->setName('DASHLET');
		$this->setPhpName('Dashlet');
		$this->setClassname('Dashlet');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('DAS_UID', 'DasUid', 'VARCHAR', true, 32, '');
		$this->addColumn('DAS_CLASS', 'DasClass', 'VARCHAR', true, 50, '');
		$this->addColumn('DAS_TITLE', 'DasTitle', 'VARCHAR', true, 255, '');
		$this->addColumn('DAS_DESCRIPTION', 'DasDescription', 'LONGVARCHAR', false, null, null);
		$this->addColumn('DAS_VERSION', 'DasVersion', 'VARCHAR', true, 10, '1.0');
		$this->addColumn('DAS_CREATE_DATE', 'DasCreateDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('DAS_UPDATE_DATE', 'DasUpdateDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('DAS_STATUS', 'DasStatus', 'TINYINT', true, null, 1);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // DashletTableMap
