<?php


/**
 * Base class that represents a row from the 'SUB_APPLICATION' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseSubApplication extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'SubApplicationPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        SubApplicationPeer
	 */
	protected static $peer;

	/**
	 * The value for the app_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_uid;

	/**
	 * The value for the app_parent field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_parent;

	/**
	 * The value for the del_index_parent field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $del_index_parent;

	/**
	 * The value for the del_thread_parent field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $del_thread_parent;

	/**
	 * The value for the sa_status field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $sa_status;

	/**
	 * The value for the sa_values_out field.
	 * @var        string
	 */
	protected $sa_values_out;

	/**
	 * The value for the sa_values_in field.
	 * @var        string
	 */
	protected $sa_values_in;

	/**
	 * The value for the sa_init_date field.
	 * @var        string
	 */
	protected $sa_init_date;

	/**
	 * The value for the sa_finish_date field.
	 * @var        string
	 */
	protected $sa_finish_date;

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
		$this->app_uid = '';
		$this->app_parent = '';
		$this->del_index_parent = 0;
		$this->del_thread_parent = 0;
		$this->sa_status = '';
	}

	/**
	 * Initializes internal state of BaseSubApplication object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [app_uid] column value.
	 * 
	 * @return     string
	 */
	public function getAppUid()
	{
		return $this->app_uid;
	}

	/**
	 * Get the [app_parent] column value.
	 * 
	 * @return     string
	 */
	public function getAppParent()
	{
		return $this->app_parent;
	}

	/**
	 * Get the [del_index_parent] column value.
	 * 
	 * @return     int
	 */
	public function getDelIndexParent()
	{
		return $this->del_index_parent;
	}

	/**
	 * Get the [del_thread_parent] column value.
	 * 
	 * @return     int
	 */
	public function getDelThreadParent()
	{
		return $this->del_thread_parent;
	}

	/**
	 * Get the [sa_status] column value.
	 * 
	 * @return     string
	 */
	public function getSaStatus()
	{
		return $this->sa_status;
	}

	/**
	 * Get the [sa_values_out] column value.
	 * 
	 * @return     string
	 */
	public function getSaValuesOut()
	{
		return $this->sa_values_out;
	}

	/**
	 * Get the [sa_values_in] column value.
	 * 
	 * @return     string
	 */
	public function getSaValuesIn()
	{
		return $this->sa_values_in;
	}

	/**
	 * Get the [optionally formatted] temporal [sa_init_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getSaInitDate($format = 'Y-m-d H:i:s')
	{
		if ($this->sa_init_date === null) {
			return null;
		}


		if ($this->sa_init_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->sa_init_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->sa_init_date, true), $x);
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
	 * Get the [optionally formatted] temporal [sa_finish_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getSaFinishDate($format = 'Y-m-d H:i:s')
	{
		if ($this->sa_finish_date === null) {
			return null;
		}


		if ($this->sa_finish_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->sa_finish_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->sa_finish_date, true), $x);
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
	 * Set the value of [app_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     SubApplication The current object (for fluent API support)
	 */
	public function setAppUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_uid !== $v) {
			$this->app_uid = $v;
			$this->modifiedColumns[] = SubApplicationPeer::APP_UID;
		}

		return $this;
	} // setAppUid()

	/**
	 * Set the value of [app_parent] column.
	 * 
	 * @param      string $v new value
	 * @return     SubApplication The current object (for fluent API support)
	 */
	public function setAppParent($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_parent !== $v) {
			$this->app_parent = $v;
			$this->modifiedColumns[] = SubApplicationPeer::APP_PARENT;
		}

		return $this;
	} // setAppParent()

	/**
	 * Set the value of [del_index_parent] column.
	 * 
	 * @param      int $v new value
	 * @return     SubApplication The current object (for fluent API support)
	 */
	public function setDelIndexParent($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->del_index_parent !== $v) {
			$this->del_index_parent = $v;
			$this->modifiedColumns[] = SubApplicationPeer::DEL_INDEX_PARENT;
		}

		return $this;
	} // setDelIndexParent()

	/**
	 * Set the value of [del_thread_parent] column.
	 * 
	 * @param      int $v new value
	 * @return     SubApplication The current object (for fluent API support)
	 */
	public function setDelThreadParent($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->del_thread_parent !== $v) {
			$this->del_thread_parent = $v;
			$this->modifiedColumns[] = SubApplicationPeer::DEL_THREAD_PARENT;
		}

		return $this;
	} // setDelThreadParent()

	/**
	 * Set the value of [sa_status] column.
	 * 
	 * @param      string $v new value
	 * @return     SubApplication The current object (for fluent API support)
	 */
	public function setSaStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sa_status !== $v) {
			$this->sa_status = $v;
			$this->modifiedColumns[] = SubApplicationPeer::SA_STATUS;
		}

		return $this;
	} // setSaStatus()

	/**
	 * Set the value of [sa_values_out] column.
	 * 
	 * @param      string $v new value
	 * @return     SubApplication The current object (for fluent API support)
	 */
	public function setSaValuesOut($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sa_values_out !== $v) {
			$this->sa_values_out = $v;
			$this->modifiedColumns[] = SubApplicationPeer::SA_VALUES_OUT;
		}

		return $this;
	} // setSaValuesOut()

	/**
	 * Set the value of [sa_values_in] column.
	 * 
	 * @param      string $v new value
	 * @return     SubApplication The current object (for fluent API support)
	 */
	public function setSaValuesIn($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sa_values_in !== $v) {
			$this->sa_values_in = $v;
			$this->modifiedColumns[] = SubApplicationPeer::SA_VALUES_IN;
		}

		return $this;
	} // setSaValuesIn()

	/**
	 * Sets the value of [sa_init_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     SubApplication The current object (for fluent API support)
	 */
	public function setSaInitDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->sa_init_date !== null || $dt !== null) {
			$currentDateAsString = ($this->sa_init_date !== null && $tmpDt = new DateTime($this->sa_init_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->sa_init_date = $newDateAsString;
				$this->modifiedColumns[] = SubApplicationPeer::SA_INIT_DATE;
			}
		} // if either are not null

		return $this;
	} // setSaInitDate()

	/**
	 * Sets the value of [sa_finish_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     SubApplication The current object (for fluent API support)
	 */
	public function setSaFinishDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->sa_finish_date !== null || $dt !== null) {
			$currentDateAsString = ($this->sa_finish_date !== null && $tmpDt = new DateTime($this->sa_finish_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->sa_finish_date = $newDateAsString;
				$this->modifiedColumns[] = SubApplicationPeer::SA_FINISH_DATE;
			}
		} // if either are not null

		return $this;
	} // setSaFinishDate()

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
			if ($this->app_uid !== '') {
				return false;
			}

			if ($this->app_parent !== '') {
				return false;
			}

			if ($this->del_index_parent !== 0) {
				return false;
			}

			if ($this->del_thread_parent !== 0) {
				return false;
			}

			if ($this->sa_status !== '') {
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

			$this->app_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->app_parent = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->del_index_parent = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->del_thread_parent = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->sa_status = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->sa_values_out = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->sa_values_in = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->sa_init_date = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->sa_finish_date = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 9; // 9 = SubApplicationPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating SubApplication object", $e);
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
			$con = Propel::getConnection(SubApplicationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = SubApplicationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(SubApplicationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = SubApplicationQuery::create()
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
			$con = Propel::getConnection(SubApplicationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				SubApplicationPeer::addInstanceToPool($this);
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
					$affectedRows = SubApplicationPeer::doUpdate($this, $con);
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


			if (($retval = SubApplicationPeer::doValidate($this, $columns)) !== true) {
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
		$pos = SubApplicationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getAppUid();
				break;
			case 1:
				return $this->getAppParent();
				break;
			case 2:
				return $this->getDelIndexParent();
				break;
			case 3:
				return $this->getDelThreadParent();
				break;
			case 4:
				return $this->getSaStatus();
				break;
			case 5:
				return $this->getSaValuesOut();
				break;
			case 6:
				return $this->getSaValuesIn();
				break;
			case 7:
				return $this->getSaInitDate();
				break;
			case 8:
				return $this->getSaFinishDate();
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
		if (isset($alreadyDumpedObjects['SubApplication'][serialize($this->getPrimaryKey())])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['SubApplication'][serialize($this->getPrimaryKey())] = true;
		$keys = SubApplicationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getAppUid(),
			$keys[1] => $this->getAppParent(),
			$keys[2] => $this->getDelIndexParent(),
			$keys[3] => $this->getDelThreadParent(),
			$keys[4] => $this->getSaStatus(),
			$keys[5] => $this->getSaValuesOut(),
			$keys[6] => $this->getSaValuesIn(),
			$keys[7] => $this->getSaInitDate(),
			$keys[8] => $this->getSaFinishDate(),
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
		$pos = SubApplicationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setAppUid($value);
				break;
			case 1:
				$this->setAppParent($value);
				break;
			case 2:
				$this->setDelIndexParent($value);
				break;
			case 3:
				$this->setDelThreadParent($value);
				break;
			case 4:
				$this->setSaStatus($value);
				break;
			case 5:
				$this->setSaValuesOut($value);
				break;
			case 6:
				$this->setSaValuesIn($value);
				break;
			case 7:
				$this->setSaInitDate($value);
				break;
			case 8:
				$this->setSaFinishDate($value);
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
		$keys = SubApplicationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setAppUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAppParent($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDelIndexParent($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDelThreadParent($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSaStatus($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSaValuesOut($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSaValuesIn($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setSaInitDate($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setSaFinishDate($arr[$keys[8]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(SubApplicationPeer::DATABASE_NAME);

		if ($this->isColumnModified(SubApplicationPeer::APP_UID)) $criteria->add(SubApplicationPeer::APP_UID, $this->app_uid);
		if ($this->isColumnModified(SubApplicationPeer::APP_PARENT)) $criteria->add(SubApplicationPeer::APP_PARENT, $this->app_parent);
		if ($this->isColumnModified(SubApplicationPeer::DEL_INDEX_PARENT)) $criteria->add(SubApplicationPeer::DEL_INDEX_PARENT, $this->del_index_parent);
		if ($this->isColumnModified(SubApplicationPeer::DEL_THREAD_PARENT)) $criteria->add(SubApplicationPeer::DEL_THREAD_PARENT, $this->del_thread_parent);
		if ($this->isColumnModified(SubApplicationPeer::SA_STATUS)) $criteria->add(SubApplicationPeer::SA_STATUS, $this->sa_status);
		if ($this->isColumnModified(SubApplicationPeer::SA_VALUES_OUT)) $criteria->add(SubApplicationPeer::SA_VALUES_OUT, $this->sa_values_out);
		if ($this->isColumnModified(SubApplicationPeer::SA_VALUES_IN)) $criteria->add(SubApplicationPeer::SA_VALUES_IN, $this->sa_values_in);
		if ($this->isColumnModified(SubApplicationPeer::SA_INIT_DATE)) $criteria->add(SubApplicationPeer::SA_INIT_DATE, $this->sa_init_date);
		if ($this->isColumnModified(SubApplicationPeer::SA_FINISH_DATE)) $criteria->add(SubApplicationPeer::SA_FINISH_DATE, $this->sa_finish_date);

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
		$criteria = new Criteria(SubApplicationPeer::DATABASE_NAME);
		$criteria->add(SubApplicationPeer::APP_UID, $this->app_uid);
		$criteria->add(SubApplicationPeer::APP_PARENT, $this->app_parent);
		$criteria->add(SubApplicationPeer::DEL_INDEX_PARENT, $this->del_index_parent);
		$criteria->add(SubApplicationPeer::DEL_THREAD_PARENT, $this->del_thread_parent);

		return $criteria;
	}

	/**
	 * Returns the composite primary key for this object.
	 * The array elements will be in same order as specified in XML.
	 * @return     array
	 */
	public function getPrimaryKey()
	{
		$pks = array();
		$pks[0] = $this->getAppUid();
		$pks[1] = $this->getAppParent();
		$pks[2] = $this->getDelIndexParent();
		$pks[3] = $this->getDelThreadParent();

		return $pks;
	}

	/**
	 * Set the [composite] primary key.
	 *
	 * @param      array $keys The elements of the composite key (order must match the order in XML file).
	 * @return     void
	 */
	public function setPrimaryKey($keys)
	{
		$this->setAppUid($keys[0]);
		$this->setAppParent($keys[1]);
		$this->setDelIndexParent($keys[2]);
		$this->setDelThreadParent($keys[3]);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return (null === $this->getAppUid()) && (null === $this->getAppParent()) && (null === $this->getDelIndexParent()) && (null === $this->getDelThreadParent());
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of SubApplication (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setAppUid($this->getAppUid());
		$copyObj->setAppParent($this->getAppParent());
		$copyObj->setDelIndexParent($this->getDelIndexParent());
		$copyObj->setDelThreadParent($this->getDelThreadParent());
		$copyObj->setSaStatus($this->getSaStatus());
		$copyObj->setSaValuesOut($this->getSaValuesOut());
		$copyObj->setSaValuesIn($this->getSaValuesIn());
		$copyObj->setSaInitDate($this->getSaInitDate());
		$copyObj->setSaFinishDate($this->getSaFinishDate());
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
	 * @return     SubApplication Clone of current object.
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
	 * @return     SubApplicationPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new SubApplicationPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->app_uid = null;
		$this->app_parent = null;
		$this->del_index_parent = null;
		$this->del_thread_parent = null;
		$this->sa_status = null;
		$this->sa_values_out = null;
		$this->sa_values_in = null;
		$this->sa_init_date = null;
		$this->sa_finish_date = null;
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
		return (string) $this->exportTo(SubApplicationPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseSubApplication
