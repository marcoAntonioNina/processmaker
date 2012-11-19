<?php



/**
 * This class defines the structure of the 'GATEWAY' table.
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
class GatewayTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.GatewayTableMap';

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
		$this->setName('GATEWAY');
		$this->setPhpName('Gateway');
		$this->setClassname('Gateway');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('GAT_UID', 'GatUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '');
		$this->addColumn('TAS_UID', 'TasUid', 'VARCHAR', true, 32, '');
		$this->addColumn('GAT_NEXT_TASK', 'GatNextTask', 'VARCHAR', true, 32, '');
		$this->addColumn('GAT_X', 'GatX', 'INTEGER', true, null, 0);
		$this->addColumn('GAT_Y', 'GatY', 'INTEGER', true, null, 0);
		$this->addColumn('GAT_TYPE', 'GatType', 'VARCHAR', true, 32, '');
		// validators
		$this->addValidator('GAT_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Gateway UID can be no larger than 32 in size');
		$this->addValidator('GAT_UID', 'required', 'propel.validator.RequiredValidator', '', 'Gateway Element UID is required.');
		$this->addValidator('PRO_UID', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Process UID can be no larger than 32 in size');
		$this->addValidator('PRO_UID', 'required', 'propel.validator.RequiredValidator', '', 'Process UID is required.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // GatewayTableMap
