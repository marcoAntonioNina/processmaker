<?php



/**
 * This class defines the structure of the 'SWIMLANES_ELEMENTS' table.
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
class SwimlanesElementsTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.SwimlanesElementsTableMap';

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
		$this->setName('SWIMLANES_ELEMENTS');
		$this->setPhpName('SwimlanesElements');
		$this->setClassname('SwimlanesElements');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('SWI_UID', 'SwiUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '');
		$this->addColumn('SWI_TYPE', 'SwiType', 'VARCHAR', true, 20, 'LINE');
		$this->addColumn('SWI_X', 'SwiX', 'INTEGER', true, null, 0);
		$this->addColumn('SWI_Y', 'SwiY', 'INTEGER', true, null, 0);
		$this->addColumn('SWI_WIDTH', 'SwiWidth', 'INTEGER', true, null, 0);
		$this->addColumn('SWI_HEIGHT', 'SwiHeight', 'INTEGER', true, null, 0);
		$this->addColumn('SWI_NEXT_UID', 'SwiNextUid', 'VARCHAR', false, 32, '');
		// validators
		$this->addValidator('SWI_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Swimlane Element UID can be no larger than 32 in size');
		$this->addValidator('SWI_UID', 'required', 'propel.validator.RequiredValidator', '', 'Swimlane Element UID is required.');
		$this->addValidator('PRO_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Process UID can be no larger than 32 in size');
		$this->addValidator('PRO_UID', 'required', 'propel.validator.RequiredValidator', '', 'Process UID is required.');
		$this->addValidator('SWI_TYPE', 'validValues', 'propel.validator.ValidValuesValidator', 'LINE|TEXT', 'Please select a valid Swimlane Element type.');
		$this->addValidator('SWI_TYPE', 'required', 'propel.validator.RequiredValidator', '', 'Swimlane Element type is required.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // SwimlanesElementsTableMap
