<?php



/**
 * This class defines the structure of the 'CASE_TRACKER_OBJECT' table.
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
class CaseTrackerObjectTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.CaseTrackerObjectTableMap';

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
		$this->setName('CASE_TRACKER_OBJECT');
		$this->setPhpName('CaseTrackerObject');
		$this->setClassname('CaseTrackerObject');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('CTO_UID', 'CtoUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '0');
		$this->addColumn('CTO_TYPE_OBJ', 'CtoTypeObj', 'VARCHAR', true, 20, 'DYNAFORM');
		$this->addColumn('CTO_UID_OBJ', 'CtoUidObj', 'VARCHAR', true, 32, '0');
		$this->addColumn('CTO_CONDITION', 'CtoCondition', 'LONGVARCHAR', true, null, null);
		$this->addColumn('CTO_POSITION', 'CtoPosition', 'INTEGER', true, null, 0);
		// validators
		$this->addValidator('CTO_TYPE_OBJ', 'validValues', 'propel.validator.ValidValuesValidator', 'DYNAFORM|INPUT_DOCUMENT|OUTPUT_DOCUMENT|MESSAGE|EXTERNAL', 'Please select a valid value for CTO_TYPE_OBJ.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // CaseTrackerObjectTableMap
