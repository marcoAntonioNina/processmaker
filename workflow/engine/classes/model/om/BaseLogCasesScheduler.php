<?php


/**
 * Base class that represents a row from the 'LOG_CASES_SCHEDULER' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseLogCasesScheduler extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'LogCasesSchedulerPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        LogCasesSchedulerPeer
	 */
	protected static $peer;

	/**
	 * The value for the log_case_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $log_case_uid;

	/**
	 * The value for the pro_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $pro_uid;

	/**
	 * The value for the tas_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $tas_uid;

	/**
	 * The value for the usr_name field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_name;

	/**
	 * The value for the exec_date field.
	 * @var        string
	 */
	protected $exec_date;

	/**
	 * The value for the exec_hour field.
	 * Note: this column has a database default value of: '12:00'
	 * @var        string
	 */
	protected $exec_hour;

	/**
	 * The value for the result field.
	 * Note: this column has a database default value of: 'SUCCESS'
	 * @var        string
	 */
	protected $result;

	/**
	 * The value for the sch_uid field.
	 * Note: this column has a database default value of: 'OPEN'
	 * @var        string
	 */
	protected $sch_uid;

	/**
	 * The value for the ws_create_case_status field.
	 * @var        string
	 */
	protected $ws_create_case_status;

	/**
	 * The value for the ws_route_case_status field.
	 * @var        string
	 */
	protected $ws_route_case_status;

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
		$this->log_case_uid = '';
		$this->pro_uid = '';
		$this->tas_uid = '';
		$this->usr_name = '';
		$this->exec_hour = '12:00';
		$this->result = 'SUCCESS';
		$this->sch_uid = 'OPEN';
	}

	/**
	 * Initializes internal state of BaseLogCasesScheduler object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [log_case_uid] column value.
	 * 
	 * @return     string
	 */
	public function getLogCaseUid()
	{
		return $this->log_case_uid;
	}

	/**
	 * Get the [pro_uid] column value.
	 * 
	 * @return     string
	 */
	public function getProUid()
	{
		return $this->pro_uid;
	}

	/**
	 * Get the [tas_uid] column value.
	 * 
	 * @return     string
	 */
	public function getTasUid()
	{
		return $this->tas_uid;
	}

	/**
	 * Get the [usr_name] column value.
	 * 
	 * @return     string
	 */
	public function getUsrName()
	{
		return $this->usr_name;
	}

	/**
	 * Get the [optionally formatted] temporal [exec_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getExecDate($format = '%x')
	{
		if ($this->exec_date === null) {
			return null;
		}


		if ($this->exec_date === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->exec_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->exec_date, true), $x);
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
	 * Get the [exec_hour] column value.
	 * 
	 * @return     string
	 */
	public function getExecHour()
	{
		return $this->exec_hour;
	}

	/**
	 * Get the [result] column value.
	 * 
	 * @return     string
	 */
	public function getResult()
	{
		return $this->result;
	}

	/**
	 * Get the [sch_uid] column value.
	 * 
	 * @return     string
	 */
	public function getSchUid()
	{
		return $this->sch_uid;
	}

	/**
	 * Get the [ws_create_case_status] column value.
	 * 
	 * @return     string
	 */
	public function getWsCreateCaseStatus()
	{
		return $this->ws_create_case_status;
	}

	/**
	 * Get the [ws_route_case_status] column value.
	 * 
	 * @return     string
	 */
	public function getWsRouteCaseStatus()
	{
		return $this->ws_route_case_status;
	}

	/**
	 * Set the value of [log_case_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     LogCasesScheduler The current object (for fluent API support)
	 */
	public function setLogCaseUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->log_case_uid !== $v) {
			$this->log_case_uid = $v;
			$this->modifiedColumns[] = LogCasesSchedulerPeer::LOG_CASE_UID;
		}

		return $this;
	} // setLogCaseUid()

	/**
	 * Set the value of [pro_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     LogCasesScheduler The current object (for fluent API support)
	 */
	public function setProUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_uid !== $v) {
			$this->pro_uid = $v;
			$this->modifiedColumns[] = LogCasesSchedulerPeer::PRO_UID;
		}

		return $this;
	} // setProUid()

	/**
	 * Set the value of [tas_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     LogCasesScheduler The current object (for fluent API support)
	 */
	public function setTasUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tas_uid !== $v) {
			$this->tas_uid = $v;
			$this->modifiedColumns[] = LogCasesSchedulerPeer::TAS_UID;
		}

		return $this;
	} // setTasUid()

	/**
	 * Set the value of [usr_name] column.
	 * 
	 * @param      string $v new value
	 * @return     LogCasesScheduler The current object (for fluent API support)
	 */
	public function setUsrName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_name !== $v) {
			$this->usr_name = $v;
			$this->modifiedColumns[] = LogCasesSchedulerPeer::USR_NAME;
		}

		return $this;
	} // setUsrName()

	/**
	 * Sets the value of [exec_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     LogCasesScheduler The current object (for fluent API support)
	 */
	public function setExecDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->exec_date !== null || $dt !== null) {
			$currentDateAsString = ($this->exec_date !== null && $tmpDt = new DateTime($this->exec_date)) ? $tmpDt->format('Y-m-d') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->exec_date = $newDateAsString;
				$this->modifiedColumns[] = LogCasesSchedulerPeer::EXEC_DATE;
			}
		} // if either are not null

		return $this;
	} // setExecDate()

	/**
	 * Set the value of [exec_hour] column.
	 * 
	 * @param      string $v new value
	 * @return     LogCasesScheduler The current object (for fluent API support)
	 */
	public function setExecHour($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->exec_hour !== $v) {
			$this->exec_hour = $v;
			$this->modifiedColumns[] = LogCasesSchedulerPeer::EXEC_HOUR;
		}

		return $this;
	} // setExecHour()

	/**
	 * Set the value of [result] column.
	 * 
	 * @param      string $v new value
	 * @return     LogCasesScheduler The current object (for fluent API support)
	 */
	public function setResult($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->result !== $v) {
			$this->result = $v;
			$this->modifiedColumns[] = LogCasesSchedulerPeer::RESULT;
		}

		return $this;
	} // setResult()

	/**
	 * Set the value of [sch_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     LogCasesScheduler The current object (for fluent API support)
	 */
	public function setSchUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sch_uid !== $v) {
			$this->sch_uid = $v;
			$this->modifiedColumns[] = LogCasesSchedulerPeer::SCH_UID;
		}

		return $this;
	} // setSchUid()

	/**
	 * Set the value of [ws_create_case_status] column.
	 * 
	 * @param      string $v new value
	 * @return     LogCasesScheduler The current object (for fluent API support)
	 */
	public function setWsCreateCaseStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ws_create_case_status !== $v) {
			$this->ws_create_case_status = $v;
			$this->modifiedColumns[] = LogCasesSchedulerPeer::WS_CREATE_CASE_STATUS;
		}

		return $this;
	} // setWsCreateCaseStatus()

	/**
	 * Set the value of [ws_route_case_status] column.
	 * 
	 * @param      string $v new value
	 * @return     LogCasesScheduler The current object (for fluent API support)
	 */
	public function setWsRouteCaseStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ws_route_case_status !== $v) {
			$this->ws_route_case_status = $v;
			$this->modifiedColumns[] = LogCasesSchedulerPeer::WS_ROUTE_CASE_STATUS;
		}

		return $this;
	} // setWsRouteCaseStatus()

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
			if ($this->log_case_uid !== '') {
				return false;
			}

			if ($this->pro_uid !== '') {
				return false;
			}

			if ($this->tas_uid !== '') {
				return false;
			}

			if ($this->usr_name !== '') {
				return false;
			}

			if ($this->exec_hour !== '12:00') {
				return false;
			}

			if ($this->result !== 'SUCCESS') {
				return false;
			}

			if ($this->sch_uid !== 'OPEN') {
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

			$this->log_case_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->pro_uid = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->tas_uid = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->usr_name = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->exec_date = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->exec_hour = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->result = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->sch_uid = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->ws_create_case_status = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->ws_route_case_status = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 10; // 10 = LogCasesSchedulerPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating LogCasesScheduler object", $e);
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
			$con = Propel::getConnection(LogCasesSchedulerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = LogCasesSchedulerPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(LogCasesSchedulerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = LogCasesSchedulerQuery::create()
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
			$con = Propel::getConnection(LogCasesSchedulerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				LogCasesSchedulerPeer::addInstanceToPool($this);
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
					$affectedRows = LogCasesSchedulerPeer::doUpdate($this, $con);
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


			if (($retval = LogCasesSchedulerPeer::doValidate($this, $columns)) !== true) {
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
		$pos = LogCasesSchedulerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getLogCaseUid();
				break;
			case 1:
				return $this->getProUid();
				break;
			case 2:
				return $this->getTasUid();
				break;
			case 3:
				return $this->getUsrName();
				break;
			case 4:
				return $this->getExecDate();
				break;
			case 5:
				return $this->getExecHour();
				break;
			case 6:
				return $this->getResult();
				break;
			case 7:
				return $this->getSchUid();
				break;
			case 8:
				return $this->getWsCreateCaseStatus();
				break;
			case 9:
				return $this->getWsRouteCaseStatus();
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
		if (isset($alreadyDumpedObjects['LogCasesScheduler'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['LogCasesScheduler'][$this->getPrimaryKey()] = true;
		$keys = LogCasesSchedulerPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getLogCaseUid(),
			$keys[1] => $this->getProUid(),
			$keys[2] => $this->getTasUid(),
			$keys[3] => $this->getUsrName(),
			$keys[4] => $this->getExecDate(),
			$keys[5] => $this->getExecHour(),
			$keys[6] => $this->getResult(),
			$keys[7] => $this->getSchUid(),
			$keys[8] => $this->getWsCreateCaseStatus(),
			$keys[9] => $this->getWsRouteCaseStatus(),
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
		$pos = LogCasesSchedulerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setLogCaseUid($value);
				break;
			case 1:
				$this->setProUid($value);
				break;
			case 2:
				$this->setTasUid($value);
				break;
			case 3:
				$this->setUsrName($value);
				break;
			case 4:
				$this->setExecDate($value);
				break;
			case 5:
				$this->setExecHour($value);
				break;
			case 6:
				$this->setResult($value);
				break;
			case 7:
				$this->setSchUid($value);
				break;
			case 8:
				$this->setWsCreateCaseStatus($value);
				break;
			case 9:
				$this->setWsRouteCaseStatus($value);
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
		$keys = LogCasesSchedulerPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setLogCaseUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setProUid($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTasUid($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setUsrName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setExecDate($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setExecHour($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setResult($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setSchUid($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setWsCreateCaseStatus($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setWsRouteCaseStatus($arr[$keys[9]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(LogCasesSchedulerPeer::DATABASE_NAME);

		if ($this->isColumnModified(LogCasesSchedulerPeer::LOG_CASE_UID)) $criteria->add(LogCasesSchedulerPeer::LOG_CASE_UID, $this->log_case_uid);
		if ($this->isColumnModified(LogCasesSchedulerPeer::PRO_UID)) $criteria->add(LogCasesSchedulerPeer::PRO_UID, $this->pro_uid);
		if ($this->isColumnModified(LogCasesSchedulerPeer::TAS_UID)) $criteria->add(LogCasesSchedulerPeer::TAS_UID, $this->tas_uid);
		if ($this->isColumnModified(LogCasesSchedulerPeer::USR_NAME)) $criteria->add(LogCasesSchedulerPeer::USR_NAME, $this->usr_name);
		if ($this->isColumnModified(LogCasesSchedulerPeer::EXEC_DATE)) $criteria->add(LogCasesSchedulerPeer::EXEC_DATE, $this->exec_date);
		if ($this->isColumnModified(LogCasesSchedulerPeer::EXEC_HOUR)) $criteria->add(LogCasesSchedulerPeer::EXEC_HOUR, $this->exec_hour);
		if ($this->isColumnModified(LogCasesSchedulerPeer::RESULT)) $criteria->add(LogCasesSchedulerPeer::RESULT, $this->result);
		if ($this->isColumnModified(LogCasesSchedulerPeer::SCH_UID)) $criteria->add(LogCasesSchedulerPeer::SCH_UID, $this->sch_uid);
		if ($this->isColumnModified(LogCasesSchedulerPeer::WS_CREATE_CASE_STATUS)) $criteria->add(LogCasesSchedulerPeer::WS_CREATE_CASE_STATUS, $this->ws_create_case_status);
		if ($this->isColumnModified(LogCasesSchedulerPeer::WS_ROUTE_CASE_STATUS)) $criteria->add(LogCasesSchedulerPeer::WS_ROUTE_CASE_STATUS, $this->ws_route_case_status);

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
		$criteria = new Criteria(LogCasesSchedulerPeer::DATABASE_NAME);
		$criteria->add(LogCasesSchedulerPeer::LOG_CASE_UID, $this->log_case_uid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getLogCaseUid();
	}

	/**
	 * Generic method to set the primary key (log_case_uid column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setLogCaseUid($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getLogCaseUid();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of LogCasesScheduler (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setLogCaseUid($this->getLogCaseUid());
		$copyObj->setProUid($this->getProUid());
		$copyObj->setTasUid($this->getTasUid());
		$copyObj->setUsrName($this->getUsrName());
		$copyObj->setExecDate($this->getExecDate());
		$copyObj->setExecHour($this->getExecHour());
		$copyObj->setResult($this->getResult());
		$copyObj->setSchUid($this->getSchUid());
		$copyObj->setWsCreateCaseStatus($this->getWsCreateCaseStatus());
		$copyObj->setWsRouteCaseStatus($this->getWsRouteCaseStatus());
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
	 * @return     LogCasesScheduler Clone of current object.
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
	 * @return     LogCasesSchedulerPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new LogCasesSchedulerPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->log_case_uid = null;
		$this->pro_uid = null;
		$this->tas_uid = null;
		$this->usr_name = null;
		$this->exec_date = null;
		$this->exec_hour = null;
		$this->result = null;
		$this->sch_uid = null;
		$this->ws_create_case_status = null;
		$this->ws_route_case_status = null;
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
		return (string) $this->exportTo(LogCasesSchedulerPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseLogCasesScheduler
