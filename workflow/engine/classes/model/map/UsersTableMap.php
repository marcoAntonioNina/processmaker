<?php



/**
 * This class defines the structure of the 'USERS' table.
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
class UsersTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.UsersTableMap';

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
		$this->setName('USERS');
		$this->setPhpName('Users');
		$this->setClassname('Users');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('USR_UID', 'UsrUid', 'VARCHAR', true, 32, '');
		$this->addColumn('USR_USERNAME', 'UsrUsername', 'VARCHAR', true, 100, '');
		$this->addColumn('USR_PASSWORD', 'UsrPassword', 'VARCHAR', true, 32, '');
		$this->addColumn('USR_FIRSTNAME', 'UsrFirstname', 'VARCHAR', true, 50, '');
		$this->addColumn('USR_LASTNAME', 'UsrLastname', 'VARCHAR', true, 50, '');
		$this->addColumn('USR_EMAIL', 'UsrEmail', 'VARCHAR', true, 100, '');
		$this->addColumn('USR_DUE_DATE', 'UsrDueDate', 'DATE', true, null, null);
		$this->addColumn('USR_CREATE_DATE', 'UsrCreateDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('USR_UPDATE_DATE', 'UsrUpdateDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('USR_STATUS', 'UsrStatus', 'VARCHAR', true, 32, 'ACTIVE');
		$this->addColumn('USR_COUNTRY', 'UsrCountry', 'VARCHAR', true, 3, '');
		$this->addColumn('USR_CITY', 'UsrCity', 'VARCHAR', true, 3, '');
		$this->addColumn('USR_LOCATION', 'UsrLocation', 'VARCHAR', true, 3, '');
		$this->addColumn('USR_ADDRESS', 'UsrAddress', 'VARCHAR', true, 255, '');
		$this->addColumn('USR_PHONE', 'UsrPhone', 'VARCHAR', true, 24, '');
		$this->addColumn('USR_FAX', 'UsrFax', 'VARCHAR', true, 24, '');
		$this->addColumn('USR_CELLULAR', 'UsrCellular', 'VARCHAR', true, 24, '');
		$this->addColumn('USR_ZIP_CODE', 'UsrZipCode', 'VARCHAR', true, 16, '');
		$this->addColumn('DEP_UID', 'DepUid', 'VARCHAR', true, 32, '');
		$this->addColumn('USR_POSITION', 'UsrPosition', 'VARCHAR', true, 100, '');
		$this->addColumn('USR_RESUME', 'UsrResume', 'VARCHAR', true, 100, '');
		$this->addColumn('USR_BIRTHDAY', 'UsrBirthday', 'DATE', false, null, null);
		$this->addColumn('USR_ROLE', 'UsrRole', 'VARCHAR', false, 32, 'PROCESSMAKER_ADMIN');
		$this->addColumn('USR_REPORTS_TO', 'UsrReportsTo', 'VARCHAR', false, 32, '');
		$this->addColumn('USR_REPLACED_BY', 'UsrReplacedBy', 'VARCHAR', false, 32, '');
		$this->addColumn('USR_UX', 'UsrUx', 'VARCHAR', false, 128, 'NORMAL');
		// validators
		$this->addValidator('USR_STATUS', 'validValues', 'propel.validator.ValidValuesValidator', 'ACTIVE|INACTIVE|VACATION|CLOSED', 'Please select a valid type.');
		$this->addValidator('USR_STATUS', 'required', 'propel.validator.RequiredValidator', '', 'Type is required.');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // UsersTableMap
