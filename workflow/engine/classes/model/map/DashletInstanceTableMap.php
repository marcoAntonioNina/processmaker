<?php



/**
 * This class defines the structure of the 'DASHLET_INSTANCE' table.
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
class DashletInstanceTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.DashletInstanceTableMap';

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
		$this->setName('DASHLET_INSTANCE');
		$this->setPhpName('DashletInstance');
		$this->setClassname('DashletInstance');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('DAS_INS_UID', 'DasInsUid', 'VARCHAR', true, 32, '');
		$this->addColumn('DAS_UID', 'DasUid', 'VARCHAR', true, 32, '');
		$this->addColumn('DAS_INS_OWNER_TYPE', 'DasInsOwnerType', 'VARCHAR', true, 20, '');
		$this->addColumn('DAS_INS_OWNER_UID', 'DasInsOwnerUid', 'VARCHAR', false, 32, '');
		$this->addColumn('DAS_INS_ADDITIONAL_PROPERTIES', 'DasInsAdditionalProperties', 'LONGVARCHAR', false, null, null);
		$this->addColumn('DAS_INS_CREATE_DATE', 'DasInsCreateDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('DAS_INS_UPDATE_DATE', 'DasInsUpdateDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('DAS_INS_STATUS', 'DasInsStatus', 'TINYINT', true, null, 1);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // DashletInstanceTableMap
