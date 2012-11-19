<?php



/**
 * This class defines the structure of the 'SESSION' table.
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
class SessionTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.SessionTableMap';

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
		$this->setName('SESSION');
		$this->setPhpName('Session');
		$this->setClassname('Session');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('SES_UID', 'SesUid', 'VARCHAR', true, 32, '');
		$this->addColumn('SES_STATUS', 'SesStatus', 'VARCHAR', true, 16, 'ACTIVE');
		$this->addColumn('USR_UID', 'UsrUid', 'VARCHAR', true, 32, 'ACTIVE');
		$this->addColumn('SES_REMOTE_IP', 'SesRemoteIp', 'VARCHAR', true, 32, '0.0.0.0');
		$this->addColumn('SES_INIT_DATE', 'SesInitDate', 'VARCHAR', true, 19, '');
		$this->addColumn('SES_DUE_DATE', 'SesDueDate', 'VARCHAR', true, 19, '');
		$this->addColumn('SES_END_DATE', 'SesEndDate', 'VARCHAR', true, 19, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // SessionTableMap
