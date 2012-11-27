<?php


require_once 'propel/om/BaseObject.php';
require_once 'propel/om/Persistent.php';

include_once 'propel/query/Criteria.php';
include_once 'classes/model/DashletInstancePeer.php';

/**
 * Base class that represents a row from the 'DASHLET_INSTANCE' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseDashletInstance extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'DashletInstancePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        DashletInstancePeer
	 */
	protected static $peer;

	/**
	 * The value for the das_ins_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $das_ins_uid;

	/**
	 * The value for the das_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $das_uid;

	/**
	 * The value for the das_ins_owner_type field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $das_ins_owner_type;

	/**
	 * The value for the das_ins_owner_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $das_ins_owner_uid;

	/**
	 * The value for the das_ins_additional_properties field.
	 * @var        string
	 */
	protected $das_ins_additional_properties;

	/**
	 * The value for the das_ins_create_date field.
	 * @var        string
	 */
	protected $das_ins_create_date;

	/**
	 * The value for the das_ins_update_date field.
	 * @var        string
	 */
	protected $das_ins_update_date;

	/**
	 * The value for the das_ins_status field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $das_ins_status;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->das_ins_uid = '';
		$this->das_uid = '';
		$this->das_ins_owner_type = '';
		$this->das_ins_owner_uid = '';
		$this->das_ins_status = 1;
	}

	/**
	 * Initializes internal state of BaseDashletInstance object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [das_ins_uid] column value.
	 * 
	 * @return     string
	 */
	public function getDasInsUid()
	{
		return $this->das_ins_uid;
	}

	/**
	 * Get the [das_uid] column value.
	 * 
	 * @return     string
	 */
	public function getDasUid()
	{
		return $this->das_uid;
	}

	/**
	 * Get the [das_ins_owner_type] column value.
	 * 
	 * @return     string
	 */
	public function getDasInsOwnerType()
	{
		return $this->das_ins_owner_type;
	}

	/**
	 * Get the [das_ins_owner_uid] column value.
	 * 
	 * @return     string
	 */
	public function getDasInsOwnerUid()
	{
		return $this->das_ins_owner_uid;
	}

	/**
	 * Get the [das_ins_additional_properties] column value.
	 * 
	 * @return     string
	 */
	public function getDasInsAdditionalProperties()
	{
		return $this->das_ins_additional_properties;
	}

	/**
	 * Get the [optionally formatted] temporal [das_ins_create_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDasInsCreateDate($format = 'Y-m-d H:i:s')
	{
		if ($this->das_ins_create_date === null) {
			return null;
		}


		if ($this->das_ins_create_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->das_ins_create_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->das_ins_create_date, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [das_ins_update_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDasInsUpdateDate($format = 'Y-m-d H:i:s')
	{
		if ($this->das_ins_update_date === null) {
			return null;
		}


		if ($this->das_ins_update_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->das_ins_update_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->das_ins_update_date, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [das_ins_status] column value.
	 * 
	 * @return     int
	 */
	public function getDasInsStatus()
	{
		return $this->das_ins_status;
	}

	/**
	 * Set the value of [das_ins_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     DashletInstance The current object (for fluent API support)
	 */
	public function setDasInsUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->das_ins_uid !== $v) {
			$this->das_ins_uid = $v;
			$this->modifiedColumns[] = DashletInstancePeer::DAS_INS_UID;
		}

		return $this;
	} // setDasInsUid()

	/**
	 * Set the value of [das_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     DashletInstance The current object (for fluent API support)
	 */
	public function setDasUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->das_uid !== $v) {
			$this->das_uid = $v;
			$this->modifiedColumns[] = DashletInstancePeer::DAS_UID;
		}

		return $this;
	} // setDasUid()

	/**
	 * Set the value of [das_ins_owner_type] column.
	 * 
	 * @param      string $v new value
	 * @return     DashletInstance The current object (for fluent API support)
	 */
	public function setDasInsOwnerType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->das_ins_owner_type !== $v) {
			$this->das_ins_owner_type = $v;
			$this->modifiedColumns[] = DashletInstancePeer::DAS_INS_OWNER_TYPE;
		}

		return $this;
	} // setDasInsOwnerType()

	/**
	 * Set the value of [das_ins_owner_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     DashletInstance The current object (for fluent API support)
	 */
	public function setDasInsOwnerUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->das_ins_owner_uid !== $v) {
			$this->das_ins_owner_uid = $v;
			$this->modifiedColumns[] = DashletInstancePeer::DAS_INS_OWNER_UID;
		}

		return $this;
	} // setDasInsOwnerUid()

	/**
	 * Set the value of [das_ins_additional_properties] column.
	 * 
	 * @param      string $v new value
	 * @return     DashletInstance The current object (for fluent API support)
	 */
	public function setDasInsAdditionalProperties($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->das_ins_additional_properties !== $v) {
			$this->das_ins_additional_properties = $v;
			$this->modifiedColumns[] = DashletInstancePeer::DAS_INS_ADDITIONAL_PROPERTIES;
		}

		return $this;
	} // setDasInsAdditionalProperties()

	/**
	 * Sets the value of [das_ins_create_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     DashletInstance The current object (for fluent API support)
	 */
	public function setDasInsCreateDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->das_ins_create_date !== null || $dt !== null) {
			$currentDateAsString = ($this->das_ins_create_date !== null && $tmpDt = new DateTime($this->das_ins_create_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->das_ins_create_date = $newDateAsString;
				$this->modifiedColumns[] = DashletInstancePeer::DAS_INS_CREATE_DATE;
			}
		} // if either are not null

		return $this;
	} // setDasInsCreateDate()

	/**
	 * Sets the value of [das_ins_update_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     DashletInstance The current object (for fluent API support)
	 */
	public function setDasInsUpdateDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->das_ins_update_date !== null || $dt !== null) {
			$currentDateAsString = ($this->das_ins_update_date !== null && $tmpDt = new DateTime($this->das_ins_update_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->das_ins_update_date = $newDateAsString;
				$this->modifiedColumns[] = DashletInstancePeer::DAS_INS_UPDATE_DATE;
			}
		} // if either are not null

		return $this;
	} // setDasInsUpdateDate()

	/**
	 * Set the value of [das_ins_status] column.
	 * 
	 * @param      int $v new value
	 * @return     DashletInstance The current object (for fluent API support)
	 */
	public function setDasInsStatus($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->das_ins_status !== $v) {
			$this->das_ins_status = $v;
			$this->modifiedColumns[] = DashletInstancePeer::DAS_INS_STATUS;
		}

		return $this;
	} // setDasInsStatus()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			if ($this->das_ins_uid !== '') {
				return false;
			}

			if ($this->das_uid !== '') {
				return false;
			}

			if ($this->das_ins_owner_type !== '') {
				return false;
			}

			if ($this->das_ins_owner_uid !== '') {
				return false;
			}

			if ($this->das_ins_status !== 1) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->das_ins_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->das_uid = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->das_ins_owner_type = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->das_ins_owner_uid = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->das_ins_additional_properties = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->das_ins_create_date = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->das_ins_update_date = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->das_ins_status = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 8; // 8 = DashletInstancePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating DashletInstance object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DashletInstancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = DashletInstancePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DashletInstancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = DashletInstanceQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DashletInstancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				DashletInstancePeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setNew(false);
				} else {
					$affectedRows = DashletInstancePeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = DashletInstancePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DashletInstancePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getDasInsUid();
				break;
			case 1:
				return $this->getDasUid();
				break;
			case 2:
				return $this->getDasInsOwnerType();
				break;
			case 3:
				return $this->getDasInsOwnerUid();
				break;
			case 4:
				return $this->getDasInsAdditionalProperties();
				break;
			case 5:
				return $this->getDasInsCreateDate();
				break;
			case 6:
				return $this->getDasInsUpdateDate();
				break;
			case 7:
				return $this->getDasInsStatus();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
	{
		if (isset($alreadyDumpedObjects['DashletInstance'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['DashletInstance'][$this->getPrimaryKey()] = true;
		$keys = DashletInstancePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getDasInsUid(),
			$keys[1] => $this->getDasUid(),
			$keys[2] => $this->getDasInsOwnerType(),
			$keys[3] => $this->getDasInsOwnerUid(),
			$keys[4] => $this->getDasInsAdditionalProperties(),
			$keys[5] => $this->getDasInsCreateDate(),
			$keys[6] => $this->getDasInsUpdateDate(),
			$keys[7] => $this->getDasInsStatus(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DashletInstancePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setDasInsUid($value);
				break;
			case 1:
				$this->setDasUid($value);
				break;
			case 2:
				$this->setDasInsOwnerType($value);
				break;
			case 3:
				$this->setDasInsOwnerUid($value);
				break;
			case 4:
				$this->setDasInsAdditionalProperties($value);
				break;
			case 5:
				$this->setDasInsCreateDate($value);
				break;
			case 6:
				$this->setDasInsUpdateDate($value);
				break;
			case 7:
				$this->setDasInsStatus($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DashletInstancePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setDasInsUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDasUid($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDasInsOwnerType($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDasInsOwnerUid($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDasInsAdditionalProperties($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDasInsCreateDate($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDasInsUpdateDate($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDasInsStatus($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(DashletInstancePeer::DATABASE_NAME);

		if ($this->isColumnModified(DashletInstancePeer::DAS_INS_UID)) $criteria->add(DashletInstancePeer::DAS_INS_UID, $this->das_ins_uid);
		if ($this->isColumnModified(DashletInstancePeer::DAS_UID)) $criteria->add(DashletInstancePeer::DAS_UID, $this->das_uid);
		if ($this->isColumnModified(DashletInstancePeer::DAS_INS_OWNER_TYPE)) $criteria->add(DashletInstancePeer::DAS_INS_OWNER_TYPE, $this->das_ins_owner_type);
		if ($this->isColumnModified(DashletInstancePeer::DAS_INS_OWNER_UID)) $criteria->add(DashletInstancePeer::DAS_INS_OWNER_UID, $this->das_ins_owner_uid);
		if ($this->isColumnModified(DashletInstancePeer::DAS_INS_ADDITIONAL_PROPERTIES)) $criteria->add(DashletInstancePeer::DAS_INS_ADDITIONAL_PROPERTIES, $this->das_ins_additional_properties);
		if ($this->isColumnModified(DashletInstancePeer::DAS_INS_CREATE_DATE)) $criteria->add(DashletInstancePeer::DAS_INS_CREATE_DATE, $this->das_ins_create_date);
		if ($this->isColumnModified(DashletInstancePeer::DAS_INS_UPDATE_DATE)) $criteria->add(DashletInstancePeer::DAS_INS_UPDATE_DATE, $this->das_ins_update_date);
		if ($this->isColumnModified(DashletInstancePeer::DAS_INS_STATUS)) $criteria->add(DashletInstancePeer::DAS_INS_STATUS, $this->das_ins_status);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(DashletInstancePeer::DATABASE_NAME);
		$criteria->add(DashletInstancePeer::DAS_INS_UID, $this->das_ins_uid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getDasInsUid();
	}

	/**
	 * Generic method to set the primary key (das_ins_uid column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setDasInsUid($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getDasInsUid();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of DashletInstance (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setDasInsUid($this->getDasInsUid());
		$copyObj->setDasUid($this->getDasUid());
		$copyObj->setDasInsOwnerType($this->getDasInsOwnerType());
		$copyObj->setDasInsOwnerUid($this->getDasInsOwnerUid());
		$copyObj->setDasInsAdditionalProperties($this->getDasInsAdditionalProperties());
		$copyObj->setDasInsCreateDate($this->getDasInsCreateDate());
		$copyObj->setDasInsUpdateDate($this->getDasInsUpdateDate());
		$copyObj->setDasInsStatus($this->getDasInsStatus());
		if ($makeNew) {
			$copyObj->setNew(true);
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     DashletInstance Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     DashletInstancePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new DashletInstancePeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->das_ins_uid = null;
		$this->das_uid = null;
		$this->das_ins_owner_type = null;
		$this->das_ins_owner_uid = null;
		$this->das_ins_additional_properties = null;
		$this->das_ins_create_date = null;
		$this->das_ins_update_date = null;
		$this->das_ins_status = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->applyDefaultValues();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(DashletInstancePeer::DEFAULT_STRING_FORMAT);
	}

} // BaseDashletInstance
