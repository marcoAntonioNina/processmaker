<?php


/**
 * Base static class for performing query and update operations on the 'PROCESS' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseProcessPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'workflow';

	/** the table name for this class */
	const TABLE_NAME = 'PROCESS';

	/** the related Propel class for this table */
	const OM_CLASS = 'Process';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'classes.model.Process';

	/** the related TableMap class for this table */
	const TM_CLASS = 'ProcessTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 30;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 30;

	/** the column name for the PRO_UID field */
	const PRO_UID = 'PROCESS.PRO_UID';

	/** the column name for the PRO_PARENT field */
	const PRO_PARENT = 'PROCESS.PRO_PARENT';

	/** the column name for the PRO_TIME field */
	const PRO_TIME = 'PROCESS.PRO_TIME';

	/** the column name for the PRO_TIMEUNIT field */
	const PRO_TIMEUNIT = 'PROCESS.PRO_TIMEUNIT';

	/** the column name for the PRO_STATUS field */
	const PRO_STATUS = 'PROCESS.PRO_STATUS';

	/** the column name for the PRO_TYPE_DAY field */
	const PRO_TYPE_DAY = 'PROCESS.PRO_TYPE_DAY';

	/** the column name for the PRO_TYPE field */
	const PRO_TYPE = 'PROCESS.PRO_TYPE';

	/** the column name for the PRO_ASSIGNMENT field */
	const PRO_ASSIGNMENT = 'PROCESS.PRO_ASSIGNMENT';

	/** the column name for the PRO_SHOW_MAP field */
	const PRO_SHOW_MAP = 'PROCESS.PRO_SHOW_MAP';

	/** the column name for the PRO_SHOW_MESSAGE field */
	const PRO_SHOW_MESSAGE = 'PROCESS.PRO_SHOW_MESSAGE';

	/** the column name for the PRO_SUBPROCESS field */
	const PRO_SUBPROCESS = 'PROCESS.PRO_SUBPROCESS';

	/** the column name for the PRO_TRI_DELETED field */
	const PRO_TRI_DELETED = 'PROCESS.PRO_TRI_DELETED';

	/** the column name for the PRO_TRI_CANCELED field */
	const PRO_TRI_CANCELED = 'PROCESS.PRO_TRI_CANCELED';

	/** the column name for the PRO_TRI_PAUSED field */
	const PRO_TRI_PAUSED = 'PROCESS.PRO_TRI_PAUSED';

	/** the column name for the PRO_TRI_REASSIGNED field */
	const PRO_TRI_REASSIGNED = 'PROCESS.PRO_TRI_REASSIGNED';

	/** the column name for the PRO_SHOW_DELEGATE field */
	const PRO_SHOW_DELEGATE = 'PROCESS.PRO_SHOW_DELEGATE';

	/** the column name for the PRO_SHOW_DYNAFORM field */
	const PRO_SHOW_DYNAFORM = 'PROCESS.PRO_SHOW_DYNAFORM';

	/** the column name for the PRO_CATEGORY field */
	const PRO_CATEGORY = 'PROCESS.PRO_CATEGORY';

	/** the column name for the PRO_SUB_CATEGORY field */
	const PRO_SUB_CATEGORY = 'PROCESS.PRO_SUB_CATEGORY';

	/** the column name for the PRO_INDUSTRY field */
	const PRO_INDUSTRY = 'PROCESS.PRO_INDUSTRY';

	/** the column name for the PRO_UPDATE_DATE field */
	const PRO_UPDATE_DATE = 'PROCESS.PRO_UPDATE_DATE';

	/** the column name for the PRO_CREATE_DATE field */
	const PRO_CREATE_DATE = 'PROCESS.PRO_CREATE_DATE';

	/** the column name for the PRO_CREATE_USER field */
	const PRO_CREATE_USER = 'PROCESS.PRO_CREATE_USER';

	/** the column name for the PRO_HEIGHT field */
	const PRO_HEIGHT = 'PROCESS.PRO_HEIGHT';

	/** the column name for the PRO_WIDTH field */
	const PRO_WIDTH = 'PROCESS.PRO_WIDTH';

	/** the column name for the PRO_TITLE_X field */
	const PRO_TITLE_X = 'PROCESS.PRO_TITLE_X';

	/** the column name for the PRO_TITLE_Y field */
	const PRO_TITLE_Y = 'PROCESS.PRO_TITLE_Y';

	/** the column name for the PRO_DEBUG field */
	const PRO_DEBUG = 'PROCESS.PRO_DEBUG';

	/** the column name for the PRO_DYNAFORMS field */
	const PRO_DYNAFORMS = 'PROCESS.PRO_DYNAFORMS';

	/** the column name for the PRO_DERIVATION_SCREEN_TPL field */
	const PRO_DERIVATION_SCREEN_TPL = 'PROCESS.PRO_DERIVATION_SCREEN_TPL';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Process objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Process[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('ProUid', 'ProParent', 'ProTime', 'ProTimeunit', 'ProStatus', 'ProTypeDay', 'ProType', 'ProAssignment', 'ProShowMap', 'ProShowMessage', 'ProSubprocess', 'ProTriDeleted', 'ProTriCanceled', 'ProTriPaused', 'ProTriReassigned', 'ProShowDelegate', 'ProShowDynaform', 'ProCategory', 'ProSubCategory', 'ProIndustry', 'ProUpdateDate', 'ProCreateDate', 'ProCreateUser', 'ProHeight', 'ProWidth', 'ProTitleX', 'ProTitleY', 'ProDebug', 'ProDynaforms', 'ProDerivationScreenTpl', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('proUid', 'proParent', 'proTime', 'proTimeunit', 'proStatus', 'proTypeDay', 'proType', 'proAssignment', 'proShowMap', 'proShowMessage', 'proSubprocess', 'proTriDeleted', 'proTriCanceled', 'proTriPaused', 'proTriReassigned', 'proShowDelegate', 'proShowDynaform', 'proCategory', 'proSubCategory', 'proIndustry', 'proUpdateDate', 'proCreateDate', 'proCreateUser', 'proHeight', 'proWidth', 'proTitleX', 'proTitleY', 'proDebug', 'proDynaforms', 'proDerivationScreenTpl', ),
		BasePeer::TYPE_COLNAME => array (self::PRO_UID, self::PRO_PARENT, self::PRO_TIME, self::PRO_TIMEUNIT, self::PRO_STATUS, self::PRO_TYPE_DAY, self::PRO_TYPE, self::PRO_ASSIGNMENT, self::PRO_SHOW_MAP, self::PRO_SHOW_MESSAGE, self::PRO_SUBPROCESS, self::PRO_TRI_DELETED, self::PRO_TRI_CANCELED, self::PRO_TRI_PAUSED, self::PRO_TRI_REASSIGNED, self::PRO_SHOW_DELEGATE, self::PRO_SHOW_DYNAFORM, self::PRO_CATEGORY, self::PRO_SUB_CATEGORY, self::PRO_INDUSTRY, self::PRO_UPDATE_DATE, self::PRO_CREATE_DATE, self::PRO_CREATE_USER, self::PRO_HEIGHT, self::PRO_WIDTH, self::PRO_TITLE_X, self::PRO_TITLE_Y, self::PRO_DEBUG, self::PRO_DYNAFORMS, self::PRO_DERIVATION_SCREEN_TPL, ),
		BasePeer::TYPE_RAW_COLNAME => array ('PRO_UID', 'PRO_PARENT', 'PRO_TIME', 'PRO_TIMEUNIT', 'PRO_STATUS', 'PRO_TYPE_DAY', 'PRO_TYPE', 'PRO_ASSIGNMENT', 'PRO_SHOW_MAP', 'PRO_SHOW_MESSAGE', 'PRO_SUBPROCESS', 'PRO_TRI_DELETED', 'PRO_TRI_CANCELED', 'PRO_TRI_PAUSED', 'PRO_TRI_REASSIGNED', 'PRO_SHOW_DELEGATE', 'PRO_SHOW_DYNAFORM', 'PRO_CATEGORY', 'PRO_SUB_CATEGORY', 'PRO_INDUSTRY', 'PRO_UPDATE_DATE', 'PRO_CREATE_DATE', 'PRO_CREATE_USER', 'PRO_HEIGHT', 'PRO_WIDTH', 'PRO_TITLE_X', 'PRO_TITLE_Y', 'PRO_DEBUG', 'PRO_DYNAFORMS', 'PRO_DERIVATION_SCREEN_TPL', ),
		BasePeer::TYPE_FIELDNAME => array ('PRO_UID', 'PRO_PARENT', 'PRO_TIME', 'PRO_TIMEUNIT', 'PRO_STATUS', 'PRO_TYPE_DAY', 'PRO_TYPE', 'PRO_ASSIGNMENT', 'PRO_SHOW_MAP', 'PRO_SHOW_MESSAGE', 'PRO_SUBPROCESS', 'PRO_TRI_DELETED', 'PRO_TRI_CANCELED', 'PRO_TRI_PAUSED', 'PRO_TRI_REASSIGNED', 'PRO_SHOW_DELEGATE', 'PRO_SHOW_DYNAFORM', 'PRO_CATEGORY', 'PRO_SUB_CATEGORY', 'PRO_INDUSTRY', 'PRO_UPDATE_DATE', 'PRO_CREATE_DATE', 'PRO_CREATE_USER', 'PRO_HEIGHT', 'PRO_WIDTH', 'PRO_TITLE_X', 'PRO_TITLE_Y', 'PRO_DEBUG', 'PRO_DYNAFORMS', 'PRO_DERIVATION_SCREEN_TPL', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('ProUid' => 0, 'ProParent' => 1, 'ProTime' => 2, 'ProTimeunit' => 3, 'ProStatus' => 4, 'ProTypeDay' => 5, 'ProType' => 6, 'ProAssignment' => 7, 'ProShowMap' => 8, 'ProShowMessage' => 9, 'ProSubprocess' => 10, 'ProTriDeleted' => 11, 'ProTriCanceled' => 12, 'ProTriPaused' => 13, 'ProTriReassigned' => 14, 'ProShowDelegate' => 15, 'ProShowDynaform' => 16, 'ProCategory' => 17, 'ProSubCategory' => 18, 'ProIndustry' => 19, 'ProUpdateDate' => 20, 'ProCreateDate' => 21, 'ProCreateUser' => 22, 'ProHeight' => 23, 'ProWidth' => 24, 'ProTitleX' => 25, 'ProTitleY' => 26, 'ProDebug' => 27, 'ProDynaforms' => 28, 'ProDerivationScreenTpl' => 29, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('proUid' => 0, 'proParent' => 1, 'proTime' => 2, 'proTimeunit' => 3, 'proStatus' => 4, 'proTypeDay' => 5, 'proType' => 6, 'proAssignment' => 7, 'proShowMap' => 8, 'proShowMessage' => 9, 'proSubprocess' => 10, 'proTriDeleted' => 11, 'proTriCanceled' => 12, 'proTriPaused' => 13, 'proTriReassigned' => 14, 'proShowDelegate' => 15, 'proShowDynaform' => 16, 'proCategory' => 17, 'proSubCategory' => 18, 'proIndustry' => 19, 'proUpdateDate' => 20, 'proCreateDate' => 21, 'proCreateUser' => 22, 'proHeight' => 23, 'proWidth' => 24, 'proTitleX' => 25, 'proTitleY' => 26, 'proDebug' => 27, 'proDynaforms' => 28, 'proDerivationScreenTpl' => 29, ),
		BasePeer::TYPE_COLNAME => array (self::PRO_UID => 0, self::PRO_PARENT => 1, self::PRO_TIME => 2, self::PRO_TIMEUNIT => 3, self::PRO_STATUS => 4, self::PRO_TYPE_DAY => 5, self::PRO_TYPE => 6, self::PRO_ASSIGNMENT => 7, self::PRO_SHOW_MAP => 8, self::PRO_SHOW_MESSAGE => 9, self::PRO_SUBPROCESS => 10, self::PRO_TRI_DELETED => 11, self::PRO_TRI_CANCELED => 12, self::PRO_TRI_PAUSED => 13, self::PRO_TRI_REASSIGNED => 14, self::PRO_SHOW_DELEGATE => 15, self::PRO_SHOW_DYNAFORM => 16, self::PRO_CATEGORY => 17, self::PRO_SUB_CATEGORY => 18, self::PRO_INDUSTRY => 19, self::PRO_UPDATE_DATE => 20, self::PRO_CREATE_DATE => 21, self::PRO_CREATE_USER => 22, self::PRO_HEIGHT => 23, self::PRO_WIDTH => 24, self::PRO_TITLE_X => 25, self::PRO_TITLE_Y => 26, self::PRO_DEBUG => 27, self::PRO_DYNAFORMS => 28, self::PRO_DERIVATION_SCREEN_TPL => 29, ),
		BasePeer::TYPE_RAW_COLNAME => array ('PRO_UID' => 0, 'PRO_PARENT' => 1, 'PRO_TIME' => 2, 'PRO_TIMEUNIT' => 3, 'PRO_STATUS' => 4, 'PRO_TYPE_DAY' => 5, 'PRO_TYPE' => 6, 'PRO_ASSIGNMENT' => 7, 'PRO_SHOW_MAP' => 8, 'PRO_SHOW_MESSAGE' => 9, 'PRO_SUBPROCESS' => 10, 'PRO_TRI_DELETED' => 11, 'PRO_TRI_CANCELED' => 12, 'PRO_TRI_PAUSED' => 13, 'PRO_TRI_REASSIGNED' => 14, 'PRO_SHOW_DELEGATE' => 15, 'PRO_SHOW_DYNAFORM' => 16, 'PRO_CATEGORY' => 17, 'PRO_SUB_CATEGORY' => 18, 'PRO_INDUSTRY' => 19, 'PRO_UPDATE_DATE' => 20, 'PRO_CREATE_DATE' => 21, 'PRO_CREATE_USER' => 22, 'PRO_HEIGHT' => 23, 'PRO_WIDTH' => 24, 'PRO_TITLE_X' => 25, 'PRO_TITLE_Y' => 26, 'PRO_DEBUG' => 27, 'PRO_DYNAFORMS' => 28, 'PRO_DERIVATION_SCREEN_TPL' => 29, ),
		BasePeer::TYPE_FIELDNAME => array ('PRO_UID' => 0, 'PRO_PARENT' => 1, 'PRO_TIME' => 2, 'PRO_TIMEUNIT' => 3, 'PRO_STATUS' => 4, 'PRO_TYPE_DAY' => 5, 'PRO_TYPE' => 6, 'PRO_ASSIGNMENT' => 7, 'PRO_SHOW_MAP' => 8, 'PRO_SHOW_MESSAGE' => 9, 'PRO_SUBPROCESS' => 10, 'PRO_TRI_DELETED' => 11, 'PRO_TRI_CANCELED' => 12, 'PRO_TRI_PAUSED' => 13, 'PRO_TRI_REASSIGNED' => 14, 'PRO_SHOW_DELEGATE' => 15, 'PRO_SHOW_DYNAFORM' => 16, 'PRO_CATEGORY' => 17, 'PRO_SUB_CATEGORY' => 18, 'PRO_INDUSTRY' => 19, 'PRO_UPDATE_DATE' => 20, 'PRO_CREATE_DATE' => 21, 'PRO_CREATE_USER' => 22, 'PRO_HEIGHT' => 23, 'PRO_WIDTH' => 24, 'PRO_TITLE_X' => 25, 'PRO_TITLE_Y' => 26, 'PRO_DEBUG' => 27, 'PRO_DYNAFORMS' => 28, 'PRO_DERIVATION_SCREEN_TPL' => 29, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. ProcessPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(ProcessPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(ProcessPeer::PRO_UID);
			$criteria->addSelectColumn(ProcessPeer::PRO_PARENT);
			$criteria->addSelectColumn(ProcessPeer::PRO_TIME);
			$criteria->addSelectColumn(ProcessPeer::PRO_TIMEUNIT);
			$criteria->addSelectColumn(ProcessPeer::PRO_STATUS);
			$criteria->addSelectColumn(ProcessPeer::PRO_TYPE_DAY);
			$criteria->addSelectColumn(ProcessPeer::PRO_TYPE);
			$criteria->addSelectColumn(ProcessPeer::PRO_ASSIGNMENT);
			$criteria->addSelectColumn(ProcessPeer::PRO_SHOW_MAP);
			$criteria->addSelectColumn(ProcessPeer::PRO_SHOW_MESSAGE);
			$criteria->addSelectColumn(ProcessPeer::PRO_SUBPROCESS);
			$criteria->addSelectColumn(ProcessPeer::PRO_TRI_DELETED);
			$criteria->addSelectColumn(ProcessPeer::PRO_TRI_CANCELED);
			$criteria->addSelectColumn(ProcessPeer::PRO_TRI_PAUSED);
			$criteria->addSelectColumn(ProcessPeer::PRO_TRI_REASSIGNED);
			$criteria->addSelectColumn(ProcessPeer::PRO_SHOW_DELEGATE);
			$criteria->addSelectColumn(ProcessPeer::PRO_SHOW_DYNAFORM);
			$criteria->addSelectColumn(ProcessPeer::PRO_CATEGORY);
			$criteria->addSelectColumn(ProcessPeer::PRO_SUB_CATEGORY);
			$criteria->addSelectColumn(ProcessPeer::PRO_INDUSTRY);
			$criteria->addSelectColumn(ProcessPeer::PRO_UPDATE_DATE);
			$criteria->addSelectColumn(ProcessPeer::PRO_CREATE_DATE);
			$criteria->addSelectColumn(ProcessPeer::PRO_CREATE_USER);
			$criteria->addSelectColumn(ProcessPeer::PRO_HEIGHT);
			$criteria->addSelectColumn(ProcessPeer::PRO_WIDTH);
			$criteria->addSelectColumn(ProcessPeer::PRO_TITLE_X);
			$criteria->addSelectColumn(ProcessPeer::PRO_TITLE_Y);
			$criteria->addSelectColumn(ProcessPeer::PRO_DEBUG);
			$criteria->addSelectColumn(ProcessPeer::PRO_DYNAFORMS);
			$criteria->addSelectColumn(ProcessPeer::PRO_DERIVATION_SCREEN_TPL);
		} else {
			$criteria->addSelectColumn($alias . '.PRO_UID');
			$criteria->addSelectColumn($alias . '.PRO_PARENT');
			$criteria->addSelectColumn($alias . '.PRO_TIME');
			$criteria->addSelectColumn($alias . '.PRO_TIMEUNIT');
			$criteria->addSelectColumn($alias . '.PRO_STATUS');
			$criteria->addSelectColumn($alias . '.PRO_TYPE_DAY');
			$criteria->addSelectColumn($alias . '.PRO_TYPE');
			$criteria->addSelectColumn($alias . '.PRO_ASSIGNMENT');
			$criteria->addSelectColumn($alias . '.PRO_SHOW_MAP');
			$criteria->addSelectColumn($alias . '.PRO_SHOW_MESSAGE');
			$criteria->addSelectColumn($alias . '.PRO_SUBPROCESS');
			$criteria->addSelectColumn($alias . '.PRO_TRI_DELETED');
			$criteria->addSelectColumn($alias . '.PRO_TRI_CANCELED');
			$criteria->addSelectColumn($alias . '.PRO_TRI_PAUSED');
			$criteria->addSelectColumn($alias . '.PRO_TRI_REASSIGNED');
			$criteria->addSelectColumn($alias . '.PRO_SHOW_DELEGATE');
			$criteria->addSelectColumn($alias . '.PRO_SHOW_DYNAFORM');
			$criteria->addSelectColumn($alias . '.PRO_CATEGORY');
			$criteria->addSelectColumn($alias . '.PRO_SUB_CATEGORY');
			$criteria->addSelectColumn($alias . '.PRO_INDUSTRY');
			$criteria->addSelectColumn($alias . '.PRO_UPDATE_DATE');
			$criteria->addSelectColumn($alias . '.PRO_CREATE_DATE');
			$criteria->addSelectColumn($alias . '.PRO_CREATE_USER');
			$criteria->addSelectColumn($alias . '.PRO_HEIGHT');
			$criteria->addSelectColumn($alias . '.PRO_WIDTH');
			$criteria->addSelectColumn($alias . '.PRO_TITLE_X');
			$criteria->addSelectColumn($alias . '.PRO_TITLE_Y');
			$criteria->addSelectColumn($alias . '.PRO_DEBUG');
			$criteria->addSelectColumn($alias . '.PRO_DYNAFORMS');
			$criteria->addSelectColumn($alias . '.PRO_DERIVATION_SCREEN_TPL');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ProcessPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ProcessPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(ProcessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Selects one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     Process
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = ProcessPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Selects several row from the DB.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return ProcessPeer::populateObjects(ProcessPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ProcessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			ProcessPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      Process $value A Process object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getProUid();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A Process object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Process) {
				$key = (string) $value->getProUid();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Process object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     Process Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to PROCESS
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (string) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = ProcessPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = ProcessPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = ProcessPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				ProcessPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (Process object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = ProcessPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = ProcessPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + ProcessPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = ProcessPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			ProcessPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseProcessPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseProcessPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new ProcessTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? ProcessPeer::CLASS_DEFAULT : ProcessPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Process or Criteria object.
	 *
	 * @param      mixed $values Criteria or Process object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ProcessPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Process object
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Performs an UPDATE on the database, given a Process or Criteria object.
	 *
	 * @param      mixed $values Criteria or Process object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ProcessPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(ProcessPeer::PRO_UID);
			$value = $criteria->remove(ProcessPeer::PRO_UID);
			if ($value) {
				$selectCriteria->add(ProcessPeer::PRO_UID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(ProcessPeer::TABLE_NAME);
			}

		} else { // $values is Process object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the PROCESS table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ProcessPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(ProcessPeer::TABLE_NAME, $con, ProcessPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			ProcessPeer::clearInstancePool();
			ProcessPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Process or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Process object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(ProcessPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			ProcessPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Process) { // it's a model object
			// invalidate the cache for this single object
			ProcessPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ProcessPeer::PRO_UID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				ProcessPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			ProcessPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Process object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Process $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ProcessPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ProcessPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		if ($obj->isNew() || $obj->isColumnModified(ProcessPeer::PRO_TIMEUNIT))
			$columns[ProcessPeer::PRO_TIMEUNIT] = $obj->getProTimeunit();

		if ($obj->isNew() || $obj->isColumnModified(ProcessPeer::PRO_STATUS))
			$columns[ProcessPeer::PRO_STATUS] = $obj->getProStatus();

		if ($obj->isNew() || $obj->isColumnModified(ProcessPeer::PRO_TYPE))
			$columns[ProcessPeer::PRO_TYPE] = $obj->getProType();

		if ($obj->isNew() || $obj->isColumnModified(ProcessPeer::PRO_ASSIGNMENT))
			$columns[ProcessPeer::PRO_ASSIGNMENT] = $obj->getProAssignment();

		}

		return BasePeer::doValidate(ProcessPeer::DATABASE_NAME, ProcessPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      string $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Process
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = ProcessPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(ProcessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(ProcessPeer::DATABASE_NAME);
		$criteria->add(ProcessPeer::PRO_UID, $pk);

		$v = ProcessPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ProcessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(ProcessPeer::DATABASE_NAME);
			$criteria->add(ProcessPeer::PRO_UID, $pks, Criteria::IN);
			$objs = ProcessPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseProcessPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseProcessPeer::buildTableMap();

