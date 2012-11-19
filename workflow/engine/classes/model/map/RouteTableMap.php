<?php



/**
 * This class defines the structure of the 'ROUTE' table.
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
class RouteTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.RouteTableMap';

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
		$this->setName('ROUTE');
		$this->setPhpName('Route');
		$this->setClassname('Route');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ROU_UID', 'RouUid', 'VARCHAR', true, 32, '');
		$this->addColumn('ROU_PARENT', 'RouParent', 'VARCHAR', true, 32, '0');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '');
		$this->addColumn('TAS_UID', 'TasUid', 'VARCHAR', true, 32, '');
		$this->addColumn('ROU_NEXT_TASK', 'RouNextTask', 'VARCHAR', true, 32, '0');
		$this->addColumn('ROU_CASE', 'RouCase', 'INTEGER', true, null, 0);
		$this->addColumn('ROU_TYPE', 'RouType', 'VARCHAR', true, 25, 'SEQUENTIAL');
		$this->addColumn('ROU_CONDITION', 'RouCondition', 'VARCHAR', true, 512, '');
		$this->addColumn('ROU_TO_LAST_USER', 'RouToLastUser', 'VARCHAR', true, 20, 'FALSE');
		$this->addColumn('ROU_OPTIONAL', 'RouOptional', 'VARCHAR', true, 20, 'FALSE');
		$this->addColumn('ROU_SEND_EMAIL', 'RouSendEmail', 'VARCHAR', true, 20, 'TRUE');
		$this->addColumn('ROU_SOURCEANCHOR', 'RouSourceanchor', 'INTEGER', false, null, 1);
		$this->addColumn('ROU_TARGETANCHOR', 'RouTargetanchor', 'INTEGER', false, null, 0);
		$this->addColumn('ROU_TO_PORT', 'RouToPort', 'INTEGER', true, null, 1);
		$this->addColumn('ROU_FROM_PORT', 'RouFromPort', 'INTEGER', true, null, 2);
		$this->addColumn('ROU_EVN_UID', 'RouEvnUid', 'VARCHAR', true, 32, '');
		$this->addColumn('GAT_UID', 'GatUid', 'VARCHAR', true, 32, '');
		// validators
		$this->addValidator('ROU_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Route UID can be no larger than 32 in size');
		$this->addValidator('ROU_UID', 'required', 'propel.validator.RequiredValidator', '', 'Route UID is required.');
		$this->addValidator('PRO_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Process UID can be no larger than 32 in size');
		$this->addValidator('PRO_UID', 'required', 'propel.validator.RequiredValidator', '', 'Process UID is required.');
		$this->addValidator('TAS_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Task UID can be no larger than 32 in size');
		$this->addValidator('TAS_UID', 'required', 'propel.validator.RequiredValidator', '', 'Task UID is required.');
		$this->addValidator('ROU_NEXT_TASK', 'required', 'propel.validator.RequiredValidator', '', 'Next Task UID is required.');
		$this->addValidator('ROU_TYPE', 'validValues', 'propel.validator.ValidValuesValidator', 'SEQUENTIAL|EVALUATE|SELECT|PARALLEL|PARALLEL-BY-EVALUATION|SEC-JOIN|DISCRIMINATOR', 'Please select a valid Route Type.');
		$this->addValidator('ROU_TYPE', 'required', 'propel.validator.RequiredValidator', '', 'Route type is required.');
		$this->addValidator('ROU_TO_LAST_USER', 'validValues', 'propel.validator.ValidValuesValidator', 'FALSE|TRUE', 'Please select a valid value for ROU_TO_LAST_USER .');
		$this->addValidator('ROU_OPTIONAL', 'validValues', 'propel.validator.ValidValuesValidator', 'FALSE|TRUE', 'Please select a valid value for ROU_OPTIONAL .');
		$this->addValidator('ROU_SEND_EMAIL', 'validValues', 'propel.validator.ValidValuesValidator', 'FALSE|TRUE', 'Please select a valid value for ROU_SEND_EMAIL.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // RouteTableMap
