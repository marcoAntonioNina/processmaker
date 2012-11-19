<?php



/**
 * This class defines the structure of the 'TRIGGERS' table.
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
class TriggersTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.TriggersTableMap';

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
		$this->setName('TRIGGERS');
		$this->setPhpName('Triggers');
		$this->setClassname('Triggers');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('TRI_UID', 'TriUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '');
		$this->addColumn('TRI_TYPE', 'TriType', 'VARCHAR', true, 20, 'SCRIPT');
		$this->addColumn('TRI_WEBBOT', 'TriWebbot', 'LONGVARCHAR', true, null, null);
		$this->addColumn('TRI_PARAM', 'TriParam', 'LONGVARCHAR', false, null, null);
		// validators
		$this->addValidator('TRI_TYPE', 'validValues', 'propel.validator.ValidValuesValidator', 'WEBBOT|SCRIPT', 'Please select a valid type.');
		$this->addValidator('TRI_TYPE', 'required', 'propel.validator.RequiredValidator', '', 'Type is required.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // TriggersTableMap
