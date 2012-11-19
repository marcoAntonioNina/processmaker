<?php



/**
 * This class defines the structure of the 'FIELD_CONDITION' table.
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
class FieldConditionTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.FieldConditionTableMap';

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
		$this->setName('FIELD_CONDITION');
		$this->setPhpName('FieldCondition');
		$this->setClassname('FieldCondition');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('FCD_UID', 'FcdUid', 'VARCHAR', true, 32, '');
		$this->addColumn('FCD_FUNCTION', 'FcdFunction', 'VARCHAR', true, 50, null);
		$this->addColumn('FCD_FIELDS', 'FcdFields', 'LONGVARCHAR', false, null, null);
		$this->addColumn('FCD_CONDITION', 'FcdCondition', 'LONGVARCHAR', false, null, null);
		$this->addColumn('FCD_EVENTS', 'FcdEvents', 'LONGVARCHAR', false, null, null);
		$this->addColumn('FCD_EVENT_OWNERS', 'FcdEventOwners', 'LONGVARCHAR', false, null, null);
		$this->addColumn('FCD_STATUS', 'FcdStatus', 'VARCHAR', false, 10, null);
		$this->addColumn('FCD_DYN_UID', 'FcdDynUid', 'VARCHAR', true, 32, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // FieldConditionTableMap
