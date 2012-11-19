<?php



/**
 * This class defines the structure of the 'LOGIN_LOG' table.
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
class LoginLogTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.LoginLogTableMap';

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
		$this->setName('LOGIN_LOG');
		$this->setPhpName('LoginLog');
		$this->setClassname('LoginLog');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('LOG_UID', 'LogUid', 'VARCHAR', true, 32, '');
		$this->addColumn('LOG_STATUS', 'LogStatus', 'VARCHAR', true, 100, '');
		$this->addColumn('LOG_IP', 'LogIp', 'VARCHAR', true, 15, '');
		$this->addColumn('LOG_SID', 'LogSid', 'VARCHAR', true, 100, '');
		$this->addColumn('LOG_INIT_DATE', 'LogInitDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('LOG_END_DATE', 'LogEndDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('LOG_CLIENT_HOSTNAME', 'LogClientHostname', 'VARCHAR', true, 100, '');
		$this->addColumn('USR_UID', 'UsrUid', 'VARCHAR', true, 32, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // LoginLogTableMap
