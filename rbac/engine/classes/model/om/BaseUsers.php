<?php

 //PHP5ObjectBuilder.php
/**
 * Base class that represents a row from the 'USERS' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseUsers extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'UsersPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        UsersPeer
	 */
	protected static $peer;

	/**
	 * The value for the usr_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_uid;

	/**
	 * The value for the usr_username field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_username;

	/**
	 * The value for the usr_password field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_password;

	/**
	 * The value for the usr_firstname field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_firstname;

	/**
	 * The value for the usr_lastname field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_lastname;

	/**
	 * The value for the usr_email field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_email;

	/**
	 * The value for the usr_due_date field.
	 * @var        string
	 */
	protected $usr_due_date;

	/**
	 * The value for the usr_create_date field.
	 * @var        string
	 */
	protected $usr_create_date;

	/**
	 * The value for the usr_update_date field.
	 * @var        string
	 */
	protected $usr_update_date;

	/**
	 * The value for the usr_status field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $usr_status;

	/**
	 * The value for the usr_auth_type field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_auth_type;

	/**
	 * The value for the uid_auth_source field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $uid_auth_source;

	/**
	 * The value for the usr_auth_user_dn field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_auth_user_dn;

	/**
	 * The value for the usr_auth_supervisor_dn field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $usr_auth_supervisor_dn;

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
		$this->usr_uid = '';
		$this->usr_username = '';
		$this->usr_password = '';
		$this->usr_firstname = '';
		$this->usr_lastname = '';
		$this->usr_email = '';
		$this->usr_status = 1;
		$this->usr_auth_type = '';
		$this->uid_auth_source = '';
		$this->usr_auth_user_dn = '';
		$this->usr_auth_supervisor_dn = '';
	}

	/**
	 * Initializes internal state of BaseUsers object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
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
	 * Get the [usr_username] column value.
	 * 
	 * @return     string
	 */
	public function getUsrUsername()
	{
		return $this->usr_username;
	}

	/**
	 * Get the [usr_password] column value.
	 * 
	 * @return     string
	 */
	public function getUsrPassword()
	{
		return $this->usr_password;
	}

	/**
	 * Get the [usr_firstname] column value.
	 * 
	 * @return     string
	 */
	public function getUsrFirstname()
	{
		return $this->usr_firstname;
	}

	/**
	 * Get the [usr_lastname] column value.
	 * 
	 * @return     string
	 */
	public function getUsrLastname()
	{
		return $this->usr_lastname;
	}

	/**
	 * Get the [usr_email] column value.
	 * 
	 * @return     string
	 */
	public function getUsrEmail()
	{
		return $this->usr_email;
	}

	/**
	 * Get the [optionally formatted] temporal [usr_due_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getUsrDueDate($format = 'Y-m-d')
	{
		if ($this->usr_due_date === null) {
			return null;
		}


		if ($this->usr_due_date === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->usr_due_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->usr_due_date, true), $x);
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
	 * Get the [optionally formatted] temporal [usr_create_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getUsrCreateDate($format = 'Y-m-d H:i:s')
	{
		if ($this->usr_create_date === null) {
			return null;
		}


		if ($this->usr_create_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->usr_create_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->usr_create_date, true), $x);
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
	 * Get the [optionally formatted] temporal [usr_update_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getUsrUpdateDate($format = 'Y-m-d H:i:s')
	{
		if ($this->usr_update_date === null) {
			return null;
		}


		if ($this->usr_update_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->usr_update_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->usr_update_date, true), $x);
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
	 * Get the [usr_status] column value.
	 * 
	 * @return     int
	 */
	public function getUsrStatus()
	{
		return $this->usr_status;
	}

	/**
	 * Get the [usr_auth_type] column value.
	 * 
	 * @return     string
	 */
	public function getUsrAuthType()
	{
		return $this->usr_auth_type;
	}

	/**
	 * Get the [uid_auth_source] column value.
	 * 
	 * @return     string
	 */
	public function getUidAuthSource()
	{
		return $this->uid_auth_source;
	}

	/**
	 * Get the [usr_auth_user_dn] column value.
	 * 
	 * @return     string
	 */
	public function getUsrAuthUserDn()
	{
		return $this->usr_auth_user_dn;
	}

	/**
	 * Get the [usr_auth_supervisor_dn] column value.
	 * 
	 * @return     string
	 */
	public function getUsrAuthSupervisorDn()
	{
		return $this->usr_auth_supervisor_dn;
	}

	/**
	 * Set the value of [usr_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_uid !== $v) {
			$this->usr_uid = $v;
			$this->modifiedColumns[] = UsersPeer::USR_UID;
		}

		return $this;
	} // setUsrUid()

	/**
	 * Set the value of [usr_username] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrUsername($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_username !== $v) {
			$this->usr_username = $v;
			$this->modifiedColumns[] = UsersPeer::USR_USERNAME;
		}

		return $this;
	} // setUsrUsername()

	/**
	 * Set the value of [usr_password] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrPassword($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_password !== $v) {
			$this->usr_password = $v;
			$this->modifiedColumns[] = UsersPeer::USR_PASSWORD;
		}

		return $this;
	} // setUsrPassword()

	/**
	 * Set the value of [usr_firstname] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrFirstname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_firstname !== $v) {
			$this->usr_firstname = $v;
			$this->modifiedColumns[] = UsersPeer::USR_FIRSTNAME;
		}

		return $this;
	} // setUsrFirstname()

	/**
	 * Set the value of [usr_lastname] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrLastname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_lastname !== $v) {
			$this->usr_lastname = $v;
			$this->modifiedColumns[] = UsersPeer::USR_LASTNAME;
		}

		return $this;
	} // setUsrLastname()

	/**
	 * Set the value of [usr_email] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_email !== $v) {
			$this->usr_email = $v;
			$this->modifiedColumns[] = UsersPeer::USR_EMAIL;
		}

		return $this;
	} // setUsrEmail()

	/**
	 * Sets the value of [usr_due_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrDueDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->usr_due_date !== null || $dt !== null) {
			$currentDateAsString = ($this->usr_due_date !== null && $tmpDt = new DateTime($this->usr_due_date)) ? $tmpDt->format('Y-m-d') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->usr_due_date = $newDateAsString;
				$this->modifiedColumns[] = UsersPeer::USR_DUE_DATE;
			}
		} // if either are not null

		return $this;
	} // setUsrDueDate()

	/**
	 * Sets the value of [usr_create_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrCreateDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->usr_create_date !== null || $dt !== null) {
			$currentDateAsString = ($this->usr_create_date !== null && $tmpDt = new DateTime($this->usr_create_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->usr_create_date = $newDateAsString;
				$this->modifiedColumns[] = UsersPeer::USR_CREATE_DATE;
			}
		} // if either are not null

		return $this;
	} // setUsrCreateDate()

	/**
	 * Sets the value of [usr_update_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrUpdateDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->usr_update_date !== null || $dt !== null) {
			$currentDateAsString = ($this->usr_update_date !== null && $tmpDt = new DateTime($this->usr_update_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->usr_update_date = $newDateAsString;
				$this->modifiedColumns[] = UsersPeer::USR_UPDATE_DATE;
			}
		} // if either are not null

		return $this;
	} // setUsrUpdateDate()

	/**
	 * Set the value of [usr_status] column.
	 * 
	 * @param      int $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrStatus($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->usr_status !== $v) {
			$this->usr_status = $v;
			$this->modifiedColumns[] = UsersPeer::USR_STATUS;
		}

		return $this;
	} // setUsrStatus()

	/**
	 * Set the value of [usr_auth_type] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrAuthType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_auth_type !== $v) {
			$this->usr_auth_type = $v;
			$this->modifiedColumns[] = UsersPeer::USR_AUTH_TYPE;
		}

		return $this;
	} // setUsrAuthType()

	/**
	 * Set the value of [uid_auth_source] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUidAuthSource($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->uid_auth_source !== $v) {
			$this->uid_auth_source = $v;
			$this->modifiedColumns[] = UsersPeer::UID_AUTH_SOURCE;
		}

		return $this;
	} // setUidAuthSource()

	/**
	 * Set the value of [usr_auth_user_dn] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrAuthUserDn($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_auth_user_dn !== $v) {
			$this->usr_auth_user_dn = $v;
			$this->modifiedColumns[] = UsersPeer::USR_AUTH_USER_DN;
		}

		return $this;
	} // setUsrAuthUserDn()

	/**
	 * Set the value of [usr_auth_supervisor_dn] column.
	 * 
	 * @param      string $v new value
	 * @return     Users The current object (for fluent API support)
	 */
	public function setUsrAuthSupervisorDn($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_auth_supervisor_dn !== $v) {
			$this->usr_auth_supervisor_dn = $v;
			$this->modifiedColumns[] = UsersPeer::USR_AUTH_SUPERVISOR_DN;
		}

		return $this;
	} // setUsrAuthSupervisorDn()

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
			if ($this->usr_uid !== '') {
				return false;
			}

			if ($this->usr_username !== '') {
				return false;
			}

			if ($this->usr_password !== '') {
				return false;
			}

			if ($this->usr_firstname !== '') {
				return false;
			}

			if ($this->usr_lastname !== '') {
				return false;
			}

			if ($this->usr_email !== '') {
				return false;
			}

			if ($this->usr_status !== 1) {
				return false;
			}

			if ($this->usr_auth_type !== '') {
				return false;
			}

			if ($this->uid_auth_source !== '') {
				return false;
			}

			if ($this->usr_auth_user_dn !== '') {
				return false;
			}

			if ($this->usr_auth_supervisor_dn !== '') {
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

			$this->usr_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->usr_username = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->usr_password = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->usr_firstname = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->usr_lastname = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->usr_email = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->usr_due_date = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->usr_create_date = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->usr_update_date = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->usr_status = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->usr_auth_type = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->uid_auth_source = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->usr_auth_user_dn = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->usr_auth_supervisor_dn = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 14; // 14 = UsersPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Users object", $e);
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
			$con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = UsersPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = UsersQuery::create()
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
			$con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				UsersPeer::addInstanceToPool($this);
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
					$affectedRows = UsersPeer::doUpdate($this, $con);
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


			if (($retval = UsersPeer::doValidate($this, $columns)) !== true) {
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
		$pos = UsersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getUsrUid();
				break;
			case 1:
				return $this->getUsrUsername();
				break;
			case 2:
				return $this->getUsrPassword();
				break;
			case 3:
				return $this->getUsrFirstname();
				break;
			case 4:
				return $this->getUsrLastname();
				break;
			case 5:
				return $this->getUsrEmail();
				break;
			case 6:
				return $this->getUsrDueDate();
				break;
			case 7:
				return $this->getUsrCreateDate();
				break;
			case 8:
				return $this->getUsrUpdateDate();
				break;
			case 9:
				return $this->getUsrStatus();
				break;
			case 10:
				return $this->getUsrAuthType();
				break;
			case 11:
				return $this->getUidAuthSource();
				break;
			case 12:
				return $this->getUsrAuthUserDn();
				break;
			case 13:
				return $this->getUsrAuthSupervisorDn();
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
		if (isset($alreadyDumpedObjects['Users'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Users'][$this->getPrimaryKey()] = true;
		$keys = UsersPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getUsrUid(),
			$keys[1] => $this->getUsrUsername(),
			$keys[2] => $this->getUsrPassword(),
			$keys[3] => $this->getUsrFirstname(),
			$keys[4] => $this->getUsrLastname(),
			$keys[5] => $this->getUsrEmail(),
			$keys[6] => $this->getUsrDueDate(),
			$keys[7] => $this->getUsrCreateDate(),
			$keys[8] => $this->getUsrUpdateDate(),
			$keys[9] => $this->getUsrStatus(),
			$keys[10] => $this->getUsrAuthType(),
			$keys[11] => $this->getUidAuthSource(),
			$keys[12] => $this->getUsrAuthUserDn(),
			$keys[13] => $this->getUsrAuthSupervisorDn(),
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
		$pos = UsersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setUsrUid($value);
				break;
			case 1:
				$this->setUsrUsername($value);
				break;
			case 2:
				$this->setUsrPassword($value);
				break;
			case 3:
				$this->setUsrFirstname($value);
				break;
			case 4:
				$this->setUsrLastname($value);
				break;
			case 5:
				$this->setUsrEmail($value);
				break;
			case 6:
				$this->setUsrDueDate($value);
				break;
			case 7:
				$this->setUsrCreateDate($value);
				break;
			case 8:
				$this->setUsrUpdateDate($value);
				break;
			case 9:
				$this->setUsrStatus($value);
				break;
			case 10:
				$this->setUsrAuthType($value);
				break;
			case 11:
				$this->setUidAuthSource($value);
				break;
			case 12:
				$this->setUsrAuthUserDn($value);
				break;
			case 13:
				$this->setUsrAuthSupervisorDn($value);
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
		$keys = UsersPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setUsrUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUsrUsername($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUsrPassword($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setUsrFirstname($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setUsrLastname($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setUsrEmail($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUsrDueDate($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setUsrCreateDate($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setUsrUpdateDate($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setUsrStatus($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setUsrAuthType($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setUidAuthSource($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setUsrAuthUserDn($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setUsrAuthSupervisorDn($arr[$keys[13]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(UsersPeer::DATABASE_NAME);

		if ($this->isColumnModified(UsersPeer::USR_UID)) $criteria->add(UsersPeer::USR_UID, $this->usr_uid);
		if ($this->isColumnModified(UsersPeer::USR_USERNAME)) $criteria->add(UsersPeer::USR_USERNAME, $this->usr_username);
		if ($this->isColumnModified(UsersPeer::USR_PASSWORD)) $criteria->add(UsersPeer::USR_PASSWORD, $this->usr_password);
		if ($this->isColumnModified(UsersPeer::USR_FIRSTNAME)) $criteria->add(UsersPeer::USR_FIRSTNAME, $this->usr_firstname);
		if ($this->isColumnModified(UsersPeer::USR_LASTNAME)) $criteria->add(UsersPeer::USR_LASTNAME, $this->usr_lastname);
		if ($this->isColumnModified(UsersPeer::USR_EMAIL)) $criteria->add(UsersPeer::USR_EMAIL, $this->usr_email);
		if ($this->isColumnModified(UsersPeer::USR_DUE_DATE)) $criteria->add(UsersPeer::USR_DUE_DATE, $this->usr_due_date);
		if ($this->isColumnModified(UsersPeer::USR_CREATE_DATE)) $criteria->add(UsersPeer::USR_CREATE_DATE, $this->usr_create_date);
		if ($this->isColumnModified(UsersPeer::USR_UPDATE_DATE)) $criteria->add(UsersPeer::USR_UPDATE_DATE, $this->usr_update_date);
		if ($this->isColumnModified(UsersPeer::USR_STATUS)) $criteria->add(UsersPeer::USR_STATUS, $this->usr_status);
		if ($this->isColumnModified(UsersPeer::USR_AUTH_TYPE)) $criteria->add(UsersPeer::USR_AUTH_TYPE, $this->usr_auth_type);
		if ($this->isColumnModified(UsersPeer::UID_AUTH_SOURCE)) $criteria->add(UsersPeer::UID_AUTH_SOURCE, $this->uid_auth_source);
		if ($this->isColumnModified(UsersPeer::USR_AUTH_USER_DN)) $criteria->add(UsersPeer::USR_AUTH_USER_DN, $this->usr_auth_user_dn);
		if ($this->isColumnModified(UsersPeer::USR_AUTH_SUPERVISOR_DN)) $criteria->add(UsersPeer::USR_AUTH_SUPERVISOR_DN, $this->usr_auth_supervisor_dn);

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
		$criteria = new Criteria(UsersPeer::DATABASE_NAME);
		$criteria->add(UsersPeer::USR_UID, $this->usr_uid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getUsrUid();
	}

	/**
	 * Generic method to set the primary key (usr_uid column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setUsrUid($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getUsrUid();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Users (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setUsrUid($this->getUsrUid());
		$copyObj->setUsrUsername($this->getUsrUsername());
		$copyObj->setUsrPassword($this->getUsrPassword());
		$copyObj->setUsrFirstname($this->getUsrFirstname());
		$copyObj->setUsrLastname($this->getUsrLastname());
		$copyObj->setUsrEmail($this->getUsrEmail());
		$copyObj->setUsrDueDate($this->getUsrDueDate());
		$copyObj->setUsrCreateDate($this->getUsrCreateDate());
		$copyObj->setUsrUpdateDate($this->getUsrUpdateDate());
		$copyObj->setUsrStatus($this->getUsrStatus());
		$copyObj->setUsrAuthType($this->getUsrAuthType());
		$copyObj->setUidAuthSource($this->getUidAuthSource());
		$copyObj->setUsrAuthUserDn($this->getUsrAuthUserDn());
		$copyObj->setUsrAuthSupervisorDn($this->getUsrAuthSupervisorDn());
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
	 * @return     Users Clone of current object.
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
	 * @return     UsersPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new UsersPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->usr_uid = null;
		$this->usr_username = null;
		$this->usr_password = null;
		$this->usr_firstname = null;
		$this->usr_lastname = null;
		$this->usr_email = null;
		$this->usr_due_date = null;
		$this->usr_create_date = null;
		$this->usr_update_date = null;
		$this->usr_status = null;
		$this->usr_auth_type = null;
		$this->uid_auth_source = null;
		$this->usr_auth_user_dn = null;
		$this->usr_auth_supervisor_dn = null;
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
		return (string) $this->exportTo(UsersPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseUsers
