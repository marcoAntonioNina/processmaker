<?php


/**
 * Base class that represents a row from the 'APP_NOTES' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppNotes extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'AppNotesPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        AppNotesPeer
	 */
	protected static $peer;

	/**
	 * The value for the note_uid field.
	 * @var        int
	 */
	protected $note_uid;

	/**
	 * The value for the app_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $app_uid;

	/**
	 * The value for the usr_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_uid;

	/**
	 * The value for the note_date field.
	 * @var        string
	 */
	protected $note_date;

	/**
	 * The value for the note_content field.
	 * @var        string
	 */
	protected $note_content;

	/**
	 * The value for the note_type field.
	 * Note: this column has a database default value of: 'USER'
	 * @var        string
	 */
	protected $note_type;

	/**
	 * The value for the note_availability field.
	 * Note: this column has a database default value of: 'PUBLIC'
	 * @var        string
	 */
	protected $note_availability;

	/**
	 * The value for the note_origin_obj field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $note_origin_obj;

	/**
	 * The value for the note_affected_obj1 field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $note_affected_obj1;

	/**
	 * The value for the note_affected_obj2 field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $note_affected_obj2;

	/**
	 * The value for the note_recipients field.
	 * @var        string
	 */
	protected $note_recipients;

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
		$this->usr_uid = '';
		$this->note_type = 'USER';
		$this->note_availability = 'PUBLIC';
		$this->note_origin_obj = '';
		$this->note_affected_obj1 = '';
		$this->note_affected_obj2 = '';
	}

	/**
	 * Initializes internal state of BaseAppNotes object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [note_uid] column value.
	 * 
	 * @return     int
	 */
	public function getNoteUid()
	{
		return $this->note_uid;
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
	 * Get the [usr_uid] column value.
	 * 
	 * @return     string
	 */
	public function getUsrUid()
	{
		return $this->usr_uid;
	}

	/**
	 * Get the [optionally formatted] temporal [note_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getNoteDate($format = 'Y-m-d H:i:s')
	{
		if ($this->note_date === null) {
			return null;
		}


		if ($this->note_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->note_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->note_date, true), $x);
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
	 * Get the [note_content] column value.
	 * 
	 * @return     string
	 */
	public function getNoteContent()
	{
		return $this->note_content;
	}

	/**
	 * Get the [note_type] column value.
	 * 
	 * @return     string
	 */
	public function getNoteType()
	{
		return $this->note_type;
	}

	/**
	 * Get the [note_availability] column value.
	 * 
	 * @return     string
	 */
	public function getNoteAvailability()
	{
		return $this->note_availability;
	}

	/**
	 * Get the [note_origin_obj] column value.
	 * 
	 * @return     string
	 */
	public function getNoteOriginObj()
	{
		return $this->note_origin_obj;
	}

	/**
	 * Get the [note_affected_obj1] column value.
	 * 
	 * @return     string
	 */
	public function getNoteAffectedObj1()
	{
		return $this->note_affected_obj1;
	}

	/**
	 * Get the [note_affected_obj2] column value.
	 * 
	 * @return     string
	 */
	public function getNoteAffectedObj2()
	{
		return $this->note_affected_obj2;
	}

	/**
	 * Get the [note_recipients] column value.
	 * 
	 * @return     string
	 */
	public function getNoteRecipients()
	{
		return $this->note_recipients;
	}

	/**
	 * Set the value of [note_uid] column.
	 * 
	 * @param      int $v new value
	 * @return     AppNotes The current object (for fluent API support)
	 */
	public function setNoteUid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->note_uid !== $v) {
			$this->note_uid = $v;
			$this->modifiedColumns[] = AppNotesPeer::NOTE_UID;
		}

		return $this;
	} // setNoteUid()

	/**
	 * Set the value of [app_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AppNotes The current object (for fluent API support)
	 */
	public function setAppUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->app_uid !== $v) {
			$this->app_uid = $v;
			$this->modifiedColumns[] = AppNotesPeer::APP_UID;
		}

		return $this;
	} // setAppUid()

	/**
	 * Set the value of [usr_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AppNotes The current object (for fluent API support)
	 */
	public function setUsrUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_uid !== $v) {
			$this->usr_uid = $v;
			$this->modifiedColumns[] = AppNotesPeer::USR_UID;
		}

		return $this;
	} // setUsrUid()

	/**
	 * Sets the value of [note_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     AppNotes The current object (for fluent API support)
	 */
	public function setNoteDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->note_date !== null || $dt !== null) {
			$currentDateAsString = ($this->note_date !== null && $tmpDt = new DateTime($this->note_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->note_date = $newDateAsString;
				$this->modifiedColumns[] = AppNotesPeer::NOTE_DATE;
			}
		} // if either are not null

		return $this;
	} // setNoteDate()

	/**
	 * Set the value of [note_content] column.
	 * 
	 * @param      string $v new value
	 * @return     AppNotes The current object (for fluent API support)
	 */
	public function setNoteContent($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->note_content !== $v) {
			$this->note_content = $v;
			$this->modifiedColumns[] = AppNotesPeer::NOTE_CONTENT;
		}

		return $this;
	} // setNoteContent()

	/**
	 * Set the value of [note_type] column.
	 * 
	 * @param      string $v new value
	 * @return     AppNotes The current object (for fluent API support)
	 */
	public function setNoteType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->note_type !== $v) {
			$this->note_type = $v;
			$this->modifiedColumns[] = AppNotesPeer::NOTE_TYPE;
		}

		return $this;
	} // setNoteType()

	/**
	 * Set the value of [note_availability] column.
	 * 
	 * @param      string $v new value
	 * @return     AppNotes The current object (for fluent API support)
	 */
	public function setNoteAvailability($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->note_availability !== $v) {
			$this->note_availability = $v;
			$this->modifiedColumns[] = AppNotesPeer::NOTE_AVAILABILITY;
		}

		return $this;
	} // setNoteAvailability()

	/**
	 * Set the value of [note_origin_obj] column.
	 * 
	 * @param      string $v new value
	 * @return     AppNotes The current object (for fluent API support)
	 */
	public function setNoteOriginObj($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->note_origin_obj !== $v) {
			$this->note_origin_obj = $v;
			$this->modifiedColumns[] = AppNotesPeer::NOTE_ORIGIN_OBJ;
		}

		return $this;
	} // setNoteOriginObj()

	/**
	 * Set the value of [note_affected_obj1] column.
	 * 
	 * @param      string $v new value
	 * @return     AppNotes The current object (for fluent API support)
	 */
	public function setNoteAffectedObj1($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->note_affected_obj1 !== $v) {
			$this->note_affected_obj1 = $v;
			$this->modifiedColumns[] = AppNotesPeer::NOTE_AFFECTED_OBJ1;
		}

		return $this;
	} // setNoteAffectedObj1()

	/**
	 * Set the value of [note_affected_obj2] column.
	 * 
	 * @param      string $v new value
	 * @return     AppNotes The current object (for fluent API support)
	 */
	public function setNoteAffectedObj2($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->note_affected_obj2 !== $v) {
			$this->note_affected_obj2 = $v;
			$this->modifiedColumns[] = AppNotesPeer::NOTE_AFFECTED_OBJ2;
		}

		return $this;
	} // setNoteAffectedObj2()

	/**
	 * Set the value of [note_recipients] column.
	 * 
	 * @param      string $v new value
	 * @return     AppNotes The current object (for fluent API support)
	 */
	public function setNoteRecipients($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->note_recipients !== $v) {
			$this->note_recipients = $v;
			$this->modifiedColumns[] = AppNotesPeer::NOTE_RECIPIENTS;
		}

		return $this;
	} // setNoteRecipients()

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

			if ($this->usr_uid !== '') {
				return false;
			}

			if ($this->note_type !== 'USER') {
				return false;
			}

			if ($this->note_availability !== 'PUBLIC') {
				return false;
			}

			if ($this->note_origin_obj !== '') {
				return false;
			}

			if ($this->note_affected_obj1 !== '') {
				return false;
			}

			if ($this->note_affected_obj2 !== '') {
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

			$this->note_uid = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->app_uid = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->usr_uid = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->note_date = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->note_content = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->note_type = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->note_availability = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->note_origin_obj = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->note_affected_obj1 = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->note_affected_obj2 = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->note_recipients = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 11; // 11 = AppNotesPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating AppNotes object", $e);
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
			$con = Propel::getConnection(AppNotesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = AppNotesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(AppNotesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = AppNotesQuery::create()
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
			$con = Propel::getConnection(AppNotesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				AppNotesPeer::addInstanceToPool($this);
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

			if ($this->isNew() ) {
				$this->modifiedColumns[] = AppNotesPeer::NOTE_UID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(AppNotesPeer::NOTE_UID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.AppNotesPeer::NOTE_UID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setNoteUid($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = AppNotesPeer::doUpdate($this, $con);
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


			if (($retval = AppNotesPeer::doValidate($this, $columns)) !== true) {
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
		$pos = AppNotesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getNoteUid();
				break;
			case 1:
				return $this->getAppUid();
				break;
			case 2:
				return $this->getUsrUid();
				break;
			case 3:
				return $this->getNoteDate();
				break;
			case 4:
				return $this->getNoteContent();
				break;
			case 5:
				return $this->getNoteType();
				break;
			case 6:
				return $this->getNoteAvailability();
				break;
			case 7:
				return $this->getNoteOriginObj();
				break;
			case 8:
				return $this->getNoteAffectedObj1();
				break;
			case 9:
				return $this->getNoteAffectedObj2();
				break;
			case 10:
				return $this->getNoteRecipients();
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
		if (isset($alreadyDumpedObjects['AppNotes'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['AppNotes'][$this->getPrimaryKey()] = true;
		$keys = AppNotesPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getNoteUid(),
			$keys[1] => $this->getAppUid(),
			$keys[2] => $this->getUsrUid(),
			$keys[3] => $this->getNoteDate(),
			$keys[4] => $this->getNoteContent(),
			$keys[5] => $this->getNoteType(),
			$keys[6] => $this->getNoteAvailability(),
			$keys[7] => $this->getNoteOriginObj(),
			$keys[8] => $this->getNoteAffectedObj1(),
			$keys[9] => $this->getNoteAffectedObj2(),
			$keys[10] => $this->getNoteRecipients(),
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
		$pos = AppNotesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setNoteUid($value);
				break;
			case 1:
				$this->setAppUid($value);
				break;
			case 2:
				$this->setUsrUid($value);
				break;
			case 3:
				$this->setNoteDate($value);
				break;
			case 4:
				$this->setNoteContent($value);
				break;
			case 5:
				$this->setNoteType($value);
				break;
			case 6:
				$this->setNoteAvailability($value);
				break;
			case 7:
				$this->setNoteOriginObj($value);
				break;
			case 8:
				$this->setNoteAffectedObj1($value);
				break;
			case 9:
				$this->setNoteAffectedObj2($value);
				break;
			case 10:
				$this->setNoteRecipients($value);
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
		$keys = AppNotesPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setNoteUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAppUid($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUsrUid($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNoteDate($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNoteContent($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNoteType($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setNoteAvailability($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setNoteOriginObj($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setNoteAffectedObj1($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setNoteAffectedObj2($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setNoteRecipients($arr[$keys[10]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(AppNotesPeer::DATABASE_NAME);

		if ($this->isColumnModified(AppNotesPeer::NOTE_UID)) $criteria->add(AppNotesPeer::NOTE_UID, $this->note_uid);
		if ($this->isColumnModified(AppNotesPeer::APP_UID)) $criteria->add(AppNotesPeer::APP_UID, $this->app_uid);
		if ($this->isColumnModified(AppNotesPeer::USR_UID)) $criteria->add(AppNotesPeer::USR_UID, $this->usr_uid);
		if ($this->isColumnModified(AppNotesPeer::NOTE_DATE)) $criteria->add(AppNotesPeer::NOTE_DATE, $this->note_date);
		if ($this->isColumnModified(AppNotesPeer::NOTE_CONTENT)) $criteria->add(AppNotesPeer::NOTE_CONTENT, $this->note_content);
		if ($this->isColumnModified(AppNotesPeer::NOTE_TYPE)) $criteria->add(AppNotesPeer::NOTE_TYPE, $this->note_type);
		if ($this->isColumnModified(AppNotesPeer::NOTE_AVAILABILITY)) $criteria->add(AppNotesPeer::NOTE_AVAILABILITY, $this->note_availability);
		if ($this->isColumnModified(AppNotesPeer::NOTE_ORIGIN_OBJ)) $criteria->add(AppNotesPeer::NOTE_ORIGIN_OBJ, $this->note_origin_obj);
		if ($this->isColumnModified(AppNotesPeer::NOTE_AFFECTED_OBJ1)) $criteria->add(AppNotesPeer::NOTE_AFFECTED_OBJ1, $this->note_affected_obj1);
		if ($this->isColumnModified(AppNotesPeer::NOTE_AFFECTED_OBJ2)) $criteria->add(AppNotesPeer::NOTE_AFFECTED_OBJ2, $this->note_affected_obj2);
		if ($this->isColumnModified(AppNotesPeer::NOTE_RECIPIENTS)) $criteria->add(AppNotesPeer::NOTE_RECIPIENTS, $this->note_recipients);

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
		$criteria = new Criteria(AppNotesPeer::DATABASE_NAME);
		$criteria->add(AppNotesPeer::NOTE_UID, $this->note_uid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getNoteUid();
	}

	/**
	 * Generic method to set the primary key (note_uid column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setNoteUid($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getNoteUid();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of AppNotes (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setAppUid($this->getAppUid());
		$copyObj->setUsrUid($this->getUsrUid());
		$copyObj->setNoteDate($this->getNoteDate());
		$copyObj->setNoteContent($this->getNoteContent());
		$copyObj->setNoteType($this->getNoteType());
		$copyObj->setNoteAvailability($this->getNoteAvailability());
		$copyObj->setNoteOriginObj($this->getNoteOriginObj());
		$copyObj->setNoteAffectedObj1($this->getNoteAffectedObj1());
		$copyObj->setNoteAffectedObj2($this->getNoteAffectedObj2());
		$copyObj->setNoteRecipients($this->getNoteRecipients());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setNoteUid(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     AppNotes Clone of current object.
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
	 * @return     AppNotesPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new AppNotesPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->note_uid = null;
		$this->app_uid = null;
		$this->usr_uid = null;
		$this->note_date = null;
		$this->note_content = null;
		$this->note_type = null;
		$this->note_availability = null;
		$this->note_origin_obj = null;
		$this->note_affected_obj1 = null;
		$this->note_affected_obj2 = null;
		$this->note_recipients = null;
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
		return (string) $this->exportTo(AppNotesPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseAppNotes
