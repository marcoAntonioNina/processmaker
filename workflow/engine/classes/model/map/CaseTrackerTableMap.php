<?php



/**
 * This class defines the structure of the 'CASE_TRACKER' table.
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
class CaseTrackerTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.CaseTrackerTableMap';

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
		$this->setName('CASE_TRACKER');
		$this->setPhpName('CaseTracker');
		$this->setClassname('CaseTracker');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '0');
		$this->addColumn('CT_MAP_TYPE', 'CtMapType', 'VARCHAR', true, 10, '0');
		$this->addColumn('CT_DERIVATION_HISTORY', 'CtDerivationHistory', 'INTEGER', true, null, 0);
		$this->addColumn('CT_MESSAGE_HISTORY', 'CtMessageHistory', 'INTEGER', true, null, 0);
		// validators
		$this->addValidator('PRO_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Process UID can be no larger than 32 in size');
		$this->addValidator('PRO_UID', 'required', 'propel.validator.RequiredValidator', '', 'Process UID is required.');
		$this->addValidator('CT_MAP_TYPE', 'validValues', 'propel.validator.ValidValuesValidator', 'NONE|PROCESSMAP|STAGES', 'Please select a valid map type.');
		$this->addValidator('CT_MAP_TYPE', 'required', 'propel.validator.RequiredValidator', '', 'Map type is required.');
		$this->addValidator('CT_DERIVATION_HISTORY', 'validValues', 'propel.validator.ValidValuesValidator', '0|1', 'Please select a valid derivation history status.');
		$this->addValidator('CT_DERIVATION_HISTORY', 'required', 'propel.validator.RequiredValidator', '', 'Derivation history status is required.');
		$this->addValidator('CT_MESSAGE_HISTORY', 'validValues', 'propel.validator.ValidValuesValidator', '0|1', 'Please select a valid message history status.');
		$this->addValidator('CT_MESSAGE_HISTORY', 'required', 'propel.validator.RequiredValidator', '', 'Message history status is required.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // CaseTrackerTableMap
