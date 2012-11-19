<?php



/**
 * This class defines the structure of the 'USERS_PROPERTIES' table.
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
class UsersPropertiesTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.UsersPropertiesTableMap';

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
		$this->setName('USERS_PROPERTIES');
		$this->setPhpName('UsersProperties');
		$this->setClassname('UsersProperties');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('USR_UID', 'UsrUid', 'VARCHAR', true, 32, '');
		$this->addColumn('USR_LAST_UPDATE_DATE', 'UsrLastUpdateDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('USR_LOGGED_NEXT_TIME', 'UsrLoggedNextTime', 'INTEGER', false, null, 0);
		$this->addColumn('USR_PASSWORD_HISTORY', 'UsrPasswordHistory', 'LONGVARCHAR', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // UsersPropertiesTableMap
