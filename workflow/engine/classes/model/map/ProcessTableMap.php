<?php



/**
 * This class defines the structure of the 'PROCESS' table.
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
class ProcessTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'classes.model.map.ProcessTableMap';

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
		$this->setName('PROCESS');
		$this->setPhpName('Process');
		$this->setClassname('Process');
		$this->setPackage('classes.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('PRO_UID', 'ProUid', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_PARENT', 'ProParent', 'VARCHAR', true, 32, '0');
		$this->addColumn('PRO_TIME', 'ProTime', 'DOUBLE', true, null, 1);
		$this->addColumn('PRO_TIMEUNIT', 'ProTimeunit', 'VARCHAR', true, 20, 'DAYS');
		$this->addColumn('PRO_STATUS', 'ProStatus', 'VARCHAR', true, 20, 'ACTIVE');
		$this->addColumn('PRO_TYPE_DAY', 'ProTypeDay', 'CHAR', true, 1, '0');
		$this->addColumn('PRO_TYPE', 'ProType', 'VARCHAR', true, 20, 'NORMAL');
		$this->addColumn('PRO_ASSIGNMENT', 'ProAssignment', 'VARCHAR', true, 20, 'FALSE');
		$this->addColumn('PRO_SHOW_MAP', 'ProShowMap', 'TINYINT', true, null, 1);
		$this->addColumn('PRO_SHOW_MESSAGE', 'ProShowMessage', 'TINYINT', true, null, 1);
		$this->addColumn('PRO_SUBPROCESS', 'ProSubprocess', 'TINYINT', true, null, 0);
		$this->addColumn('PRO_TRI_DELETED', 'ProTriDeleted', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_TRI_CANCELED', 'ProTriCanceled', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_TRI_PAUSED', 'ProTriPaused', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_TRI_REASSIGNED', 'ProTriReassigned', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_SHOW_DELEGATE', 'ProShowDelegate', 'TINYINT', true, null, 1);
		$this->addColumn('PRO_SHOW_DYNAFORM', 'ProShowDynaform', 'TINYINT', true, null, 0);
		$this->addColumn('PRO_CATEGORY', 'ProCategory', 'VARCHAR', true, 48, '');
		$this->addColumn('PRO_SUB_CATEGORY', 'ProSubCategory', 'VARCHAR', true, 48, '');
		$this->addColumn('PRO_INDUSTRY', 'ProIndustry', 'INTEGER', true, null, 1);
		$this->addColumn('PRO_UPDATE_DATE', 'ProUpdateDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('PRO_CREATE_DATE', 'ProCreateDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('PRO_CREATE_USER', 'ProCreateUser', 'VARCHAR', true, 32, '');
		$this->addColumn('PRO_HEIGHT', 'ProHeight', 'INTEGER', true, null, 5000);
		$this->addColumn('PRO_WIDTH', 'ProWidth', 'INTEGER', true, null, 10000);
		$this->addColumn('PRO_TITLE_X', 'ProTitleX', 'INTEGER', true, null, 0);
		$this->addColumn('PRO_TITLE_Y', 'ProTitleY', 'INTEGER', true, null, 6);
		$this->addColumn('PRO_DEBUG', 'ProDebug', 'INTEGER', true, null, 0);
		$this->addColumn('PRO_DYNAFORMS', 'ProDynaforms', 'LONGVARCHAR', false, null, null);
		$this->addColumn('PRO_DERIVATION_SCREEN_TPL', 'ProDerivationScreenTpl', 'VARCHAR', false, 128, '');
		// validators
		$this->addValidator('PRO_TIMEUNIT', 'validValues', 'propel.validator.ValidValuesValidator', 'WEEKS|MONTHS|DAYS|HOURS|MINUTES', 'Please select a valid Time Unit.');
		$this->addValidator('PRO_STATUS', 'validValues', 'propel.validator.ValidValuesValidator', 'ACTIVE|INACTIVE|DISABLED', 'Please select a valid Process Status.');
		$this->addValidator('PRO_TYPE', 'validValues', 'propel.validator.ValidValuesValidator', 'NORMAL', 'Please select a valid Process Type.');
		$this->addValidator('PRO_ASSIGNMENT', 'validValues', 'propel.validator.ValidValuesValidator', 'TRUE|FALSE', 'Please select a valid Process Assignment');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ProcessTableMap
